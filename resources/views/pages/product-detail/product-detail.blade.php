@extends('layout.app')

@section('content')
<!-- Start product detail -->
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">{{ $product->name }}</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="{{ route('shop') }}">Shop</a></li>
                            @if($product->category)
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="{{ route('shop', ['category' => $product->category->slug]) }}">{{ $product->category->name }}</a></li>
                            @endif
                            <li class="breadcrumb__content--menu__items"><span class="text-white">{{ $product->name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <div class="product__details--media">
                        @php
                            $images = $product->images;
                            if ($images->isEmpty()) {
                                $gallery = [$product->primary_image_url];
                            } else {
                                $gallery = $images->map(fn($img) => $img->url)->toArray();
                            }
                        @endphp
                        <div class="product__media--preview swiper">
                            <div class="swiper-wrapper">
                                @foreach($gallery as $imgUrl)
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{ $imgUrl }}">
                                                <img class="product__media--preview__items--img" src="{{ $imgUrl }}" alt="{{ $product->name }}">
                                            </a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="{{ $imgUrl }}" data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">product view</span> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product__media--nav swiper">
                            <div class="swiper-wrapper">
                                @foreach($gallery as $imgUrl)
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="{{ $imgUrl }}" alt="{{ $product->name }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper__nav--btn swiper-button-next"></div>
                            <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                    </div>
                </div>   
                <div class="col">
                    <div class="product__details--info">
                        <form action="javascript:void(0)">
                            <h2 class="product__details--info__title mb-15">{{ $product->name }}</h2>
                            <div class="product__details--info__price mb-15">
                                <span class="current__price" style="font-size: 2.2rem; font-weight: 700; color: var(--theme-color);">{{ $product->formatted_price }}</span>
                                @if($product->old_price)
                                    <span class="old__price" style="font-size: 1.8rem; text-decoration: line-through; color: var(--light-color2); margin-left: 10px;">{{ $product->formatted_old_price }}</span>
                                @endif
                                @if($product->badge)
                                    <span class="badge bg-danger text-white ms-3 rounded-pill px-3 py-1" style="font-size: 1.2rem; vertical-align: middle;">{{ $product->badge }}</span>
                                @endif
                            </div>
                            <div class="product__items--rating d-flex align-items-center mb-15">
                                <ul class="d-flex">
                                    @php $stars = round($product->rating ?? 5); @endphp
                                    @for($s = 1; $s <= 5; $s++)
                                        <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="{{ $s <= $stars ? 'currentColor' : '#c7c5c2' }}"/>
                                                </svg>
                                            </span>
                                        </li>
                                    @endfor
                                </ul>
                                <span class="product__items--rating__count--number ms-2">({{ number_format($product->rating ?? 5, 1) }} / 5.0)</span>
                            </div>
                            
                            @if($product->short_description)
                                <p class="product__details--info__desc mb-20" style="font-size: 1.5rem; line-height: 1.7;">
                                    {{ $product->short_description }}
                                </p>
                            @elseif($product->description)
                                <p class="product__details--info__desc mb-20" style="font-size: 1.5rem; line-height: 1.7;">
                                    {{ Str::limit(strip_tags($product->description), 200) }}
                                </p>
                            @endif

                            <div class="product__variant">
                                <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                    <div class="quantity__box">
                                        <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                        <label>
                                            <input type="number" class="quantity__number quickview__value--number" value="1" min="1" max="{{ max(1, $product->stock_quantity) }}" data-counter />
                                        </label>
                                        <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                    </div>
                                    <button class="btn quickview__cart--btn" type="button" style="padding: 0 3rem;">+ Add To Cart</button>  
                                </div>
                                <div class="product__variant--list mb-20 d-flex align-items-center gap-3">
                                    <a class="variant__wishlist--icon d-inline-flex align-items-center" href="javascript:void(0)" title="Add to wishlist" style="color: #666; font-size: 1.4rem;">
                                        <svg class="quickview__variant--wishlist__svg me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                            <path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
                                        </svg>
                                        Add to Wishlist
                                    </a>
                                </div>
                                <div class="product__variant--list mb-15">
                                    <div class="product__details--info__meta" style="border-top: 1px solid #eee; padding-top: 15px;">
                                        <p class="product__details--info__meta--list mb-2"><strong>SKU:</strong> <span>{{ $product->sku ?? ('MAMA-' . str_pad($product->id, 4, '0', STR_PAD_LEFT)) }}</span></p>
                                        <p class="product__details--info__meta--list mb-2">
                                            <strong>Category:</strong> 
                                            @if($product->category)
                                                <a href="{{ route('shop', ['category' => $product->category->slug]) }}" style="color: var(--theme-color); font-weight: 600;">{{ $product->category->name }}</a>
                                            @else
                                                <span>Herbal Care</span>
                                            @endif
                                        </p>
                                        <p class="product__details--info__meta--list mb-2">
                                            <strong>Availability:</strong>
                                            @if($product->stock_quantity > 0)
                                                <span style="color: #388e3c; font-weight: 600;">✓ In Stock ({{ $product->stock_quantity }} units available)</span>
                                            @else
                                                <span style="color: #d32f2f; font-weight: 600;">✕ Out of Stock</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quickview__social d-flex align-items-center mb-15">
                                <label class="quickview__social--title">Social Share:</label>
                                <ul class="quickview__social--wrapper mt-0 d-flex">
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                <path data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://twitter.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                <path data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                <path data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="guarantee__safe--checkout">
                                <h5 class="guarantee__safe--checkout__title">Guaranteed Safe Checkout</h5>
                                <img class="guarantee__safe--checkout__img" src="{{ asset('img/other/safe-checkout.png') }}" alt="Payment Image">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__tab--one product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#information">Additional Info</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">Reviews</li>
                    </ul>
                    <div class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            {{-- Tab 1: Description --}}
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10">About {{ $product->name }}</h2>
                                        <div class="product__tab--content__desc" style="font-size: 1.5rem; line-height: 1.8; color: #555;">
                                            @if($product->description)
                                                {!! nl2br(e($product->description)) !!}
                                            @else
                                                <p>Experience the pure authentic wellness of Mama's Herbal Products. Handcrafted with traditional Ayurvedic recipes and naturally sourced botanicals.</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product__tab--content__step">
                                        <h2 class="product__tab--content__title h4 mb-10">Key Highlights</h2>
                                        <ul>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                100% natural and herbal formulation with zero harmful additives.
                                            </li>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                Carefully handpicked herbs for optimum purity, aroma, and efficacy.
                                            </li>
                                            <li class="product__tab--content__list">
                                                <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                Ethically sourced, sustainably packaged, and cruelty-free.
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            {{-- Tab 2: Additional Information --}}
                            <div id="information" class="tab_pane">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step">
                                        <h2 class="product__tab--content__title h4 mb-15">Product Specifications</h2>
                                        <table class="table table-bordered" style="font-size: 1.4rem; max-width: 600px;">
                                            <tbody>
                                                <tr>
                                                    <th style="background: #f8f9fa; width: 40%;">Product Name</th>
                                                    <td>{{ $product->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #f8f9fa;">Category</th>
                                                    <td>{{ $product->category->name ?? 'General Herbal' }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #f8f9fa;">SKU</th>
                                                    <td>{{ $product->sku ?? ('MAMA-' . str_pad($product->id, 4, '0', STR_PAD_LEFT)) }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #f8f9fa;">Price</th>
                                                    <td>{{ $product->formatted_price }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #f8f9fa;">Availability</th>
                                                    <td>{{ $product->stock_quantity > 0 ? 'In Stock (' . $product->stock_quantity . ' available)' : 'Out of Stock' }}</td>
                                                </tr>
                                                <tr>
                                                    <th style="background: #f8f9fa;">Rating</th>
                                                    <td>★ {{ number_format($product->rating ?? 5, 1) }} / 5.0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- Tab 3: Reviews --}}
                            <div id="reviews" class="tab_pane">
                                <div class="product__reviews">
                                    <div class="product__reviews--header">
                                        <h2 class="product__reviews--header__title h3 mb-20">Customer Feedback</h2>
                                        <div class="reviews__ratting d-flex align-items-center">
                                            <ul class="d-flex">
                                                @for($s = 1; $s <= 5; $s++)
                                                    <li class="reviews__ratting--list">
                                                        <span class="reviews__ratting--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.105" height="12.732" viewBox="0 0 10.105 9.732">
                                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                @endfor
                                            </ul>
                                            <span class="reviews__summary--caption ms-2">Overall Rating: {{ number_format($product->rating ?? 5, 1) }} / 5.0</span>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--area">
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumb">
                                                <img src="{{ asset('img/other/comment-thumb1.png') }}" alt="comment-thumb">
                                            </div>
                                            <div class="reviews__comment--content">
                                                <div class="reviews__comment--top d-flex justify-content-between">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title h4">Sita Devi</h3>
                                                        <span class="reviews__comment--content__date text-muted" style="font-size: 1.2rem;">Verified Buyer</span>
                                                    </div>
                                                    <span class="reviews__ratting--icon" style="color: #ffc107;">★★★★★</span>
                                                </div>
                                                <p class="reviews__comment--content__desc">
                                                    Very pleased with this purchase. The quality and authentic aroma are exceptional, and it arrived quickly in secure packaging. Highly recommend!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->

    <!-- Start related products section -->
    @if($relatedProducts && $relatedProducts->count() > 0)
        <section class="product__section product__section--style3 section--padding">
            <div class="container product3__section--container">
                <div class="section__heading3 text-center mb-40">
                    <h2 class="section__heading3--maintitle">You May Also Like</h2>
                </div>
                <div class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach($relatedProducts as $rel)
                            <div class="swiper-slide">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="{{ route('product.detail', $rel->slug) }}">
                                            <img class="product__items--img product__primary--img" src="{{ $rel->primary_image_url }}" alt="{{ $rel->name }}">
                                            @if($rel->secondary_image_url)
                                                <img class="product__items--img product__secondary--img" src="{{ $rel->secondary_image_url }}" alt="{{ $rel->name }}">
                                            @endif
                                        </a>
                                        @if($rel->badge)
                                            <div class="product__badge">
                                                <span class="product__badge--items {{ strtolower($rel->badge) }}">{{ $rel->badge }}</span>
                                            </div>
                                        @endif
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="{{ route('product.detail', $rel->slug) }}">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">View Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="{{ route('product.detail', $rel->slug) }}">View Details</a>
                                        <h3 class="product__items--content__title h4">
                                            <a href="{{ route('product.detail', $rel->slug) }}">{{ $rel->name }}</a>
                                        </h3>
                                        <div class="product__items--price">
                                            <span class="current__price">{{ $rel->formatted_price }}</span>
                                            @if($rel->formatted_old_price)
                                                <span class="old__price">{{ $rel->formatted_old_price }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
    @endif
    <!-- End related products section -->

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
<!-- End product detail -->
@endsection
