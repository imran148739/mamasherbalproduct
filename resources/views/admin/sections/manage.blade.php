@extends('admin.layout.app')

@section('title', 'Manage: ' . $config['name'])

@section('content')

    {{-- Section Top Header & Summary Card --}}
    <div class="card" style="background: linear-gradient(135deg, rgba(30,30,66,0.9), rgba(26,26,62,0.95)); border: 1px solid rgba(108,99,255,0.25);">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="font-size: 38px; width: 60px; height: 60px; background: rgba(108,99,255,0.15); border: 1px solid rgba(108,99,255,0.3); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    {{ $config['icon'] }}
                </div>
                <div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">{{ $config['name'] }}</h2>
                    <p style="color: var(--text-secondary); font-size: 13px; max-width: 600px;">{{ $config['description'] }}</p>
                    @if($section === 'hero_slider' || isset($config['image_size']))
                        <div style="margin-top: 6px;">
                            <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 3px 10px; border-radius: 6px; font-weight: 700;">
                                📐 Recommended Slide Image Size: {{ $config['image_size'] ?? '1521 × 515 px' }}
                            </span>
                        </div>
                    @elseif($section === 'best_selling')
                        <div style="margin-top: 6px;">
                            <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 3px 10px; border-radius: 6px; font-weight: 700;">
                                📐 Recommended Product Image Size: 278 &times; 278 px
                            </span>
                        </div>
                    @endif
                </div>
            </div>
            <div style="display: flex; gap: 12px; align-items: center;">
                <button type="button" class="btn btn--primary" onclick="openAddModal()">
                    ➕ Add New {{ $config['singular'] }}
                </button>
            </div>
        </div>
    </div>

    {{-- Section Title & Subtitle Settings (if section has meta) --}}
    @if($config['has_meta'] && isset($config['meta_fields']))
        <div class="card" style="margin-bottom: 24px;">
            <div class="card__header">
                <div>
                    <div class="card__title">⚙️ Section Headings & Meta</div>
                    <div class="card__desc">Change the public section heading and subtitle displayed on the homepage.</div>
                </div>
            </div>
            <form action="{{ route('admin.sections.meta.update', $section) }}" method="POST">
                @csrf
                <div class="grid grid--2">
                    @foreach($config['meta_fields'] as $metaKey => $metaInfo)
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">{{ $metaInfo['label'] }}</label>
                            <input type="text" name="{{ $metaKey }}" class="form-input"
                                   value="{{ $metaValues[$metaKey] ?? $metaInfo['default'] }}"
                                   placeholder="{{ $metaInfo['default'] }}">
                        </div>
                    @endforeach
                </div>
                <div style="margin-top: 16px; display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn btn--outline" style="font-size: 12px; padding: 7px 16px;">
                        💾 Save Section Headings
                    </button>
                </div>
            </form>
        </div>
    @endif

    {{-- DataTable Card --}}
    <div class="card">
        <div class="card__header">
            <div>
                <div class="card__title">{{ $config['name'] }} — Items Table ({{ count($items) }})</div>
                <div class="card__desc">Manage all dynamic items, sort order, and visibility. Changes update live on the storefront.</div>
            </div>
            <button type="button" class="btn btn--success btn--sm" onclick="openAddModal()">
                + New {{ $config['singular'] }}
            </button>
        </div>

        <div style="overflow-x: auto;">
            <table id="sectionDataTable" class="dataTable hover stripe">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 80px;">Image</th>
                        @if(isset($config['fields']['secondary_image']))
                            <th style="width: 80px;">Hover Img</th>
                        @endif
                        <th>Title / Name</th>
                        @if(isset($config['fields']['subtitle']))
                            <th>Subtitle / Role</th>
                        @endif
                        @if(isset($config['fields']['price']))
                            <th>Price</th>
                        @endif
                        @if(isset($config['fields']['badge']))
                            <th>Badge</th>
                        @endif
                        @if(isset($config['fields']['rating']))
                            <th>Rating</th>
                        @endif
                        @if(isset($config['fields']['button_url']))
                            <th>Link URL</th>
                        @endif
                        <th style="width: 60px;">Order</th>
                        <th style="width: 80px;">Status</th>
                        <th style="width: 130px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $index => $item)
                        <tr>
                            <td style="color: var(--text-muted); font-weight: 600;">{{ $index + 1 }}</td>
                            
                            {{-- Primary Image --}}
                            <td>
                                @if($item->image)
                                    <img src="{{ asset($item->image) }}" class="table-thumb" alt="thumb">
                                @else
                                    <span style="color: var(--text-muted); font-size: 11px;">No image</span>
                                @endif
                            </td>

                            {{-- Secondary Image --}}
                            @if(isset($config['fields']['secondary_image']))
                                <td>
                                    @if($item->secondary_image)
                                        <img src="{{ asset($item->secondary_image) }}" class="table-thumb" alt="hover thumb">
                                    @else
                                        <span style="color: var(--text-muted); font-size: 11px;">—</span>
                                    @endif
                                </td>
                            @endif

                            {{-- Title / Name --}}
                            <td>
                                <strong style="color: #fff; font-size: 14px;">{{ $item->title ?? '—' }}</strong>
                                @if($item->product_id && $item->product)
                                    <div style="margin-top: 4px;">
                                        <span style="display:inline-flex;align-items:center;gap:4px;background:rgba(78,205,196,0.12);border:1px solid rgba(78,205,196,0.35);color:#4ecdc4;font-size:10px;font-weight:700;padding:2px 7px;border-radius:20px;letter-spacing:.4px;">📦 MASTER: {{ $item->product->name }}</span>
                                    </div>
                                @endif
                                @if($item->description)
                                    <div style="font-size: 11px; color: var(--text-muted); max-width: 260px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; margin-top: 2px;">
                                        {{ $item->description }}
                                    </div>
                                @endif
                            </td>

                            {{-- Subtitle / Role --}}
                            @if(isset($config['fields']['subtitle']))
                                <td>
                                    <span style="color: var(--text-secondary); font-size: 12px;">{{ $item->subtitle ?? '—' }}</span>
                                </td>
                            @endif

                            {{-- Price & Old Price --}}
                            @if(isset($config['fields']['price']))
                                <td>
                                    <strong style="color: var(--green);">{{ $item->price ?? '—' }}</strong>
                                    @if($item->old_price)
                                        <div style="font-size: 11px; color: var(--text-muted); text-decoration: line-through;">{{ $item->old_price }}</div>
                                    @endif
                                </td>
                            @endif

                            {{-- Badge --}}
                            @if(isset($config['fields']['badge']))
                                <td>
                                    @if($item->badge)
                                        <span class="badge badge--tag">{{ $item->badge }}</span>
                                    @else
                                        <span style="color: var(--text-muted); font-size: 11px;">—</span>
                                    @endif
                                </td>
                            @endif

                            {{-- Rating --}}
                            @if(isset($config['fields']['rating']))
                                <td>
                                    <span style="color: #ffd166; font-size: 12px;">
                                        @for($i = 1; $i <= 5; $i++)
                                            {{ $i <= $item->rating ? '★' : '☆' }}
                                        @endfor
                                    </span>
                                </td>
                            @endif

                            {{-- Link URL --}}
                            @if(isset($config['fields']['button_url']))
                                <td>
                                    @if($item->button_url)
                                        <a href="{{ $item->button_url }}" target="_blank" style="color: var(--accent); font-size: 12px; text-decoration: none;">
                                            Open ↗
                                        </a>
                                    @else
                                        <span style="color: var(--text-muted); font-size: 11px;">—</span>
                                    @endif
                                </td>
                            @endif

                            {{-- Sort Order --}}
                            <td>
                                <span style="font-weight: 600; font-size: 12px;">{{ $item->sort_order }}</span>
                            </td>

                            {{-- Status Toggle --}}
                            <td>
                                <form action="{{ route('admin.sections.items.toggle', [$section, $item->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; cursor: pointer; padding: 0;">
                                        @if($item->is_active)
                                            <span class="badge badge--active">Active</span>
                                        @else
                                            <span class="badge badge--inactive">Hidden</span>
                                        @endif
                                    </button>
                                </form>
                            </td>

                            {{-- Actions --}}
                            <td style="text-align: right; white-space: nowrap;">
                                <button type="button" class="btn btn--outline btn--sm"
                                        onclick='openEditModal(@json($item))'
                                        style="margin-right: 4px;">
                                    ✏️ Edit
                                </button>
                                
                                <form action="{{ route('admin.sections.items.destroy', [$section, $item->id]) }}" 
                                      method="POST" 
                                      style="display: inline;" 
                                      onsubmit="return confirm('Are you sure you want to delete this {{ $config['singular'] }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn--danger btn--sm">
                                        🗑️
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- ════════════════════ ADD ITEM MODAL ════════════════════ --}}
    <div class="modal-backdrop" id="addModal">
        <div class="modal-box">
            <div class="modal-header">
                <h3>➕ Add New {{ $config['singular'] }}</h3>
                <button type="button" class="modal-close" onclick="closeAddModal()">&times;</button>
            </div>
            <form action="{{ route('admin.sections.items.store', $section) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    {{-- Master Product Selector (always visible for product sections) --}}
                    @if($supportsProductLink)
                        <div class="form-group" style="background:rgba(78,205,196,0.06);border:1px solid rgba(78,205,196,0.25);border-radius:10px;padding:14px 16px 12px;margin-bottom:18px;">
                            <label class="form-label" style="color:#4ecdc4;font-size:12px;letter-spacing:.5px;margin-bottom:8px;display:flex;align-items:center;gap:6px;">
                                📦 SELECT FROM PRODUCT MASTER
                                <span style="font-weight:400;color:var(--text-muted);font-size:11px;">(optional — auto-fills all fields below)</span>
                            </label>
                            @if(!empty($masterProducts) && count($masterProducts))
                                {{-- Searchable Combobox for Add Modal --}}
                                <div class="searchable-combobox-wrap" id="combobox_wrap_add" style="position: relative;">
                                    <div id="combobox_trigger_add"
                                         class="form-select"
                                         onclick="toggleMasterCombobox('add')"
                                         style="cursor: pointer; display: flex; align-items: center; justify-content: space-between; padding: 10px 14px; user-select: none; background: #141733; border: 1px solid rgba(78,205,196,0.3); border-radius: 8px;">
                                        <span id="combobox_label_add" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-size: 13px; color: var(--text-muted);">
                                            — Choose a product from master catalog —
                                        </span>
                                        <span style="font-size: 11px; color: #4ecdc4; margin-left: 8px; flex-shrink: 0;">▼</span>
                                    </div>

                                    <div id="combobox_dropdown_add"
                                         class="master-combobox-dropdown"
                                         style="display: none; position: absolute; top: calc(100% + 5px); left: 0; right: 0; background: #131738; border: 1px solid rgba(78,205,196,0.4); border-radius: 10px; box-shadow: 0 12px 35px rgba(0,0,0,0.65); z-index: 1100; overflow: hidden;">
                                        <div style="padding: 10px 12px; background: #0f122c; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                            <div style="position: relative;">
                                                <input type="text"
                                                       id="combobox_search_add"
                                                       class="form-input"
                                                       placeholder="🔍 Search by product name, category, price..."
                                                       oninput="filterMasterCombobox('add', this.value)"
                                                       style="padding-left: 32px; font-size: 12.5px; height: 36px; background: #1a1f48; color: #fff; border: 1px solid rgba(78,205,196,0.35); border-radius: 6px; width: 100%;">
                                                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 12px; opacity: 0.6; pointer-events: none;">🔍</span>
                                            </div>
                                        </div>

                                        <div id="combobox_list_add" style="max-height: 220px; overflow-y: auto; padding: 6px;">
                                            <div class="combobox-item"
                                                 onclick="selectMasterProduct('add', '', '— Choose a product from master catalog —')"
                                                 style="padding: 8px 12px; border-radius: 6px; cursor: pointer; font-size: 12.5px; color: var(--text-muted); transition: background 0.15s;"
                                                 onmouseover="this.style.background='rgba(255,255,255,0.06)'"
                                                 onmouseout="this.style.background='transparent'">
                                                — None / Clear selection —
                                            </div>
                                            @foreach($masterProducts as $mp)
                                                <div class="combobox-item master-opt-item"
                                                     data-search="{{ strtolower(($mp->category->name ?? '') . ' ' . $mp->name . ' ' . $mp->formatted_price . ' ' . ($mp->badge ?? '')) }}"
                                                     onclick="selectMasterProduct('add', '{{ $mp->id }}', '{{ addslashes(($mp->category->name ?? 'Uncategorized') . ' › ' . $mp->name) }}')"
                                                     style="display: flex; align-items: center; justify-content: space-between; padding: 8px 12px; border-radius: 6px; cursor: pointer; font-size: 12.5px; color: #fff; margin-bottom: 2px; transition: background 0.15s;"
                                                     onmouseover="this.style.background='rgba(78,205,196,0.15)'"
                                                     onmouseout="this.style.background='transparent'">
                                                    <div style="display: flex; align-items: center; gap: 10px; overflow: hidden;">
                                                        @if($mp->primary_image_url)
                                                            <img src="{{ $mp->primary_image_url }}" alt="" style="width: 26px; height: 26px; object-fit: contain; border-radius: 4px; background: #fff; padding: 2px; flex-shrink: 0;">
                                                        @else
                                                            <span style="font-size: 15px; flex-shrink: 0;">📦</span>
                                                        @endif
                                                        <div style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                            <span style="font-size: 11px; color: #4ecdc4; background: rgba(78,205,196,0.12); padding: 2px 6px; border-radius: 4px; margin-right: 6px; font-weight: 500;">
                                                                {{ $mp->category->name ?? 'Uncategorized' }}
                                                            </span>
                                                            <span style="font-weight: 600;">{{ $mp->name }}</span>
                                                        </div>
                                                    </div>
                                                    <span style="color: #ffd166; font-size: 12px; font-weight: 600; margin-left: 10px; flex-shrink: 0;">
                                                        {{ $mp->formatted_price }}
                                                    </span>
                                                </div>
                                            @endforeach
                                            <div id="combobox_empty_add" style="display: none; padding: 14px; text-align: center; color: var(--text-muted); font-size: 12px;">
                                                No matching products found.
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Underlying native select --}}
                                    <select name="product_id" id="add_master_product_select" style="display: none;" onchange="autoFillFromMaster(this, 'add')">
                                        <option value="">— Choose a product from master catalog —</option>
                                        @foreach($masterProducts as $mp)
                                            <option value="{{ $mp->id }}"
                                                data-name="{{ $mp->name }}"
                                                data-price="{{ $mp->formatted_price }}"
                                                data-old-price="{{ $mp->formatted_old_price ?? '' }}"
                                                data-badge="{{ $mp->badge ?? '' }}"
                                                data-rating="{{ (int)($mp->rating ?? 5) }}"
                                                data-primary-img="{{ $mp->primary_image_url }}"
                                                data-secondary-img="{{ $mp->secondary_image_url ?? '' }}"
                                                data-category="{{ $mp->category->name ?? '' }}"
                                            >{{ $mp->category->name ?? 'Uncategorized' }} &rsaquo; {{ $mp->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small style="color:var(--text-muted);font-size:11px;margin-top:6px;display:block;">🔄 Selecting a product auto-fills the title, price, badge, rating &amp; images below. You can still override any field manually.</small>
                            @else
                                <div style="display:flex;align-items:center;gap:10px;padding:10px 12px;background:rgba(255,200,100,0.08);border:1px dashed rgba(255,200,100,0.3);border-radius:8px;">
                                    <span style="font-size:18px;">⚠️</span>
                                    <div>
                                        <div style="color:#ffd166;font-size:12px;font-weight:700;">No active products found in master catalog.</div>
                                        <div style="color:var(--text-muted);font-size:11px;margin-top:2px;">Please <a href="{{ route('admin.products.create') }}" style="color:#4ecdc4;text-decoration:underline;" target="_blank">add products</a> first, then come back to link them here.</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Primary Image --}}
                    @if(isset($config['fields']['image']))
                        <div class="form-group" id="add_image_group">
                            <label class="form-label" id="add_image_label" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 6px;">
                                <span>{{ $config['fields']['image']['label'] }} <span style="color: var(--red);" id="add_image_required_star">*</span></span>
                                @if($section === 'hero_slider')
                                    <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                        Recommended: 1521 &times; 515 px
                                    </span>
                                @elseif($section === 'best_selling')
                                    <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                        Recommended: 278 &times; 278 px
                                    </span>
                                @endif
                            </label>
                            <div id="add_image_preview_wrap" style="display:none;margin-bottom:8px;">
                                <img id="add_image_preview" src="" style="width:70px;height:70px;object-fit:cover;border-radius:8px;border:2px solid rgba(78,205,196,0.4);" alt="Preview">
                                <span style="font-size:11px;color:#4ecdc4;margin-left:8px;">From Master Catalog</span>
                            </div>
                            <input type="file" name="image" id="add_image_input" class="form-input" accept="image/*">
                            <small style="color: var(--text-muted); font-size: 11px; display: block; margin-top: 4px;">
                                PNG, JPG, WEBP up to 25MB
                                @if($section === 'hero_slider')
                                    &bull; <strong style="color: #4ecdc4;">Recommended size: 1521 &times; 515 px</strong>
                                @elseif($section === 'best_selling')
                                    &bull; <strong style="color: #4ecdc4;">Recommended size: 278 &times; 278 px</strong>
                                @endif
                            </small>
                        </div>
                    @endif

                    {{-- Secondary Image (e.g. Product hover) --}}
                    @if(isset($config['fields']['secondary_image']))
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 6px;">
                                <span>{{ $config['fields']['secondary_image']['label'] }} (Optional)</span>
                                @if($section === 'best_selling')
                                    <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                        Recommended: 278 &times; 278 px
                                    </span>
                                @endif
                            </label>
                            <input type="file" name="secondary_image" class="form-input" accept="image/*">
                            <small style="color: var(--text-muted); font-size: 11px; display: block; margin-top: 4px;">
                                Displayed on product hover (up to 25MB)
                                @if($section === 'best_selling')
                                    &bull; <strong style="color: #4ecdc4;">Recommended size: 278 &times; 278 px</strong>
                                @endif
                            </small>
                        </div>
                    @endif

                    {{-- Title / Name --}}
                    @if(isset($config['fields']['title']))
                        <div class="form-group">
                            <label class="form-label">{{ $config['fields']['title']['label'] }} @if($config['fields']['title']['required'] ?? false)<span style="color: var(--red);">*</span>@endif</label>
                            <input type="text" name="title" id="add_title" class="form-input" placeholder="{{ $config['fields']['title']['placeholder'] ?? '' }}" @if($config['fields']['title']['required'] ?? false) required @endif>
                        </div>
                    @endif

                    {{-- Subtitle / Role --}}
                    @if(isset($config['fields']['subtitle']))
                        <div class="form-group">
                            <label class="form-label">{{ $config['fields']['subtitle']['label'] }}</label>
                            <input type="text" name="subtitle" class="form-input" placeholder="{{ $config['fields']['subtitle']['placeholder'] ?? '' }}">
                        </div>
                    @endif

                    {{-- Description / Review --}}
                    @if(isset($config['fields']['description']))
                        <div class="form-group">
                            <label class="form-label">{{ $config['fields']['description']['label'] }}</label>
                            <textarea name="description" class="form-textarea" placeholder="{{ $config['fields']['description']['placeholder'] ?? '' }}"></textarea>
                        </div>
                    @endif

                    {{-- Price & Old Price Row --}}
                    @if(isset($config['fields']['price']))
                        <div class="grid grid--2">
                            <div class="form-group">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" id="add_price" class="form-input" placeholder="₹38.00">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Old Price</label>
                                <input type="text" name="old_price" id="add_old_price" class="form-input" placeholder="₹40.00">
                            </div>
                        </div>
                    @endif

                    {{-- Badge & Rating Row --}}
                    @if(isset($config['fields']['badge']) || isset($config['fields']['rating']))
                        <div class="grid grid--2">
                            @if(isset($config['fields']['badge']))
                                <div class="form-group">
                                    <label class="form-label">Badge Tag</label>
                                    <input type="text" name="badge" id="add_badge" class="form-input" placeholder="Sale, Hot, New...">
                                </div>
                            @endif
                            @if(isset($config['fields']['rating']))
                                <div class="form-group">
                                    <label class="form-label">Rating (1 to 5 Stars)</label>
                                    <select name="rating" id="add_rating" class="form-select">
                                        <option value="5" selected>★★★★★ (5 Stars)</option>
                                        <option value="4">★★★★☆ (4 Stars)</option>
                                        <option value="3">★★★☆☆ (3 Stars)</option>
                                        <option value="2">★★☆☆☆ (2 Stars)</option>
                                        <option value="1">★☆☆☆☆ (1 Star)</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Button Text & URL Row --}}
                    @if(isset($config['fields']['button_text']) || isset($config['fields']['button_url']))
                        <div class="grid grid--2">
                            @if(isset($config['fields']['button_text']))
                                <div class="form-group">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="button_text" class="form-input" placeholder="Shop Now">
                                </div>
                            @endif
                            @if(isset($config['fields']['button_url']))
                                <div class="form-group">
                                    <label class="form-label">Link / Target URL</label>
                                    <input type="text" name="button_url" class="form-input" placeholder="#">
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Sort Order & Active --}}
                    <div class="grid grid--2" style="align-items: center;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Sort Order (Lowest first)</label>
                            <input type="number" name="sort_order" class="form-input" value="0">
                        </div>
                        <div style="padding-top: 18px;">
                            <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                                <input type="checkbox" name="is_active" value="1" checked style="width: 18px; height: 18px; accent-color: var(--accent);">
                                Visible on Storefront
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--outline" onclick="closeAddModal()">Cancel</button>
                    <button type="submit" class="btn btn--primary">💾 Save {{ $config['singular'] }}</button>
                </div>
            </form>
        </div>
    </div>

    {{-- ════════════════════ EDIT ITEM MODAL ════════════════════ --}}
    <div class="modal-backdrop" id="editModal">
        <div class="modal-box">
            <div class="modal-header">
                <h3>✏️ Edit {{ $config['singular'] }}</h3>
                <button type="button" class="modal-close" onclick="closeEditModal()">&times;</button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    {{-- Master Product Selector (always visible for product sections) --}}
                    @if($supportsProductLink)
                        <div class="form-group" style="background:rgba(78,205,196,0.06);border:1px solid rgba(78,205,196,0.25);border-radius:10px;padding:14px 16px 12px;margin-bottom:18px;">
                            <label class="form-label" style="color:#4ecdc4;font-size:12px;letter-spacing:.5px;margin-bottom:8px;display:flex;align-items:center;gap:6px;">
                                📦 SELECT FROM PRODUCT MASTER
                                <span style="font-weight:400;color:var(--text-muted);font-size:11px;">(optional — auto-fills all fields below)</span>
                            </label>
                            @if(!empty($masterProducts) && count($masterProducts))
                                {{-- Searchable Combobox for Edit Modal --}}
                                <div class="searchable-combobox-wrap" id="combobox_wrap_edit" style="position: relative;">
                                    <div id="combobox_trigger_edit"
                                         class="form-select"
                                         onclick="toggleMasterCombobox('edit')"
                                         style="cursor: pointer; display: flex; align-items: center; justify-content: space-between; padding: 10px 14px; user-select: none; background: #141733; border: 1px solid rgba(78,205,196,0.3); border-radius: 8px;">
                                        <span id="combobox_label_edit" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-size: 13px; color: var(--text-muted);">
                                            — Choose a product from master catalog —
                                        </span>
                                        <span style="font-size: 11px; color: #4ecdc4; margin-left: 8px; flex-shrink: 0;">▼</span>
                                    </div>

                                    <div id="combobox_dropdown_edit"
                                         class="master-combobox-dropdown"
                                         style="display: none; position: absolute; top: calc(100% + 5px); left: 0; right: 0; background: #131738; border: 1px solid rgba(78,205,196,0.4); border-radius: 10px; box-shadow: 0 12px 35px rgba(0,0,0,0.65); z-index: 1100; overflow: hidden;">
                                        <div style="padding: 10px 12px; background: #0f122c; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                            <div style="position: relative;">
                                                <input type="text"
                                                       id="combobox_search_edit"
                                                       class="form-input"
                                                       placeholder="🔍 Search by product name, category, price..."
                                                       oninput="filterMasterCombobox('edit', this.value)"
                                                       style="padding-left: 32px; font-size: 12.5px; height: 36px; background: #1a1f48; color: #fff; border: 1px solid rgba(78,205,196,0.35); border-radius: 6px; width: 100%;">
                                                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 12px; opacity: 0.6; pointer-events: none;">🔍</span>
                                            </div>
                                        </div>

                                        <div id="combobox_list_edit" style="max-height: 220px; overflow-y: auto; padding: 6px;">
                                            <div class="combobox-item"
                                                 onclick="selectMasterProduct('edit', '', '— Choose a product from master catalog —')"
                                                 style="padding: 8px 12px; border-radius: 6px; cursor: pointer; font-size: 12.5px; color: var(--text-muted); transition: background 0.15s;"
                                                 onmouseover="this.style.background='rgba(255,255,255,0.06)'"
                                                 onmouseout="this.style.background='transparent'">
                                                — None / Clear selection —
                                            </div>
                                            @foreach($masterProducts as $mp)
                                                <div class="combobox-item master-opt-item"
                                                     data-search="{{ strtolower(($mp->category->name ?? '') . ' ' . $mp->name . ' ' . $mp->formatted_price . ' ' . ($mp->badge ?? '')) }}"
                                                     onclick="selectMasterProduct('edit', '{{ $mp->id }}', '{{ addslashes(($mp->category->name ?? 'Uncategorized') . ' › ' . $mp->name) }}')"
                                                     style="display: flex; align-items: center; justify-content: space-between; padding: 8px 12px; border-radius: 6px; cursor: pointer; font-size: 12.5px; color: #fff; margin-bottom: 2px; transition: background 0.15s;"
                                                     onmouseover="this.style.background='rgba(78,205,196,0.15)'"
                                                     onmouseout="this.style.background='transparent'">
                                                    <div style="display: flex; align-items: center; gap: 10px; overflow: hidden;">
                                                        @if($mp->primary_image_url)
                                                            <img src="{{ $mp->primary_image_url }}" alt="" style="width: 26px; height: 26px; object-fit: contain; border-radius: 4px; background: #fff; padding: 2px; flex-shrink: 0;">
                                                        @else
                                                            <span style="font-size: 15px; flex-shrink: 0;">📦</span>
                                                        @endif
                                                        <div style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                            <span style="font-size: 11px; color: #4ecdc4; background: rgba(78,205,196,0.12); padding: 2px 6px; border-radius: 4px; margin-right: 6px; font-weight: 500;">
                                                                {{ $mp->category->name ?? 'Uncategorized' }}
                                                            </span>
                                                            <span style="font-weight: 600;">{{ $mp->name }}</span>
                                                        </div>
                                                    </div>
                                                    <span style="color: #ffd166; font-size: 12px; font-weight: 600; margin-left: 10px; flex-shrink: 0;">
                                                        {{ $mp->formatted_price }}
                                                    </span>
                                                </div>
                                            @endforeach
                                            <div id="combobox_empty_edit" style="display: none; padding: 14px; text-align: center; color: var(--text-muted); font-size: 12px;">
                                                No matching products found.
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Underlying native select --}}
                                    <select name="product_id" id="edit_master_product_select" style="display: none;" onchange="autoFillFromMaster(this, 'edit')">
                                        <option value="">— Choose a product from master catalog —</option>
                                        @foreach($masterProducts as $mp)
                                            <option value="{{ $mp->id }}"
                                                data-name="{{ $mp->name }}"
                                                data-price="{{ $mp->formatted_price }}"
                                                data-old-price="{{ $mp->formatted_old_price ?? '' }}"
                                                data-badge="{{ $mp->badge ?? '' }}"
                                                data-rating="{{ (int)($mp->rating ?? 5) }}"
                                                data-primary-img="{{ $mp->primary_image_url }}"
                                                data-secondary-img="{{ $mp->secondary_image_url ?? '' }}"
                                                data-category="{{ $mp->category->name ?? '' }}"
                                            >{{ $mp->category->name ?? 'Uncategorized' }} &rsaquo; {{ $mp->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small style="color:var(--text-muted);font-size:11px;margin-top:6px;display:block;">🔄 Selecting a product auto-fills the title, price, badge, rating &amp; images below. You can still override any field manually.</small>
                            @else
                                <div style="display:flex;align-items:center;gap:10px;padding:10px 12px;background:rgba(255,200,100,0.08);border:1px dashed rgba(255,200,100,0.3);border-radius:8px;">
                                    <span style="font-size:18px;">⚠️</span>
                                    <div>
                                        <div style="color:#ffd166;font-size:12px;font-weight:700;">No active products found in master catalog.</div>
                                        <div style="color:var(--text-muted);font-size:11px;margin-top:2px;">Please <a href="{{ route('admin.products.create') }}" style="color:#4ecdc4;text-decoration:underline;" target="_blank">add products</a> first, then come back to link them here.</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Primary Image --}}
                    @if(isset($config['fields']['image']))
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 6px;">
                                <span>{{ $config['fields']['image']['label'] }}</span>
                                @if($section === 'hero_slider')
                                    <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                        Recommended: 1521 &times; 515 px
                                    </span>
                                @elseif($section === 'best_selling')
                                    <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                        Recommended: 278 &times; 278 px
                                    </span>
                                @endif
                            </label>
                            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 8px;">
                                <img id="editImagePreview" src="" class="table-thumb" style="width: 60px; height: 60px;" alt="Current Image">
                                <div style="flex: 1;">
                                    <input type="file" name="image" class="form-input" accept="image/*">
                                    <small style="color: var(--text-muted); font-size: 11px; display: block; margin-top: 4px;">
                                        PNG, JPG, WEBP up to 25MB. Leave empty to keep current image
                                        @if($section === 'hero_slider')
                                            &bull; <strong style="color: #4ecdc4;">Recommended size: 1521 &times; 515 px</strong>
                                        @elseif($section === 'best_selling')
                                            &bull; <strong style="color: #4ecdc4;">Recommended size: 278 &times; 278 px</strong>
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Secondary Image --}}
                    @if(isset($config['fields']['secondary_image']))
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 6px;">
                                <span>{{ $config['fields']['secondary_image']['label'] }}</span>
                                @if($section === 'best_selling')
                                    <span class="badge" style="background: rgba(78, 205, 196, 0.15); color: #4ecdc4; border: 1px solid rgba(78, 205, 196, 0.35); font-size: 11px; padding: 2px 8px; border-radius: 4px; font-weight: 600;">
                                        Recommended: 278 &times; 278 px
                                    </span>
                                @endif
                            </label>
                            <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 8px;">
                                <img id="editSecondaryImagePreview" src="" class="table-thumb" style="width: 60px; height: 60px;" alt="Secondary Image">
                                <div style="flex: 1;">
                                    <input type="file" name="secondary_image" class="form-input" accept="image/*">
                                    <small style="color: var(--text-muted); font-size: 11px; display: block; margin-top: 4px;">
                                        PNG, JPG, WEBP up to 25MB. Leave empty to keep current image
                                        @if($section === 'best_selling')
                                            &bull; <strong style="color: #4ecdc4;">Recommended size: 278 &times; 278 px</strong>
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Title / Name --}}
                    @if(isset($config['fields']['title']))
                        <div class="form-group">
                            <label class="form-label">{{ $config['fields']['title']['label'] }} @if($config['fields']['title']['required'] ?? false)<span style="color: var(--red);">*</span>@endif</label>
                            <input type="text" name="title" id="edit_title" class="form-input" @if($config['fields']['title']['required'] ?? false) required @endif>
                        </div>
                    @endif

                    {{-- Subtitle / Role --}}
                    @if(isset($config['fields']['subtitle']))
                        <div class="form-group">
                            <label class="form-label">{{ $config['fields']['subtitle']['label'] }}</label>
                            <input type="text" name="subtitle" id="edit_subtitle" class="form-input">
                        </div>
                    @endif

                    {{-- Description / Review --}}
                    @if(isset($config['fields']['description']))
                        <div class="form-group">
                            <label class="form-label">{{ $config['fields']['description']['label'] }}</label>
                            <textarea name="description" id="edit_description" class="form-textarea"></textarea>
                        </div>
                    @endif

                    {{-- Price & Old Price --}}
                    @if(isset($config['fields']['price']))
                        <div class="grid grid--2">
                            <div class="form-group">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" id="edit_price" class="form-input">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Old Price</label>
                                <input type="text" name="old_price" id="edit_old_price" class="form-input">
                            </div>
                        </div>
                    @endif

                    {{-- Badge & Rating --}}
                    @if(isset($config['fields']['badge']) || isset($config['fields']['rating']))
                        <div class="grid grid--2">
                            @if(isset($config['fields']['badge']))
                                <div class="form-group">
                                    <label class="form-label">Badge Tag</label>
                                    <input type="text" name="badge" id="edit_badge" class="form-input">
                                </div>
                            @endif
                            @if(isset($config['fields']['rating']))
                                <div class="form-group">
                                    <label class="form-label">Rating (1 to 5 Stars)</label>
                                    <select name="rating" id="edit_rating" class="form-select">
                                        <option value="5">★★★★★ (5 Stars)</option>
                                        <option value="4">★★★★☆ (4 Stars)</option>
                                        <option value="3">★★★☆☆ (3 Stars)</option>
                                        <option value="2">★★☆☆☆ (2 Stars)</option>
                                        <option value="1">★☆☆☆☆ (1 Star)</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Button Text & URL --}}
                    @if(isset($config['fields']['button_text']) || isset($config['fields']['button_url']))
                        <div class="grid grid--2">
                            @if(isset($config['fields']['button_text']))
                                <div class="form-group">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="button_text" id="edit_button_text" class="form-input">
                                </div>
                            @endif
                            @if(isset($config['fields']['button_url']))
                                <div class="form-group">
                                    <label class="form-label">Link / Target URL</label>
                                    <input type="text" name="button_url" id="edit_button_url" class="form-input">
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- Sort Order & Active --}}
                    <div class="grid grid--2" style="align-items: center;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" id="edit_sort_order" class="form-input">
                        </div>
                        <div style="padding-top: 18px;">
                            <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                                <input type="checkbox" name="is_active" id="edit_is_active" value="1" style="width: 18px; height: 18px; accent-color: var(--accent);">
                                Visible on Storefront
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--outline" onclick="closeEditModal()">Cancel</button>
                    <button type="submit" class="btn btn--success">💾 Update {{ $config['singular'] }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#sectionDataTable').DataTable({
            pageLength: 10,
            responsive: true,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search items...",
                lengthMenu: "Show _MENU_ entries",
                info: "Showing _START_ to _END_ of _TOTAL_ items",
                paginate: {
                    previous: "‹",
                    next: "›"
                }
            }
        });
    });

    // ════════════════════ SEARCHABLE PRODUCT MASTER COMBOBOX ════════════════════
    function toggleMasterCombobox(mode) {
        const dropdown = document.getElementById('combobox_dropdown_' + mode);
        if (!dropdown) return;
        const isVisible = dropdown.style.display === 'block';

        // Close any other open combobox dropdown
        const otherMode = mode === 'add' ? 'edit' : 'add';
        const otherDropdown = document.getElementById('combobox_dropdown_' + otherMode);
        if (otherDropdown) otherDropdown.style.display = 'none';

        if (isVisible) {
            dropdown.style.display = 'none';
        } else {
            dropdown.style.display = 'block';
            // Clear search and focus input
            const searchInput = document.getElementById('combobox_search_' + mode);
            if (searchInput) {
                searchInput.value = '';
                filterMasterCombobox(mode, '');
                setTimeout(() => searchInput.focus(), 50);
            }
        }
    }

    function filterMasterCombobox(mode, query) {
        const q = (query || '').trim().toLowerCase();
        const dropdown = document.getElementById('combobox_dropdown_' + mode);
        if (!dropdown) return;
        const items = dropdown.querySelectorAll('.master-opt-item');
        let visibleCount = 0;

        items.forEach(function(item) {
            const searchData = (item.getAttribute('data-search') || '').toLowerCase();
            if (!q || searchData.indexOf(q) !== -1) {
                item.style.display = 'flex';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        const emptyMsg = document.getElementById('combobox_empty_' + mode);
        if (emptyMsg) {
            emptyMsg.style.display = (visibleCount === 0 && q !== '') ? 'block' : 'none';
        }
    }

    function selectMasterProduct(mode, productId, labelText) {
        const selectEl = document.getElementById(mode + '_master_product_select');
        const labelEl = document.getElementById('combobox_label_' + mode);
        const dropdown = document.getElementById('combobox_dropdown_' + mode);

        if (selectEl) {
            selectEl.value = productId;
            autoFillFromMaster(selectEl, mode);
        }

        if (labelEl) {
            labelEl.textContent = labelText;
            if (productId) {
                labelEl.style.color = '#fff';
                labelEl.style.fontWeight = '600';
            } else {
                labelEl.style.color = 'var(--text-muted)';
                labelEl.style.fontWeight = 'normal';
            }
        }

        if (dropdown) {
            dropdown.style.display = 'none';
        }
    }

    function syncMasterCombobox(mode, productId) {
        const selectEl = document.getElementById(mode + '_master_product_select');
        const labelEl = document.getElementById('combobox_label_' + mode);
        const dropdown = document.getElementById('combobox_dropdown_' + mode);

        if (dropdown) dropdown.style.display = 'none';

        if (selectEl) {
            selectEl.value = productId || '';
            const opt = selectEl.options[selectEl.selectedIndex];
            if (opt && productId) {
                if (labelEl) {
                    labelEl.textContent = opt.textContent.trim();
                    labelEl.style.color = '#fff';
                    labelEl.style.fontWeight = '600';
                }
            } else {
                if (labelEl) {
                    labelEl.textContent = '— Choose a product from master catalog —';
                    labelEl.style.color = 'var(--text-muted)';
                    labelEl.style.fontWeight = 'normal';
                }
            }
        }
    }

    // Close combobox when clicking outside its wrapper
    document.addEventListener('click', function(event) {
        ['add', 'edit'].forEach(function(mode) {
            const wrap = document.getElementById('combobox_wrap_' + mode);
            const dropdown = document.getElementById('combobox_dropdown_' + mode);
            if (wrap && dropdown && dropdown.style.display === 'block') {
                if (!wrap.contains(event.target)) {
                    dropdown.style.display = 'none';
                }
            }
        });
    });

    // Prevent 'Enter' key inside combobox search inputs from accidentally submitting modal form
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            const active = document.activeElement;
            if (active && (active.id === 'combobox_search_add' || active.id === 'combobox_search_edit')) {
                event.preventDefault();
            }
        }
    });

    // Add Modal handlers
    function openAddModal() {
        // Reset master product select when opening
        const addSelect = document.getElementById('add_master_product_select');
        if (addSelect) {
            addSelect.value = '';
            autoFillFromMaster(addSelect, 'add');
        }
        syncMasterCombobox('add', '');
        document.getElementById('addModal').classList.add('open');
    }
    function closeAddModal() {
        const dropdown = document.getElementById('combobox_dropdown_add');
        if (dropdown) dropdown.style.display = 'none';
        document.getElementById('addModal').classList.remove('open');
    }

    // Master Product Auto-Fill
    function autoFillFromMaster(selectEl, mode) {
        const opt = selectEl.options[selectEl.selectedIndex];
        const prefix = mode === 'add' ? '' : 'edit_';
        const hasProduct = selectEl.value !== '';

        if (!hasProduct) {
            // Clear image preview if add mode
            if (mode === 'add') {
                const prevWrap = document.getElementById('add_image_preview_wrap');
                if (prevWrap) prevWrap.style.display = 'none';
                const imgInput = document.getElementById('add_image_input');
                if (imgInput) imgInput.removeAttribute('disabled');
                const requiredStar = document.getElementById('add_image_required_star');
                if (requiredStar) requiredStar.style.display = '';
            }
            return;
        }

        const name       = opt.dataset.name       || '';
        const price      = opt.dataset.price      || '';
        const oldPrice   = opt.dataset.oldPrice   || '';
        const badge      = opt.dataset.badge      || '';
        const rating     = opt.dataset.rating     || '5';
        const primaryImg = opt.dataset.primaryImg || '';
        const secImg     = opt.dataset.secondaryImg|| '';

        // Fill title
        const titleEl = mode === 'add'
            ? document.getElementById('add_title')
            : document.getElementById('edit_title');
        if (titleEl) titleEl.value = name;

        // Fill price
        const priceEl = document.getElementById(mode === 'add' ? 'add_price' : 'edit_price');
        if (priceEl) priceEl.value = price;

        const oldPriceEl = document.getElementById(mode === 'add' ? 'add_old_price' : 'edit_old_price');
        if (oldPriceEl) oldPriceEl.value = oldPrice;

        // Fill badge
        const badgeEl = document.getElementById(mode === 'add' ? 'add_badge' : 'edit_badge');
        if (badgeEl) badgeEl.value = badge;

        // Fill rating
        const ratingEl = document.getElementById(mode === 'add' ? 'add_rating' : 'edit_rating');
        if (ratingEl) ratingEl.value = rating;

        // Handle image preview
        if (mode === 'add') {
            const prevWrap = document.getElementById('add_image_preview_wrap');
            const prevImg  = document.getElementById('add_image_preview');
            const requiredStar = document.getElementById('add_image_required_star');
            if (primaryImg && prevWrap && prevImg) {
                prevImg.src = primaryImg;
                prevWrap.style.display = 'flex';
                prevWrap.style.alignItems = 'center';
                if (requiredStar) requiredStar.style.display = 'none';
            }
        } else {
            const editImgEl = document.getElementById('editImagePreview');
            if (editImgEl && primaryImg) {
                editImgEl.src = primaryImg;
                editImgEl.style.display = 'block';
            }
            const editSecEl = document.getElementById('editSecondaryImagePreview');
            if (editSecEl && secImg) {
                editSecEl.src = secImg;
                editSecEl.style.display = 'block';
            }
        }
    }

    // Edit Modal handlers
    function openEditModal(item) {
        const baseUrl = "{{ url('/admin/sections/' . $section . '/items') }}";
        document.getElementById('editForm').action = baseUrl + '/' + item.id;

        if (document.getElementById('edit_title')) {
            document.getElementById('edit_title').value = item.title || '';
        }
        if (document.getElementById('edit_subtitle')) {
            document.getElementById('edit_subtitle').value = item.subtitle || '';
        }
        if (document.getElementById('edit_description')) {
            document.getElementById('edit_description').value = item.description || '';
        }
        if (document.getElementById('edit_price')) {
            document.getElementById('edit_price').value = item.price || '';
        }
        if (document.getElementById('edit_old_price')) {
            document.getElementById('edit_old_price').value = item.old_price || '';
        }
        if (document.getElementById('edit_badge')) {
            document.getElementById('edit_badge').value = item.badge || '';
        }
        if (document.getElementById('edit_rating')) {
            document.getElementById('edit_rating').value = item.rating || 5;
        }
        if (document.getElementById('edit_button_text')) {
            document.getElementById('edit_button_text').value = item.button_text || '';
        }
        if (document.getElementById('edit_button_url')) {
            document.getElementById('edit_button_url').value = item.button_url || '';
        }
        if (document.getElementById('edit_sort_order')) {
            document.getElementById('edit_sort_order').value = item.sort_order || 0;
        }
        if (document.getElementById('edit_is_active')) {
            document.getElementById('edit_is_active').checked = Boolean(item.is_active);
        }

        // Pre-select master product if linked
        const editMasterSelect = document.getElementById('edit_master_product_select');
        if (editMasterSelect) {
            editMasterSelect.value = item.product_id || '';
        }
        syncMasterCombobox('edit', item.product_id || '');

        // Preview image
        const imgEl = document.getElementById('editImagePreview');
        if (imgEl) {
            imgEl.src = item.image ? "{{ asset('/') }}" + item.image : '';
            imgEl.style.display = item.image ? 'block' : 'none';
        }

        const secImgEl = document.getElementById('editSecondaryImagePreview');
        if (secImgEl) {
            secImgEl.src = item.secondary_image ? "{{ asset('/') }}" + item.secondary_image : '';
            secImgEl.style.display = item.secondary_image ? 'block' : 'none';
        }

        document.getElementById('editModal').classList.add('open');
    }

    function closeEditModal() {
        const dropdown = document.getElementById('combobox_dropdown_edit');
        if (dropdown) dropdown.style.display = 'none';
        document.getElementById('editModal').classList.remove('open');
    }

    // Close on backdrop click
    window.onclick = function(event) {
        const addModal = document.getElementById('addModal');
        const editModal = document.getElementById('editModal');
        if (event.target === addModal) closeAddModal();
        if (event.target === editModal) closeEditModal();
    };
</script>
@endpush
