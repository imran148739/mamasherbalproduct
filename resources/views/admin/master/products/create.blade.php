@extends('admin.layout.app')

@section('title', 'Add New Product')

@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">➕ Create New Product</h2>
            <p style="color: var(--text-secondary); font-size: 13px;">Add a new product with category association, pricing, and multiple gallery images.</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="btn btn--outline">
            ← Back to Products
        </a>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
            {{-- Left Column: Main Details & Images --}}
            <div>
                {{-- Product Basic Information --}}
                <div class="card">
                    <div class="card__title" style="margin-bottom: 16px;">General Information</div>

                    <div class="form-group">
                        <label class="form-label">Product Name <span style="color: var(--red);">*</span></label>
                        <input type="text" name="name" class="form-input" placeholder="e.g. Organic Herbal Hair Oil 200ml" value="{{ old('name') }}" required>
                    </div>

                    <div class="grid grid--2">
                        <div class="form-group">
                            <label class="form-label">Category <span style="color: var(--red);">*</span></label>
                            <select name="category_id" class="form-input" required>
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">SKU (Stock Keeping Unit)</label>
                            <input type="text" name="sku" class="form-input" placeholder="e.g. MAMA-OIL-01" value="{{ old('sku') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Slug (URL friendly)</label>
                        <input type="text" name="slug" class="form-input" placeholder="Auto-generated from name if left empty" value="{{ old('slug') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Short Summary</label>
                        <textarea name="short_description" class="form-textarea" rows="2" placeholder="Brief 1-2 sentence overview for product card...">{{ old('short_description') }}</textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Full Description & Benefits</label>
                        <textarea name="description" class="form-textarea" rows="5" placeholder="Detailed product ingredients, directions to use, and benefits...">{{ old('description') }}</textarea>
                    </div>
                </div>

                {{-- Multiple Images Upload Zone --}}
                <div class="card">
                    <div class="card__header">
                        <div>
                            <div class="card__title">📸 Product Images (Form Repeater / Multi-Upload)</div>
                            <div class="card__desc">Upload multiple images. The first image will be the primary display image.</div>
                        </div>
                    </div>

                    <div style="border: 2px dashed rgba(108,99,255,0.35); border-radius: 12px; padding: 28px 20px; text-align: center; background: rgba(108,99,255,0.03); cursor: pointer; transition: all 0.2s ease;"
                         onclick="document.getElementById('multiImageInput').click()"
                         id="dropzone">
                        <div style="font-size: 40px; margin-bottom: 8px;">📁</div>
                        <h4 style="font-size: 15px; color: #fff; margin-bottom: 4px;">Click to Browse or Drag Multiple Product Images Here</h4>
                        <p style="color: var(--text-muted); font-size: 12px;">Supports JPG, PNG, WEBP (Max 25MB each). Select multiple files at once.</p>
                        <input type="file" name="images[]" id="multiImageInput" multiple accept="image/*" style="display: none;" onchange="handleFileSelect(this)">
                    </div>

                    {{-- Live Multi-image Preview Grid --}}
                    <div id="imagePreviewContainer" style="display: none; margin-top: 18px;">
                        <div style="font-size: 13px; font-weight: 700; color: var(--text-primary); margin-bottom: 10px;">
                            Selected Images Preview (<span id="selectedCount">0</span> images)
                        </div>
                        <div id="previewGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(110px, 1fr)); gap: 12px;"></div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Pricing, Inventory & Settings --}}
            <div>
                {{-- Pricing & Inventory Card --}}
                <div class="card">
                    <div class="card__title" style="margin-bottom: 16px;">Pricing & Inventory</div>

                    <div class="form-group">
                        <label class="form-label">Sale Price (₹) <span style="color: var(--red);">*</span></label>
                        <input type="number" step="0.01" min="0" name="price" class="form-input" placeholder="29.99" value="{{ old('price') }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Regular / Old Price (₹)</label>
                        <input type="number" step="0.01" min="0" name="old_price" class="form-input" placeholder="39.99" value="{{ old('old_price') }}">
                        <span style="font-size: 11px; color: var(--text-muted);">Displays strikethrough price when set</span>
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Stock Quantity</label>
                        <input type="number" min="0" name="stock_quantity" class="form-input" placeholder="100" value="{{ old('stock_quantity', 50) }}">
                    </div>
                </div>

                {{-- Badges & Status Card --}}
                <div class="card">
                    <div class="card__title" style="margin-bottom: 16px;">Display & Badges</div>

                    <div class="form-group">
                        <label class="form-label">Product Badge</label>
                        <select name="badge" class="form-input">
                            <option value="">None</option>
                            <option value="Sale" {{ old('badge') == 'Sale' ? 'selected' : '' }}>Sale</option>
                            <option value="Hot" {{ old('badge') == 'Hot' ? 'selected' : '' }}>Hot</option>
                            <option value="New" {{ old('badge') == 'New' ? 'selected' : '' }}>New</option>
                            <option value="Popular" {{ old('badge') == 'Popular' ? 'selected' : '' }}>Popular</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Star Rating (1.0 to 5.0)</label>
                        <input type="number" step="0.1" min="1" max="5" name="rating" class="form-input" value="{{ old('rating', '5.0') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" class="form-input" value="{{ old('sort_order', 0) }}">
                    </div>

                    <div style="padding-top: 6px; display: flex; flex-direction: column; gap: 12px;">
                        <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                            <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--accent);">
                            ⭐ Featured Product
                        </label>

                        <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                            <input type="checkbox" name="is_active" value="1" checked style="width: 18px; height: 18px; accent-color: var(--green);">
                            ● Active & Visible on Storefront
                        </label>
                    </div>

                    <div style="margin-top: 24px;">
                        <button type="submit" class="btn btn--primary" style="width: 100%; padding: 12px; font-size: 14px;">
                            💾 Save & Publish Product
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('scripts')
<script>
    function handleFileSelect(input) {
        const previewContainer = document.getElementById('imagePreviewContainer');
        const grid = document.getElementById('previewGrid');
        const countSpan = document.getElementById('selectedCount');

        grid.innerHTML = '';

        if (input.files && input.files.length > 0) {
            previewContainer.style.display = 'block';
            countSpan.textContent = input.files.length;

            Array.from(input.files).forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const card = document.createElement('div');
                    card.style.cssText = 'position: relative; border-radius: 8px; overflow: hidden; border: 1px solid var(--border); background: rgba(0,0,0,0.3);';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.cssText = 'width: 100%; height: 90px; object-fit: cover; display: block;';

                    const badge = document.createElement('span');
                    if (index === 0) {
                        badge.textContent = '★ Primary';
                        badge.style.cssText = 'position: absolute; top: 4px; left: 4px; background: var(--accent); color: #fff; font-size: 9px; font-weight: 700; padding: 2px 5px; border-radius: 4px;';
                    } else {
                        badge.textContent = '#' + (index + 1);
                        badge.style.cssText = 'position: absolute; top: 4px; left: 4px; background: rgba(0,0,0,0.6); color: #fff; font-size: 9px; font-weight: 700; padding: 2px 5px; border-radius: 4px;';
                    }

                    const nameLabel = document.createElement('div');
                    nameLabel.textContent = file.name;
                    nameLabel.style.cssText = 'font-size: 10px; color: var(--text-muted); padding: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;';

                    card.appendChild(img);
                    card.appendChild(badge);
                    card.appendChild(nameLabel);
                    grid.appendChild(card);
                };
                reader.readAsDataURL(file);
            });
        } else {
            previewContainer.style.display = 'none';
        }
    }
</script>
@endpush
