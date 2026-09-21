@extends('admin.layout.app')

@section('title', 'Edit Product: ' . $product->name)

@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <div>
            <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">✏️ Edit Product</h2>
            <p style="color: var(--text-secondary); font-size: 13px;">Update product details, pricing, inventory, and manage photo gallery images.</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="btn btn--outline">
            ← Back to Products
        </a>
    </div>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
            {{-- Left Column: Main Details & Images --}}
            <div>
                {{-- Product Basic Information --}}
                <div class="card">
                    <div class="card__title" style="margin-bottom: 16px;">General Information</div>

                    <div class="form-group">
                        <label class="form-label">Product Name <span style="color: var(--red);">*</span></label>
                        <input type="text" name="name" class="form-input" value="{{ old('name', $product->name) }}" required>
                    </div>

                    <div class="grid grid--2">
                        <div class="form-group">
                            <label class="form-label">Category <span style="color: var(--red);">*</span></label>
                            <select name="category_id" class="form-input" required>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">SKU (Stock Keeping Unit)</label>
                            <input type="text" name="sku" class="form-input" value="{{ old('sku', $product->sku) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Slug (URL friendly)</label>
                        <input type="text" name="slug" class="form-input" value="{{ old('slug', $product->slug) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Short Summary</label>
                        <textarea name="short_description" class="form-textarea" rows="2">{{ old('short_description', $product->short_description) }}</textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Full Description & Benefits</label>
                        <textarea name="description" class="form-textarea" rows="5">{{ old('description', $product->description) }}</textarea>
                    </div>
                </div>

                {{-- Existing Gallery Images Card --}}
                <div class="card">
                    <div class="card__header">
                        <div>
                            <div class="card__title">🖼️ Current Product Gallery ({{ $product->images->count() }} Images)</div>
                            <div class="card__desc">Manage active images, designate the primary thumbnail, or remove outdated photos.</div>
                        </div>
                    </div>

                    @if($product->images->count() > 0)
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(130px, 1fr)); gap: 14px; margin-bottom: 20px;">
                            @foreach($product->images as $img)
                                <div style="position: relative; border-radius: 10px; overflow: hidden; border: 1.5px solid {{ $img->is_primary ? 'var(--accent)' : 'var(--border)' }}; background: rgba(0,0,0,0.3); padding: 6px;">
                                    <img src="{{ $img->url }}" alt="gallery" style="width: 100%; height: 95px; object-fit: cover; border-radius: 6px; display: block;">

                                    @if($img->is_primary)
                                        <div style="position: absolute; top: 10px; left: 10px; background: var(--accent); color: #fff; font-size: 9px; font-weight: 700; padding: 2px 6px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                                            ★ Primary
                                        </div>
                                    @endif

                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 8px; gap: 4px;">
                                        @if(!$img->is_primary)
                                            <button type="button" class="btn btn--outline btn--sm" style="font-size: 10px; padding: 3px 6px; flex: 1;"
                                                    onclick="document.getElementById('setPrimaryForm_{{ $img->id }}').submit();" title="Set as primary thumbnail">
                                                Set Primary
                                            </button>
                                        @else
                                            <span style="font-size: 10px; color: var(--accent); font-weight: 600; padding: 3px 0;">Primary</span>
                                        @endif

                                        <button type="button" class="btn btn--danger btn--sm" style="font-size: 10px; padding: 3px 6px;"
                                                onclick="if(confirm('Remove this image from product gallery?')) document.getElementById('deleteImgForm_{{ $img->id }}').submit();" title="Delete image">
                                            🗑️
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div style="padding: 20px; text-align: center; color: var(--text-muted); background: rgba(255,255,255,0.02); border-radius: 8px; margin-bottom: 20px;">
                            No gallery images uploaded yet. Upload images below.
                        </div>
                    @endif

                    {{-- Upload Additional Images Dropzone --}}
                    <div style="border-top: 1px solid var(--border); padding-top: 16px;">
                        <label class="form-label" style="font-weight: 700; margin-bottom: 8px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;">
                            <span>➕ Upload Additional Images to Gallery</span>
                            <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                Recommended: 278 &times; 278 px
                            </span>
                        </label>
                        <div style="border: 2px dashed rgba(108,99,255,0.35); border-radius: 12px; padding: 20px; text-align: center; background: rgba(108,99,255,0.03); cursor: pointer;"
                             onclick="document.getElementById('editMultiImageInput').click()">
                            <div style="font-size: 30px; margin-bottom: 4px;">📸</div>
                            <span style="font-size: 13px; color: #fff; font-weight: 600;">Click to Add More Images</span>
                            <div style="font-size: 11px; color: var(--text-muted); margin-top: 4px;">Recommended size for Best Selling / Catalog: <strong style="color: #4ecdc4;">278 &times; 278 px</strong></div>
                            <input type="file" name="images[]" id="editMultiImageInput" multiple accept="image/*" style="display: none;" onchange="accumulateEditFiles(this)">
                        </div>

                        <div id="editImagePreviewContainer" style="display: none; margin-top: 14px;">
                            <div style="font-size: 12px; font-weight: 700; color: var(--text-primary); margin-bottom: 8px;">
                                Newly Selected Files to Add (<span id="editSelectedCount">0</span>)
                            </div>
                            <div id="editPreviewGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(90px, 1fr)); gap: 10px;"></div>
                        </div>
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
                        <input type="number" step="0.01" min="0" name="price" class="form-input" value="{{ old('price', $product->price) }}" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Regular / Old Price (₹)</label>
                        <input type="number" step="0.01" min="0" name="old_price" class="form-input" value="{{ old('old_price', $product->old_price) }}">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Stock Quantity</label>
                        <input type="number" min="0" name="stock_quantity" class="form-input" value="{{ old('stock_quantity', $product->stock_quantity) }}">
                    </div>
                </div>

                {{-- Badges & Status Card --}}
                <div class="card">
                    <div class="card__title" style="margin-bottom: 16px;">Display & Badges</div>

                    <div class="form-group">
                        <label class="form-label">Product Badge</label>
                        <select name="badge" class="form-input">
                            <option value="" {{ old('badge', $product->badge) == '' ? 'selected' : '' }}>None</option>
                            <option value="Sale" {{ old('badge', $product->badge) == 'Sale' ? 'selected' : '' }}>Sale</option>
                            <option value="Hot" {{ old('badge', $product->badge) == 'Hot' ? 'selected' : '' }}>Hot</option>
                            <option value="New" {{ old('badge', $product->badge) == 'New' ? 'selected' : '' }}>New</option>
                            <option value="Popular" {{ old('badge', $product->badge) == 'Popular' ? 'selected' : '' }}>Popular</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Star Rating (1.0 to 5.0)</label>
                        <input type="number" step="0.1" min="1" max="5" name="rating" class="form-input" value="{{ old('rating', $product->rating) }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" class="form-input" value="{{ old('sort_order', $product->sort_order) }}">
                    </div>

                    <div style="padding-top: 6px; display: flex; flex-direction: column; gap: 12px;">
                        <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                            <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--accent);">
                            ⭐ Featured Product
                        </label>

                        <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                            <input type="checkbox" name="is_best_selling" value="1" {{ old('is_best_selling', $product->is_best_selling) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: #ff6b6b;">
                            🔥 Best Selling Product
                        </label>

                        <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--green);">
                            ● Active & Visible on Storefront
                        </label>
                    </div>

                    <div style="margin-top: 24px;">
                        <button type="submit" class="btn btn--success" style="width: 100%; padding: 12px; font-size: 14px;">
                            💾 Update Product Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Hidden Action Forms for Individual Gallery Image Controls --}}
    @foreach($product->images as $img)
        <form id="setPrimaryForm_{{ $img->id }}" action="{{ route('admin.products.images.primary', [$product->id, $img->id]) }}" method="POST" style="display: none;">
            @csrf
        </form>
        <form id="deleteImgForm_{{ $img->id }}" action="{{ route('admin.products.images.delete', $img->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach

@endsection

@push('scripts')
<script>
    // Use a DataTransfer to accumulate files across multiple picker sessions
    let editDT = new DataTransfer();

    function accumulateEditFiles(input) {
        // Merge newly picked files into the accumulator (skip exact-name duplicates)
        Array.from(input.files).forEach(file => {
            const alreadyExists = Array.from(editDT.files).some(
                f => f.name === file.name && f.size === file.size
            );
            if (!alreadyExists) {
                editDT.items.add(file);
            }
        });

        // Assign the accumulated FileList back to the input so it submits all files
        input.files = editDT.files;

        refreshEditPreviews(input);
    }

    function removeEditFile(index) {
        // Rebuild DataTransfer without the file at `index`
        const newDT = new DataTransfer();
        Array.from(editDT.files).forEach((f, i) => {
            if (i !== index) newDT.items.add(f);
        });
        editDT = newDT;

        const input = document.getElementById('editMultiImageInput');
        input.files = editDT.files;

        refreshEditPreviews(input);
    }

    function refreshEditPreviews(input) {
        const previewContainer = document.getElementById('editImagePreviewContainer');
        const grid             = document.getElementById('editPreviewGrid');
        const countSpan        = document.getElementById('editSelectedCount');

        grid.innerHTML = '';

        if (editDT.files.length > 0) {
            previewContainer.style.display = 'block';
            countSpan.textContent = editDT.files.length;

            Array.from(editDT.files).forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const card = document.createElement('div');
                    card.style.cssText = 'position: relative; border-radius: 6px; overflow: hidden; border: 1px solid var(--border); background: rgba(0,0,0,0.3);';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.cssText = 'width: 100%; height: 75px; object-fit: cover; display: block;';

                    // ✕ Remove button
                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.textContent = '✕';
                    removeBtn.title = 'Remove this file';
                    removeBtn.style.cssText = [
                        'position: absolute; top: 3px; right: 3px;',
                        'background: rgba(220,53,69,0.85); color: #fff;',
                        'border: none; border-radius: 50%; width: 18px; height: 18px;',
                        'font-size: 10px; line-height: 18px; text-align: center;',
                        'cursor: pointer; padding: 0;'
                    ].join('');
                    removeBtn.onclick = () => removeEditFile(index);

                    const nameLabel = document.createElement('div');
                    nameLabel.textContent = file.name;
                    nameLabel.style.cssText = 'font-size: 9px; color: var(--text-muted); padding: 3px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;';

                    card.appendChild(img);
                    card.appendChild(removeBtn);
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
