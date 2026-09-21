@extends('layout.app')

@section('content')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">About Us</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items">
                                    <a class="text-white" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb__content--menu__items">
                                    <span class="text-white">About Us</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        @php
            $img1 = !empty($aboutContent['image_1']) ? $aboutContent['image_1'] : 'img/other/about-thumb-list1.png';
            $img2 = !empty($aboutContent['image_2']) ? $aboutContent['image_2'] : 'img/other/about-thumb-list2.png';
            $signature = !empty($aboutContent['author_signature']) ? $aboutContent['author_signature'] : 'img/icon/signature.png';
            $videoUrl = !empty($aboutContent['video_url']) ? $aboutContent['video_url'] : 'https://vimeo.com/115041822';
        @endphp

        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__thumb d-flex">
                            <div class="about__thumb--items">
                                <img class="about__thumb--img border-radius-5 display-block"
                                    src="{{ str_starts_with($img1, 'http') ? $img1 : asset($img1) }}" alt="about-thumb">
                            </div>
                            <div class="about__thumb--items position__relative">
                                <img class="about__thumb--img border-radius-5 display-block"
                                    src="{{ str_starts_with($img2, 'http') ? $img2 : asset($img2) }}" alt="about-thumb">
                                @if($videoUrl)
                                    <div class="banner__bideo--play about__thumb--play">
                                        <a class="banner__bideo--play__icon about__thumb--play__icon glightbox"
                                            href="{{ $videoUrl }}" data-gallery="video">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 31 37">
                                                <path id="Polygon_1" data-name="Polygon 1"
                                                    d="M16.783,2.878a2,2,0,0,1,3.435,0l14.977,25.1A2,2,0,0,1,33.477,31H3.523a2,2,0,0,1-1.717-3.025Z"
                                                    transform="translate(31) rotate(90)" fill="currentColor" />
                                            </svg>
                                            <span class="visually-hidden">video play</span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-20">{{ $aboutContent['subtitle'] ?? 'Why Choose us' }}</span>
                            <h2 class="about__content--maintitle mb-25">{{ $aboutContent['main_title'] ?? 'We do not buy from the open market & traders.' }}</h2>
                            <p class="about__content--desc mb-20">
                                {{ $aboutContent['desc_1'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo, est repellendus are quia voluptate neque reiciendis ea placeat labore maiores cum, hic ducimus ad a dolorem soluta consectetur adipisci. Perspiciatis quas ab quibusdam is.' }}
                            </p>
                            <p class="about__content--desc mb-25">
                                {{ $aboutContent['desc_2'] ?? 'Itaque accusantium eveniet a laboriosam dolorem? Magni suscipit est corrupti explicabo non perspiciatis, excepturi ut asperiores assumenda rerum? Provident ab corrupti sequi, voluptates repudiandae eius odit aut.' }}
                            </p>
                            @if(!empty($aboutContent['author_name']) || !empty($aboutContent['author_rank']))
                                <div class="about__author position__relative">
                                    <h3 class="about__author--name h4">{{ $aboutContent['author_name'] ?? 'Bruce Sutton' }}</h3>
                                    <span class="about__author--rank">{{ $aboutContent['author_rank'] ?? 'Spa Manager' }}</span>
                                    @if($signature)
                                        <img class="about__author--signature" src="{{ str_starts_with($signature, 'http') ? $signature : asset($signature) }}" alt="signature">
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- Start counterup banner section -->
        <div class="counterup__banner--section counterup__banner__bg2" id="funfactId">
            <div class="container">
                <div class="row row-cols-1 align-items-center">
                    <div class="col">
                        <div
                            class="counterup__banner--inner position__relative d-flex align-items-center justify-content-between">
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">
                                    {!! nl2br(e($aboutContent['counter_1_title'] ?? "YEARS OF \n FOUNDATION")) !!}
                                </h2>
                                <span class="counterup__banner--items__number js-counter text-white"
                                    data-count="{{ $aboutContent['counter_1_number'] ?? 50 }}">{{ $aboutContent['counter_1_number'] ?? 50 }}</span>
                            </div>
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">
                                    {!! nl2br(e($aboutContent['counter_2_title'] ?? "HAPPY \n CUSTOMERS")) !!}
                                </h2>
                                <span class="counterup__banner--items__number js-counter text-white"
                                    data-count="{{ $aboutContent['counter_2_number'] ?? 80 }}">{{ $aboutContent['counter_2_number'] ?? 80 }}</span>
                            </div>
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">
                                    {!! nl2br(e($aboutContent['counter_3_title'] ?? "MONTHLY \n ORDERS")) !!}
                                </h2>
                                <span class="counterup__banner--items__number js-counter text-white"
                                    data-count="{{ $aboutContent['counter_3_number'] ?? 70 }}">{{ $aboutContent['counter_3_number'] ?? 70 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counterup banner section -->

    </main>
@endsection