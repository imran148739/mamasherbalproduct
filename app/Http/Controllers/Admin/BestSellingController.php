<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BestSellingController extends Controller
{
    /**
     * Display a listing of best selling products and available products for selection.
     */
    public function index(Request $request)
    {
        $bestSellingProducts = Product::where('is_best_selling', true)
            ->with(['category', 'images'])
            ->orderBy('best_selling_order', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        $availableProducts = Product::where('is_best_selling', false)
            ->with(['category', 'images'])
            ->ordered()
            ->get();

        return view('admin.best-selling.index', compact('bestSellingProducts', 'availableProducts'));
    }

    /**
     * Add product(s) from product master to best selling list.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'         => 'nullable|exists:products,id',
            'product_ids'        => 'nullable|array',
            'product_ids.*'      => 'exists:products,id',
            'best_selling_order' => 'nullable|integer',
        ]);

        $order = (int) $request->input('best_selling_order', 0);
        $addedCount = 0;

        // Support single product selection
        if ($request->filled('product_id')) {
            $product = Product::findOrFail($request->input('product_id'));
            $product->update([
                'is_best_selling'    => true,
                'best_selling_order' => $order,
            ]);
            $addedCount++;
        }

        // Support multi-select
        if ($request->filled('product_ids') && is_array($request->input('product_ids'))) {
            foreach ($request->input('product_ids') as $pId) {
                Product::where('id', $pId)->update([
                    'is_best_selling'    => true,
                    'best_selling_order' => $order++,
                ]);
                $addedCount++;
            }
        }

        if ($addedCount === 0) {
            return redirect()->route('admin.best-selling.index')
                ->with('error', 'Please select at least one product from the master catalog.');
        }

        return redirect()->route('admin.best-selling.index')
            ->with('success', "Successfully added {$addedCount} product(s) to Best Selling!");
    }

    /**
     * Update display order of a best selling product.
     */
    public function updateOrder(Request $request, int $id)
    {
        $request->validate([
            'best_selling_order' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'best_selling_order' => (int) $request->input('best_selling_order'),
        ]);

        return redirect()->route('admin.best-selling.index')
            ->with('success', "Display order updated for \"{$product->name}\".");
    }

    /**
     * Toggle active status of a best selling product.
     */
    public function toggle(int $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'is_active' => !$product->is_active,
        ]);

        $status = $product->is_active ? 'active' : 'hidden';
        return redirect()->route('admin.best-selling.index')
            ->with('success', "Product \"{$product->name}\" is now {$status}.");
    }

    /**
     * Remove a product from best selling list (does not delete product master).
     */
    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'is_best_selling' => false,
        ]);

        return redirect()->route('admin.best-selling.index')
            ->with('success', "Product \"{$product->name}\" removed from Best Selling list.");
    }
}
