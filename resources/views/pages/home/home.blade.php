@extends('layout.app')

@section('content')
    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section mb-60">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    @forelse($heroSlides as $slide)
                        <div class="swiper-slide ">
                            <div class="hero__slider--items slider__4--bg"
                                style="background-image: url('{{ asset($slide->image ?? 'img/slider/home4-slider1.png') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-7">
                                            <div class="slider__content4">
                                                @if ($slide->subtitle)
                                                    <span
                                                        class="slider__content4--subtitle text-white">{{ $slide->subtitle }}</span>
                                                @endif
                                                @if ($slide->title)
                                                    <h2 class="slider__content4--maintitle text-white h1">
                                                        {{ $slide->title }}</h2>
                                                @endif
                                                @if ($slide->description)
                                                    <p class="slider__content4--desc text-white d-sm-none">
                                                        {{ $slide->description }}</p>
                                                @endif
                                                @if ($slide->button_text)
                                                    <a class="btn slider__btn style4"
                                                        href="{{ $slide->button_url ?? '#' }}">{{ $slide->button_text }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="swiper-slide ">
                            <div class="hero__slider--items slider__4--bg"
                                style="background-image: url('{{ asset('img/slider/home4-slider1.png') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-7">
                                            <div class="slider__content4">
                                                <span class="slider__content4--subtitle text-white">As fresh as Fruit</span>
                                                <h2 class="slider__content4--maintitle text-white h1">The Roots Are with
                                                    fruits</h2>
                                                <p class="slider__content4--desc text-white d-sm-none">The more you love
                                                    your health, more you eat organic.</p>
                                                <a class="btn slider__btn style4" href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n30">
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            @php
                                $b1Url = trim($banner['banner_1_url'] ?? '');
                                $b1Title = trim($banner['banner_1_title'] ?? '');
                                $b1Btn = trim($banner['banner_1_btn_text'] ?? '');
                                $hasB1Content = ($b1Title !== '' || $b1Btn !== '');
                            @endphp
                            <a class="banner__items--thumbnail display-block"
                                @if($b1Url !== '') href="{{ $b1Url }}" @else style="cursor: default;" @endif>
                                <img
                                    class="banner__items--thumbnail__img display-block"
                                    src="{{ asset($banner['banner_1_image'] ?? 'img/banner/banner10.png') }}"
                                    alt="banner-img"
                                    style="width: 100%; height: 220px; object-fit: cover; border-radius: 10px;">
                                @if($hasB1Content)
                                <div class="banner__items--content3">
                                    @if($b1Title !== '')
                                    <h2 class="banner__items--content3__title text-white">{{ $b1Title }}</h2>
                                    @endif
                                    @if($b1Btn !== '')
                                    <span class="banner__items--content3__btn text-white">{{ $b1Btn }}
                                        <svg class="banner__two--content__btn--arrow__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                            viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                transform="translate(0 -41.916)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    @endif
                                </div>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            @php
                                $b2Url = trim($banner['banner_2_url'] ?? '');
                                $b2Title = trim($banner['banner_2_title'] ?? '');
                                $b2Btn = trim($banner['banner_2_btn_text'] ?? '');
                                $hasB2Content = ($b2Title !== '' || $b2Btn !== '');
                            @endphp
                            <a class="banner__items--thumbnail display-block"
                                @if($b2Url !== '') href="{{ $b2Url }}" @else style="cursor: default;" @endif>
                                <img
                                    class="banner__items--thumbnail__img display-block"
                                    src="{{ asset($banner['banner_2_image'] ?? 'img/banner/banner11.png') }}"
                                    alt="banner-img"
                                    style="width: 100%; height: 220px; object-fit: cover; border-radius: 10px;">
                                @if($hasB2Content)
                                <div class="banner__items--content3">
                                    @if($b2Title !== '')
                                    <h2 class="banner__items--content3__title text-white">{{ $b2Title }}</h2>
                                    @endif
                                    @if($b2Btn !== '')
                                    <span class="banner__items--content3__btn text-white">{{ $b2Btn }}
                                        <svg class="banner__two--content__btn--arrow__icon"
                                            xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                            viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                transform="translate(0 -41.916)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    @endif
                                </div>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start our collection section -->
        <div class="instagram__section section--padding" style="background-color: beige;">
            <div class="container-fluid p-0">
                <div class="section__heading text-center mb-40">
                    <!-- <span class="section__heading--subtitle">Recently added our store</span> -->
                    <h2 class="section__heading--maintitle">{{ $collection['section_title'] ?? 'Our Collection' }}</h2>
                </div>
                <div class="instagram__section--inner instagram__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @forelse($collectionItems as $item)
                            <div class="swiper-slide">
                                <div class="instagram__thumbnail position__relative">
                                    <a class="instagram__thumbnail--link display-block" target="_blank"
                                        href="{{ $item->button_url ?? '#' }}"><img
                                            class="instagram__thumbnail--img display-block"
                                            src="{{ asset($item->image ?? 'img/other/instagram1.webp') }}"
                                            alt="{{ $item->title ?? 'instagram-img' }}">
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <div class="instagram__thumbnail position__relative">
                                    <a class="instagram__thumbnail--link display-block" target="_blank" href="#">
                                        <img class="instagram__thumbnail--img display-block"
                                            src="{{ asset('img/other/instagram1.webp') }}" alt="instagram-img">
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- End instagram section -->

        <!-- Start Best Selling section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">{{ $bestSelling['subtitle'] ?? 'Best Selling' }}</span>
                    <h2 class="section__heading--maintitle">{{ $bestSelling['main_title'] ?? 'Recently added our store' }}
                    </h2>
                </div>
                <div
                    class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @forelse($bestSellingProducts as $product)
                            <div class="swiper-slide">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link"
                                            href="{{ $product->detail_url }}">
                                            <img class="product__items--img product__primary--img"
                                                src="{{ asset($product->image ?? 'img/product/product7.png') }}"
                                                alt="{{ $product->title ?? 'product-img' }}">
                                            @if ($product->secondary_image)
                                                <img class="product__items--img product__secondary--img"
                                                    src="{{ asset($product->secondary_image) }}"
                                                    alt="{{ $product->title ?? 'product-img' }}">
                                            @endif
                                        </a>
                                        @if ($product->badge)
                                            <div class="product__badge">
                                                <span
                                                    class="product__badge--items {{ strtolower($product->badge) }}">{{ $product->badge }}</span>
                                            </div>
                                        @endif
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                            stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32"
                                                            d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="{{ $product->detail_url }}">{{ $product->title }}</a>
                                        </h3>
                                        <div class="product__items--price">
                                            <span class="current__price">{{ $product->price }}</span>
                                            @if ($product->old_price)
                                                <span class="old__price">{{ $product->old_price }}</span>
                                            @endif
                                        </div>
                                        <div
                                            class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                @php $stars = (int)($product->rating ?? 5); @endphp
                                                @for ($s = 1; $s <= 5; $s++)
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
                                            <span
                                                class="product__items--rating__count--number">({{ $stars }}.0)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center py-4">No products found.</p>
                        @endforelse
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End Best Selling section -->

        <!-- Start Our Products section -->
        <section class="product__section product__section--style3 section--padding pt-0" style="background-color: beige;">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">{{ $ourProducts['subtitle'] ?? 'Our Products' }}</span>
                    <h2 class="section__heading--maintitle">{{ $ourProducts['main_title'] ?? 'Monthly Specials' }}</h2>
                </div>
                <div
                    class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @forelse($monthlyProducts as $product)
                            <div class="swiper-slide">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link"
                                            href="{{ $product->detail_url }}">
                                            <img class="product__items--img product__primary--img"
                                                src="{{ asset($product->image ?? 'img/product/product7.png') }}"
                                                alt="{{ $product->title ?? 'product-img' }}">
                                            @if ($product->secondary_image)
                                                <img class="product__items--img product__secondary--img"
                                                    src="{{ asset($product->secondary_image) }}"
                                                    alt="{{ $product->title ?? 'product-img' }}">
                                            @endif
                                        </a>
                                        @if ($product->badge)
                                            <div class="product__badge">
                                                <span
                                                    class="product__badge--items {{ strtolower($product->badge) }}">{{ $product->badge }}</span>
                                            </div>
                                        @endif
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                            stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32"
                                                            d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="{{ $product->detail_url }}">{{ $product->title }}</a>
                                        </h3>
                                        <div class="product__items--price">
                                            <span class="current__price">{{ $product->price }}</span>
                                            @if ($product->old_price)
                                                <span class="old__price">{{ $product->old_price }}</span>
                                            @endif
                                        </div>
                                        <div
                                            class="product__items--rating d-flex justify-content-center align-items-center">
                                            <ul class="d-flex">
                                                @php $stars = (int)($product->rating ?? 5); @endphp
                                                @for ($s = 1; $s <= 5; $s++)
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
                                            <span
                                                class="product__items--rating__count--number">({{ $stars }}.0)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center py-4">No products found.</p>
                        @endforelse
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End Best Selling section -->

        <!-- Start testimonial section -->
        <section class="testimonial__section testimonial__bg section--padding">
            <div class="container-fluid p-0">
                <div class="section__heading text-center mb-40">
                    <span
                        class="section__heading--subtitle">{{ $testimonial['subtitle'] ?? 'Recently added our store' }}</span>
                    <h2 class="section__heading--maintitle">{{ $testimonial['main_title'] ?? 'Our Testimonial' }}</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @forelse($testimonials as $t)
                            <div class="swiper-slide">
                                <div class="testimonial__items d-flex align-items-center">
                                    <div class="testimonial__items--thumbnail">
                                        <img class="testimonial__items--thumbnail__img"
                                            src="{{ asset($t->image ?? 'img/other/testimonial-thumb1.png') }}"
                                            alt="{{ $t->title ?? 'testimonial-img' }}">
                                    </div>
                                    <div class="testimonial__items--content">
                                        <h3 class="testimonial__items--title">{{ $t->title }}</h3>
                                        <span class="testimonial__items--subtitle">{{ $t->subtitle }}</span>
                                        <p class="testimonial__items--desc">{{ $t->description }}</p>
                                        <div class="ratting testimonial__ratting">
                                            <ul class="d-flex testimonial__ratting--inner">
                                                @php $tStars = (int)($t->rating ?? 5); @endphp
                                                @for ($s = 1; $s <= 5; $s++)
                                                    <li class="testimonial__ratting--list">
                                                        <span class="testimonial__ratting--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.54"
                                                                height="15.555" viewBox="0 0 20.54 19.555">
                                                                <path
                                                                    d="M9.947,24.316c.168-.388.446-.388.616,0L13,29.9a1.447,1.447,0,0,0,1.076.783l6.067.589c.423.039.507.3.191.585L15.77,35.9a1.456,1.456,0,0,0-.411,1.267l1.315,5.95c.092.415-.134.577-.5.364L10.92,40.4a1.45,1.45,0,0,0-1.331,0L4.335,43.485c-.368.214-.589.051-.5-.364l1.315-5.95A1.462,1.462,0,0,0,4.74,35.9L.176,31.862c-.316-.281-.232-.546.191-.585l6.069-.589A1.454,1.454,0,0,0,7.513,29.9l2.434-5.589Z"
                                                                    transform="translate(0.015 -24.025)"
                                                                    fill="{{ $s <= $tStars ? 'currentColor' : '#c7c5c2' }}" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <div class="testimonial__chat--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="52.472" height="45.687"
                                                viewBox="0 0 52.472 45.687">
                                                <path data-name="Chat icon"
                                                    d="M105.2,149.979a16.71,16.71,0,0,0,3.8-15.4,18.87,18.87,0,0,0-8.881-11.694,25.79,25.79,0,0,0-17.343-3.676,23.55,23.55,0,0,0-15.238,7.706,16.673,16.673,0,0,0-4.108,15.7,40.137,40.137,0,0,1,1.547,7.124,15.559,15.559,0,0,1-1.727,8.677c-.228.414-.486.81-.744,1.229.1.036.15.066.192.06a26.1,26.1,0,0,0,11.034-3.862.865.865,0,0,1,.983-.132A26.582,26.582,0,0,0,91,157.853a23.243,23.243,0,0,0,14.194-7.874Zm9.5,13.924a8.286,8.286,0,0,1-.911-1.3,11.272,11.272,0,0,1-.354-9.049,12.317,12.317,0,0,0-.486-9.4c-.4-.846-.935-1.625-1.493-2.591-.108.408-.162.582-.2.762a18.517,18.517,0,0,1-2.968,7.076c-4.234,6.141-10.236,9.427-17.468,10.65-1.283.216-2.591.288-3.916.432a.579.579,0,0,0,.126.168c.33.216.648.438,1,.624a19.172,19.172,0,0,0,17.037.846,1.037,1.037,0,0,1,.8,0,18.573,18.573,0,0,0,6.033,2.291,11.879,11.879,0,0,0,2.519.246C115.079,164.647,115.115,164.419,114.7,163.9Z"
                                                    transform="translate(-62.5 -118.975)" fill="currentColor"
                                                    opacity="0.11" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center py-4">No testimonials found.</p>
                        @endforelse
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End testimonial section -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block"
                                src="{{ asset($shipping['item_1_image'] ?? 'img/other/shipping1.png') }}"
                                alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">{{ $shipping['item_1_title'] ?? 'Shipping' }}
                            </h2>
                            <p class="shipping__items2--content__desc">
                                {{ $shipping['item_1_desc'] ?? 'From handpicked sellers' }}</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block"
                                src="{{ asset($shipping['item_2_image'] ?? 'img/other/shipping2.png') }}"
                                alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">{{ $shipping['item_2_title'] ?? 'Payment' }}
                            </h2>
                            <p class="shipping__items2--content__desc">
                                {{ $shipping['item_2_desc'] ?? '100% secure payment' }}</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block"
                                src="{{ asset($shipping['item_3_image'] ?? 'img/other/shipping3.png') }}"
                                alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">
                                {{ $shipping['item_3_title'] ?? 'Return Policy' }}</h2>
                            <p class="shipping__items2--content__desc">{{ $shipping['item_3_desc'] ?? 'Easy returns' }}
                            </p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block"
                                src="{{ asset($shipping['item_4_image'] ?? 'img/other/shipping4.png') }}"
                                alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">{{ $shipping['item_4_title'] ?? 'Support' }}
                            </h2>
                            <p class="shipping__items2--content__desc">{{ $shipping['item_4_desc'] ?? '24/7 support' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->

    </main>
@endsection
