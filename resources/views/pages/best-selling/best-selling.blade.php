@extends('layout.app')

@section('content')
    <!-- Start offcanvas filter sidebar -->
    <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
            </svg> <span class="offcanvas__filter--close__text">Close</span>
        </button>
        <div class="offcanvas__filter--sidebar__inner">
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Categories</h2>
                <ul class="widget__categories--menu">
                    <li class="widget__categories--menu__list">
                        <a class="widget__categories--menu__label d-flex align-items-center justify-content-between {{ !$currentCategory ? 'active' : '' }}"
                            href="{{ route('best-selling') }}"
                            style="text-decoration: none; padding: 10px 0; {{ !$currentCategory ? 'color: #388e3c; font-weight: 700;' : 'color: #333;' }}">
                            <span class="widget__categories--menu__text">All Best Sellers</span>
                            <span class="badge bg-light text-dark rounded-pill border">{{ \App\Models\Product::active()->bestSelling()->count() }}</span>
                        </a>
                    </li>
                    @foreach($categories as $cat)
                        @php $isActive = $currentCategory && $currentCategory->id === $cat->id; @endphp
                        <li class="widget__categories--menu__list">
                            <a class="widget__categories--menu__label d-flex align-items-center justify-content-between {{ $isActive ? 'active' : '' }}"
                                href="{{ route('best-selling', ['category' => $cat->slug]) }}"
                                style="text-decoration: none; padding: 10px 0; {{ $isActive ? 'color: #388e3c; font-weight: 700;' : 'color: #333;' }}">
                                <span class="widget__categories--menu__text">{{ $cat->name }}</span>
                                <span class="badge bg-light text-dark rounded-pill border">{{ $cat->products_count }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Start Price Filter Widget -->
            <div class="single__widget price__filter widget__bg">
                <h2 class="widget__title h3">Filter By Price</h2>
                <form class="price__filter--form" action="{{ route('best-selling') }}" method="GET">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('sort'))
                        <input type="hidden" name="sort" value="{{ request('sort') }}">
                    @endif
                    @if(request('search'))
                        <input type="hidden" name="search" value="{{ request('search') }}">
                    @endif
                    <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="Filter-Price-GTE-mobile">From</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">₹</span>
                                <input class="price__filter--input__field border-0" 
                                    name="filter.v.price.gte" 
                                    id="Filter-Price-GTE-mobile" 
                                    type="number" 
                                    placeholder="0" 
                                    min="0" 
                                    value="{{ $priceFrom ?? '' }}"
                                    style="width: 100%; outline: none; background: transparent;">
                            </div>
                        </div>
                        <div class="price__divider">
                            <span>-</span>
                        </div>
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="Filter-Price-LTE-mobile">To</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">₹</span>
                                <input class="price__filter--input__field border-0" 
                                    name="filter.v.price.lte" 
                                    id="Filter-Price-LTE-mobile" 
                                    type="number" 
                                    min="0" 
                                    placeholder="250.00" 
                                    value="{{ $priceTo ?? '' }}"
                                    style="width: 100%; outline: none; background: transparent;"> 
                            </div>	
                        </div>
                    </div>
                    <button class="btn price__filter--btn" type="submit">Filter</button>
                </form>
            </div>
            <!-- End Price Filter Widget -->

            @php
                $hasPriceFilter = (!empty($priceFrom) || !empty($priceTo) || request('filter_v_price_gte') || request('filter_v_price_lte') || request('price_from') || request('price_to'));
                $hasActiveFilters = request('category') || request('search') || (request('sort') && request('sort') !== 'latest') || $hasPriceFilter;
            @endphp
            @if($hasActiveFilters)
                <div class="single__widget widget__bg text-center">
                    <a href="{{ route('best-selling') }}" class="btn btn-sm btn-outline-secondary w-100" style="padding: 8px 12px; font-size: 13px;">
                        ✕ Clear All Filters
                    </a>
                </div>
            @endif
        </div>
    </div>
    <!-- End offcanvas filter sidebar -->

    <!-- Start shop left sidebar -->
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">
                                {{ $currentCategory ? $currentCategory->name . ' - Best Selling' : 'Best Selling Products' }}
                            </h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items">
                                    <a class="text-white" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb__content--menu__items">
                                    @if($currentCategory)
                                        <a class="text-white" href="{{ route('best-selling') }}">Best Selling</a>
                                    @else
                                        <span class="text-white">Best Selling</span>
                                    @endif
                                </li>
                                @if($currentCategory)
                                    <li class="breadcrumb__content--menu__items">
                                        <span class="text-white">{{ $currentCategory->name }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start shop section -->
        <section class="shop__section section--padding">
            <div class="container-fluid">
                <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
                    <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                        <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="pointer-events: none;">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="28"
                                d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
                            <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="28" />
                            <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="28" />
                            <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="28" />
                        </svg>
                        <span class="widget__filter--btn__text" style="pointer-events: none;">Filter</span>
                    </button>
                    <div class="product__view--mode d-flex align-items-center">
                        <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                            <label class="product__view--label">Sort By :</label>
                            <div class="select shop__header--select">
                                <select class="product__view--select" onchange="window.location.href = this.value;">
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'latest', 'page' => null]) }}" {{ request('sort', 'latest') == 'latest' ? 'selected' : '' }}>Sort by latest</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_low_high', 'page' => null]) }}" {{ request('sort', 'price_low_high') == 'price_low_high' ? 'selected' : '' }}>Price: Low to High</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_high_low', 'page' => null]) }}" {{ request('sort', 'price_high_low') == 'price_high_low' ? 'selected' : '' }}>Price: High to Low</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'name_asc', 'page' => null]) }}" {{ request('sort', 'name_asc') == 'name_asc' ? 'selected' : '' }}>Name: A to Z</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'name_desc', 'page' => null]) }}" {{ request('sort', 'name_desc') == 'name_desc' ? 'selected' : '' }}>Name: Z to A</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'rating', 'page' => null]) }}" {{ request('sort', 'rating') == 'rating' ? 'selected' : '' }}>Sort by rating</option>
                                </select>
                            </div>
                        </div>
                        <div class="product__view--mode__list">
                            <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                                <button class="product__grid--column__buttons--icons active" aria-label="grid btn"
                                    data-toggle="tab" data-target="#product_grid">
                                    <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                        <g transform="translate(-1360 -479)">
                                            <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4"
                                                transform="translate(1360 479)" fill="currentColor" />
                                            <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4"
                                                transform="translate(1360 484)" fill="currentColor" />
                                            <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4"
                                                transform="translate(1365 479)" fill="currentColor" />
                                            <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4"
                                                transform="translate(1365 484)" fill="currentColor" />
                                        </g>
                                    </svg>
                                </button>
                                <button class="product__grid--column__buttons--icons" aria-label="list btn"
                                    data-toggle="tab" data-target="#product_list">
                                    <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                        <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                            <g transform="translate(12 -2)">
                                                <g id="Group_1326" data-name="Group 1326">
                                                    <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3"
                                                        height="2" transform="translate(1364 483)"
                                                        fill="currentColor" />
                                                    <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9"
                                                        height="2" transform="translate(1368 483)"
                                                        fill="currentColor" />
                                                </g>
                                                <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                                    <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3"
                                                        height="2" transform="translate(1364 483)"
                                                        fill="currentColor" />
                                                    <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9"
                                                        height="2" transform="translate(1368 483)"
                                                        fill="currentColor" />
                                                </g>
                                                <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                                    <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3"
                                                        height="2" transform="translate(1364 487)"
                                                        fill="currentColor" />
                                                    <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9"
                                                        height="2" transform="translate(1368 487)"
                                                        fill="currentColor" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="product__view--mode__list product__view--search d-xl-block d-none ">
                            <form class="product__view--search__form" action="{{ route('best-selling') }}" method="GET">
                                @if(request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                @if(request('sort'))
                                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                                @endif
                                <label>
                                    <input class="product__view--search__input border-0" name="search"
                                        value="{{ request('search') }}" placeholder="Search best sellers..." type="text">
                                </label>
                                <button class="product__view--search__btn" aria-label="search btn" type="submit">
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                        width="22.51" height="20.443" viewBox="0 0 512 512">
                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <p class="product__showing--count">
                        Showing {{ $products->firstItem() ?? 0 }}–{{ $products->lastItem() ?? 0 }} of {{ $products->total() }} results
                        @if($currentCategory)
                            <span class="text-muted ms-1">in <strong>{{ $currentCategory->name }}</strong></span>
                        @endif
                    </p>
                </div>
                <div class="row">
                    <!-- Left Sidebar (Desktop) -->
                    <div class="col-xl-3 col-lg-4">
                        <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                            <!-- Categories Widget -->
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title h3">Categories</h2>
                                <ul class="widget__categories--menu">
                                    <li class="widget__categories--menu__list">
                                        <a class="widget__categories--menu__label d-flex align-items-center justify-content-between {{ !$currentCategory ? 'active' : '' }}"
                                            href="{{ route('best-selling') }}"
                                            style="text-decoration: none; padding: 10px 0; {{ !$currentCategory ? 'color: #388e3c; font-weight: 700;' : 'color: #333;' }}">
                                            <span class="widget__categories--menu__text">All Best Sellers</span>
                                            <span class="badge bg-light text-dark rounded-pill border">{{ \App\Models\Product::active()->bestSelling()->count() }}</span>
                                        </a>
                                    </li>
                                    @foreach($categories as $cat)
                                        @php $isActive = $currentCategory && $currentCategory->id === $cat->id; @endphp
                                        <li class="widget__categories--menu__list">
                                            <a class="widget__categories--menu__label d-flex align-items-center justify-content-between {{ $isActive ? 'active' : '' }}"
                                                href="{{ route('best-selling', ['category' => $cat->slug]) }}"
                                                style="text-decoration: none; padding: 10px 0; {{ $isActive ? 'color: #388e3c; font-weight: 700;' : 'color: #333;' }}">
                                                <span class="widget__categories--menu__text">{{ $cat->name }}</span>
                                                <span class="badge bg-light text-dark rounded-pill border">{{ $cat->products_count }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Start Price Filter Widget -->
                            <div class="single__widget price__filter widget__bg">
                                <h2 class="widget__title h3">Filter By Price</h2>
                                <form class="price__filter--form" action="{{ route('best-selling') }}" method="GET">
                                    @if(request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif
                                    @if(request('sort'))
                                        <input type="hidden" name="sort" value="{{ request('sort') }}">
                                    @endif
                                    @if(request('search'))
                                        <input type="hidden" name="search" value="{{ request('search') }}">
                                    @endif
                                    <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                                        <div class="price__filter--group">
                                            <label class="price__filter--label" for="Filter-Price-GTE">From</label>
                                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                                <span class="price__filter--currency">₹</span>
                                                <input class="price__filter--input__field border-0" 
                                                    name="filter.v.price.gte" 
                                                    id="Filter-Price-GTE" 
                                                    type="number" 
                                                    placeholder="0" 
                                                    min="0" 
                                                    value="{{ $priceFrom ?? '' }}"
                                                    style="width: 100%; outline: none; background: transparent;">
                                            </div>
                                        </div>
                                        <div class="price__divider">
                                            <span>-</span>
                                        </div>
                                        <div class="price__filter--group">
                                            <label class="price__filter--label" for="Filter-Price-LTE">To</label>
                                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                                <span class="price__filter--currency">₹</span>
                                                <input class="price__filter--input__field border-0" 
                                                    name="filter.v.price.lte" 
                                                    id="Filter-Price-LTE" 
                                                    type="number" 
                                                    min="0" 
                                                    placeholder="250.00" 
                                                    value="{{ $priceTo ?? '' }}"
                                                    style="width: 100%; outline: none; background: transparent;"> 
                                            </div>	
                                        </div>
                                    </div>
                                    <button class="btn price__filter--btn" type="submit">Filter</button>
                                </form>
                            </div>
                            <!-- End Price Filter Widget -->

                            @if($hasActiveFilters)
                                <div class="single__widget widget__bg text-center">
                                    <a href="{{ route('best-selling') }}" class="btn btn-outline-secondary w-100" style="padding: 9px 12px; font-size: 14px; font-weight: 600;">
                                        ✕ Clear All Filters
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Products Grid & List Area -->
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop__product--wrapper">
                            <div class="tab_content">
                                <!-- Grid View -->
                                <div id="product_grid" class="tab_pane active show">
                                    <div class="product__section--inner product__section--style3__inner">
                                        <div class="row row-cols-xxl-4 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-2 mb--n30">
                                            @forelse($products as $product)
                                                <div class="col mb-30">
                                                    <div class="product__items product__items2">
                                                        <div class="product__items--thumbnail">
                                                            <a class="product__items--link" href="{{ route('product.detail', $product->slug) }}">
                                                                <img class="product__items--img product__primary--img"
                                                                    src="{{ $product->primary_image_url }}" alt="{{ $product->name }}">
                                                                @if($product->secondary_image_url)
                                                                    <img class="product__items--img product__secondary--img"
                                                                        src="{{ $product->secondary_image_url }}" alt="{{ $product->name }}">
                                                                @endif
                                                            </a>
                                                            @if($product->badge)
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items {{ strtolower($product->badge) }}">{{ $product->badge }}</span>
                                                                </div>
                                                            @else
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items hot">Best Seller</span>
                                                                </div>
                                                            @endif
                                                            <ul class="product__items--action">
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn" href="javascript:void(0)">
                                                                        <svg class="product__items--action__btn--svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512">
                                                                            <path
                                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="32" />
                                                                        </svg>
                                                                        <span class="visually-hidden">Wishlist</span>
                                                                    </a>
                                                                </li>
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn" href="javascript:void(0)">
                                                                        <svg class="product__items--action__btn--svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512">
                                                                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                                                stroke-width="32" />
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-miterlimit="10" stroke-width="32"
                                                                                d="M338.29 338.29L448 448" />
                                                                        </svg>
                                                                        <span class="visually-hidden">Quick View</span>
                                                                    </a>
                                                                </li>
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn" href="javascript:void(0)">
                                                                        <svg class="product__items--action__btn--svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="32"
                                                                                d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                                            <path
                                                                                d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="32" />
                                                                        </svg>
                                                                        <span class="visually-hidden">Compare</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product__items--content product__items2--content text-center">
                                                            <a class="add__to--cart__btn" href="javascript:void(0)">+ Add to cart</a>
                                                            <h3 class="product__items--content__title h4">
                                                                <a href="{{ route('product.detail', $product->slug) }}">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="product__items--price">
                                                                <span class="current__price">{{ $product->formatted_price }}</span>
                                                                @if($product->formatted_old_price)
                                                                    <span class="old__price">{{ $product->formatted_old_price }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                                <ul class="d-flex">
                                                                    @php $stars = round($product->rating ?? 5); @endphp
                                                                    @for($s = 1; $s <= 5; $s++)
                                                                        <li class="product__items--rating__list">
                                                                            <span class="product__items--rating__icon">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                                    height="9.732" viewBox="0 0 10.105 9.732">
                                                                                    <path data-name="star - Copy"
                                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                                        transform="translate(0 -0.018)"
                                                                                        fill="{{ $s <= $stars ? 'currentColor' : '#c7c5c2' }}" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                    @endfor
                                                                </ul>
                                                                <span class="product__items--rating__count--number">({{ number_format($product->rating ?? 5, 1) }})</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12 text-center py-5">
                                                    <div style="padding: 50px 20px; background: #fff; border: 1px solid #eee; border-radius: 8px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="#ff6b6b" viewBox="0 0 16 16" style="margin-bottom: 15px;">
                                                            <path d="M8 16c3.314 0 6-2.686 6-6 0-3.314-2.686-6-6-6-3.314 0-6 2.686-6 6 0 3.314 2.686 6 6 6z"/>
                                                        </svg>
                                                        <h4 style="font-weight: 700; color: #333; margin-bottom: 8px;">No Best Selling Products Found</h4>
                                                        <p style="color: #777; margin-bottom: 20px;">
                                                            @if($currentCategory)
                                                                There are currently no best selling products in the <strong>{{ $currentCategory->name }}</strong> category matching your criteria.
                                                            @else
                                                                There are currently no products featured as best sellers matching your criteria.
                                                            @endif
                                                        </p>
                                                        <a href="{{ route('shop') }}" class="btn" style="background-color: #388e3c; color: #fff; padding: 10px 28px; border-radius: 25px; font-weight: 600;">
                                                            Explore All Products
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

                                <!-- List View -->
                                <div id="product_list" class="tab_pane">
                                    <div class="product__section--inner product__section--style3__inner">
                                        <div class="row row-cols-1 mb--n30">
                                            @forelse($products as $product)
                                                <div class="col mb-30">
                                                    <div class="product__items product__list--items d-flex">
                                                        <div class="product__items--thumbnail product__list--items__thumbnail">
                                                            <a class="product__items--link" href="{{ route('product.detail', $product->slug) }}">
                                                                <img class="product__items--img product__primary--img"
                                                                    src="{{ $product->primary_image_url }}" alt="{{ $product->name }}">
                                                                @if($product->secondary_image_url)
                                                                    <img class="product__items--img product__secondary--img"
                                                                        src="{{ $product->secondary_image_url }}" alt="{{ $product->name }}">
                                                                @endif
                                                            </a>
                                                            @if($product->badge)
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items {{ strtolower($product->badge) }}">{{ $product->badge }}</span>
                                                                </div>
                                                            @else
                                                                <div class="product__badge">
                                                                    <span class="product__badge--items hot">Best Seller</span>
                                                                </div>
                                                            @endif
                                                            <ul class="product__items--action">
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn" href="javascript:void(0)">
                                                                        <svg class="product__items--action__btn--svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512">
                                                                            <path
                                                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="32" />
                                                                        </svg>
                                                                        <span class="visually-hidden">Wishlist</span>
                                                                    </a>
                                                                </li>
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn" href="javascript:void(0)">
                                                                        <svg class="product__items--action__btn--svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512">
                                                                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                                                stroke-width="32" />
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-miterlimit="10" stroke-width="32"
                                                                                d="M338.29 338.29L448 448" />
                                                                        </svg>
                                                                        <span class="visually-hidden">Quick View</span>
                                                                    </a>
                                                                </li>
                                                                <li class="product__items--action__list">
                                                                    <a class="product__items--action__btn" href="javascript:void(0)">
                                                                        <svg class="product__items--action__btn--svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 512 512">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="32"
                                                                                d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                                            <path
                                                                                d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                                                fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="32" />
                                                                        </svg>
                                                                        <span class="visually-hidden">Compare</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product__list--items__content">
                                                            <h3 class="product__list--items__content--title h4 mb-10">
                                                                <a href="{{ route('product.detail', $product->slug) }}">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="product__items--price mb-10">
                                                                <span class="current__price">{{ $product->formatted_price }}</span>
                                                                @if($product->formatted_old_price)
                                                                    <span class="old__price">{{ $product->formatted_old_price }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                                <ul class="d-flex">
                                                                    @php $stars = round($product->rating ?? 5); @endphp
                                                                    @for($s = 1; $s <= 5; $s++)
                                                                        <li class="product__items--rating__list">
                                                                            <span class="product__items--rating__icon">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                                    height="9.732" viewBox="0 0 10.105 9.732">
                                                                                    <path data-name="star - Copy"
                                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                                        transform="translate(0 -0.018)"
                                                                                        fill="{{ $s <= $stars ? 'currentColor' : '#c7c5c2' }}" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                    @endfor
                                                                </ul>
                                                                <span class="product__items--rating__count--number">({{ number_format($product->rating ?? 5, 1) }})</span>
                                                            </div>
                                                            <p class="product__list--items__content--desc mb-20">
                                                                {{ $product->short_description ?? Str::limit(strip_tags($product->description), 140) }}
                                                            </p>
                                                            <a class="btn add__to--cart__btn2" href="javascript:void(0)">+ Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-12 text-center py-5">
                                                    <div style="padding: 50px 20px; background: #fff; border: 1px solid #eee; border-radius: 8px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="#ff6b6b" viewBox="0 0 16 16" style="margin-bottom: 15px;">
                                                            <path d="M8 16c3.314 0 6-2.686 6-6 0-3.314-2.686-6-6-6-3.314 0-6 2.686-6 6 0 3.314 2.686 6 6 6z"/>
                                                        </svg>
                                                        <h4 style="font-weight: 700; color: #333; margin-bottom: 8px;">No Best Selling Products Found</h4>
                                                        <p style="color: #777; margin-bottom: 20px;">
                                                            @if($currentCategory)
                                                                There are currently no best selling products in the <strong>{{ $currentCategory->name }}</strong> category matching your criteria.
                                                            @else
                                                                There are currently no products featured as best sellers matching your criteria.
                                                            @endif
                                                        </p>
                                                        <a href="{{ route('shop') }}" class="btn" style="background-color: #388e3c; color: #fff; padding: 10px 28px; border-radius: 25px; font-weight: 600;">
                                                            Explore All Products
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            @if ($products->hasPages())
                                <div class="pagination__area bg__gray--color">
                                    <nav class="pagination justify-content-center">
                                        <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                            {{-- Previous Page Link --}}
                                            @if ($products->onFirstPage())
                                                <li class="pagination__list disabled">
                                                    <span class="pagination__item--arrow link" style="opacity: 0.4; cursor: not-allowed;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            @else
                                                <li class="pagination__list">
                                                    <a href="{{ $products->previousPageUrl() }}" class="pagination__item--arrow link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                                        </svg>
                                                        <span class="visually-hidden">page left arrow</span>
                                                    </a>
                                                </li>
                                            @endif

                                            {{-- Pagination Elements --}}
                                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                @if ($page == $products->currentPage())
                                                    <li class="pagination__list"><span class="pagination__item pagination__item--current">{{ $page }}</span></li>
                                                @else
                                                    <li class="pagination__list"><a href="{{ $url }}" class="pagination__item link">{{ $page }}</a></li>
                                                @endif
                                            @endforeach

                                            {{-- Next Page Link --}}
                                            @if ($products->hasMorePages())
                                                <li class="pagination__list">
                                                    <a href="{{ $products->nextPageUrl() }}" class="pagination__item--arrow link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                                        </svg>
                                                        <span class="visually-hidden">page right arrow</span>
                                                    </a>
                                                </li>
                                            @else
                                                <li class="pagination__list disabled">
                                                    <span class="pagination__item--arrow link" style="opacity: 0.4; cursor: not-allowed;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shop section -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('img/other/shipping1.png') }}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('img/other/shipping2.png') }}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('img/other/shipping3.png') }}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">30 day guarantee</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="{{ asset('img/other/shipping4.png') }}" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Support</h2>
                            <p class="shipping__items2--content__desc">Support every time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->
    </main>
    <!-- End shop left sidebar -->
@endsection
