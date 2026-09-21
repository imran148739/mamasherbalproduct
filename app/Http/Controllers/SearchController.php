<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Provide instant predictive search suggestions via AJAX.
     * When q is empty, returns trending keywords and popular products.
     * When q is present, returns matching products for visual grid display.
     */
    public function suggest(Request $request): JsonResponse
    {
        $query = trim((string) $request->query('q', $request->query('search', '')));

        // If query is empty, return Trending Searches and Popular Products
        if (mb_strlen($query) < 1) {
            $categories = Category::active()->orderBy('sort_order', 'asc')->pluck('name')->take(6)->toArray();
            $curatedTerms = ['Health mix', 'Tea Powder', 'Spices', 'Cold Pressed Oil', 'Herbal', 'Seeds'];
            $trending = array_values(array_unique(array_merge($curatedTerms, $categories)));

            // Fetch popular / best-selling products
            $popularProducts = Product::active()
                ->with(['category', 'images'])
                ->where(function ($q) {
                    $q->where('is_best_selling', true)
                      ->orWhere('is_featured', true);
                })
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();

            // If fewer than 5, fill with general active products
            if ($popularProducts->count() < 5) {
                $extra = Product::active()
                    ->with(['category', 'images'])
                    ->whereNotIn('id', $popularProducts->pluck('id'))
                    ->orderBy('id', 'desc')
                    ->limit(5 - $popularProducts->count())
                    ->get();
                $popularProducts = $popularProducts->merge($extra);
            }

            $popular = $popularProducts->map(function ($product) {
                return $this->formatProductCard($product);
            });

            return response()->json([
                'query'        => '',
                'total'        => 0,
                'trending'     => $trending,
                'popular'      => $popular,
                'results'      => [],
                'view_all_url' => route('shop'),
            ]);
        }

        // When query is provided, search products
        $baseQuery = Product::active()
            ->with(['category', 'images'])
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('sku', 'like', "%{$query}%")
                  ->orWhere('short_description', 'like', "%{$query}%")
                  ->orWhere('description', 'like', "%{$query}%")
                  ->orWhereHas('category', function ($catQ) use ($query) {
                      $catQ->where('name', 'like', "%{$query}%");
                  });
            });

        $totalCount = (clone $baseQuery)->count();

        $products = $baseQuery
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();

        $results = $products->map(function ($product) {
            return $this->formatProductCard($product);
        });

        return response()->json([
            'query'        => $query,
            'total'        => $totalCount,
            'results'      => $results,
            'view_all_url' => route('shop', ['search' => $query]),
        ]);
    }

    /**
     * Format a product for visual card display in the search auto-suggest dropdown.
     */
    protected function formatProductCard(Product $product): array
    {
        return [
            'id'         => $product->id,
            'name'       => $product->name,
            'slug'       => $product->slug,
            'url'        => route('product.detail', $product->slug),
            'image'      => $product->primary_image_url,
            'price'      => $product->formatted_price,
            'old_price'  => $product->formatted_old_price,
            'rating'     => (float) ($product->rating ?: 5.0),
            'category'   => $product->category ? $product->category->name : null,
            'badge'      => $product->badge,
        ];
    }

    /**
     * Redirect direct /search requests to shop catalog with query parameter.
     */
    public function search(Request $request): RedirectResponse
    {
        $query = trim((string) $request->query('q', $request->query('search', '')));
        if ($query !== '') {
            return redirect()->route('shop', ['search' => $query]);
        }
        return redirect()->route('shop');
    }
}
