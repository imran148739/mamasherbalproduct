@extends('layout.app')

@section('content')
<main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section mb-60">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">As fresh as Fruit</span>
                                            <h2 class="slider__content4--maintitle text-white h1">The Roots Are <br> with fruits</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love your health, more you eat organic. No medicine can heal you better than organic food does</p>
                                            <a class="btn slider__btn style4" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">As fresh as Fruit</span>
                                            <h2 class="slider__content4--maintitle text-white h1">The Roots Are <br> with fruits</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love your health, more you eat organic. No medicine can heal you better than organic food does</p>
                                            <a class="btn slider__btn style4" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle">As fresh as Fruit</span>
                                            <h2 class="slider__content4--maintitle h1">The Roots Are <br> with fruits</h2>
                                            <p class="slider__content4--desc d-sm-none">The more you love your health, more you eat organic. No medicine can heal you better than organic food does</p>
                                            <a class="btn slider__btn style4" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="assets/img/banner/banner10.png" alt="banner-img">
                                <div class="banner__items--content3">
                                    <h2 class="banner__items--content3__title text-white">56% off in all <br>
                                        products</h2>
                                    <span class="banner__items--content3__btn text-white">Shop Now
                                        <svg class="banner__two--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                            <path  data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="assets/img/banner/banner11.png" alt="banner-img"> 
                                <div class="banner__items--content3">
                                    <h2 class="banner__items--content3__title text-white">56% off in all <br>
                                        products</h2>
                                    <span class="banner__items--content3__btn text-white">Shop Now
                                        <svg class="banner__two--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                            <path  data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container">
                <div class="section__heading text-center mb-25">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">Trending Products</h2>
                </div>
                <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                    <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">All</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fresh">Fresh</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">Fruits </li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_nature">Nature</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_recipies">Recipies </li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_vegetable">Vegetable </li>
                </ul>
                <div class="tab_content">
                    <div id="product_all" class="tab_pane active show">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$44.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$40.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$52.00</span>
                                                <span class="old__price">$62.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product4.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product3.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$58.00</span>
                                                <span class="old__price">$68.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product_fresh" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$40.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$52.00</span>
                                                <span class="old__price">$62.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product4.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product3.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$58.00</span>
                                                <span class="old__price">$68.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$44.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product_fruits" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$40.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$52.00</span>
                                                <span class="old__price">$62.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$44.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product4.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product3.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$58.00</span>
                                                <span class="old__price">$68.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product_nature" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product4.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product3.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$58.00</span>
                                                <span class="old__price">$68.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$44.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$40.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$52.00</span>
                                                <span class="old__price">$62.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product_recipies" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$52.00</span>
                                                <span class="old__price">$62.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$44.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product4.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product3.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$58.00</span>
                                                <span class="old__price">$68.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$40.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product_vegetable" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$44.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$38.00</span>
                                                <span class="old__price">$40.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$52.00</span>
                                                <span class="old__price">$62.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$39.00</span>
                                                <span class="old__price">$59.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$42.00</span>
                                                <span class="old__price">$48.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="product-details.html">
                                                <img class="product__items--img product__primary--img" src="assets/img/product/product4.png" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="assets/img/product/product3.png" alt="product-img">
                                            </a>
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                            <ul class="product__items--action">
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Wishlist</span> 
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                        <span class="visually-hidden">Quick View</span>  
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list">
                                                    <a class="product__items--action__btn" href="compare.html">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Compare</span>    
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">$58.00</span>
                                                <span class="old__price">$68.00</span>
                                            </div>
                                            <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                <ul class="d-flex">
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                            <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="product__items--rating__list">
                                                        <span class="product__items--rating__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                            </svg> 
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="product__items--rating__count--number">(24)</span>
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
        <!-- End product section -->

         <!-- Start banner section -->
         <section class="banner__section banner4__section section--padding pt-0">
            <div class="container">
                <div class="row mb--n30">
                    <div class=" banner4__items--col col-lg-3 mb-30">
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="assets/img/banner/banner12.png" alt="banner-img">
                                <div class="banner4__items--content content__style1 text-center">
                                    <h2 class="banner4__items--content__title text-white">56% off in all <br>
                                        products</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                            <path  data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner4__items--col col-lg-6 mb-30">
                        <div class="banner__items banner4__items position__relative mb-20">
                            <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img banner__img--max__height display-block" src="assets/img/banner/banner13.png" alt="banner-img">
                                <div class="banner4__items--content content__style2">
                                    <h2 class="banner4__items--content__title style2 text-white">Organic Food <br>
                                        products</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                            <path  data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img banner__img--max__height display-block" src="assets/img/banner/banner14.png" alt="banner-img">
                                <div class="banner4__items--content content__style2">
                                    <h2 class="banner4__items--content__title style2 text-white">Natural Fresh <br>
                                        Vegetable</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                            <path  data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner4__items--col col-lg-3 mb-30">
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="assets/img/banner/banner15.png" alt="banner-img">
                                <div class="banner4__items--content content__style1 text-center">
                                    <h2 class="banner4__items--content__title text-white">Natural Fresh <br>
                                        Fruit</h2>
                                    <span class="banner4__items--content__btn text-white">Shop Now
                                        <svg class="banner4__items--content__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546" viewBox="0 0 10.383 7.546">
                                            <path  data-name="Path 77287" d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z" transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">New Products</h2>
                </div>
                <div class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details.html">
                                        <img class="product__items--img product__primary--img" src="assets/img/product/product7.png" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="assets/img/product/product8.png" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                <span class="visually-hidden">Quick View</span>   
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                    <h3 class="product__items--content__title h4"><a href="product-details.html">Green-surface</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$38.00</span>
                                        <span class="old__price">$40.00</span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details.html">
                                        <img class="product__items--img product__primary--img" src="assets/img/product/product2.png" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="assets/img/product/product1.png" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                <span class="visually-hidden">Quick View</span>   
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                    <h3 class="product__items--content__title h4"><a href="product-details.html">Red-tomato-isolated</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$52.00</span>
                                        <span class="old__price">$62.00</span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details.html">
                                        <img class="product__items--img product__primary--img" src="assets/img/product/product1.png" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="assets/img/product/product2.png" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                <span class="visually-hidden">Quick View</span>   
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                    <h3 class="product__items--content__title h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$39.00</span>
                                        <span class="old__price">$59.00</span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details.html">
                                        <img class="product__items--img product__primary--img" src="assets/img/product/product3.png" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="assets/img/product/product4.png" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                <span class="visually-hidden">Quick View</span>   
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                    <h3 class="product__items--content__title h4"><a href="product-details.html">Fresh-whole-fish</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$42.00</span>
                                        <span class="old__price">$48.00</span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product__items product__items2">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="product-details.html">
                                        <img class="product__items--img product__primary--img" src="assets/img/product/product5.png" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="assets/img/product/product6.png" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">Sale</span>
                                    </div>
                                    <ul class="product__items--action">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="wishlist.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                <span class="visually-hidden">Quick View</span>   
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn" href="compare.html">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__items--content product__items2--content text-center">
                                    <a class="add__to--cart__btn" href="cart.html">+ Add to cart</a>
                                    <h3 class="product__items--content__title h4"><a href="product-details.html">Chili-pepper</a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">$38.00</span>
                                        <span class="old__price">$44.00</span>
                                    </div>
                                    <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start accordion section -->
        <section class="accordion__section accordion__bg section--padding">
            <div class="container">
                <div class="section__heading text-center mb-60">
                    <span class="section__heading--subtitle">Why Choose</span>
                    <h2 class="section__heading--maintitle">ORGANIC PRODUCTS</h2>
                </div>
                <div class="accordion__section--inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="accordion__banner banner__items">
                                <a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img display-block" src="assets/img/banner/banner16.png" alt="banner img"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="accordion__wrapper accordion__container" id="accordionExample">
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="accordion__items--button">What Is Organic?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maxime, libero, dolorem blanditiis facilis explicabo saepe provident fuga aperiam quisquam deleniti cumque ratione est sapiente architecto quam, exercitationem voluptates quidem?</p>
                                    </div>
                                </div>
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="accordion__items--button">Is organic food more nutritious than conventional food?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maxime, libero, dolorem blanditiis facilis explicabo saepe provident fuga aperiam quisquam deleniti cumque ratione est sapiente architecto quam, exercitationem voluptates quidem?</p>
                                    </div>
                                </div>
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="accordion__items--button">What does the USDA Organic seal mean?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maxime, libero, dolorem blanditiis facilis explicabo saepe provident fuga aperiam quisquam deleniti cumque ratione est sapiente architecto quam, exercitationem voluptates quidem?</p>
                                    </div>
                                </div>
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="accordion__items--button">How do I know if something is organic?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maxime, libero, dolorem blanditiis facilis explicabo saepe provident fuga aperiam quisquam deleniti cumque ratione est sapiente architecto quam, exercitationem voluptates quidem?</p>
                                    </div>
                                </div>
                                <div class="accordion__items">
                                    <h2 class="accordion__items--title">
                                        <button class="accordion__items--button">Why does organic products cost more?
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        <p class="accordion__items--body__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maxime, libero, dolorem blanditiis facilis explicabo saepe provident fuga aperiam quisquam deleniti cumque ratione est sapiente architecto quam, exercitationem voluptates quidem?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End accordion section -->

        <!-- Start instagram section -->
        <div class="instagram__section section--padding">
            <div class="container-fluid p-0">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">Our Instagram</h2>
                </div>
                <div class="instagram__section--inner instagram__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkF3TLBTT7" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram1.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkF60sBxhN" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram2.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkF90ZB6HG" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram3.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkGAe6BQeu" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram4.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkGCWcBbv9" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram5.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkGFDMhoid" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram6.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkGGnyh7jZ" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram7.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://www.instagram.com/p/CZkF3TLBTT7" ><img class="instagram__thumbnail--img display-block" src="assets/img/other/instagram1.webp" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- End instagram section -->
        
        <!-- Start blog section -->
        <section class="blog__section section--padding pt-0">
            <div class="container blog__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Our recent articles about Organic</span>
                    <h2 class="section__heading--maintitle">Our Blog Posts</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog__items">
                                <div class="blog__items--thumbnail">
                                    <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="assets/img/blog/blog1.png" alt="blog-img"></a>
                                </div>
                                <div class="blog__items--content">
                                    <div class="blog__items--meta">
                                        <ul class="d-flex">
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">19 Comments</span>  
                                            </li>
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">10 Feb 2022</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog__items--title"><a href="blog-details.html">Aypi Non Habent Claritatemnon Insitam</a></h3>
                                    <p class="blog__items--desc">It is a long established fact that a reader will be  by the readable content of a page when looking at its layout. The point of using </p>
                                    <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path  d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__items">
                                <div class="blog__items--thumbnail">
                                    <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="assets/img/blog/blog2.png" alt="blog-img"></a>
                                </div>
                                <div class="blog__items--content">
                                    <div class="blog__items--meta">
                                        <ul class="d-flex">
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">19 Comments</span>  
                                            </li>
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">10 Feb 2022</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog__items--title"><a href="blog-details.html">Lorem ipsum dolor sit amet are consecte.</a></h3>
                                    <p class="blog__items--desc">It is a long established fact that a reader will be  by the readable content of a page when looking at its layout. The point of using </p>
                                    <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path  d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__items">
                                <div class="blog__items--thumbnail">
                                    <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="assets/img/blog/blog3.png" alt="blog-img"></a>
                                </div>
                                <div class="blog__items--content">
                                    <div class="blog__items--meta">
                                        <ul class="d-flex">
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">19 Comments</span>  
                                            </li>
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">10 Feb 2022</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog__items--title"><a href="blog-details.html">Ratione nobis the are delectus in impedit?</a></h3>
                                    <p class="blog__items--desc">It is a long established fact that a reader will be  by the readable content of a page when looking at its layout. The point of using </p>
                                    <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path  d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__items">
                                <div class="blog__items--thumbnail">
                                    <a class="blog__items--link" href="blog-details.html"><img class="blog__items--img" src="assets/img/blog/blog1.png" alt="blog-img"></a>
                                </div>
                                <div class="blog__items--content">
                                    <div class="blog__items--meta">
                                        <ul class="d-flex">
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M74.705,129.154a6.088,6.088,0,0,0,1.085-5.056,6.167,6.167,0,0,0-2.539-3.839,6.608,6.608,0,0,0-4.958-1.207,6.475,6.475,0,0,0-4.356,2.53,6.056,6.056,0,0,0-1.174,5.154,14.881,14.881,0,0,1,.442,2.339,5.759,5.759,0,0,1-.494,2.849c-.065.136-.139.266-.213.4.029.012.043.022.055.02a6.859,6.859,0,0,0,3.154-1.268.223.223,0,0,1,.281-.043,6.72,6.72,0,0,0,4.658.7,6.475,6.475,0,0,0,4.058-2.585Zm2.717,4.572a2.756,2.756,0,0,1-.261-.425,4.205,4.205,0,0,1-.1-2.971,4.6,4.6,0,0,0-.139-3.087c-.113-.278-.267-.534-.427-.851-.031.134-.046.191-.057.25a6.593,6.593,0,0,1-.849,2.323,7.164,7.164,0,0,1-4.994,3.5c-.367.071-.741.095-1.119.142a.19.19,0,0,0,.036.055c.094.071.185.144.285.2a4.856,4.856,0,0,0,4.87.278.261.261,0,0,1,.23,0,4.912,4.912,0,0,0,1.725.752,2.973,2.973,0,0,0,.72.081C77.531,133.97,77.541,133.895,77.423,133.726Z" transform="translate(-62.5 -118.975)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">19 Comments</span>  
                                            </li>
                                            <li class="blog__items--meta__list">
                                                <svg class="blog__items--meta__icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                                    <path  d="M75.809,63.836c0-.221,0-.429,0-.639a.915.915,0,0,0-.656-.869.959.959,0,0,0-1.057.321.97.97,0,0,0-.2.619v.559a.163.163,0,0,1-.164.161H72.716a.162.162,0,0,1-.164-.161c0-.192,0-.377,0-.564a.959.959,0,0,0-1.918-.06c-.005.206,0,.413,0,.62a.163.163,0,0,1-.164.161H69.428a.162.162,0,0,1-.164-.161,5.7,5.7,0,0,0-.009-.768.849.849,0,0,0-.627-.725.93.93,0,0,0-.942.185.952.952,0,0,0-.329.79c0,.175,0,.35,0,.533A.163.163,0,0,1,67.2,64H64.363a.162.162,0,0,0-.164.161V77.113a.163.163,0,0,0,.164.161H79.036a.162.162,0,0,0,.164-.161V64.158A.163.163,0,0,0,79.036,64H75.972A.161.161,0,0,1,75.809,63.836ZM68.7,76.636h-3.68a.162.162,0,0,1-.164-.161V73.913a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.561A.162.162,0,0,1,68.7,76.636Zm0-3.543H65.018a.162.162,0,0,1-.164-.161V70.224a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.708A.163.163,0,0,1,68.7,73.093Zm0-3.685H65.018a.162.162,0,0,1-.164-.161v-2.6a.163.163,0,0,1,.164-.161H68.7a.162.162,0,0,1,.164.161v2.6A.162.162,0,0,1,68.7,69.408Zm4.9,7.23H69.71a.162.162,0,0,1-.164-.161V73.921a.163.163,0,0,1,.164-.161H73.6a.162.162,0,0,1,.164.161v2.557A.16.16,0,0,1,73.6,76.638Zm.172-3.632c0,.05-.077.089-.169.089h-3.9a.162.162,0,0,1-.164-.161v-2.71c0-.089.043-.163.093-.166l.093-.005c1.282,0,2.563,0,3.844,0,.155,0,.208.034.207.2-.007.89,0,1.783-.005,2.672A.747.747,0,0,1,73.776,73.006Zm.005-3.694c0,.05-.074.091-.164.091H69.707a.162.162,0,0,1-.164-.161V66.636c0-.089.043-.161.1-.161h.1c1.282,0,2.563,0,3.844,0,.155,0,.207.036.2.2-.007.852,0,1.7,0,2.552v.091Zm.823.756h3.772a.162.162,0,0,1,.164.161v2.706a.163.163,0,0,1-.164.161H74.6a.162.162,0,0,1-.164-.161V70.227A.162.162,0,0,1,74.6,70.068Zm3.773,6.568H74.6a.162.162,0,0,1-.164-.161V73.918a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.557A.158.158,0,0,1,78.377,76.636Zm0-7.233H74.6a.162.162,0,0,1-.164-.161V66.648a.163.163,0,0,1,.164-.161h3.773a.162.162,0,0,1,.164.161v2.593A.159.159,0,0,1,78.377,69.4Z" transform="translate(-64.2 -62.274)" fill="currentColor"/>
                                                </svg>
                                                <span class="blog__items--meta__text">10 Feb 2022</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog__items--title"><a href="blog-details.html">Aypi Non Habent Claritatemnon Insitam</a></h3>
                                    <p class="blog__items--desc">It is a long established fact that a reader will be  by the readable content of a page when looking at its layout. The point of using </p>
                                    <a class="blog__items--readmore" href="blog-details.html">Read more <svg class="blog__items--readmore__icon" xmlns="http://www.w3.org/2000/svg" width="6.2" height="6.2" viewBox="0 0 6.2 6.2">
                                        <path  d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start brand logo section -->
        <div class="brand__logo--section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-between align-items-center">
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo1.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo2.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo3.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo4.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo5.png" alt="brand logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand logo section -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping1.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping2.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">Visa, Paypal, Master</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping3.png" alt="shipping img">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">30 day guarantee</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img class="display-block" src="assets/img/other/shipping4.png" alt="shipping img">
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
@endsection