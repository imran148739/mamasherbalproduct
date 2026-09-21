<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all()->keyBy('slug');

        if ($categories->isEmpty()) {
            $this->call(CategorySeeder::class);
            $categories = Category::all()->keyBy('slug');
        }

        $productsData = [
            // ─── Hair Care ───
            [
                'category_slug'     => 'hair-care',
                'name'              => 'Brahmi & Bhringraj Herbal Hair Oil',
                'slug'              => 'brahmi-bhringraj-herbal-hair-oil',
                'sku'               => 'MAMA-HC-001',
                'short_description' => 'Intense scalp nourishment to prevent hair fall and promote thick root growth.',
                'description'       => 'Formulated with 18 rare Ayurvedic herbs cooked in pure sesame and coconut oil over slow fire for 48 hours.',
                'price'             => 32.00,
                'old_price'         => 38.00,
                'stock_quantity'    => 85,
                'badge'             => 'Hot',
                'rating'            => 5.0,
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
                'gallery_images'    => [
                    'img/product/product1.png',
                    'img/product/product2.png',
                    'img/product/big-product1.jpg',
                ],
            ],
            [
                'category_slug'     => 'hair-care',
                'name'              => 'Onion Seed & Hibiscus Hair Cleanser',
                'slug'              => 'onion-seed-hibiscus-hair-cleanser',
                'sku'               => 'MAMA-HC-002',
                'short_description' => 'Gentle sulfate-free herbal shampoo for anti-breakage and brilliant shine.',
                'description'       => 'Infused with cold-pressed red onion seed extract and freshly plucked hibiscus flowers for soft, frizz-free hair.',
                'price'             => 28.50,
                'old_price'         => 34.00,
                'stock_quantity'    => 60,
                'badge'             => 'Sale',
                'rating'            => 4.8,
                'is_featured'       => false,
                'is_active'         => true,
                'sort_order'        => 2,
                'gallery_images'    => [
                    'img/product/product2.png',
                    'img/product/product3.png',
                ],
            ],

            // ─── Face & Skin Care ───
            [
                'category_slug'     => 'face-skin-care',
                'name'              => 'Kumkumadi Radiance Facial Oil',
                'slug'              => 'kumkumadi-radiance-facial-oil',
                'sku'               => 'MAMA-SC-001',
                'short_description' => 'Precious Kashmiri Saffron elixir for luminous skin texture and youthful glow.',
                'description'       => 'Authentic 26-herb classical formulation prepared with certified Grade-A saffron strands, lotus stamens, and goat milk.',
                'price'             => 45.00,
                'old_price'         => 52.00,
                'stock_quantity'    => 40,
                'badge'             => 'Popular',
                'rating'            => 5.0,
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
                'gallery_images'    => [
                    'img/product/product7.png',
                    'img/product/product8.png',
                    'img/product/big-product2.jpg',
                ],
            ],
            [
                'category_slug'     => 'face-skin-care',
                'name'              => 'Neem & Tea Tree Acne Clarifying Gel',
                'slug'              => 'neem-tea-tree-acne-clarifying-gel',
                'sku'               => 'MAMA-SC-002',
                'short_description' => 'Targeted blemish control gel with soothing organic aloe vera base.',
                'description'       => 'Clears active breakouts without stripping skin moisture, leaving a fresh matte calm feeling.',
                'price'             => 22.00,
                'old_price'         => null,
                'stock_quantity'    => 120,
                'badge'             => 'New',
                'rating'            => 4.7,
                'is_featured'       => false,
                'is_active'         => true,
                'sort_order'        => 2,
                'gallery_images'    => [
                    'img/product/product4.png',
                    'img/product/product5.png',
                ],
            ],

            // ─── Essential Oils ───
            [
                'category_slug'     => 'essential-oils',
                'name'              => 'Pure Himalayan Lavender Essential Oil',
                'slug'              => 'pure-himalayan-lavender-essential-oil',
                'sku'               => 'MAMA-EO-001',
                'short_description' => '100% pure steam-distilled French lavender for restorative sleep and aromatherapy.',
                'description'       => 'Wildcrafted from high altitude valleys. Zero synthetics, pesticides, or carrier dilutions.',
                'price'             => 26.00,
                'old_price'         => 30.00,
                'stock_quantity'    => 75,
                'badge'             => 'Sale',
                'rating'            => 4.9,
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
                'gallery_images'    => [
                    'img/product/product3.png',
                    'img/product/product4.png',
                    'img/product/big-product3.jpg',
                ],
            ],
            [
                'category_slug'     => 'essential-oils',
                'name'              => 'Australian Tea Tree Antiseptic Oil',
                'slug'              => 'australian-tea-tree-antiseptic-oil',
                'sku'               => 'MAMA-EO-002',
                'short_description' => 'Potent antimicrobial essential oil for skincare, scalp care, and diffusers.',
                'description'       => 'Contains over 40% Terpinen-4-ol for maximum therapeutic benefits and rapid purification.',
                'price'             => 24.00,
                'old_price'         => null,
                'stock_quantity'    => 90,
                'badge'             => null,
                'rating'            => 4.8,
                'is_featured'       => false,
                'is_active'         => true,
                'sort_order'        => 2,
                'gallery_images'    => [
                    'img/product/product6.png',
                    'img/product/product7.png',
                ],
            ],

            // ─── Herbal Soaps & Bath ───
            [
                'category_slug'     => 'herbal-soaps-bath',
                'name'              => 'Cold-Pressed Wild Turmeric & Sandalwood Soap',
                'slug'              => 'wild-turmeric-sandalwood-soap',
                'sku'               => 'MAMA-SB-001',
                'short_description' => 'Artisanal bath bar with organic coconut butter and real Mysore sandalwood.',
                'description'       => 'Cured for 6 weeks under traditional artisanal cold-processing to retain natural botanical glycerin.',
                'price'             => 14.50,
                'old_price'         => 18.00,
                'stock_quantity'    => 150,
                'badge'             => 'Hot',
                'rating'            => 5.0,
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
                'gallery_images'    => [
                    'img/product/product5.png',
                    'img/product/product6.png',
                ],
            ],
            [
                'category_slug'     => 'herbal-soaps-bath',
                'name'              => 'Activated Charcoal & Vetiver Detox Bar',
                'slug'              => 'activated-charcoal-vetiver-detox-bar',
                'sku'               => 'MAMA-SB-002',
                'short_description' => 'Deep pore purifying soap with bamboo charcoal and grounding vetiver root.',
                'description'       => 'Draws out environmental impurities and city pollution while keeping skin comfortably hydrated.',
                'price'             => 13.00,
                'old_price'         => null,
                'stock_quantity'    => 110,
                'badge'             => 'New',
                'rating'            => 4.9,
                'is_featured'       => false,
                'is_active'         => true,
                'sort_order'        => 2,
                'gallery_images'    => [
                    'img/product/product8.png',
                    'img/product/product9.png',
                ],
            ],

            // ─── Immunity & Wellness ───
            [
                'category_slug'     => 'immunity-wellness',
                'name'              => 'Wild Forest Ashwagandha Root Powder',
                'slug'              => 'wild-forest-ashwagandha-root-powder',
                'sku'               => 'MAMA-WN-001',
                'short_description' => 'Pure adaptogenic root powder for stress relief, deep sleep, and stamina.',
                'description'       => 'Certified organic Withania somnifera harvested from certified non-GMO wild forest reserves.',
                'price'             => 29.00,
                'old_price'         => 35.00,
                'stock_quantity'    => 65,
                'badge'             => 'Popular',
                'rating'            => 5.0,
                'is_featured'       => true,
                'is_active'         => true,
                'sort_order'        => 1,
                'gallery_images'    => [
                    'img/product/product9.png',
                    'img/product/product1.png',
                    'img/product/big-product4.jpg',
                ],
            ],
        ];

        foreach ($productsData as $data) {
            $catSlug = $data['category_slug'];
            unset($data['category_slug']);
            $gallery = $data['gallery_images'] ?? [];
            unset($data['gallery_images']);

            $cat = $categories->get($catSlug);
            if (!$cat) continue;

            $data['category_id'] = $cat->id;

            $product = Product::updateOrCreate(['slug' => $data['slug']], $data);

            // Re-seed images
            $product->images()->delete();
            foreach ($gallery as $idx => $imgPath) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imgPath,
                    'is_primary' => ($idx === 0),
                    'sort_order' => $idx + 1,
                ]);
            }
        }
    }
}
