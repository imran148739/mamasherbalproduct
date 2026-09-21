<!-- Start header area -->
<style>
    .admin__header--btn:hover {
        background: #6c63ff !important;
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(108, 99, 255, 0.4) !important;
        transform: translateY(-1px);
    }

    .admin__header--btn:hover svg {
        stroke: #ffffff !important;
    }

    .header__topbar--admin a:hover {
        background: rgba(108, 99, 255, 0.25) !important;
    }
</style>
<header class="header__section header__transparent">
    <div class="header__topbar header__topbar4 border-bottom">
        <div class="container">
            <div class="header__topbar4--inner d-flex align-items-center justify-content-between">
                <div class="header__topbar4--contact__info">
                    @php
                        $headerAddress = $headerContent['contact_address'] ?? '15/A, Nest Tower, NYC';
                        $headerEmail = $headerContent['contact_email'] ?? 'info@webmail.com';
                        $headerPhone = $headerContent['contact_phone'] ?? '';
                    @endphp
                    <ul class="header__topbar4--contact__info--flex d-flex">
                        @if (!empty($headerAddress))
                            <li class="header__topbar4--contact__info--list">
                                <svg class="header__topbar4--contact__info--svg" xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="18" viewBox="0 0 14 18">
                                    <path
                                        d="M12,2C8.13,2,5,4.817,5,8.3,5,13.025,12,20,12,20s7-6.975,7-11.7C19,4.817,15.87,2,12,2Zm0,8.55A2.386,2.386,0,0,1,9.5,8.3,2.386,2.386,0,0,1,12,6.05,2.386,2.386,0,0,1,14.5,8.3,2.386,2.386,0,0,1,12,10.55Z"
                                        transform="translate(-5 -2)" fill="currentColor" />
                                </svg>
                                <span>{{ $headerAddress }}</span>
                            </li>
                        @endif
                        @if (!empty($headerEmail))
                            <li class="header__topbar4--contact__info--list">
                                <svg class="header__topbar4--contact__info--svg" xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="15" viewBox="0 0 18 15">
                                    <path
                                        d="M18.2,4H3.8A1.837,1.837,0,0,0,2.009,5.875L2,17.125A1.844,1.844,0,0,0,3.8,19H18.2A1.844,1.844,0,0,0,20,17.125V5.875A1.844,1.844,0,0,0,18.2,4Zm0,13.125H3.8V7.75L11,12.438,18.2,7.75ZM11,10.563,3.8,5.875H18.2Z"
                                        transform="translate(-2 -4)" fill="currentColor" />
                                </svg>
                                <a href="mailto:{{ $headerEmail }}"> {{ $headerEmail }}</a>
                            </li>
                        @endif
                        @if (!empty($headerPhone))
                            <li class="header__topbar4--contact__info--list">
                                <svg class="header__topbar4--contact__info--svg" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $headerPhone) }}"> {{ $headerPhone }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="header__topbar--right d-flex align-items-center">
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list style2">
                                <a class="language__switcher" href="#">

                                    <img class="language__switcher--icon__img"
                                        src="{{ asset('img/icon/language-icon.png') }}" alt="currency">
                                    <span>EN</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                        viewBox="0 0 9.797 6.05">
                                        <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                            transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                    </svg>
                                </a>
                                <div class="dropdown__language">
                                    <ul>
                                        <li class="language__items"><a class="language__text" href="#">France</a>
                                        </li>
                                        <li class="language__items"><a class="language__text" href="#">Russia</a>
                                        </li>
                                        <li class="language__items"><a class="language__text" href="#">Spanish</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="language__currency--list style2">
                                <a class="account__currency--link" href="#">
                                    <img src="{{ asset('img/icon/usd-icon.png') }}" alt="currency">
                                    <span>USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                        viewBox="0 0 9.797 6.05">
                                        <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                            transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                    </svg>
                                </a>
                                <div class="dropdown__currency">
                                    <ul>
                                        <li class="currency__items"><a class="currency__text" href="#">CAD</a>
                                        </li>
                                        <li class="currency__items"><a class="currency__text" href="#">CNY</a>
                                        </li>
                                        <li class="currency__items"><a class="currency__text" href="#">EUR</a>
                                        </li>
                                        <li class="currency__items"><a class="currency__text" href="#">GBP</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @php
                        $fbUrl = $headerContent['facebook_url'] ?? 'https://www.facebook.com/';
                        $twUrl = $headerContent['twitter_url'] ?? 'https://twitter.com/';
                        $igUrl = $headerContent['instagram_url'] ?? 'https://www.instagram.com/';
                        $ytUrl = $headerContent['youtube_url'] ?? 'https://www.youtube.com/';
                    @endphp
                    <ul class="header4__widget--social d-none d-lg-flex align-items-center">
                        @if (!empty($fbUrl))
                            <li class="header4__widget--social__list">
                                <a class="header4__widget--social__icon" target="_blank" href="{{ $fbUrl }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.667" height="18.524"
                                        viewBox="0 0 7.667 16.524">
                                        <path data-name="Path 237"
                                            d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                            transform="translate(-960.13 -345.407)" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                        @endif
                        @if (!empty($twUrl))
                            <li class="header4__widget--social__list">
                                <a class="header4__widget--social__icon" target="_blank" href="{{ $twUrl }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                        viewBox="0 0 16.489 13.384">
                                        <path data-name="Path 303"
                                            d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                            transform="translate(-951.23 -1140.849)" fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                        @endif
                        @if (!empty($igUrl))
                            <li class="header4__widget--social__list">
                                <a class="header4__widget--social__icon" target="_blank" href="{{ $igUrl }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492"
                                        viewBox="0 0 19.497 19.492">
                                        <path data-name="Icon awesome-instagram"
                                            d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                            transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                        @endif
                        @if (!empty($ytUrl))
                            <li class="header4__widget--social__list">
                                <a class="header4__widget--social__icon" target="_blank" href="{{ $ytUrl }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                        viewBox="0 0 16.49 11.582">
                                        <path data-name="Path 321"
                                            d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                            transform="translate(-951.269 -1359.8)" fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Youtube</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <div class="header__topbar--admin d-none d-lg-block" style="margin-left: 16px;">
                        <a href="{{ auth()->check() && auth()->user()->is_admin ? route('admin.dashboard') : route('admin.login') }}"
                            style="display: inline-flex; align-items: center; gap: 5px; font-size: 12px; font-weight: 700; color: #6c63ff; background: rgba(108,99,255,0.12); padding: 4px 12px; border-radius: 12px; text-decoration: none; border: 1px solid rgba(108,99,255,0.25); transition: all 0.2s ease;">
                            🔒 {{ auth()->check() && auth()->user()->is_admin ? 'Admin Dashboard' : 'Admin Login' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__header header__sticky">
        <div class="container">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                        </svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                @php
                    $logoRaw = !empty($headerContent['logo']) ? $headerContent['logo'] : 'img/logo/nav-log.png';
                    $headerLogoUrl = str_starts_with($logoRaw, 'http') ? $logoRaw : asset($logoRaw);
                @endphp
                <div class="main__logo">
                    <h1><a class="main__logo--link" href="{{ route('home') }}"><img class="main__logo--img"
                                src="{{ $headerLogoUrl }}" alt="Mama's Herbal"></a></h1>
                </div>
                <div class="header__menu d-none d-lg-block">
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="{{ route('home') }}">Home
                                </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="javascript:void(0)">Product Categories
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                        width="12" height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                            transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    @php
                                        $categoriesList = $headerCategories ?? (\App\Models\Category::active()->orderBy('sort_order', 'asc')->orderBy('name', 'asc')->get() ?? collect());
                                    @endphp
                                    @forelse($categoriesList as $category)
                                        <li class="header__sub--menu__items">
                                            <a href="{{ url('/shop?category=' . $category->slug) }}"
                                                class="header__sub--menu__link">{{ $category->name }}</a>
                                        </li>
                                    @empty
                                        <li class="header__sub--menu__items">
                                            <a href="javascript:void(0)" class="header__sub--menu__link">No categories found</a>
                                        </li>
                                    @endforelse
                                </ul>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link {{ request()->routeIs('best-selling*') ? 'active' : '' }}" href="{{ route('best-selling') }}">Best Selling</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link {{ request()->routeIs('about*') ? 'active' : '' }}" href="{{ route('about') }}">
                                    About Us
                                </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link {{ request()->routeIs('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__account">
                    <ul class="d-flex align-items-center">
                        <li class="header__account--items  header__account--search__items d-sm-2-none">
                            <a class="header__account--btn search__open--btn" href="javascript:void(0)"
                                data-offcanvas>
                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                    width="22.51" height="20.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                        stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.706" height="15.534"
                                    viewBox="0 0 14.706 13.534">
                                    <g id="cart" transform="translate(0 0)">
                                        <g id="cart_icon">
                                            <path id="Path_16787" data-name="Path 16787"
                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                transform="translate(0 -463.248)" fill="#fefefe" />
                                            <path id="Path_16788" data-name="Path 16788"
                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                transform="translate(-1.191 -466.622)" fill="#fefefe" />
                                            <path id="Path_16789" data-name="Path 16789"
                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                transform="translate(-2.875 -466.622)" fill="#fefefe" />
                                        </g>
                                    </g>
                                </svg>
                                <span class="items__count">3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="{{ route('home') }}">
                    <img src="{{ $headerLogoUrl }}" alt="Mama's Herbal" width="158" height="36"
                        style="object-fit: contain;">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="index.html">Home</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="index.html"
                                    class="offcanvas__sub_menu_item">Home One</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-2.html"
                                    class="offcanvas__sub_menu_item">Home Two</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-3.html"
                                    class="offcanvas__sub_menu_item">Home Three</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-4.html"
                                    class="offcanvas__sub_menu_item">Home Four</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="javascript:void(0)">Product Categories</a>
                        <ul class="offcanvas__sub_menu">
                            @forelse($categoriesList as $category)
                                <li class="offcanvas__sub_menu_li">
                                    <a class="offcanvas__sub_menu_item"
                                        href="{{ url('/shop?category=' . $category->slug) }}">{{ $category->name }}</a>
                                </li>
                            @empty
                                <li class="offcanvas__sub_menu_li">
                                    <a class="offcanvas__sub_menu_item" href="javascript:void(0)">No categories found</a>
                                </li>
                            @endforelse
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item {{ request()->routeIs('best-selling*') ? 'active' : '' }}" href="{{ route('best-selling') }}">Best Selling</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="shop.html">Shop</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column One</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="shop.html">Shop Left Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="shop-grid.html">Shop Grid</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="shop-grid-list.html">Shop Grid List</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="shop-list.html">Shop List</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column Two</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="product-details.html">Product Details</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="product-video.html">Video Product</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="product-details.html">Variable Product</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="product-gallery.html">Product Gallery</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column Three</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="my-account.html">My Account</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="my-account-2.html">My Account 2</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="404.html">404 Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="login.html">Login Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="faq.html">Faq Page</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column Three</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="compare.html">Compare Pages</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="checkout.html">Checkout page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="checkout-2.html">Checkout Style 2</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="checkout-3.html">Checkout Style 3</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                            href="checkout-4.html">Checkout Style 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="blog.html">Blog</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="blog.html"
                                    class="offcanvas__sub_menu_item">Blog Grid</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="blog-details.html"
                                    class="offcanvas__sub_menu_item">Blog Details</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="blog-left-sidebar.html"
                                    class="offcanvas__sub_menu_item">Blog Left Sidebar</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="blog-right-sidebar.html"
                                    class="offcanvas__sub_menu_item">Blog Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#">Pages</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('about') }}"
                                    class="offcanvas__sub_menu_item">About Us</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{ route('contact') }}"
                                    class="offcanvas__sub_menu_item">Contact Us</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="cart.html"
                                    class="offcanvas__sub_menu_item">Cart Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="portfolio.html"
                                    class="offcanvas__sub_menu_item">Portfolio Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="wishlist.html"
                                    class="offcanvas__sub_menu_item">Wishlist Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="login.html"
                                    class="offcanvas__sub_menu_item">Login Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="404.html"
                                    class="offcanvas__sub_menu_item">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item {{ request()->routeIs('about*') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item {{ request()->routeIs('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="offcanvas__account--items">
                    <a class="offcanvas__account--items__btn d-flex align-items-center" href="login.html">
                        <span class="offcanvas__account--items__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                viewBox="0 0 512 512">
                                <path
                                    d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" />
                                <path
                                    d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            </svg>
                        </span>
                        <span class="offcanvas__account--items__label">Login / Register</span>
                    </a>
                </div>
                <div class="offcanvas__account--items" style="margin-top: 10px;">
                    <a class="offcanvas__account--items__btn d-flex align-items-center"
                        href="{{ auth()->check() && auth()->user()->is_admin ? route('admin.dashboard') : route('admin.login') }}"
                        style="background: #1a1a3e; color: #ffffff !important; padding: 10px 14px; border-radius: 8px; text-decoration: none; border: 1px solid rgba(108,99,255,0.3);">
                        <span class="offcanvas__account--items__icon" style="margin-right: 8px;">
                            🔒
                        </span>
                        <span class="offcanvas__account--items__label" style="font-weight: 600; color: #ffffff;">
                            {{ auth()->check() && auth()->user()->is_admin ? 'Admin Dashboard' : 'Admin Panel Login' }}
                        </span>
                    </a>
                </div>
                <div class="offcanvas__account--currency">
                    <a class="offcanvas__account--currency__menu text-black" href="javascript:void(0)">
                        <img src="{{ asset('img/icon/usd-icon.png') }}" alt="currency">
                        <span>USD</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                            viewBox="0 0 9.797 6.05">
                            <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                        </svg>
                    </a>
                    <div class="offcanvas__account--currency__submenu">
                        <ul>
                            <li class="currency__items"><a class="currency__text" href="#">CAD</a></li>
                            <li class="currency__items"><a class="currency__text" href="#">CNY</a></li>
                            <li class="currency__items"><a class="currency__text" href="#">EUR</a></li>
                            <li class="currency__items"><a class="currency__text" href="#">GBP</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->

    <!-- Start Offcanvas stikcy toolbar -->
    <div class="offcanvas__stikcy--toolbar">
        <ul class="d-flex justify-content-between">
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="index.html">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                            viewBox="0 0 22 17">
                            <path fill="currentColor"
                                d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z">
                            </path>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Home</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="shop.html">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443"
                            viewBox="0 0 448 512">
                            <path
                                d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z">
                            </path>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list ">
                <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                            viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Search</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)"
                    data-offcanvas>
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443"
                            viewBox="0 0 18.51 15.443">
                            <path
                                d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                                transform="translate(-62.393 -135.3)" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                    <span class="items__count">3</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="wishlist.html">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557"
                            viewBox="0 0 18.541 15.557">
                            <path
                                d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                                transform="translate(-62.498 -132.915)" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                    <span class="items__count">3</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Offcanvas stikcy toolbar -->

    <!-- Start offCanvas minicart -->
    <div class="offCanvas__minicart">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Shopping Cart</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                    </svg>
                </button>
            </div>
            <p class="minicart__header--desc">The organic foods products are limited</p>
        </div>
        <div class="minicart__product">
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="product-details.html"><img src="{{ asset('img/product/product1.png') }}"
                            alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="product-details.html">The is Garden Vegetable.</a></h4>
                    <span class="color__variant"><b>Color:</b> Beige</span>
                    <div class="minicart__price">
                        <span class="current__price">₹125.00</span>
                        <span class="old__price">₹140.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                value="Decrease Value">-</button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter />
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                value="Increase Value">+</button>
                        </div>
                        <button class="minicart__product--remove" type="button">Remove</button>
                    </div>
                </div>
            </div>
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="product-details.html"><img src="https://yourdomain.com/img/product/product2.png"
                            alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="product-details.html">Fresh Tomatoe is organic.</a></h4>
                    <span class="color__variant"><b>Color:</b> Green</span>
                    <div class="minicart__price">
                        <span class="current__price">₹115.00</span>
                        <span class="old__price">₹130.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                value="Decrease Value">-</button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter />
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                value="Increase Value">+</button>
                        </div>
                        <button class="minicart__product--remove" type="button">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="minicart__amount">
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Sub Total:</span>
                <span><b>₹240.00</b></span>
            </div>
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Total:</span>
                <span><b>₹240.00</b></span>
            </div>
        </div>
        <div class="minicart__conditions text-center">
            <input class="minicart__conditions--input" id="accept" type="checkbox">
            <label class="minicart__conditions--label" for="accept">I agree with the <a
                    class="minicart__conditions--link" href="privacy-policy.html">Privacy Policy</a></label>
        </div>
        <div class="minicart__button d-flex justify-content-center">
            <a class="btn minicart__button--link" href="cart.html">View cart</a>
            <a class="btn minicart__button--link" href="checkout.html">Checkout</a>
        </div>
    </div>
    <!-- End offCanvas minicart -->

    <!-- Start search box area -->
    <div class="predictive__search--box" id="predictiveSearchModal">
        <div class="predictive__search--box__inner">
            <!-- Search Form Bar -->
            <form class="predictive__search--form" action="{{ route('shop') }}" method="GET" id="headerSearchForm">
                <div class="predictive__search--bar__wrap">
                    <input class="predictive__search--input" id="headerSearchInput" name="search"
                        placeholder="I'm shopping for ..." type="text"
                        autocomplete="off" value="{{ request('search') }}">
                    <button type="button" class="predictive__search--clear__btn" id="headerSearchClearInput" aria-label="clear search" style="display: none;">
                        &times;
                    </button>
                    <button class="predictive__search--button" type="submit" aria-label="search button">
                        <span>SEARCH</span>
                        <svg class="predictive__search--btn__svg" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                                stroke="currentColor" stroke-miterlimit="10" stroke-width="36" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="36" d="M338.29 338.29L448 448" />
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Search Modal Content Area -->
            <div class="predictive__search--content" id="predictiveSearchContent">

                <!-- 1. Initial State: Trending Searches & Popular Products -->
                <div class="predictive__search--initial" id="predictiveSearchInitial">
                    <!-- Trending Search Section -->
                    <div class="predictive__section--block">
                        <h3 class="predictive__section--title">Trending Search</h3>
                        <div class="predictive__trending--tags" id="predictiveTrendingTags">
                            <button type="button" class="predictive__trending--pill" data-term="Health mix">Health mix</button>
                            <button type="button" class="predictive__trending--pill" data-term="Tea Powder">Tea Powder</button>
                            <button type="button" class="predictive__trending--pill" data-term="Spices">Spices</button>
                            <button type="button" class="predictive__trending--pill" data-term="Cold Pressed Oil">Cold Pressed Oil</button>
                            <button type="button" class="predictive__trending--pill" data-term="Herbal">Herbal</button>
                            <button type="button" class="predictive__trending--pill" data-term="Seeds">Seeds</button>
                        </div>
                    </div>

                    <!-- Popular Products Section -->
                    <div class="predictive__section--block mt-24">
                        <h3 class="predictive__section--title">Popular Products</h3>
                        <div class="predictive__products--grid" id="predictivePopularProductsGrid">
                            <div class="predictive__loading--state">
                                <span class="predictive__spinner"></span>
                                <span>Loading popular products...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Searched State: Visual Product Cards Matching Query -->
                <div class="predictive__search--results" id="predictiveSearchResults" style="display: none;">
                    <div class="predictive__section--block">
                        <div class="d-flex align-items-center justify-content-between mb-15">
                            <h3 class="predictive__section--title mb-0" id="predictiveResultsHeading">Products</h3>
                            <a href="#" class="predictive__viewall--link" id="predictiveResultsViewAll" style="display: none;">
                                View all results in shop &rarr;
                            </a>
                        </div>
                        <div class="predictive__products--grid" id="predictiveSearchProductsGrid">
                            <!-- Populated dynamically -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <button class="predictive__search--close__btn" id="headerSearchCloseBtn" aria-label="search close" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="32"
                height="32" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="32" d="M368 368L144 144M368 144L144 368" />
            </svg>
        </button>
    </div>
    <!-- End search box area -->

    <style>
        .predictive__search--box {
            background: #ffffff !important;
            max-height: 88vh;
            overflow-y: auto;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            opacity: 0;
            visibility: hidden;
            z-index: 99999 !important;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateY(-100%);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.18);
        }
        .predictive__search--box.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .predictive__search--box__inner {
            max-width: 1260px;
            margin: 0 auto;
            padding: 24px 24px 45px !important;
            text-align: left;
            position: relative;
        }

        /* Top Search Bar Styling matching reference screenshots */
        .predictive__search--form {
            max-width: 720px;
            margin: 0 auto 28px;
            position: relative;
            width: 100%;
        }
        .predictive__search--bar__wrap {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            border: 1.5px solid #2e7d32;
            border-radius: 6px;
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(46, 125, 50, 0.08);
            overflow: hidden;
        }
        .predictive__search--input {
            width: 100% !important;
            height: 48px !important;
            border: none !important;
            padding: 0 140px 0 16px !important;
            font-size: 15px !important;
            font-weight: 400 !important;
            color: #1e293b !important;
            outline: none !important;
            background: transparent !important;
        }
        .predictive__search--input::placeholder {
            color: #94a3b8;
            font-size: 14px;
        }
        .predictive__search--clear__btn {
            position: absolute;
            right: 115px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 20px;
            line-height: 1;
            color: #64748b;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 50%;
            transition: color 0.15s, background 0.15s;
            z-index: 2;
        }
        .predictive__search--clear__btn:hover {
            color: #0f172a;
            background: #f1f5f9;
        }
        .predictive__search--button {
            position: absolute !important;
            right: 0 !important;
            top: 0 !important;
            bottom: 0 !important;
            height: 100% !important;
            background: #2e7d32 !important;
            color: #ffffff !important;
            border: none !important;
            padding: 0 22px !important;
            font-size: 13px !important;
            font-weight: 700 !important;
            letter-spacing: 0.8px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            cursor: pointer !important;
            border-radius: 0 4px 4px 0 !important;
            transition: background 0.2s ease !important;
            z-index: 2;
        }
        .predictive__search--button:hover {
            background: #1b5e20 !important;
        }
        .predictive__search--btn__svg {
            stroke: currentColor;
            fill: none;
        }

        /* Close Button on Top Right */
        .predictive__search--close__btn {
            position: absolute !important;
            top: 18px !important;
            right: 25px !important;
            background: transparent !important;
            border: none !important;
            color: #475569 !important;
            cursor: pointer !important;
            padding: 6px !important;
            border-radius: 50% !important;
            transition: all 0.2s ease !important;
            z-index: 10 !important;
        }
        .predictive__search--close__btn:hover {
            color: #0f172a !important;
            background: #f1f5f9 !important;
            transform: rotate(90deg) !important;
        }

        /* Section Titles matching reference images */
        .predictive__section--title {
            font-size: 16px;
            font-weight: 700;
            color: #1e7e34;
            margin: 0 0 12px 0;
            letter-spacing: -0.2px;
        }
        .mt-24 {
            margin-top: 24px;
        }
        .mb-15 {
            margin-bottom: 15px;
        }
        .predictive__viewall--link {
            font-size: 13px;
            font-weight: 600;
            color: #2e7d32;
            text-decoration: none;
            transition: color 0.15s;
        }
        .predictive__viewall--link:hover {
            color: #1b5e20;
            text-decoration: underline;
        }

        /* Trending Search Pills */
        .predictive__trending--tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .predictive__trending--pill {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            color: #475569;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
            line-height: 1.4;
        }
        .predictive__trending--pill:hover {
            border-color: #2e7d32;
            color: #2e7d32;
            background: #f0fdf4;
            transform: translateY(-1px);
        }

        /* Responsive Product Cards Grid matching Screenshot 1 and 2 */
        .predictive__products--grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 18px;
        }
        @media (max-width: 1200px) {
            .predictive__products--grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 14px;
            }
        }
        @media (max-width: 900px) {
            .predictive__products--grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 12px;
            }
        }
        @media (max-width: 600px) {
            .predictive__products--grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }
        }

        /* Product Card */
        .predictive__card {
            background: #ffffff;
            border: 1px solid #f1f5f9;
            border-radius: 8px;
            overflow: hidden;
            padding: 12px;
            display: flex;
            flex-direction: column;
            text-decoration: none !important;
            transition: all 0.25s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
        }
        .predictive__card:hover {
            border-color: #86efac;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            transform: translateY(-3px);
        }
        .predictive__card--img__box {
            width: 100%;
            height: 165px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border-radius: 6px;
            overflow: hidden;
            margin-bottom: 10px;
            position: relative;
        }
        .predictive__card--img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        .predictive__card:hover .predictive__card--img {
            transform: scale(1.05);
        }
        .predictive__card--badge {
            position: absolute;
            top: 6px;
            left: 6px;
            font-size: 10px;
            font-weight: 700;
            background: #e8f5e9;
            color: #2e7d32;
            padding: 2px 7px;
            border-radius: 4px;
            text-transform: uppercase;
        }
        .predictive__card--title {
            font-size: 14px;
            font-weight: 700;
            color: #1e293b;
            line-height: 1.35;
            margin: 0 0 6px 0;
            min-height: 38px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .predictive__card--rating {
            color: #f59e0b;
            font-size: 13px;
            margin-bottom: 6px;
            letter-spacing: 2px;
            line-height: 1;
        }
        .predictive__card--price {
            display: flex;
            align-items: baseline;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: auto;
            font-size: 13px;
        }
        .predictive__card--oldprice {
            color: #94a3b8;
            font-size: 12px;
            text-decoration: line-through;
            font-weight: 400;
        }
        .predictive__card--currprice {
            color: #166534;
            font-weight: 700;
            font-size: 15px;
        }

        /* Loading & Empty States */
        .predictive__loading--state {
            grid-column: 1 / -1;
            padding: 40px 20px;
            text-align: center;
            color: #64748b;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        .predictive__spinner {
            width: 20px;
            height: 20px;
            border: 2px solid #e2e8f0;
            border-top-color: #2e7d32;
            border-radius: 50%;
            animation: predictiveSpin 0.6s linear infinite;
            display: inline-block;
        }
        @keyframes predictiveSpin {
            to { transform: rotate(360deg); }
        }
        .predictive__search--empty {
            grid-column: 1 / -1;
            padding: 35px 20px;
            text-align: center;
            background: #fafafa;
            border-radius: 8px;
            border: 1px dashed #cbd5e1;
        }
        .predictive__highlight {
            background-color: #fef08a;
            color: #854d0e;
            font-weight: 700;
            padding: 0 1px;
            border-radius: 2px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('headerSearchInput');
            const clearBtn = document.getElementById('headerSearchClearInput');
            const searchForm = document.getElementById('headerSearchForm');
            const searchBox = document.getElementById('predictiveSearchModal');
            const initialContainer = document.getElementById('predictiveSearchInitial');
            const resultsContainer = document.getElementById('predictiveSearchResults');
            const trendingTags = document.getElementById('predictiveTrendingTags');
            const popularGrid = document.getElementById('predictivePopularProductsGrid');
            const searchProductsGrid = document.getElementById('predictiveSearchProductsGrid');
            const resultsHeading = document.getElementById('predictiveResultsHeading');
            const resultsViewAll = document.getElementById('predictiveResultsViewAll');
            const closeBtn = document.getElementById('headerSearchCloseBtn');
            const suggestUrl = "{{ route('search.suggest') }}";

            let debounceTimer = null;
            let currentRequest = null;
            let initialDataLoaded = false;

            // Helper to escape HTML characters
            function escapeHtml(str) {
                if (!str) return '';
                return String(str)
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#039;');
            }

            // Helper to highlight matching terms
            function highlightMatch(text, query) {
                if (!query || !text) return escapeHtml(text);
                const safeText = escapeHtml(text);
                const safeQuery = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
                const regex = new RegExp('(' + safeQuery + ')', 'gi');
                return safeText.replace(regex, '<mark class="predictive__highlight">$1</mark>');
            }

            // Render single product card matching the reference screenshots
            function renderProductCard(product, query) {
                const titleHtml = query ? highlightMatch(product.name, query) : escapeHtml(product.name);
                const oldPriceHtml = product.old_price ? `<span class="predictive__card--oldprice">${escapeHtml(product.old_price)}</span>` : '';
                const ratingStars = '★★★★★';

                return `
                    <a href="${product.url}" class="predictive__card">
                        <div class="predictive__card--img__box">
                            <img src="${product.image}" alt="${escapeHtml(product.name)}" class="predictive__card--img" onerror="this.src='{{ asset('img/product/product1.png') }}'">
                            ${product.badge ? `<span class="predictive__card--badge">${escapeHtml(product.badge)}</span>` : ''}
                        </div>
                        <div class="predictive__card--body">
                            <h4 class="predictive__card--title">${titleHtml}</h4>
                            <div class="predictive__card--rating" title="Rated 5.0 out of 5">
                                ${ratingStars}
                            </div>
                            <div class="predictive__card--price">
                                ${oldPriceHtml}
                                <span class="predictive__card--currprice">${escapeHtml(product.price)}</span>
                            </div>
                        </div>
                    </a>
                `;
            }

            // Load Initial Data (Trending Searches & Popular Products)
            function loadInitialData() {
                if (initialDataLoaded) return;

                fetch(suggestUrl, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(function (res) { return res.json(); })
                .then(function (data) {
                    initialDataLoaded = true;

                    // Render Trending Pills
                    if (data.trending && data.trending.length > 0 && trendingTags) {
                        let pillsHtml = '';
                        data.trending.forEach(function (term) {
                            pillsHtml += `<button type="button" class="predictive__trending--pill" data-term="${escapeHtml(term)}">${escapeHtml(term)}</button>`;
                        });
                        trendingTags.innerHTML = pillsHtml;
                        bindTrendingClicks();
                    }

                    // Render Popular Products Grid
                    if (data.popular && data.popular.length > 0 && popularGrid) {
                        let cardsHtml = '';
                        data.popular.forEach(function (product) {
                            cardsHtml += renderProductCard(product, '');
                        });
                        popularGrid.innerHTML = cardsHtml;
                    }
                })
                .catch(function (err) {
                    if (popularGrid) {
                        popularGrid.innerHTML = '<div class="text-muted small py-3">Popular products ready in catalog.</div>';
                    }
                });
            }

            // Bind click events on trending search pills
            function bindTrendingClicks() {
                document.querySelectorAll('.predictive__trending--pill').forEach(function (pill) {
                    pill.addEventListener('click', function () {
                        const term = this.getAttribute('data-term');
                        if (term && searchInput) {
                            searchInput.value = term;
                            toggleClearBtn();
                            doSearch(term);
                        }
                    });
                });
            }

            // Toggle visibility of clear button
            function toggleClearBtn() {
                if (!clearBtn || !searchInput) return;
                if (searchInput.value.trim().length > 0) {
                    clearBtn.style.display = 'block';
                } else {
                    clearBtn.style.display = 'none';
                }
            }

            // Reset search input and restore Trending & Popular view
            function resetToInitialView() {
                if (searchInput) {
                    searchInput.value = '';
                }
                toggleClearBtn();
                if (resultsContainer) resultsContainer.style.display = 'none';
                if (initialContainer) initialContainer.style.display = 'block';
                if (searchInput) searchInput.focus();
            }

            // Perform live AJAX search for query
            function doSearch(query) {
                query = query.trim();

                if (query.length < 1) {
                    resetToInitialView();
                    return;
                }

                // Switch view to searched results
                if (initialContainer) initialContainer.style.display = 'none';
                if (resultsContainer) resultsContainer.style.display = 'block';

                if (resultsHeading) {
                    resultsHeading.textContent = 'Products';
                }
                if (resultsViewAll) {
                    resultsViewAll.style.display = 'none';
                }

                if (searchProductsGrid) {
                    searchProductsGrid.innerHTML = `
                        <div class="predictive__loading--state">
                            <span class="predictive__spinner"></span>
                            <span>Searching products for "<strong>${escapeHtml(query)}</strong>"...</span>
                        </div>
                    `;
                }

                if (currentRequest) {
                    currentRequest.abort();
                }

                const controller = new AbortController();
                currentRequest = controller;

                fetch(suggestUrl + '?q=' + encodeURIComponent(query), {
                    signal: controller.signal,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(function (res) { return res.json(); })
                .then(function (data) {
                    if (!searchProductsGrid) return;

                    if (data.results.length === 0) {
                        searchProductsGrid.innerHTML = `
                            <div class="predictive__search--empty">
                                <div style="font-size: 28px; margin-bottom: 8px;">🌿</div>
                                <h4 style="font-weight: 700; color: #1e293b; font-size: 16px; margin-bottom: 6px;">No Products Found</h4>
                                <p style="font-size: 13px; color: #64748b; margin-bottom: 15px;">
                                    We couldn't find any products matching "<strong>${escapeHtml(query)}</strong>".
                                </p>
                                <div style="display: flex; justify-content: center; gap: 8px; flex-wrap: wrap;">
                                    <button type="button" class="predictive__trending--pill" onclick="document.getElementById('headerSearchInput').value='Spices'; document.getElementById('headerSearchInput').dispatchEvent(new Event('input'));">Try "Spices"</button>
                                    <button type="button" class="predictive__trending--pill" onclick="document.getElementById('headerSearchInput').value='Oil'; document.getElementById('headerSearchInput').dispatchEvent(new Event('input'));">Try "Oil"</button>
                                    <button type="button" class="predictive__trending--pill" onclick="document.getElementById('headerSearchInput').value='Herbal'; document.getElementById('headerSearchInput').dispatchEvent(new Event('input'));">Try "Herbal"</button>
                                </div>
                            </div>
                        `;
                        if (resultsViewAll) resultsViewAll.style.display = 'none';
                    } else {
                        let html = '';
                        data.results.forEach(function (product) {
                            html += renderProductCard(product, query);
                        });
                        searchProductsGrid.innerHTML = html;

                        if (resultsViewAll && data.view_all_url) {
                            resultsViewAll.href = data.view_all_url;
                            resultsViewAll.innerHTML = `View all <strong>${data.total}</strong> products in shop &rarr;`;
                            resultsViewAll.style.display = 'inline-block';
                        }
                    }
                })
                .catch(function (err) {
                    if (err.name !== 'AbortError' && searchProductsGrid) {
                        searchProductsGrid.innerHTML = `
                            <div class="predictive__search--empty">
                                <p style="color: #dc2626; font-size: 14px;">Error searching products. Press Enter to view results in shop.</p>
                            </div>
                        `;
                    }
                });
            }

            // Input listener with debounce
            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    toggleClearBtn();
                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(function () {
                        doSearch(searchInput.value);
                    }, 200);
                });

                // Keyboard handling
                searchInput.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') {
                        closeBtn?.click();
                    }
                });
            }

            // Clear button click listener
            if (clearBtn) {
                clearBtn.addEventListener('click', function () {
                    resetToInitialView();
                });
            }

            // When search modal is opened, load initial popular products and auto-focus
            document.querySelectorAll('.search__open--btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    loadInitialData();
                    setTimeout(function () {
                        if (searchInput) {
                            searchInput.focus();
                            searchInput.select();
                            toggleClearBtn();
                            if (searchInput.value.trim().length > 0) {
                                doSearch(searchInput.value);
                            } else {
                                resetToInitialView();
                            }
                        }
                    }, 120);
                });
            });

            // Initial binding for trending pills in HTML
            bindTrendingClicks();
        });
    </script>

</header>
<!-- End header area -->
