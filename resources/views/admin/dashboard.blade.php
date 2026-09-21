@extends('admin.layout.app')

@section('title', 'Dashboard Overview')

@section('content')
    {{-- Stats Row --}}
    <div class="grid grid--4" style="margin-bottom: 32px;">
        <div class="card" style="border-left: 4px solid var(--accent); margin-bottom: 0;">
            <div style="font-size: 32px; font-weight: 800; color: #fff; margin-bottom: 2px;">{{ $totalCategories }}</div>
            <div class="card__desc" style="font-weight: 600;">Product Categories</div>
            <small style="color: var(--text-muted); font-size: 11px;">Organized Master catalog</small>
        </div>
        <div class="card" style="border-left: 4px solid var(--green); margin-bottom: 0;">
            <div style="font-size: 32px; font-weight: 800; color: var(--green); margin-bottom: 2px;">{{ $totalProducts }}</div>
            <div class="card__desc" style="font-weight: 600;">Active Products</div>
            <small style="color: var(--text-muted); font-size: 11px;">{{ $totalProductImages }} gallery images uploaded</small>
        </div>
        <div class="card" style="border-left: 4px solid #00c0ff; margin-bottom: 0;">
            <div style="font-size: 32px; font-weight: 800; color: #00c0ff; margin-bottom: 2px;">{{ $totalActiveItems }} / {{ $totalDynamicItems }}</div>
            <div class="card__desc" style="font-weight: 600;">Homepage Items</div>
            <small style="color: var(--text-muted); font-size: 11px;">Slides, Collections, Specials & Reviews</small>
        </div>
        <div class="card" style="border-left: 4px solid var(--orange); margin-bottom: 0;">
            <div style="font-size: 32px; font-weight: 800; color: var(--orange); margin-bottom: 2px;">⚡ Live</div>
            <div class="card__desc" style="font-weight: 600;">Instant Storefront Sync</div>
            <small style="color: var(--text-muted); font-size: 11px;">All edits appear instantly on store</small>
        </div>
    </div>

    {{-- Master Catalog Management Section --}}
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
        <div>
            <h2 style="font-size: 17px; font-weight: 700; color: #fff;">
                📦 Master Catalog Management
            </h2>
            <p style="color: var(--text-secondary); font-size: 13px;">Manage categories and add products with multiple gallery images.</p>
        </div>
    </div>

    <div class="grid grid--2" style="margin-bottom: 32px;">
        <a href="{{ route('admin.categories.index') }}" style="text-decoration: none;">
            <div class="card" style="cursor: pointer; transition: all 0.25s ease; border: 1px solid rgba(108,99,255,0.2); background: linear-gradient(135deg, rgba(26,26,58,0.8), rgba(20,20,48,0.9));">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="font-size: 36px;">🗂️</div>
                        <div>
                            <div class="card__title" style="font-size: 16px; margin-bottom: 2px;">Product Categories</div>
                            <div class="card__desc">Organize products into herbal departments & types</div>
                        </div>
                    </div>
                    <span class="badge" style="background: rgba(108,99,255,0.15); color: #fff; font-size: 12px; font-weight: 700; padding: 4px 10px;">
                        {{ $totalCategories }} Categories
                    </span>
                </div>
                <div style="margin-top: 14px; display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-size: 12px; color: var(--accent); font-weight: 600;">Open Categories Table →</span>
                    <span class="btn btn--primary btn--sm">Manage Categories</span>
                </div>
            </div>
        </a>

        <a href="{{ route('admin.products.index') }}" style="text-decoration: none;">
            <div class="card" style="cursor: pointer; transition: all 0.25s ease; border: 1px solid rgba(0,214,143,0.2); background: linear-gradient(135deg, rgba(26,26,58,0.8), rgba(20,20,48,0.9));">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="font-size: 36px;">🏷️</div>
                        <div>
                            <div class="card__title" style="font-size: 16px; margin-bottom: 2px;">Products & Multi-Image Gallery</div>
                            <div class="card__desc">Manage prices, stock, badges & photo gallery</div>
                        </div>
                    </div>
                    <span class="badge" style="background: rgba(0,214,143,0.15); color: var(--green); font-size: 12px; font-weight: 700; padding: 4px 10px;">
                        {{ $totalProducts }} Products
                    </span>
                </div>
                <div style="margin-top: 14px; display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-size: 12px; color: var(--green); font-weight: 600;">Open Products Table →</span>
                    <span class="btn btn--success btn--sm">+ New Product</span>
                </div>
            </div>
        </a>
    </div>

    {{-- Dynamic Repeater Sections with DataTables --}}
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
        <div>
            <h2 style="font-size: 17px; font-weight: 700; color: #fff;">
                🚀 Dynamic Repeater Sections (DataTables & CRUD)
            </h2>
            <p style="color: var(--text-secondary); font-size: 13px;">Add, edit, reorder, or delete items and images dynamically.</p>
        </div>
    </div>

    <div class="grid grid--3" style="margin-bottom: 32px;">
        @foreach($dynamicSections as $key => $info)
            <a href="{{ $info['url'] }}" style="text-decoration: none;">
                <div class="card" style="cursor: pointer; transition: all 0.25s ease; border: 1px solid rgba(255,255,255,0.06); height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                            <div style="font-size: 32px;">{{ $info['icon'] }}</div>
                            <span class="badge badge--tag" style="font-size: 10px;">{{ $info['count'] }} items</span>
                        </div>
                        <div class="card__title" style="font-size: 15px; margin-bottom: 4px;">{{ $info['label'] }}</div>
                        <div class="card__desc" style="font-size: 12px;">{{ $info['desc'] }}</div>
                    </div>
                    <div style="margin-top: 20px; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-size: 11px; color: var(--accent); font-weight: 600;">Open DataTable →</span>
                        <span class="btn btn--primary btn--sm" style="font-size: 11px;">Manage Items</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Static Sections --}}
    <div style="margin-bottom: 16px;">
        <h2 style="font-size: 16px; font-weight: 700; color: var(--text-secondary);">
            ⚙️ Static Section Content
        </h2>
    </div>

    <div class="grid grid--2">
        @foreach($staticSections as $key => $info)
            <a href="{{ $info['url'] }}" style="text-decoration: none;">
                <div class="card" style="cursor: pointer; transition: all 0.25s ease;">
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div style="display: flex; align-items: center; gap: 14px;">
                            <div style="font-size: 28px;">{{ $info['icon'] }}</div>
                            <div>
                                <div class="card__title">{{ $info['label'] }}</div>
                                <div class="card__desc">{{ $info['desc'] }}</div>
                            </div>
                        </div>
                        <span class="btn btn--outline btn--sm">Edit →</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
