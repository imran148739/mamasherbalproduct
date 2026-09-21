<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HomePageContent;
use App\Models\HomeSectionItem;
use App\Models\Product;
use App\Models\ProductImage;

class DashboardController extends Controller
{
    public function index()
    {
        $dynamicSections = [
            'hero_slider'   => [
                'label'       => 'Hero Slider',
                'icon'        => '🖼️',
                'desc'        => 'Interactive slider banners, CTA buttons & images',
                'count'       => HomeSectionItem::forSection('hero_slider')->count(),
                'type'        => 'DataTable / Repeater',
                'url'         => route('admin.sections.index', 'hero_slider'),
            ],
            'collection'    => [
                'label'       => 'Our Collection',
                'icon'        => '📸',
                'desc'        => 'Instagram gallery photos, captions & social links',
                'count'       => HomeSectionItem::forSection('collection')->count(),
                'type'        => 'DataTable / Repeater',
                'url'         => route('admin.sections.index', 'collection'),
            ],
            'best_selling'  => [
                'label'       => 'Best Selling Products',
                'icon'        => '🔥',
                'desc'        => 'Showcase products, dual images, prices & badges',
                'count'       => HomeSectionItem::forSection('best_selling')->count(),
                'type'        => 'DataTable / Repeater',
                'url'         => route('admin.sections.index', 'best_selling'),
            ],
            'our_products'  => [
                'label'       => 'Our Products (Monthly Specials)',
                'icon'        => '🌿',
                'desc'        => 'Monthly featured specials, prices & ratings',
                'count'       => HomeSectionItem::forSection('our_products')->count(),
                'type'        => 'DataTable / Repeater',
                'url'         => route('admin.sections.index', 'our_products'),
            ],
            'testimonial'   => [
                'label'       => 'Client Testimonials',
                'icon'        => '💬',
                'desc'        => 'Client reviews, designations, avatars & 5-star ratings',
                'count'       => HomeSectionItem::forSection('testimonial')->count(),
                'type'        => 'DataTable / Repeater',
                'url'         => route('admin.sections.index', 'testimonial'),
            ],
        ];

        $staticSections = [
            'banner'        => [
                'label'       => 'Promotional Banners',
                'icon'        => '🏷️',
                'desc'        => '2 highlight promo banners with discount text',
                'url'         => route('admin.home-content.edit', 'banner'),
            ],
            'shipping'      => [
                'label'       => 'Shipping & Benefits',
                'icon'        => '🚚',
                'desc'        => '4 store benefit badges (payment, delivery, etc.)',
                'url'         => route('admin.home-content.edit', 'shipping'),
            ],
        ];

        $totalDynamicItems = HomeSectionItem::count();
        $totalActiveItems = HomeSectionItem::active()->count();
        $totalCategories = Category::count();
        $totalProducts = Product::count();
        $totalProductImages = ProductImage::count();

        return view('admin.dashboard', compact(
            'dynamicSections',
            'staticSections',
            'totalDynamicItems',
            'totalActiveItems',
            'totalCategories',
            'totalProducts',
            'totalProductImages'
        ));
    }
}
