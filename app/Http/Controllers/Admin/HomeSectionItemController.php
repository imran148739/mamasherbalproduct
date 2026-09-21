<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageContent;
use App\Models\HomeSectionItem;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeSectionItemController extends Controller
{
    /**
     * Section definitions with display properties and supported fields
     */
    public static function getSectionConfig(string $section): array
    {
        $configs = [
            'hero_slider' => [
                'name'         => 'Hero Slider',
                'singular'     => 'Slide',
                'icon'         => '🖼️',
                'description'  => 'Manage slider banners with background images, headings, and CTA buttons.',
                'has_meta'     => false,
                'fields'       => [
                    'image'        => ['label' => 'Slide Background Image', 'type' => 'image', 'required' => true],
                    'subtitle'     => ['label' => 'Subtitle', 'type' => 'text', 'placeholder' => 'As fresh as Fruit'],
                    'title'        => ['label' => 'Main Heading', 'type' => 'text', 'placeholder' => 'The Roots Are with fruits'],
                    'description'  => ['label' => 'Description', 'type' => 'textarea', 'placeholder' => 'Enter slide text description...'],
                    'button_text'  => ['label' => 'Button Text', 'type' => 'text', 'placeholder' => 'Shop Now'],
                    'button_url'   => ['label' => 'Button URL', 'type' => 'text', 'placeholder' => '# or /shop'],
                    'sort_order'   => ['label' => 'Display Order', 'type' => 'number', 'placeholder' => '1'],
                ],
            ],

            'collection' => [
                'name'         => 'Our Collection',
                'singular'     => 'Collection Item',
                'icon'         => '📸',
                'description'  => 'Manage collection grid items. Link directly from the Product Master to auto-fill all details.',
                'has_meta'     => true,
                'meta_fields'  => [
                    'section_title' => ['label' => 'Section Title', 'default' => 'Our Collection'],
                ],
                'fields'       => [
                    'image'           => ['label' => 'Photo / Image', 'type' => 'image', 'required' => true],
                    'secondary_image' => ['label' => 'Hover / Secondary Image', 'type' => 'image', 'required' => false],
                    'title'           => ['label' => 'Product Name / Caption', 'type' => 'text', 'placeholder' => 'Organic Berry Box'],
                    'price'           => ['label' => 'Current Price', 'type' => 'text', 'placeholder' => '₹38.00'],
                    'old_price'       => ['label' => 'Old / Regular Price', 'type' => 'text', 'placeholder' => '₹40.00'],
                    'badge'           => ['label' => 'Badge Tag (Sale, New, Hot)', 'type' => 'text', 'placeholder' => 'New'],
                    'rating'          => ['label' => 'Rating Stars (1-5)', 'type' => 'number', 'min' => 1, 'max' => 5, 'default' => 5],
                    'button_url'      => ['label' => 'Product / Target URL', 'type' => 'url', 'placeholder' => '/products/berry-box'],
                    'sort_order'      => ['label' => 'Display Order', 'type' => 'number', 'placeholder' => '1'],
                ],
            ],

            'best_selling' => [
                'name'         => 'Best Selling Products',
                'singular'     => 'Product',
                'icon'         => '🔥',
                'description'  => 'Manage best selling showcase products, prices, images, and badges.',
                'has_meta'     => true,
                'meta_fields'  => [
                    'subtitle'   => ['label' => 'Subtitle', 'default' => 'Best Selling'],
                    'main_title' => ['label' => 'Main Title', 'default' => 'Recently added our store'],
                ],
                'fields'       => [
                    'image'           => ['label' => 'Primary Image', 'type' => 'image', 'required' => true],
                    'secondary_image' => ['label' => 'Hover / Secondary Image', 'type' => 'image', 'required' => false],
                    'title'           => ['label' => 'Product Name', 'type' => 'text', 'required' => true, 'placeholder' => 'Green-surface'],
                    'price'           => ['label' => 'Current Price', 'type' => 'text', 'placeholder' => '₹38.00'],
                    'old_price'       => ['label' => 'Old / Regular Price', 'type' => 'text', 'placeholder' => '₹40.00'],
                    'badge'           => ['label' => 'Badge Tag (Sale, New, -20%)', 'type' => 'text', 'placeholder' => 'Sale'],
                    'rating'          => ['label' => 'Rating Stars (1-5)', 'type' => 'number', 'min' => 1, 'max' => 5, 'default' => 5],
                    'button_url'      => ['label' => 'Product URL', 'type' => 'text', 'placeholder' => 'product-details.html'],
                    'sort_order'      => ['label' => 'Display Order', 'type' => 'number', 'placeholder' => '1'],
                ],
            ],

            'our_products' => [
                'name'         => 'Our Products (Monthly Specials)',
                'singular'     => 'Product',
                'icon'         => '🌿',
                'description'  => 'Manage monthly special products, dual images, prices, and discounts.',
                'has_meta'     => true,
                'meta_fields'  => [
                    'subtitle'   => ['label' => 'Subtitle', 'default' => 'Our Products'],
                    'main_title' => ['label' => 'Main Title', 'default' => 'Monthly Specials'],
                ],
                'fields'       => [
                    'image'           => ['label' => 'Primary Image', 'type' => 'image', 'required' => true],
                    'secondary_image' => ['label' => 'Hover / Secondary Image', 'type' => 'image', 'required' => false],
                    'title'           => ['label' => 'Product Name', 'type' => 'text', 'required' => true, 'placeholder' => 'Special Avocado Box'],
                    'price'           => ['label' => 'Current Price', 'type' => 'text', 'placeholder' => '$45.00'],
                    'old_price'       => ['label' => 'Old / Regular Price', 'type' => 'text', 'placeholder' => '$50.00'],
                    'badge'           => ['label' => 'Badge Tag (Hot, Sale, New)', 'type' => 'text', 'placeholder' => 'Hot'],
                    'rating'          => ['label' => 'Rating Stars (1-5)', 'type' => 'number', 'min' => 1, 'max' => 5, 'default' => 5],
                    'button_url'      => ['label' => 'Product URL', 'type' => 'text', 'placeholder' => 'product-details.html'],
                    'sort_order'      => ['label' => 'Display Order', 'type' => 'number', 'placeholder' => '1'],
                ],
            ],

            'testimonial' => [
                'name'         => 'Testimonials',
                'singular'     => 'Testimonial',
                'icon'         => '💬',
                'description'  => 'Manage client review cards with avatars, roles, ratings, and testimonials.',
                'has_meta'     => true,
                'meta_fields'  => [
                    'subtitle'   => ['label' => 'Subtitle', 'default' => 'Recently added our store'],
                    'main_title' => ['label' => 'Main Title', 'default' => 'Our Testimonial'],
                ],
                'fields'       => [
                    'image'        => ['label' => 'Client Photo / Avatar', 'type' => 'image', 'required' => true],
                    'title'        => ['label' => 'Client Name', 'type' => 'text', 'required' => true, 'placeholder' => 'JACKLY SMITH'],
                    'subtitle'     => ['label' => 'Role / Designation', 'type' => 'text', 'placeholder' => 'Senior Manager'],
                    'description'  => ['label' => 'Review Text', 'type' => 'textarea', 'required' => true, 'placeholder' => 'Customer review here...'],
                    'rating'       => ['label' => 'Rating (1-5)', 'type' => 'number', 'min' => 1, 'max' => 5, 'default' => 5],
                    'sort_order'   => ['label' => 'Display Order', 'type' => 'number', 'placeholder' => '1'],
                ],
            ],
        ];

        return $configs[$section] ?? abort(404, 'Invalid Section.');
    }

    public function index(string $section)
    {
        $config = self::getSectionConfig($section);
        $items = HomeSectionItem::forSection($section)->ordered()->get();
        $metaValues = $config['has_meta'] ? HomePageContent::getSection($section) : [];

        // Sections that support picking from the product master catalog
        $productLinkSections = ['best_selling', 'our_products', 'collection'];
        $supportsProductLink = in_array($section, $productLinkSections);

        // Fetch master products for supported sections
        $masterProducts = [];
        if ($supportsProductLink) {
            $masterProducts = Product::with(['category', 'images'])->active()->ordered()->get();
        }

        return view('admin.sections.manage', compact('section', 'config', 'items', 'metaValues', 'masterProducts', 'supportsProductLink'));
    }

    public function store(Request $request, string $section)
    {
        $config = self::getSectionConfig($section);

        $rules = [];
        $hasMasterProduct = $request->filled('product_id');

        if (isset($config['fields']['image']) && ($config['fields']['image']['required'] ?? false) && !$hasMasterProduct) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,webp,svg,gif|max:25600';
        } elseif (isset($config['fields']['image'])) {
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,webp,svg,gif|max:25600';
        }

        if (isset($config['fields']['secondary_image'])) {
            $rules['secondary_image'] = 'nullable|image|mimes:jpeg,png,jpg,webp,svg,gif|max:25600';
        }
        if (isset($config['fields']['title']) && ($config['fields']['title']['required'] ?? false) && !$hasMasterProduct) {
            $rules['title'] = 'required|string|max:255';
        }

        $messages = [
            'image.max'           => 'The image must not be greater than 25MB.',
            'secondary_image.max' => 'The secondary image must not be greater than 25MB.',
        ];

        $request->validate($rules, $messages);

        $data = [
            'section'     => $section,
            'product_id'  => $request->input('product_id'),
            'title'       => $request->input('title'),
            'subtitle'    => $request->input('subtitle'),
            'description' => $request->input('description'),
            'button_text' => $request->input('button_text'),
            'button_url'  => $request->input('button_url'),
            'price'       => $request->input('price'),
            'old_price'   => $request->input('old_price'),
            'badge'       => $request->input('badge'),
            'rating'      => (int) $request->input('rating', 5),
            'sort_order'  => (int) $request->input('sort_order', 0),
            'is_active'   => $request->has('is_active') ? (bool)$request->input('is_active') : true,
        ];

        // If master product chosen and custom text/images not provided, pull defaults
        if ($hasMasterProduct) {
            $prod = Product::with('images')->find($request->input('product_id'));
            if ($prod) {
                if (empty($data['title'])) {
                    $data['title'] = $prod->name;
                }
                if (empty($data['price']) && $prod->price) {
                    $data['price'] = $prod->formatted_price;
                }
                if (empty($data['old_price']) && $prod->old_price) {
                    $data['old_price'] = $prod->formatted_old_price;
                }
                if (empty($data['badge']) && $prod->badge) {
                    $data['badge'] = $prod->badge;
                }
                if (empty($data['button_url'])) {
                    $data['button_url'] = 'product-details.html';
                }
                if (!$request->hasFile('image')) {
                    $primary = $prod->images->firstWhere('is_primary', true) ?? $prod->images->first();
                    if ($primary) {
                        $data['image'] = $primary->image_path;
                    }
                }
                if (!$request->hasFile('secondary_image')) {
                    $second = $prod->images->skip(1)->first();
                    if ($second) {
                        $data['secondary_image'] = $second->image_path;
                    }
                }
            }
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('img/uploads', 'public_path');
        }

        if ($request->hasFile('secondary_image')) {
            $data['secondary_image'] = $request->file('secondary_image')->store('img/uploads', 'public_path');
        }

        HomeSectionItem::create($data);

        return redirect()
            ->route('admin.sections.index', $section)
            ->with('success', $config['singular'] . ' added successfully!');
    }

    public function update(Request $request, string $section, int $id)
    {
        $config = self::getSectionConfig($section);
        $item = HomeSectionItem::forSection($section)->findOrFail($id);

        $rules = [
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp,svg,gif|max:25600',
            'secondary_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg,gif|max:25600',
        ];
        $hasMasterProduct = $request->filled('product_id');
        if (isset($config['fields']['title']) && ($config['fields']['title']['required'] ?? false) && !$hasMasterProduct) {
            $rules['title'] = 'required|string|max:255';
        }

        $messages = [
            'image.max'           => 'The image must not be greater than 25MB.',
            'secondary_image.max' => 'The secondary image must not be greater than 25MB.',
        ];

        $request->validate($rules, $messages);

        $data = [
            'product_id'  => $request->input('product_id'),
            'title'       => $request->input('title'),
            'subtitle'    => $request->input('subtitle'),
            'description' => $request->input('description'),
            'button_text' => $request->input('button_text'),
            'button_url'  => $request->input('button_url'),
            'price'       => $request->input('price'),
            'old_price'   => $request->input('old_price'),
            'badge'       => $request->input('badge'),
            'rating'      => (int) $request->input('rating', 5),
            'sort_order'  => (int) $request->input('sort_order', 0),
            'is_active'   => (bool)$request->input('is_active', true),
        ];

        // Sync images from master product whenever a product is linked and no new file uploaded
        if ($hasMasterProduct && !$request->hasFile('image')) {
            $prod = Product::with('images')->find($request->input('product_id'));
            if ($prod) {
                $primary = $prod->images->firstWhere('is_primary', true) ?? $prod->images->first();
                if ($primary) {
                    $data['image'] = $primary->image_path;
                }
                // Sync secondary image too if not uploading one
                if (!$request->hasFile('secondary_image')) {
                    $second = $prod->images->skip(1)->first();
                    if ($second) {
                        $data['secondary_image'] = $second->image_path;
                    }
                }
            }
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('img/uploads', 'public_path');
        }

        if ($request->hasFile('secondary_image')) {
            $data['secondary_image'] = $request->file('secondary_image')->store('img/uploads', 'public_path');
        }

        $item->update($data);

        return redirect()
            ->route('admin.sections.index', $section)
            ->with('success', $config['singular'] . ' updated successfully!');
    }

    public function destroy(string $section, int $id)
    {
        $config = self::getSectionConfig($section);
        $item = HomeSectionItem::forSection($section)->findOrFail($id);
        $item->delete();

        return redirect()
            ->route('admin.sections.index', $section)
            ->with('success', $config['singular'] . ' deleted successfully!');
    }

    public function toggleStatus(string $section, int $id)
    {
        $item = HomeSectionItem::forSection($section)->findOrFail($id);
        $item->update(['is_active' => !$item->is_active]);

        return redirect()
            ->route('admin.sections.index', $section)
            ->with('success', 'Status toggled successfully!');
    }

    public function updateMeta(Request $request, string $section)
    {
        $config = self::getSectionConfig($section);

        if ($config['has_meta'] && isset($config['meta_fields'])) {
            foreach ($config['meta_fields'] as $key => $fieldInfo) {
                if ($request->has($key)) {
                    HomePageContent::setValue($section, $key, $request->input($key), 'text');
                }
            }
        }

        return redirect()
            ->route('admin.sections.index', $section)
            ->with('success', 'Section header information updated!');
    }
}
