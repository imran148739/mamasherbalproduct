@extends('admin.layout.app')

@section('title', 'Categories Management')

@section('content')

    {{-- Top Header Card --}}
    <div class="card" style="background: linear-gradient(135deg, rgba(30,30,66,0.9), rgba(26,26,62,0.95)); border: 1px solid rgba(108,99,255,0.25);">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 16px;">
                <div style="font-size: 38px; width: 60px; height: 60px; background: rgba(108,99,255,0.15); border: 1px solid rgba(108,99,255,0.3); border-radius: 14px; display: flex; align-items: center; justify-content: center;">
                    🗂️
                </div>
                <div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 4px;">Product Categories</h2>
                    <p style="color: var(--text-secondary); font-size: 13px; max-width: 600px;">
                        Manage categories to organize your herbal and organic product catalog. Each category can contain multiple products.
                    </p>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn--primary" onclick="openAddModal()">
                    ➕ Add New Category
                </button>
            </div>
        </div>
    </div>

    {{-- Categories DataTable Card --}}
    <div class="card">
        <div class="card__header">
            <div>
                <div class="card__title">All Categories ({{ count($categories) }})</div>
                <div class="card__desc">Interactive category catalog with real-time product counts and storefront status.</div>
            </div>
            <button type="button" class="btn btn--success btn--sm" onclick="openAddModal()">
                + Add Category
            </button>
        </div>

        <div style="overflow-x: auto;">
            <table id="categoriesTable" class="dataTable hover stripe">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 80px;">Thumbnail</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th style="width: 100px;">Products</th>
                        <th style="width: 70px;">Order</th>
                        <th style="width: 90px;">Status</th>
                        <th style="width: 130px; text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $index => $cat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($cat->image)
                                    <img src="{{ asset($cat->image) }}" alt="{{ $cat->name }}" class="table-thumb">
                                @else
                                    <div style="width: 54px; height: 54px; border-radius: 8px; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; font-size: 20px; color: var(--text-muted);">
                                        📁
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong style="color: #fff; font-size: 14px;">{{ $cat->name }}</strong>
                                @if($cat->description)
                                    <p style="font-size: 12px; color: var(--text-muted); margin: 3px 0 0; max-width: 320px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        {{ $cat->description }}
                                    </p>
                                @endif
                            </td>
                            <td>
                                <code style="font-size: 11px; color: var(--accent); background: rgba(108,99,255,0.12); padding: 3px 7px; border-radius: 4px;">
                                    {{ $cat->slug }}
                                </code>
                            </td>
                            <td>
                                <a href="{{ route('admin.products.index', ['category_id' => $cat->id]) }}"
                                   class="badge" style="background: rgba(0,214,143,0.15); color: var(--green); border: 1px solid rgba(0,214,143,0.3); text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                    🏷️ {{ $cat->products_count }} {{ Str::plural('Product', $cat->products_count) }}
                                </a>
                            </td>
                            <td>{{ $cat->sort_order }}</td>
                            <td>
                                <form action="{{ route('admin.categories.toggle', $cat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="badge {{ $cat->is_active ? 'badge--active' : 'badge--inactive' }}" style="cursor: pointer; border: none;" title="Click to toggle status">
                                        {{ $cat->is_active ? '● Active' : '○ Hidden' }}
                                    </button>
                                </form>
                            </td>
                            <td style="text-align: right;">
                                <div style="display: inline-flex; gap: 6px;">
                                    <button type="button" class="btn btn--outline btn--sm"
                                            onclick="openEditModal({{ json_encode($cat) }})" title="Edit Category">
                                        ✏️ Edit
                                    </button>
                                    <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete category \'{{ addslashes($cat->name) }}\'? All products in this category will also be removed!');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn--danger btn--sm" title="Delete Category">
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

    {{-- Add Category Modal --}}
    <div id="addModal" class="modal-backdrop">
        <div class="modal">
            <div class="modal-header">
                <h3>➕ Add New Category</h3>
                <button type="button" class="modal-close" onclick="closeAddModal()">&times;</button>
            </div>
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Category Name <span style="color: var(--red);">*</span></label>
                        <input type="text" name="name" class="form-input" placeholder="e.g. Organic Hair Oils" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Slug (URL identifier)</label>
                        <input type="text" name="slug" class="form-input" placeholder="Auto-generated if left blank">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-textarea" rows="3" placeholder="Short description of products in this category..."></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Category Thumbnail / Icon Image</label>
                        <input type="file" name="image" class="form-input" accept="image/*" onchange="previewAddImage(this)">
                        <div id="addImagePreviewBox" style="display: none; margin-top: 10px;">
                            <img id="addImagePreview" src="" alt="preview" style="max-height: 90px; border-radius: 8px; border: 1px solid var(--border);">
                        </div>
                    </div>

                    <div class="grid grid--2" style="align-items: center;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-input" value="0">
                        </div>
                        <div style="padding-top: 18px;">
                            <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                                <input type="checkbox" name="is_active" value="1" checked style="width: 18px; height: 18px; accent-color: var(--accent);">
                                Active & Visible
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--outline" onclick="closeAddModal()">Cancel</button>
                    <button type="submit" class="btn btn--primary">💾 Save Category</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Edit Category Modal --}}
    <div id="editModal" class="modal-backdrop">
        <div class="modal">
            <div class="modal-header">
                <h3>✏️ Edit Category</h3>
                <button type="button" class="modal-close" onclick="closeEditModal()">&times;</button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Category Name <span style="color: var(--red);">*</span></label>
                        <input type="text" name="name" id="edit_name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" id="edit_slug" class="form-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea name="description" id="edit_description" class="form-textarea" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Category Image (Upload new to replace)</label>
                        <input type="file" name="image" class="form-input" accept="image/*" onchange="previewEditImage(this)">
                        <div style="margin-top: 10px;">
                            <img id="editImagePreview" src="" alt="current" style="max-height: 90px; border-radius: 8px; border: 1px solid var(--border); display: none;">
                        </div>
                    </div>

                    <div class="grid grid--2" style="align-items: center;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" id="edit_sort_order" class="form-input">
                        </div>
                        <div style="padding-top: 18px;">
                            <label style="display: flex; align-items: center; gap: 8px; color: var(--text-primary); cursor: pointer; font-size: 13px; font-weight: 600;">
                                <input type="checkbox" name="is_active" id="edit_is_active" value="1" style="width: 18px; height: 18px; accent-color: var(--accent);">
                                Active & Visible
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--outline" onclick="closeEditModal()">Cancel</button>
                    <button type="submit" class="btn btn--success">💾 Update Category</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#categoriesTable').DataTable({
            pageLength: 10,
            responsive: true,
            order: [[5, 'asc'], [0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search categories...",
                lengthMenu: "Show _MENU_ categories",
                info: "Showing _START_ to _END_ of _TOTAL_ categories"
            }
        });
    });

    function openAddModal() {
        document.getElementById('addModal').classList.add('open');
    }

    function closeAddModal() {
        document.getElementById('addModal').classList.remove('open');
    }

    function previewAddImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('addImagePreview').src = e.target.result;
                document.getElementById('addImagePreviewBox').style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function openEditModal(cat) {
        document.getElementById('editForm').action = "{{ url('admin/master/categories') }}/" + cat.id;
        document.getElementById('edit_name').value = cat.name || '';
        document.getElementById('edit_slug').value = cat.slug || '';
        document.getElementById('edit_description').value = cat.description || '';
        document.getElementById('edit_sort_order').value = cat.sort_order || 0;
        document.getElementById('edit_is_active').checked = Boolean(cat.is_active);

        const imgEl = document.getElementById('editImagePreview');
        if (cat.image) {
            imgEl.src = "{{ asset('/') }}" + cat.image;
            imgEl.style.display = 'block';
        } else {
            imgEl.style.display = 'none';
        }

        document.getElementById('editModal').classList.add('open');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.remove('open');
    }

    function previewEditImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgEl = document.getElementById('editImagePreview');
                imgEl.src = e.target.result;
                imgEl.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
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
