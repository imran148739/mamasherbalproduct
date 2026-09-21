<?php

namespace Database\Seeders;

use App\Models\HomePageContent;
use Illuminate\Database\Seeder;

class HomePageContentSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // ───── Hero Slider ─────
            ['section' => 'hero_slider', 'key' => 'slide_1_bg_image',  'value' => 'img/slider/home4-slider1.png',  'type' => 'image'],
            ['section' => 'hero_slider', 'key' => 'slide_1_subtitle',   'value' => 'As fresh as Fruit',              'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_1_title',      'value' => 'The Roots Are with fruits',      'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_1_desc',       'value' => 'The more you love your health, more you eat organic. No medicine can heal you better than organic food does', 'type' => 'textarea'],
            ['section' => 'hero_slider', 'key' => 'slide_1_btn_text',   'value' => 'Shop Now',                       'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_1_btn_url',    'value' => '#',                              'type' => 'url'],

            ['section' => 'hero_slider', 'key' => 'slide_2_bg_image',  'value' => 'img/slider/home4-slider2.png',  'type' => 'image'],
            ['section' => 'hero_slider', 'key' => 'slide_2_subtitle',   'value' => 'As fresh as Fruit',              'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_2_title',      'value' => 'The Roots Are with fruits',      'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_2_desc',       'value' => 'The more you love your health, more you eat organic. No medicine can heal you better than organic food does', 'type' => 'textarea'],
            ['section' => 'hero_slider', 'key' => 'slide_2_btn_text',   'value' => 'Shop Now',                       'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_2_btn_url',    'value' => '#',                              'type' => 'url'],

            ['section' => 'hero_slider', 'key' => 'slide_3_bg_image',  'value' => 'img/slider/home4-slider3.png',  'type' => 'image'],
            ['section' => 'hero_slider', 'key' => 'slide_3_subtitle',   'value' => 'As fresh as Fruit',              'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_3_title',      'value' => 'The Roots Are with fruits',      'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_3_desc',       'value' => 'The more you love your health, more you eat organic. No medicine can heal you better than organic food does', 'type' => 'textarea'],
            ['section' => 'hero_slider', 'key' => 'slide_3_btn_text',   'value' => 'Shop Now',                       'type' => 'text'],
            ['section' => 'hero_slider', 'key' => 'slide_3_btn_url',    'value' => '#',                              'type' => 'url'],

            // ───── Banners ─────
            ['section' => 'banner', 'key' => 'banner_1_image',    'value' => 'img/banner/banner10.png',       'type' => 'image'],
            ['section' => 'banner', 'key' => 'banner_1_title',    'value' => '56% off in all products',       'type' => 'text'],
            ['section' => 'banner', 'key' => 'banner_1_btn_text', 'value' => 'Shop Now',                      'type' => 'text'],
            ['section' => 'banner', 'key' => 'banner_1_url',      'value' => '#',                             'type' => 'url'],

            ['section' => 'banner', 'key' => 'banner_2_image',    'value' => 'img/banner/banner11.png',       'type' => 'image'],
            ['section' => 'banner', 'key' => 'banner_2_title',    'value' => '56% off in all products',       'type' => 'text'],
            ['section' => 'banner', 'key' => 'banner_2_btn_text', 'value' => 'Shop Now',                      'type' => 'text'],
            ['section' => 'banner', 'key' => 'banner_2_url',      'value' => '#',                             'type' => 'url'],

            // ───── Our Collection ─────
            ['section' => 'collection', 'key' => 'section_title', 'value' => 'Our Collection',                'type' => 'text'],
            ['section' => 'collection', 'key' => 'instagram_1',   'value' => 'img/other/instagram1.webp',    'type' => 'image'],
            ['section' => 'collection', 'key' => 'instagram_2',   'value' => 'img/other/instagram2.webp',    'type' => 'image'],
            ['section' => 'collection', 'key' => 'instagram_3',   'value' => 'img/other/instagram3.webp',    'type' => 'image'],
            ['section' => 'collection', 'key' => 'instagram_4',   'value' => 'img/other/instagram4.webp',    'type' => 'image'],
            ['section' => 'collection', 'key' => 'instagram_5',   'value' => 'img/other/instagram5.webp',    'type' => 'image'],
            ['section' => 'collection', 'key' => 'instagram_6',   'value' => 'img/other/instagram6.webp',    'type' => 'image'],
            ['section' => 'collection', 'key' => 'instagram_7',   'value' => 'img/other/instagram7.webp',    'type' => 'image'],

            // ───── Best Selling ─────
            ['section' => 'best_selling', 'key' => 'subtitle',    'value' => 'Best Selling',                  'type' => 'text'],
            ['section' => 'best_selling', 'key' => 'main_title',  'value' => 'Recently added our store',      'type' => 'text'],

            // ───── Our Products ─────
            ['section' => 'our_products', 'key' => 'subtitle',    'value' => 'Our Products',                  'type' => 'text'],
            ['section' => 'our_products', 'key' => 'main_title',  'value' => 'Monthly Specials',              'type' => 'text'],

            // ───── Testimonials ─────
            ['section' => 'testimonial', 'key' => 'subtitle',        'value' => 'Recently added our store',   'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'main_title',      'value' => 'Our Testimonial',            'type' => 'text'],

            ['section' => 'testimonial', 'key' => 'person_1_image',  'value' => 'img/other/testimonial-thumb1.png', 'type' => 'image'],
            ['section' => 'testimonial', 'key' => 'person_1_name',   'value' => 'JACKLY SMITH',               'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'person_1_role',   'value' => 'Senior Manager',             'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'person_1_review', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolor sit amet, consectetur', 'type' => 'textarea'],

            ['section' => 'testimonial', 'key' => 'person_2_image',  'value' => 'img/other/testimonial-thumb2.png', 'type' => 'image'],
            ['section' => 'testimonial', 'key' => 'person_2_name',   'value' => 'Laura Johnson',              'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'person_2_role',   'value' => 'Products Manager',           'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'person_2_review', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolor sit amet, consectetur', 'type' => 'textarea'],

            ['section' => 'testimonial', 'key' => 'person_3_image',  'value' => 'img/other/testimonial-thumb3.png', 'type' => 'image'],
            ['section' => 'testimonial', 'key' => 'person_3_name',   'value' => 'Richard Smith',              'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'person_3_role',   'value' => 'CEO - Founder',              'type' => 'text'],
            ['section' => 'testimonial', 'key' => 'person_3_review', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolor sit amet, consectetur', 'type' => 'textarea'],

            // ───── Shipping ─────
            ['section' => 'shipping', 'key' => 'item_1_image', 'value' => 'img/other/shipping1.png',          'type' => 'image'],
            ['section' => 'shipping', 'key' => 'item_1_title', 'value' => 'Shipping',                         'type' => 'text'],
            ['section' => 'shipping', 'key' => 'item_1_desc',  'value' => 'From handpicked sellers',          'type' => 'text'],

            ['section' => 'shipping', 'key' => 'item_2_image', 'value' => 'img/other/shipping2.png',          'type' => 'image'],
            ['section' => 'shipping', 'key' => 'item_2_title', 'value' => 'Payment',                          'type' => 'text'],
            ['section' => 'shipping', 'key' => 'item_2_desc',  'value' => '100% secure payment',             'type' => 'text'],

            ['section' => 'shipping', 'key' => 'item_3_image', 'value' => 'img/other/shipping3.png',          'type' => 'image'],
            ['section' => 'shipping', 'key' => 'item_3_title', 'value' => 'Return Policy',                    'type' => 'text'],
            ['section' => 'shipping', 'key' => 'item_3_desc',  'value' => 'Easy returns',                    'type' => 'text'],

            ['section' => 'shipping', 'key' => 'item_4_image', 'value' => 'img/other/shipping4.png',          'type' => 'image'],
            ['section' => 'shipping', 'key' => 'item_4_title', 'value' => 'Support',                          'type' => 'text'],
            ['section' => 'shipping', 'key' => 'item_4_desc',  'value' => '24/7 support',                    'type' => 'text'],

            // ───── Header & Logo ─────
            ['section' => 'header', 'key' => 'logo',            'value' => 'img/logo/nav-log.png',             'type' => 'image'],
            ['section' => 'header', 'key' => 'contact_address', 'value' => '15/A, Nest Tower, NYC',           'type' => 'text'],
            ['section' => 'header', 'key' => 'contact_email',   'value' => 'info@webmail.com',                 'type' => 'text'],
            ['section' => 'header', 'key' => 'contact_phone',   'value' => '',                                 'type' => 'text'],
            ['section' => 'header', 'key' => 'facebook_url',    'value' => 'https://www.facebook.com/',        'type' => 'url'],
            ['section' => 'header', 'key' => 'twitter_url',     'value' => 'https://twitter.com/',             'type' => 'url'],
            ['section' => 'header', 'key' => 'instagram_url',   'value' => 'https://www.instagram.com/',       'type' => 'url'],
            ['section' => 'header', 'key' => 'youtube_url',     'value' => 'https://www.youtube.com/',         'type' => 'url'],
        ];

        foreach ($data as $row) {
            HomePageContent::updateOrCreate(
                ['section' => $row['section'], 'key' => $row['key']],
                ['value' => $row['value'], 'type' => $row['type']]
            );
        }
    }
}
