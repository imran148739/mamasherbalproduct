<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of products, optionally filtered by category.
     */
    public function index(Request $request)
    {
        $categorySlug = $request->query('category');
        $currentCategory = null;

        $query = Product::active()->with(['category', 'images']);

        // Filter by category if slug is provided
        if ($categorySlug) {
            $currentCategory = Category::where('slug', $categorySlug)->first();
            if ($currentCategory) {
                $query->where('category_id', $currentCategory->id);
            }
        }

        // Search by keyword if provided
        if ($search = trim((string) $request->query('search'))) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter by price range (supports filter.v.price.gte / filter.v.price.lte and price_from / price_to)
        $priceFrom = $request->query('filter_v_price_gte');
        if ($priceFrom === null || $priceFrom === '') {
            $priceFrom = $request->query('price_from');
        }

        $priceTo = $request->query('filter_v_price_lte');
        if ($priceTo === null || $priceTo === '') {
            $priceTo = $request->query('price_to');
        }

        if ($priceFrom !== null && $priceFrom !== '' && is_numeric($priceFrom)) {
            $query->where('price', '>=', (float) $priceFrom);
        }

        if ($priceTo !== null && $priceTo !== '' && is_numeric($priceTo)) {
            $query->where('price', '<=', (float) $priceTo);
        }

        // Sorting
        $sort = $request->query('sort', 'latest');
        switch ($sort) {
            case 'price_low_high':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high_low':
                $query->orderBy('price', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'rating':
                $query->orderBy('rating', 'desc');
                break;
            case 'latest':
            default:
                $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc');
                break;
        }

        // Pagination
        $perPage = (int) $request->query('per_page', 12);
        if ($perPage <= 0 || $perPage > 100) {
            $perPage = 12;
        }

        $products = $query->paginate($perPage)->withQueryString();

        // Active categories with counts of active products
        $categories = Category::active()
            ->withCount(['products' => function ($q) {
                $q->where('is_active', true);
            }])
            ->orderBy('sort_order', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        return view('pages.shop-left-sidebar.shop-left-sidebar', compact(
            'products',
            'categories',
            'currentCategory',
            'categorySlug',
            'sort',
            'perPage',
            'priceFrom',
            'priceTo'
        ));
    }

    /**
     * Display a single product's detail page.
     */
    public function show(string $slug)
    {
        $product = Product::active()
            ->with(['category', 'images'])
            ->where(function ($q) use ($slug) {
                $q->where('slug', $slug)->orWhere('id', $slug);
            })
            ->firstOrFail();

        // Related products in the same category (or other active products)
        $relatedProducts = Product::active()
            ->with(['category', 'images'])
            ->where('id', '!=', $product->id)
            ->when($product->category_id, function ($q) use ($product) {
                $q->where('category_id', $product->category_id);
            })
            ->take(8)
            ->get();

        // If fewer than 4 related products in same category, top up with other active products
        if ($relatedProducts->count() < 4) {
            $extra = Product::active()
                ->with(['category', 'images'])
                ->where('id', '!=', $product->id)
                ->whereNotIn('id', $relatedProducts->pluck('id'))
                ->take(8 - $relatedProducts->count())
                ->get();
            $relatedProducts = $relatedProducts->merge($extra);
        }

        return view('pages.product-detail.product-detail', compact('product', 'relatedProducts'));
    }
}
