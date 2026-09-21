@extends('admin.layout.app')

@section('title', 'Products Management')

@section('content')

    {{-- Top Header Card --}}
    <div class="card" style="background: linear-gradient(135deg, rgba(30,30,66,0.9), rgba(26,26,62,0.95)); border: 1px solid rgba(108,99,255,0.25);">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="font-size: 38px; width: 60px; height: 60px; background: rgba(108,99,255,0.15); border: 1px solid rgba(108,99,255,0.3); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    🏷️
                </div>
                <div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">Products Catalog</h2>
                    <p style="color: var(--text-secondary); font-size: 13px; max-width: 600px;">
                        Manage all products, pricing, categories, stock, badges, and upload multiple gallery images for each product.
                    </p>
                </div>
            </div>
            <div style="display: flex; gap: 12px;">
                <a href="{{ route('admin.products.create') }}" class="btn btn--primary">
                    ➕ Add New Product
                </a>
            </div>
        </div>
    </div>

    {{-- Category Filter Bar --}}
    <div class="card" style="padding: 16px 24px; margin-bottom: 20px;">
        <form method="GET" action="{{ route('admin.products.index') }}" style="display: flex; align-items: center; gap: 14px; flex-wrap: wrap;">
            <div style="display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 13px; color: var(--text-primary);">
                <span>🔍 Filter by Category:</span>
            </div>
            <select name="category_id" class="form-input" style="width: 240px; padding: 7px 12px;" onchange="this.form.submit()">
                <option value="">All Categories ({{ $categories->count() }})</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
            @if(request('category_id'))
                <a href="{{ route('admin.products.index') }}" class="btn btn--outline btn--sm" style="color: var(--text-muted);">
                    ✕ Reset Filter
                </a>
            @endif
        </form>
    </div>

    {{-- Products DataTable Card --}}
    <div class="card">
        <div class="card__header">
            <div>
                <div class="card__title">All Products ({{ count($products) }})</div>
                <div class="card__desc">Complete inventory list with live pricing, gallery counts, and visibility toggles.</div>
            </div>
            <a href="{{ route('admin.products.create') }}" class="btn btn--success btn--sm">
                + New Product
            </a>
        </div>

        <div style="overflow-x: auto;">
            <table id="productsTable" class="dataTable hover stripe">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 80px;">Image</th>
                        <th>Product Details</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th style="width: 80px;">Stock</th>
                        <th style="width: 70px;">Images</th>
                        <th style="width: 80px;">Status</th>
                        <th style="width: 140px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index => $prod)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div style="position: relative; width: 54px; height: 54px;">
                                    <img src="{{ $prod->primary_image_url }}" alt="{{ $prod->name }}" class="table-thumb">
                                    @if($prod->images->count() > 1)
                                        <span style="position: absolute; bottom: -4px; right: -4px; background: var(--accent); color: #fff; font-size: 10px; font-weight: 700; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                                            {{ $prod->images->count() }}
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <strong style="color: #fff; font-size: 14px;">{{ $prod->name }}</strong>
                                    @if($prod->badge)
                                        <span class="badge" style="font-size: 10px; padding: 2px 7px; background: rgba(255,170,0,0.15); color: #ffaa00; border: 1px solid rgba(255,170,0,0.3);">
                                            {{ $prod->badge }}
                                        </span>
                                    @endif
                                    @if($prod->is_featured)
                                        <span class="badge" style="font-size: 10px; padding: 2px 7px; background: rgba(0,214,143,0.15); color: var(--green); border: 1px solid rgba(0,214,143,0.3);">
                                            ★ Featured
                                        </span>
                                    @endif
                                    @if($prod->is_best_selling)
                                        <span class="badge" style="font-size: 10px; padding: 2px 7px; background: rgba(255,107,107,0.15); color: #ff6b6b; border: 1px solid rgba(255,107,107,0.3);">
                                            🔥 Best Seller
                                        </span>
                                    @endif
                                </div>
                                <div style="font-size: 11px; color: var(--text-muted); margin-top: 3px;">
                                    SKU: <code style="color: var(--text-secondary);">{{ $prod->sku ?? 'N/A' }}</code> &bull;
                                    Rating: <span style="color: #ffc107;">★ {{ number_format($prod->rating, 1) }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="badge" style="background: rgba(108,99,255,0.12); color: #a5a0ff; border: 1px solid rgba(108,99,255,0.25);">
                                    {{ $prod->category->name ?? 'Uncategorized' }}
                                </span>
                            </td>
                            <td>
                                <strong style="color: var(--green); font-size: 14px;">{{ $prod->formatted_price }}</strong>
                                @if($prod->old_price)
                                    <div style="font-size: 11px; color: var(--text-muted); text-decoration: line-through;">
                                        {{ $prod->formatted_old_price }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if($prod->stock_quantity > 10)
                                    <span style="color: var(--green); font-size: 12px; font-weight: 600;">{{ $prod->stock_quantity }} in stock</span>
                                @elseif($prod->stock_quantity > 0)
                                    <span style="color: #ffaa00; font-size: 12px; font-weight: 600;">Low ({{ $prod->stock_quantity }})</span>
                                @else
                                    <span style="color: var(--red); font-size: 12px; font-weight: 600;">Out of Stock</span>
                                @endif
                            </td>
                            <td>
                                <span style="font-size: 12px; color: var(--text-secondary); display: inline-flex; align-items: center; gap: 4px;">
                                    🖼️ {{ $prod->images->count() }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('admin.products.toggle', $prod->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="badge {{ $prod->is_active ? 'badge--active' : 'badge--inactive' }}" style="cursor: pointer; border: none;" title="Click to toggle status">
                                        {{ $prod->is_active ? '● Active' : '○ Hidden' }}
                                    </button>
                                </form>
                            </td>
                            <td style="text-align: right;">
                                <div style="display: inline-flex; gap: 6px;">
                                    <a href="{{ route('admin.products.edit', $prod->id) }}" class="btn btn--outline btn--sm" title="Edit Product & Gallery">
                                        ✏️ Edit
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $prod->id) }}" method="POST"
                                          onsubmit="return confirm('Delete product \'{{ addslashes($prod->name) }}\' and all its gallery images?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn--danger btn--sm" title="Delete Product">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#productsTable').DataTable({
            pageLength: 10,
            responsive: true,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search products...",
                lengthMenu: "Show _MENU_ products",
                info: "Showing _START_ to _END_ of _TOTAL_ products"
            }
        });
    });
</script>
@endpush
