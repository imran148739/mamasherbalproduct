<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::ordered()->get();

        $query = Product::with(['category', 'images'])->ordered();

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $products = $query->get();

        return view('admin.master.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::active()->ordered()->get();
        return view('admin.master.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            'name'              => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:products,slug',
            'sku'               => 'nullable|string|max:100',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'price'             => 'required|numeric|min:0',
            'old_price'         => 'nullable|numeric|min:0',
            'stock_quantity'    => 'nullable|integer|min:0',
            'badge'             => 'nullable|string|max:50',
            'rating'            => 'nullable|numeric|min:1|max:5',
            'is_featured'       => 'nullable|boolean',
            'is_best_selling'   => 'nullable|boolean',
            'is_active'         => 'nullable|boolean',
            'sort_order'        => 'nullable|integer',
            'images.*'          => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:25600',
        ]);

        $data = [
            'category_id'       => $request->category_id,
            'name'              => $request->name,
            'slug'              => $request->slug ? Str::slug($request->slug) : Str::slug($request->name),
            'sku'               => $request->sku,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'price'             => $request->price,
            'old_price'         => $request->old_price,
            'stock_quantity'    => $request->stock_quantity ?? 0,
            'badge'             => $request->badge,
            'rating'            => $request->rating ?? 5.0,
            'is_featured'       => $request->has('is_featured'),
            'is_best_selling'   => $request->has('is_best_selling'),
            'is_active'         => $request->has('is_active'),
            'sort_order'        => $request->sort_order ?? 0,
        ];

        $data['slug'] = $this->makeUniqueSlug($data['slug']);

        $product = Product::create($data);

        // Process multiple uploaded images
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            $uploadDir = public_path('img/uploads/products');
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            foreach ($files as $index => $file) {
                $filename = 'prod_' . $product->id . '_' . time() . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();
                $file->move($uploadDir, $filename);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => 'img/uploads/products/' . $filename,
                    'is_primary' => ($index === 0), // First image default primary
                    'sort_order' => $index + 1,
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Product "' . $product->name . '" created successfully with images!');
    }

    public function edit($id)
    {
        $product = Product::with(['category', 'images'])->findOrFail($id);
        $categories = Category::ordered()->get();

        return view('admin.master.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            'name'              => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:products,slug,' . $id,
            'sku'               => 'nullable|string|max:100',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'price'             => 'required|numeric|min:0',
            'old_price'         => 'nullable|numeric|min:0',
            'stock_quantity'    => 'nullable|integer|min:0',
            'badge'             => 'nullable|string|max:50',
            'rating'            => 'nullable|numeric|min:1|max:5',
            'is_featured'       => 'nullable|boolean',
            'is_best_selling'   => 'nullable|boolean',
            'is_active'         => 'nullable|boolean',
            'sort_order'        => 'nullable|integer',
            'images.*'          => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:25600',
        ]);

        $data = [
            'category_id'       => $request->category_id,
            'name'              => $request->name,
            'sku'               => $request->sku,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'price'             => $request->price,
            'old_price'         => $request->old_price,
            'stock_quantity'    => $request->stock_quantity ?? 0,
            'badge'             => $request->badge,
            'rating'            => $request->rating ?? 5.0,
            'is_featured'       => $request->has('is_featured'),
            'is_best_selling'   => $request->has('is_best_selling'),
            'is_active'         => $request->has('is_active'),
            'sort_order'        => $request->sort_order ?? 0,
        ];

        if ($request->filled('slug')) {
            $data['slug'] = Str::slug($request->slug);
        } else {
            $data['slug'] = Str::slug($request->name);
        }
        $data['slug'] = $this->makeUniqueSlug($data['slug'], $id);

        $product->update($data);

        // Process newly uploaded additional images
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            $uploadDir = public_path('img/uploads/products');
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $currentMaxOrder = $product->images()->max('sort_order') ?? 0;
            $hasPrimary = $product->images()->where('is_primary', true)->exists();

            foreach ($files as $index => $file) {
                $filename = 'prod_' . $product->id . '_' . time() . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();
                $file->move($uploadDir, $filename);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => 'img/uploads/products/' . $filename,
                    'is_primary' => (!$hasPrimary && $index === 0),
                    'sort_order' => $currentMaxOrder + $index + 1,
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Product "' . $product->name . '" updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::with('images')->findOrFail($id);

        // Delete all physical files
        foreach ($product->images as $img) {
            if ($img->image_path && file_exists(public_path($img->image_path))) {
                @unlink(public_path($img->image_path));
            }
        }

        $name = $product->name;
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product "' . $name . '" and all associated images deleted.');
    }

    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->is_active = !$product->is_active;
        $product->save();

        return redirect()->back()->with('success', 'Product "' . $product->name . '" is now ' . ($product->is_active ? 'Active' : 'Inactive') . '.');
    }

    public function deleteImage($id)
    {
        $img = ProductImage::findOrFail($id);
        $productId = $img->product_id;

        if ($img->image_path && file_exists(public_path($img->image_path))) {
            @unlink(public_path($img->image_path));
        }

        $wasPrimary = $img->is_primary;
        $img->delete();

        // If deleted image was primary, set next available image as primary
        if ($wasPrimary) {
            $nextImg = ProductImage::where('product_id', $productId)->first();
            if ($nextImg) {
                $nextImg->update(['is_primary' => true]);
            }
        }

        return redirect()->back()->with('success', 'Image removed from product gallery.');
    }

    public function setPrimaryImage($productId, $imageId)
    {
        ProductImage::where('product_id', $productId)->update(['is_primary' => false]);
        ProductImage::where('product_id', $productId)->where('id', $imageId)->update(['is_primary' => true]);

        return redirect()->back()->with('success', 'Primary display image updated.');
    }

    private function makeUniqueSlug($slug, $ignoreId = null)
    {
        $original = $slug;
        $count = 1;
        while (Product::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $original . '-' . $count;
            $count++;
        }
        return $slug;
    }
}
