<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeContentController extends Controller
{
    /**
     * Section field definitions: section => [ key => [label, type, default] ]
     */
    private function getSectionFields(): array
    {
        return [
            'header' => [
                'label' => 'Header & Logo',
                'fields' => [
                    'logo'            => ['label' => 'Website Logo',       'type' => 'image', 'default' => 'img/logo/nav-log.png'],
                    'contact_address' => ['label' => 'Top Bar Address',   'type' => 'text',  'default' => '15/A, Nest Tower, NYC'],
                    'contact_email'   => ['label' => 'Top Bar Email',     'type' => 'text',  'default' => 'info@webmail.com'],
                    'contact_phone'   => ['label' => 'Top Bar Phone',     'type' => 'text',  'default' => ''],
                    'facebook_url'    => ['label' => 'Facebook URL',      'type' => 'url',   'default' => 'https://www.facebook.com/'],
                    'twitter_url'     => ['label' => 'Twitter / X URL',   'type' => 'url',   'default' => 'https://twitter.com/'],
                    'instagram_url'   => ['label' => 'Instagram URL',     'type' => 'url',   'default' => 'https://www.instagram.com/'],
                    'youtube_url'     => ['label' => 'YouTube URL',       'type' => 'url',   'default' => 'https://www.youtube.com/'],
                ],
            ],

            'hero_slider' => [
                'label' => 'Hero Slider',
                'recommended_size' => '1521 × 515 px',
                'fields' => [
                    'slide_1_bg_image'   => ['label' => 'Slide 1 – Background Image (1521 × 515 px)', 'type' => 'image', 'default' => 'img/slider/home4-slider1.png', 'recommended_size' => '1521 × 515 px'],
                    'slide_1_subtitle'   => ['label' => 'Slide 1 – Subtitle',          'type' => 'text',  'default' => 'As fresh as Fruit'],
                    'slide_1_title'      => ['label' => 'Slide 1 – Main Title',        'type' => 'text',  'default' => 'The Roots Are with fruits'],
                    'slide_1_desc'       => ['label' => 'Slide 1 – Description',       'type' => 'textarea', 'default' => 'The more you love your health, more you eat organic.'],
                    'slide_1_btn_text'   => ['label' => 'Slide 1 – Button Text',       'type' => 'text',  'default' => 'Shop Now'],
                    'slide_1_btn_url'    => ['label' => 'Slide 1 – Button URL',        'type' => 'url',   'default' => '#'],

                    'slide_2_bg_image'   => ['label' => 'Slide 2 – Background Image (1521 × 515 px)', 'type' => 'image', 'default' => 'img/slider/home4-slider2.png', 'recommended_size' => '1521 × 515 px'],
                    'slide_2_subtitle'   => ['label' => 'Slide 2 – Subtitle',          'type' => 'text',  'default' => 'As fresh as Fruit'],
                    'slide_2_title'      => ['label' => 'Slide 2 – Main Title',        'type' => 'text',  'default' => 'The Roots Are with fruits'],
                    'slide_2_desc'       => ['label' => 'Slide 2 – Description',       'type' => 'textarea', 'default' => 'The more you love your health, more you eat organic.'],
                    'slide_2_btn_text'   => ['label' => 'Slide 2 – Button Text',       'type' => 'text',  'default' => 'Shop Now'],
                    'slide_2_btn_url'    => ['label' => 'Slide 2 – Button URL',        'type' => 'url',   'default' => '#'],

                    'slide_3_bg_image'   => ['label' => 'Slide 3 – Background Image (1521 × 515 px)', 'type' => 'image', 'default' => 'img/slider/home4-slider3.png', 'recommended_size' => '1521 × 515 px'],
                    'slide_3_subtitle'   => ['label' => 'Slide 3 – Subtitle',          'type' => 'text',  'default' => 'As fresh as Fruit'],
                    'slide_3_title'      => ['label' => 'Slide 3 – Main Title',        'type' => 'text',  'default' => 'The Roots Are with fruits'],
                    'slide_3_desc'       => ['label' => 'Slide 3 – Description',       'type' => 'textarea', 'default' => 'The more you love your health, more you eat organic.'],
                    'slide_3_btn_text'   => ['label' => 'Slide 3 – Button Text',       'type' => 'text',  'default' => 'Shop Now'],
                    'slide_3_btn_url'    => ['label' => 'Slide 3 – Button URL',        'type' => 'url',   'default' => '#'],
                ],
            ],

            'banner' => [
                'label' => 'Promo Banners',
                'recommended_size' => '570 × 311 px',
                'fields' => [
                    'banner_1_image'     => ['label' => 'Banner 1 – Image (570 × 311 px)',    'type' => 'image', 'default' => 'img/banner/banner10.png', 'recommended_size' => '570 × 311 px'],
                    'banner_1_title'     => ['label' => 'Banner 1 – Title',    'type' => 'text',  'default' => '56% off in all products'],
                    'banner_1_btn_text'  => ['label' => 'Banner 1 – Button',   'type' => 'text',  'default' => 'Shop Now'],
                    'banner_1_url'       => ['label' => 'Banner 1 – Link URL', 'type' => 'url',   'default' => '#'],

                    'banner_2_image'     => ['label' => 'Banner 2 – Image (570 × 311 px)',    'type' => 'image', 'default' => 'img/banner/banner11.png', 'recommended_size' => '570 × 311 px'],
                    'banner_2_title'     => ['label' => 'Banner 2 – Title',    'type' => 'text',  'default' => '56% off in all products'],
                    'banner_2_btn_text'  => ['label' => 'Banner 2 – Button',   'type' => 'text',  'default' => 'Shop Now'],
                    'banner_2_url'       => ['label' => 'Banner 2 – Link URL', 'type' => 'url',   'default' => '#'],
                ],
            ],

            'collection' => [
                'label' => 'Our Collection',
                'fields' => [
                    'section_title'  => ['label' => 'Section Title',   'type' => 'text', 'default' => 'Our Collection'],
                    'instagram_1'    => ['label' => 'Image 1',         'type' => 'image', 'default' => 'img/other/instagram1.webp'],
                    'instagram_2'    => ['label' => 'Image 2',         'type' => 'image', 'default' => 'img/other/instagram2.webp'],
                    'instagram_3'    => ['label' => 'Image 3',         'type' => 'image', 'default' => 'img/other/instagram3.webp'],
                    'instagram_4'    => ['label' => 'Image 4',         'type' => 'image', 'default' => 'img/other/instagram4.webp'],
                    'instagram_5'    => ['label' => 'Image 5',         'type' => 'image', 'default' => 'img/other/instagram5.webp'],
                    'instagram_6'    => ['label' => 'Image 6',         'type' => 'image', 'default' => 'img/other/instagram6.webp'],
                    'instagram_7'    => ['label' => 'Image 7',         'type' => 'image', 'default' => 'img/other/instagram7.webp'],
                ],
            ],

            'best_selling' => [
                'label' => 'Best Selling',
                'fields' => [
                    'subtitle'       => ['label' => 'Subtitle',    'type' => 'text', 'default' => 'Best Selling'],
                    'main_title'     => ['label' => 'Main Title',  'type' => 'text', 'default' => 'Recently added our store'],
                ],
            ],

            'our_products' => [
                'label' => 'Our Products (Monthly Specials)',
                'fields' => [
                    'subtitle'       => ['label' => 'Subtitle',    'type' => 'text', 'default' => 'Our Products'],
                    'main_title'     => ['label' => 'Main Title',  'type' => 'text', 'default' => 'Monthly Specials'],
                ],
            ],

            'testimonial' => [
                'label' => 'Testimonials',
                'fields' => [
                    'subtitle'         => ['label' => 'Section Subtitle',         'type' => 'text', 'default' => 'Recently added our store'],
                    'main_title'       => ['label' => 'Section Title',            'type' => 'text', 'default' => 'Our Testimonial'],

                    'person_1_image'   => ['label' => 'Person 1 – Photo',         'type' => 'image', 'default' => 'img/other/testimonial-thumb1.png'],
                    'person_1_name'    => ['label' => 'Person 1 – Name',          'type' => 'text',  'default' => 'JACKLY SMITH'],
                    'person_1_role'    => ['label' => 'Person 1 – Role',          'type' => 'text',  'default' => 'Senior Manager'],
                    'person_1_review'  => ['label' => 'Person 1 – Review',        'type' => 'textarea', 'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolor sit amet, consectetur'],

                    'person_2_image'   => ['label' => 'Person 2 – Photo',         'type' => 'image', 'default' => 'img/other/testimonial-thumb2.png'],
                    'person_2_name'    => ['label' => 'Person 2 – Name',          'type' => 'text',  'default' => 'Laura Johnson'],
                    'person_2_role'    => ['label' => 'Person 2 – Role',          'type' => 'text',  'default' => 'Products Manager'],
                    'person_2_review'  => ['label' => 'Person 2 – Review',        'type' => 'textarea', 'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolor sit amet, consectetur'],

                    'person_3_image'   => ['label' => 'Person 3 – Photo',         'type' => 'image', 'default' => 'img/other/testimonial-thumb3.png'],
                    'person_3_name'    => ['label' => 'Person 3 – Name',          'type' => 'text',  'default' => 'Richard Smith'],
                    'person_3_role'    => ['label' => 'Person 3 – Role',          'type' => 'text',  'default' => 'CEO - Founder'],
                    'person_3_review'  => ['label' => 'Person 3 – Review',        'type' => 'textarea', 'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolor sit amet, consectetur'],
                ],
            ],

            'shipping' => [
                'label' => 'Shipping Info',
                'fields' => [
                    'item_1_image' => ['label' => 'Item 1 – Icon Image',   'type' => 'image', 'default' => 'img/other/shipping1.png'],
                    'item_1_title' => ['label' => 'Item 1 – Title',        'type' => 'text',  'default' => 'Shipping'],
                    'item_1_desc'  => ['label' => 'Item 1 – Description',  'type' => 'text',  'default' => 'From handpicked sellers'],

                    'item_2_image' => ['label' => 'Item 2 – Icon Image',   'type' => 'image', 'default' => 'img/other/shipping2.png'],
                    'item_2_title' => ['label' => 'Item 2 – Title',        'type' => 'text',  'default' => 'Payment'],
                    'item_2_desc'  => ['label' => 'Item 2 – Description',  'type' => 'text',  'default' => '100% secure payment'],

                    'item_3_image' => ['label' => 'Item 3 – Icon Image',   'type' => 'image', 'default' => 'img/other/shipping3.png'],
                    'item_3_title' => ['label' => 'Item 3 – Title',        'type' => 'text',  'default' => 'Return Policy'],
                    'item_3_desc'  => ['label' => 'Item 3 – Description',  'type' => 'text',  'default' => 'Easy returns'],

                    'item_4_image' => ['label' => 'Item 4 – Icon Image',   'type' => 'image', 'default' => 'img/other/shipping4.png'],
                    'item_4_title' => ['label' => 'Item 4 – Title',        'type' => 'text',  'default' => 'Support'],
                    'item_4_desc'  => ['label' => 'Item 4 – Description',  'type' => 'text',  'default' => '24/7 support'],
                ],
            ],
        ];
    }

    public function index()
    {
        $sections = $this->getSectionFields();
        return view('admin.home-content.index', compact('sections'));
    }

    public function edit(string $section)
    {
        $allSections = $this->getSectionFields();

        if (!array_key_exists($section, $allSections)) {
            abort(404, 'Section not found.');
        }

        $sectionConfig = $allSections[$section];
        $currentValues = HomePageContent::getSection($section);

        return view('admin.home-content.edit', [
            'section'       => $section,
            'sectionConfig' => $sectionConfig,
            'currentValues' => $currentValues,
        ]);
    }

    public function update(Request $request, string $section)
    {
        $allSections = $this->getSectionFields();

        if (!array_key_exists($section, $allSections)) {
            abort(404, 'Section not found.');
        }

        $fields = $allSections[$section]['fields'];

        foreach ($fields as $key => $config) {
            $type = $config['type'];

            if ($type === 'image') {
                if ($request->hasFile($key)) {
                    $file = $request->file($key);
                    // Store in public/img/uploads/
                    $path = $file->store('img/uploads', 'public_path');
                    HomePageContent::setValue($section, $key, $path, 'image');
                }
                // if no new file uploaded, keep existing value (do nothing)
            } else {
                $value = $request->input($key);
                HomePageContent::setValue($section, $key, $value, $type);
            }
        }

        if ($section === 'header') {
            return redirect()
                ->route('admin.header.edit')
                ->with('success', 'Header & Logo updated successfully!');
        }

        return redirect()
            ->route('admin.home-content.edit', $section)
            ->with('success', ucwords(str_replace('_', ' ', $section)) . ' updated successfully!');
    }

    /**
     * Dedicated action to manage header contents and logo.
     */
    public function editHeader()
    {
        return $this->edit('header');
    }

    /**
     * Dedicated action to update header contents and logo.
     */
    public function updateHeader(Request $request)
    {
        return $this->update($request, 'header');
    }
}
