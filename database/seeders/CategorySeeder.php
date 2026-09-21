<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'Hair Care',
                'slug'        => 'hair-care',
                'description' => 'Ayurvedic & herbal hair oils, cleansers, and scalp nourishing treatments.',
                'image'       => 'img/product/categories1.png',
                'sort_order'  => 1,
                'is_active'   => true,
            ],
            [
                'name'        => 'Face & Skin Care',
                'slug'        => 'face-skin-care',
                'description' => 'Pure herbal facial creams, serums, and organic ubtan packs.',
                'image'       => 'img/product/categories2.png',
                'sort_order'  => 2,
                'is_active'   => true,
            ],
            [
                'name'        => 'Essential Oils',
                'slug'        => 'essential-oils',
                'description' => 'Steam-distilled pure botanical and therapeutic aromatherapy oils.',
                'image'       => 'img/product/categories3.png',
                'sort_order'  => 3,
                'is_active'   => true,
            ],
            [
                'name'        => 'Herbal Soaps & Bath',
                'slug'        => 'herbal-soaps-bath',
                'description' => 'Handcrafted cold-pressed soaps with neem, tulsi, and aloe vera.',
                'image'       => 'img/product/categories4.png',
                'sort_order'  => 4,
                'is_active'   => true,
            ],
            [
                'name'        => 'Immunity & Wellness',
                'slug'        => 'immunity-wellness',
                'description' => 'Natural herbal supplements, kadha mixes, and vitality tonics.',
                'image'       => 'img/product/categories5.png',
                'sort_order'  => 5,
                'is_active'   => true,
            ],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
