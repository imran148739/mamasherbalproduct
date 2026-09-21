@extends('admin.layout.app')

@section('title', 'Best Selling Products Management')

@section('content')

    {{-- Top Header Banner --}}
    <div class="card" style="background: linear-gradient(135deg, rgba(30,30,66,0.9), rgba(26,26,62,0.95)); border: 1px solid rgba(255,107,107,0.3); margin-bottom: 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="font-size: 38px; width: 62px; height: 62px; background: rgba(255,107,107,0.15); border: 1px solid rgba(255,107,107,0.35); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    🔥
                </div>
                <div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">Best Selling Products</h2>
                    <p style="color: var(--text-secondary); font-size: 13px; max-width: 650px;">
                        Curate items directly from your Product Master catalog. These items are showcased on the website under the dedicated <strong>Best Selling</strong> page and navigation menu.
                    </p>
                    <div style="margin-top: 6px;">
                        <span class="badge" style="background: rgba(255,107,107,0.15); color: #ff6b6b; border: 1px solid rgba(255,107,107,0.35); font-size: 11px; padding: 3px 10px; border-radius: 6px; font-weight: 700;">
                            📐 Recommended Image Size for Best Selling: 278 &times; 278 px
                        </span>
                    </div>
                </div>
            </div>
            <div style="display: flex; gap: 12px; align-items: center;">
                <a href="{{ route('best-selling') }}" target="_blank" class="btn btn--outline" style="border-color: rgba(255,255,255,0.2); color: #fff;">
                    🌐 View Store Page ↗
                </a>
                <button type="button" class="btn btn--primary" onclick="openAddModal()" style="background: linear-gradient(135deg, #ff6b6b, #ff8e53); border: none; box-shadow: 0 4px 15px rgba(255,107,107,0.4);">
                    ➕ Add from Product Master
                </button>
            </div>
        </div>
    </div>

    {{-- Stat Cards --}}
    <div class="grid grid--3" style="margin-bottom: 24px;">
        <div class="card" style="padding: 18px 24px; border-left: 4px solid #ff6b6b;">
            <div style="color: var(--text-muted); font-size: 12px; font-weight: 600; text-transform: uppercase;">Total Best Sellers</div>
            <div style="font-size: 28px; font-weight: 800; color: #fff; margin-top: 6px;">{{ count($bestSellingProducts) }}</div>
            <div style="font-size: 12px; color: var(--text-secondary); margin-top: 4px;">Featured in Best Selling catalog</div>
        </div>
        <div class="card" style="padding: 18px 24px; border-left: 4px solid var(--green);">
            <div style="color: var(--text-muted); font-size: 12px; font-weight: 600; text-transform: uppercase;">Active on Website</div>
            <div style="font-size: 28px; font-weight: 800; color: var(--green); margin-top: 6px;">
                {{ $bestSellingProducts->where('is_active', true)->count() }}
            </div>
            <div style="font-size: 12px; color: var(--text-secondary); margin-top: 4px;">Currently visible to buyers</div>
        </div>
        <div class="card" style="padding: 18px 24px; border-left: 4px solid var(--accent);">
            <div style="color: var(--text-muted); font-size: 12px; font-weight: 600; text-transform: uppercase;">Available in Master Catalog</div>
            <div style="font-size: 28px; font-weight: 800; color: var(--accent); margin-top: 6px;">{{ count($availableProducts) }}</div>
            <div style="font-size: 12px; color: var(--text-secondary); margin-top: 4px;">Ready to be added as Best Sellers</div>
        </div>
    </div>

    {{-- Best Selling DataTable Card --}}
    <div class="card">
        <div class="card__header">
            <div>
                <div class="card__title">Best Selling Items ({{ count($bestSellingProducts) }})</div>
                <div class="card__desc">Manage display order, active status, or remove items from the Best Selling showcase.</div>
            </div>
            <button type="button" class="btn btn--sm" onclick="openAddModal()" style="background: rgba(255,107,107,0.2); color: #ff6b6b; border: 1px solid rgba(255,107,107,0.4);">
                + Add More Products
            </button>
        </div>

        @if(count($bestSellingProducts) === 0)
            <div style="text-align: center; padding: 60px 20px;">
                <div style="font-size: 48px; margin-bottom: 12px;">🔥</div>
                <h3 style="color: #fff; font-size: 18px; margin-bottom: 8px;">No Best Selling Products Added Yet</h3>
                <p style="color: var(--text-muted); font-size: 13px; max-width: 460px; margin: 0 auto 20px;">
                    Select items from your Product Master catalog to feature them on the website's dedicated Best Selling storefront page.
                </p>
                <button type="button" class="btn btn--primary" onclick="openAddModal()">
                    ➕ Add Products from Master
                </button>
            </div>
        @else
            <div style="overflow-x: auto;">
                <table id="bestSellingTable" class="dataTable hover stripe">
                    <thead>
                        <tr>
                            <th style="width: 45px;">#</th>
                            <th style="width: 75px;">Image</th>
                            <th>Product Details</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th style="width: 100px;">Sort Order</th>
                            <th style="width: 90px;">Status</th>
                            <th style="width: 140px; text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bestSellingProducts as $index => $prod)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <div style="position: relative; width: 54px; height: 54px;">
                                        <img src="{{ $prod->primary_image_url }}" alt="{{ $prod->name }}" class="table-thumb">
                                        @if($prod->images->count() > 1)
                                            <span style="position: absolute; bottom: -4px; right: -4px; background: #ff6b6b; color: #fff; font-size: 10px; font-weight: 700; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                {{ $prod->images->count() }}
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                                        <strong style="color: #fff; font-size: 14px;">{{ $prod->name }}</strong>
                                        <span class="badge" style="background: rgba(255,107,107,0.15); color: #ff6b6b; border: 1px solid rgba(255,107,107,0.3); font-size: 10px; padding: 2px 7px;">
                                            🔥 Best Seller
                                        </span>
                                        @if($prod->badge)
                                            <span class="badge" style="font-size: 10px; padding: 2px 7px; background: rgba(255,170,0,0.15); color: #ffaa00; border: 1px solid rgba(255,170,0,0.3);">
                                                {{ $prod->badge }}
                                            </span>
                                        @endif
                                    </div>
                                    <div style="font-size: 11px; color: var(--text-muted); margin-top: 4px;">
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
                                    <form action="{{ route('admin.best-selling.order', $prod->id) }}" method="POST" style="display: flex; align-items: center; gap: 4px;">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" name="best_selling_order" value="{{ $prod->best_selling_order }}"
                                               style="width: 60px; background: rgba(255,255,255,0.06); border: 1px solid var(--border); color: #fff; padding: 4px 6px; border-radius: 4px; font-size: 12px; text-align: center;"
                                               title="Update sort order">
                                        <button type="submit" class="btn btn--outline btn--sm" style="padding: 3px 7px; font-size: 11px;" title="Save Order">
                                            ✓
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('admin.best-selling.toggle', $prod->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="badge {{ $prod->is_active ? 'badge--active' : 'badge--inactive' }}" style="cursor: pointer; border: none;" title="Click to toggle website visibility">
                                            {{ $prod->is_active ? '● Active' : '○ Hidden' }}
                                        </button>
                                    </form>
                                </td>
                                <td style="text-align: right;">
                                    <div style="display: inline-flex; gap: 6px;">
                                        <a href="{{ route('admin.products.edit', $prod->id) }}" class="btn btn--outline btn--sm" title="Edit in Master Catalog">
                                            ✏️ Edit
                                        </a>
                                        <form action="{{ route('admin.best-selling.destroy', $prod->id) }}" method="POST"
                                              onsubmit="return confirm('Remove \'{{ addslashes($prod->name) }}\' from Best Selling? (Product will NOT be deleted from master catalog)');"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn--danger btn--sm" title="Remove from Best Selling">
                                                ✕ Remove
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    {{-- ════════════════════ ADD BEST SELLING MODAL ════════════════════ --}}
    <div class="modal-backdrop" id="addModal" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.75); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(4px);">
        <div class="modal-box" style="background: #141432; border: 1px solid rgba(255,107,107,0.3); border-radius: 16px; width: 92%; max-width: 820px; max-height: 88vh; display: flex; flex-direction: column; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.8);">
            <div class="modal-header" style="padding: 18px 24px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <span style="font-size: 24px;">🔥</span>
                    <div>
                        <h3 style="color: #fff; font-size: 17px; margin: 0; font-weight: 700;">Add Items from Product Master</h3>
                        <p style="color: var(--text-muted); font-size: 12px; margin: 2px 0 0;">Select products from your master catalog to feature in Best Selling.</p>
                    </div>
                </div>
                <button type="button" class="modal-close" onclick="closeAddModal()" style="background: none; border: none; font-size: 24px; color: var(--text-muted); cursor: pointer;">&times;</button>
            </div>

            <form action="{{ route('admin.best-selling.store') }}" method="POST" style="display: flex; flex-direction: column; flex: 1; overflow: hidden;">
                @csrf
                <div class="modal-body" style="padding: 20px 24px; overflow-y: auto; flex: 1;">

                    {{-- Search / Filter Box in Modal --}}
                    <div style="margin-bottom: 16px;">
                        <input type="text" id="modalSearchInput" placeholder="🔍 Search products by name, category, or SKU..."
                               style="width: 100%; padding: 10px 14px; background: rgba(255,255,255,0.06); border: 1px solid var(--border); border-radius: 8px; color: #fff; font-size: 13px; outline: none;"
                               onkeyup="filterModalProducts()">
                    </div>

                    @if(count($availableProducts) === 0)
                        <div style="text-align: center; padding: 40px 10px; color: var(--text-muted);">
                            <div style="font-size: 36px; margin-bottom: 8px;">✅</div>
                            <p style="font-size: 14px; color: #fff;">All Master Products are already in Best Selling!</p>
                            <p style="font-size: 12px;">To add new products, create them in <a href="{{ route('admin.products.create') }}" style="color: var(--accent);">Product Master</a> first.</p>
                        </div>
                    @else
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; font-size: 12px; color: var(--text-secondary);">
                            <div>
                                <span>Available Products ({{ count($availableProducts) }}):</span>
                                <span class="badge" style="background: rgba(255,107,107,0.15); color: #ff6b6b; border: 1px solid rgba(255,107,107,0.35); font-size: 10px; padding: 2px 7px; border-radius: 4px; font-weight: 600; margin-left: 6px;">Recommended Size: 278 &times; 278 px</span>
                            </div>
                            <span style="cursor: pointer; color: var(--accent);" onclick="toggleSelectAll()">Select / Deselect All</span>
                        </div>

                        <div id="modalProductsList" style="display: flex; flex-direction: column; gap: 8px; max-height: 360px; overflow-y: auto; padding-right: 4px;">
                            @foreach($availableProducts as $avail)
                                <label class="product-pick-item" style="display: flex; align-items: center; gap: 14px; padding: 10px 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; cursor: pointer; transition: all 0.2s;">
                                    <input type="checkbox" name="product_ids[]" value="{{ $avail->id }}" class="prod-check" style="width: 18px; height: 18px; accent-color: #ff6b6b; cursor: pointer;">
                                    <img src="{{ $avail->primary_image_url }}" alt="{{ $avail->name }}" style="width: 46px; height: 46px; border-radius: 8px; object-fit: cover; border: 1px solid var(--border);">
                                    <div style="flex: 1; min-width: 0;">
                                        <div style="font-weight: 600; color: #fff; font-size: 13px;" class="prod-name">{{ $avail->name }}</div>
                                        <div style="font-size: 11px; color: var(--text-muted); margin-top: 2px;">
                                            <span class="prod-cat" style="color: #a5a0ff;">{{ $avail->category->name ?? 'Uncategorized' }}</span> &bull;
                                            SKU: <span class="prod-sku">{{ $avail->sku ?? 'N/A' }}</span> &bull;
                                            Stock: {{ $avail->stock_quantity }}
                                        </div>
                                    </div>
                                    <div style="text-align: right;">
                                        <strong style="color: var(--green); font-size: 13px;">{{ $avail->formatted_price }}</strong>
                                        @if($avail->old_price)
                                            <div style="font-size: 11px; color: var(--text-muted); text-decoration: line-through;">{{ $avail->formatted_old_price }}</div>
                                        @endif
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    @endif

                    <div style="margin-top: 18px; padding-top: 16px; border-top: 1px solid var(--border); display: flex; align-items: center; gap: 12px;">
                        <label style="font-size: 13px; color: var(--text-secondary); font-weight: 600;">
                            Starting Sort Order:
                        </label>
                        <input type="number" name="best_selling_order" value="1" min="0"
                               style="width: 80px; padding: 7px 10px; background: rgba(255,255,255,0.06); border: 1px solid var(--border); border-radius: 6px; color: #fff; font-size: 13px;">
                        <span style="font-size: 11px; color: var(--text-muted);">(Lower numbers appear first on the storefront)</span>
                    </div>
                </div>

                <div class="modal-footer" style="padding: 16px 24px; border-top: 1px solid var(--border); display: flex; justify-content: flex-end; gap: 12px; background: rgba(0,0,0,0.2);">
                    <button type="button" class="btn btn--outline" onclick="closeAddModal()">Cancel</button>
                    @if(count($availableProducts) > 0)
                        <button type="submit" class="btn btn--primary" style="background: linear-gradient(135deg, #ff6b6b, #ff8e53); border: none;">
                            🔥 Add Selected to Best Selling
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        if ($('#bestSellingTable').length) {
            $('#bestSellingTable').DataTable({
                pageLength: 10,
                responsive: true,
                order: [[5, 'asc']], // Sort by sort order column
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search best sellers...",
                    lengthMenu: "Show _MENU_ items",
                    info: "Showing _START_ to _END_ of _TOTAL_ best sellers"
                }
            });
        }
    });

    function openAddModal() {
        document.getElementById('addModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeAddModal() {
        document.getElementById('addModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    // Close modal on Escape key or outside click
    window.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeAddModal();
    });
    document.getElementById('addModal').addEventListener('click', function(e) {
        if (e.target === this) closeAddModal();
    });

    function filterModalProducts() {
        const query = document.getElementById('modalSearchInput').value.toLowerCase();
        const items = document.querySelectorAll('.product-pick-item');
        items.forEach(function(item) {
            const name = item.querySelector('.prod-name').textContent.toLowerCase();
            const cat = item.querySelector('.prod-cat').textContent.toLowerCase();
            const sku = item.querySelector('.prod-sku').textContent.toLowerCase();
            if (name.includes(query) || cat.includes(query) || sku.includes(query)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });
    }

    let allSelected = false;
    function toggleSelectAll() {
        const checkboxes = document.querySelectorAll('.prod-check');
        allSelected = !allSelected;
        checkboxes.forEach(function(cb) {
            if (cb.closest('.product-pick-item').style.display !== 'none') {
                cb.checked = allSelected;
            }
        });
    }
</script>
@endpush
