<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\HomeSectionItemController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Category;
use App\Models\HomePageContent;
use App\Models\HomeSectionItem;
use App\Models\Product;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Artisan;

// ───── Public Home Page ─────
Route::get('/', function () {
    $data = [
        // Static / key-value sections
        'banner'       => HomePageContent::getSection('banner'),
        'shipping'     => HomePageContent::getSection('shipping'),

        // Dynamic Section Meta
        'collection'   => HomePageContent::getSection('collection'),
        'bestSelling'  => HomePageContent::getSection('best_selling'),
        'ourProducts'  => HomePageContent::getSection('our_products'),
        'testimonial'  => HomePageContent::getSection('testimonial'),
        'heroSlider'   => HomePageContent::getSection('hero_slider'),

        // Dynamic Section Repeater Items
        'heroSlides'          => HomeSectionItem::forSection('hero_slider')->active()->ordered()->get(),
        'collectionItems'     => HomeSectionItem::forSection('collection')->active()->ordered()->get(),
        'bestSellingProducts' => HomeSectionItem::forSection('best_selling')->active()->ordered()->get(),
        'monthlyProducts'     => HomeSectionItem::forSection('our_products')->active()->ordered()->get(),
        'testimonials'        => HomeSectionItem::forSection('testimonial')->active()->ordered()->get(),
    ];
    return view('pages.home.home', $data);
})->name('home');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ShopController::class, 'show'])->name('product.detail');
Route::get('/product-details/{slug}', [ShopController::class, 'show']);
Route::get('/product-details.html', function () {
    $first = Product::active()->first();
    return $first ? redirect()->route('product.detail', $first->slug) : redirect()->route('shop');
});

// ───── Admin Panel ─────
Route::prefix('admin')->group(function () {

    // Auth (guest only)
    Route::get('/login',   [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login',  [AuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Protected admin area
    Route::middleware('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Dynamic Repeater Section Item Routes (DataTable + CRUD)
        Route::get('/sections/{section}',                       [HomeSectionItemController::class, 'index'])->name('admin.sections.index');
        Route::post('/sections/{section}/items',                [HomeSectionItemController::class, 'store'])->name('admin.sections.items.store');
        Route::put('/sections/{section}/items/{id}',            [HomeSectionItemController::class, 'update'])->name('admin.sections.items.update');
        Route::delete('/sections/{section}/items/{id}',         [HomeSectionItemController::class, 'destroy'])->name('admin.sections.items.destroy');
        Route::post('/sections/{section}/items/{id}/toggle',    [HomeSectionItemController::class, 'toggleStatus'])->name('admin.sections.items.toggle');
        Route::post('/sections/{section}/meta',                 [HomeSectionItemController::class, 'updateMeta'])->name('admin.sections.meta.update');

        // Header & Logo Management
        Route::get('/header',                       [HomeContentController::class, 'editHeader'])->name('admin.header.edit');
        Route::post('/header',                      [HomeContentController::class, 'updateHeader'])->name('admin.header.update');

        // Static Key-Value Sections (Banners, Shipping, etc.)
        Route::get('/home-content',                 [HomeContentController::class, 'index'])->name('admin.home-content.index');
        Route::get('/home-content/{section}/edit',  [HomeContentController::class, 'edit'])->name('admin.home-content.edit');
        Route::post('/home-content/{section}',      [HomeContentController::class, 'update'])->name('admin.home-content.update');

        // ─── Master Catalog Management (Categories & Products) ───
        Route::prefix('master')->group(function () {
            // Categories
            Route::get('/categories',                      [CategoryController::class, 'index'])->name('admin.categories.index');
            Route::post('/categories',                     [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::put('/categories/{id}',                 [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::delete('/categories/{id}',              [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
            Route::post('/categories/{id}/toggle',         [CategoryController::class, 'toggleStatus'])->name('admin.categories.toggle');

            // Products
            Route::get('/products',                        [ProductController::class, 'index'])->name('admin.products.index');
            Route::get('/products/create',                 [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/products',                       [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/products/{id}/edit',              [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::put('/products/{id}',                   [ProductController::class, 'update'])->name('admin.products.update');
            Route::delete('/products/{id}',                [ProductController::class, 'destroy'])->name('admin.products.destroy');
            Route::post('/products/{id}/toggle',           [ProductController::class, 'toggleStatus'])->name('admin.products.toggle');
            Route::delete('/products/images/{id}',          [ProductController::class, 'deleteImage'])->name('admin.products.images.delete');
            Route::post('/products/{productId}/images/{imageId}/primary', [ProductController::class, 'setPrimaryImage'])->name('admin.products.images.primary');
        });
    });
});

// 1. Run database migrations
Route::get('/artisan/migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return '<pre>' . Artisan::output() . '</pre>';
});

// 2. Run database seeders
Route::get('/artisan/seed', function () {
    Artisan::call('db:seed', ['--force' => true]);
    return '<pre>' . Artisan::output() . '</pre>';
});

// 3. Clear cache, route, config, and views
Route::get('/artisan/clear', function () {
    Artisan::call('optimize:clear');
    return '<pre>' . Artisan::output() . '</pre>';
});