<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ninico - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area-start -->
    <header>
        <div class="header-top space-bg">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-4 d-none d-xl-block">
                        <div class="headertoplag d-flex align-items-center justify-content-end">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainmenuarea d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="mainmenu d-flex align-items-center">
                            <div class="mainmenu__main d-flex align-items-center p-relative">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="index.html">Beranda</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Produk</a>
                                            </li>
                                            <li><a href="contact.html">Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mainmenu__logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-meta d-flex align-items-center justify-content-end">
                            <div class="header-meta__social d-flex align-items-center ml-25">
                                <button class="header-cart p-relative tp-cart-toggle">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span class="tp-product-count">2</span>
                                </button>
                                <a href="sign-in.html"><i class="fal fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- header-xl-sticky-area -->
    <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="main-menu">
                        <ul>
                            <li>
                                <a href="index.html">Beranda</a>
                            </li>
                            <li>
                                <a href="shop.html">Produk</a>
                            </li>
                            <li>
                                <a href="about.html">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-9">
                    <div class="header-meta-info d-flex align-items-center justify-content-end">
                        <div class="header-meta__social  d-flex align-items-center">
                            <button class="header-cart p-relative tp-cart-toggle">
                                <i class="fal fa-shopping-cart"></i>
                                <span class="tp-product-count">2</span>
                            </button>
                            <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        </div>
                        <div class="header-meta__search-5 ml-25">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-xl-sticky-end -->

    <!-- header-md-lg-area -->
    <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 d-flex align-items-center">
                    <div class="header-canvas flex-auto">
                        <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="header-meta-info d-flex align-items-center justify-content-between">
                        <div class="header-meta__social d-flex align-items-center ml-25">
                            <button class="header-cart p-relative tp-cart-toggle">
                                <i class="fal fa-shopping-cart"></i>
                                <span>2</span>
                            </button>
                            <a href="sign-in.html"><i class="fal fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3 d-flex align-items-center">
                    <div class="header-canvas flex-auto">
                        <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="logo text-center">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                        <div class="header-meta m-0 d-flex align-items-center">
                            <div class="header-meta__social d-flex align-items-center">
                                <button class="header-cart p-relative tp-cart-toggle">
                                    <i class="fal fa-shopping-cart"></i>
                                    <span>2</span>
                                </button>
                                <a href="sign-in.html"><i class="fal fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-md-lg-area -->

    <!-- sidebar-menu-area -->
    <div class="tpsideinfo">
        <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
        <div class="tpsideinfo__search text-center pt-35">
            <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
            <form action="#">
                <input type="text" placeholder="Search Products...">
                <button><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="tpsideinfo__nabtab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Menu</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Categories</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="mobile-menu"></div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="tpsidebar-categories">
                        <ul>
                            <li><a href="shop.html">Furniture</a></li>
                            <li><a href="shop.html">Wooden</a></li>
                            <li><a href="shop.html">Lifestyle</a></li>
                            <li><a href="shop-2.html">Shopping</a></li>
                            <li><a href="track.html">Track Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tpsideinfo__account-link">
            <a href="sign-in.html"><i class="fal fa-user"></i> Login / Register</a>
        </div>
        <div class="tpsideinfo__wishlist-link">
            <a href="wishlist.html" target="_parent"><i class="fal fa-heart"></i> Wishlist</a>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- sidebar-menu-area-end -->

    <!-- header-cart-start -->
    <div class="tpcartinfo tp-cart-info-area p-relative">
        <button class="tpcart__close"><i class="fal fa-times"></i></button>
        <div class="tpcart">
            <h4 class="tpcart__title">Keranjang Saya</h4>
            <div class="tpcart__product">
                <div class="tpcart__product-list">
                    <ul>
                        <li>
                            @foreach ($barang as $data)
                            @endforeach
                            <div class="tpcart__item">
                                <div class="tpcart__img">
                                    <img src="{{ asset('frontend/assets/img/banner/banner-2-03.jpg') }}"
                                        alt="">
                                    <div class="tpcart__del">
                                        <a href="#"><i
                                                class="far fa-times-circle"></i>{{ $data->nama_barang }}</a>
                                    </div>
                                </div>
                                <div class="tpcart__content">
                                    <span class="tpcart__content-title"><a href="shop-details.html"></a>
                                    </span>
                                    <div class="tpcart__cart-price">
                                        <span class="quantity">1 x</span>
                                        <span class="new-price">$138.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tpcart__checkout">
                    <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                        <span> Subtotal:</span>
                        <span class="heilight-price"> $300.00</span>
                    </div>
                    <div class="tpcart__checkout-btn">
                        <a class="tpcart-btn mb-10" href="{{ route('layouts.transaksi') }}">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cartbody-overlay"></div>
    <!-- header-cart-end -->

    <!-- main-area-start -->
    <main>

        <!-- slider-area-start -->
        <section class="slider-area slider-bg slider-bg-height">
            <div class="slider-pagination-2 p-relative">
                <div class="swiper-containers slidertwo-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-bg">
                            <div class="container">
                                <div class="slider-top-padding pt-55">
                                    <div class="row p-relative align-items-end">
                                        <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                            <div class="tpslidertwo__item">
                                                <div class="tpslidertwo__content">
                                                    <h4 class="tpslidertwo__sub-title">Winter</h4>
                                                    <h3 class="tpslidertwo__title mb-10">Exclusive <br> Winter
                                                        Collection</h3>
                                                    <p>New Modern Stylist Fashionable Women's Wear holder</p>
                                                    <div class="tpslidertwo__slide-btn">
                                                        <a class="tp-btn banner-animation" href="shop.html">Shop Now
                                                            <i class="fal fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                            <div class="tpslidertwo__img p-relative text-end">
                                                <img src="{{ asset('frontend/assets/img/slider/slider-01.png') }}"
                                                    alt="">
                                                <div class="tpslidertwo__img-shape">
                                                    <img src="{{ asset('frontend/assets/img/slider/fasion-tag-01.png') }}"
                                                        alt="tag">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-bg">
                            <div class="container">
                                <div class="slider-top-padding pt-55">
                                    <div class="row p-relative align-items-end">
                                        <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                            <div class="tpslidertwo__item">
                                                <div class="tpslidertwo__content">
                                                    <h4 class="tpslidertwo__sub-title">Winter</h4>
                                                    <h3 class="tpslidertwo__title mb-10">Exclusive <br> Women's Fashion
                                                    </h3>
                                                    <p>New Modern Stylist Fashionable Women's Wear holder</p>
                                                    <div class="tpslidertwo__slide-btn">
                                                        <a class="tp-btn banner-animation" href="shop.html">Shop Now
                                                            <i class="fal fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                            <div class="tpslidertwo__img p-relative text-end">
                                                <img src="{{ asset('frontend/assets/img/slider/slider-02.png') }}"
                                                    alt="">
                                                <div class="tpslidertwo__img-shape">
                                                    <img src="{{ asset('frontend/assets/img/slider/fasion-tag-01.png') }}"
                                                        alt="tag">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-bg">
                            <div class="container">
                                <div class="slider-top-padding pt-55">
                                    <div class="row p-relative align-items-end">
                                        <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                            <div class="tpslidertwo__item">
                                                <div class="tpslidertwo__content">
                                                    <h4 class="tpslidertwo__sub-title">Winter</h4>
                                                    <h3 class="tpslidertwo__title mb-10">Exclusive <br> Summer
                                                        Collection</h3>
                                                    <p>New Modern Stylist Fashionable Women's Wear holder</p>
                                                    <div class="tpslidertwo__slide-btn">
                                                        <a class="tp-btn banner-animation" href="shop.html">Shop Now
                                                            <i class="fal fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                            <div class="tpslidertwo__img p-relative text-end">
                                                <img src="{{ asset('frontend/assets/img/slider/slider-03.png') }}"
                                                    alt="">
                                                <div class="tpslidertwo__img-shape">
                                                    <img src="{{ asset('frontend/assets/img/slider/fasion-tag-01.png') }}"
                                                        alt="tag">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-two-pagination">
                    <div class="container">
                        <div class="slider-two-pagination-item p-relative">
                            <div class="slidertwo_pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- banner-area-start -->
        <section class="banner-area pt-100 pb-95">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3">
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/banner-2-01.jpg') }}" alt="">
                            <div class="banneritem__content">
                                <a href="shop.html"><i class="far fa-long-arrow-right"></i></a>
                                <p>19 Items</p>
                                <h4 class="banneritem__content-tiele"><a href="shop.html">Pro Glasses</a></h4>
                            </div>
                        </div>
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/banner-2-02.jpg') }}" alt="">
                            <div class="banneritem__content">
                                <a href="shop-2.html"><i class="far fa-long-arrow-right"></i></a>
                                <p>22 Items</p>
                                <h4 class="banneritem__content-tiele"><a href="shop.html">Casual Shoes</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/banner-2-03.jpg') }}" alt="">
                            <div class="banneritem__content banner-center">
                                <a href="shop-2.html"><i class="far fa-long-arrow-right"></i></a>
                                <p>30 Items</p>
                                <h4 class="banneritem__content-tiele"><a href="shop.html">Winter Jacket</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/banner-2-04.jpg') }}" alt="">
                            <div class="banneritem__content">
                                <a href="shop-2.html"><i class="far fa-long-arrow-right"></i></a>
                                <p>13 Items</p>
                                <h4 class="banneritem__content-tiele"><a href="shop.html">New Added</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- product-area-start -->
        <section class="product-area pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="tpsection mb-40">
                            <h4 class="tpsection__title">Kategori</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">

                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="tpproductall">
                            <a href="shop.html">Lihat Semua<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                        aria-labelledby="nav-all-tab">
                        <div
                            class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">
                            @foreach ($barang as $data)
                                <div class="col">
                                    <div class="tpproduct tpproductitem mb-15 p-relative">
                                        <div class="tpproduct__thumb">
                                            <div class="tpproduct__thumbitem p-relative">
                                                <a href="shop-details-2.html">
                                                    <img src="{{ asset('images/barang/' . $data->gambar_produk) }}"
                                                        alt="product-thumb">
                                                </a>
                                                <div class="tpproduct__thumb-bg">
                                                    <div class="tpproductactionbg">
                                                        <a class="quckview" href="{{ route('detail', $data->id) }}"><i
                                                                class="fal fa-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpproduct__content-area">
                                            <h3 class="tpproduct__title mb-5"><a
                                                    href="shop-details.html">{{ $data->nama_barang }}</a></h3>
                                            <div class="tpproduct__priceinfo p-relative">
                                                <div class="tpproduct__ammount">
                                                    <span>Rp. {{ $data->harga }}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- product-area-end -->

        <!-- exclusive-area-start -->
        <section class="exclusive-area pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="exclusiveitem banner-animation p-relative mb-30">
                            <div class="exclusiveitem__thumb">
                                <img src="{{ asset('frontend/assets/img/banner/banner-offer-01.jpg') }}"
                                    alt="">
                            </div>
                            <div class="tpexclusive__content">
                                <h4 class="tpexclusive__subtitle">Collection</h4>
                                <h3 class="tpexclusive__title mb-30">Winter <br> Exclusive In</h3>
                                <div class="tpexclusive__btn">
                                    <a href="shop.html" class="tp-btn banner-animation">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="exclusivearea banner-animation p-relative mb-30">
                            <div class="exclusivearea__thumb">
                                <img src="assets/img/banner/banner-offer-02.jpg" alt="">
                            </div>
                            <div class="tpexclusive__contentarea text-center">
                                <h4 class="tpexclusive__subtitle subcolor">Discount</h4>
                                <h3 class="tpexclusive__title mb-10">50% Offer</h3>
                                <p>New Modern Stylist Fashionable <br> Women's Wear holder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- exclusive-area-end -->

        <!-- brand-area-start -->
        <section class="brand-area theme-bg pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="tpsection solid-line text-center mb-45">
                            <h4 class="tpsection__title ">Happy Sponsors</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-container brand-active">
                    <div class="swiper-wrapper brand-items black-bg-brand">
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-01.png') }}" alt="brand">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-02.png') }}" alt="brand">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-03.png') }}" alt="brand">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-04.png') }}" alt="brand">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-05.png') }}" alt="brand">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-06.png') }}" alt="brand">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend/assets/img/brand/brand-04.png') }}" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area-start -->
    <footer>
        <div class="footer-area secondary-footer black-bg-2 pt-65">
            <div class="container">
                <div class="main-footer pb-15 mb-30">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="footer-widget footer-col-1 mb-40">
                                <div class="footer-logo mb-30">
                                    <a href="index.html"><img
                                            src="{{ asset('frontend/assets/img/logo/logo-white.png') }}"
                                            alt="logo"></a>
                                </div>
                                <div class="footer-content">
                                    <p>Elegant pink origami design three <br> dimensional view and decoration co-exist.
                                        <br>
                                        Great for adding a decorative touch to <br> any room’s decor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget footer-col-2 ml-30 mb-40">
                                <h4 class="footer-widget__title mb-30">Information</h4>
                                <div class="footer-widget__links">
                                    <ul>
                                        <li><a href="#">Custom Service</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="track.html">Ordering Tracking</a></li>
                                        <li><a href="contact.html">Contacts</a></li>
                                        <li><a href="#">Events</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget footer-col-3 mb-40">
                                <h4 class="footer-widget__title mb-30">My Account</h4>
                                <div class="footer-widget__links">
                                    <ul>
                                        <li><a href="contact.html">Delivery Infomation</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Custom Service</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget footer-col-4 mb-40">
                                <h4 class="footer-widget__title mb-30">Social Network</h4>
                                <div class="footer-widget__links">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8">
                            <div class="footer-widget footer-col-5 mb-40">
                                <h4 class="footer-widget__title mb-30">Popular Keywords</h4>
                                <div class="footer-widget__links keyword">
                                    <a href="shop.html">Makeup</a>
                                    <a href="shop.html">Dresses For Girls</a>
                                    <a href="shop.html">T-Shirts</a>
                                    <a href="shop.html">Sandals</a>
                                    <a href="shop.html">Headphones</a>
                                    <a href="shop.html">Baby dolls</a>
                                    <a href="shop.html">Blazers</a>
                                    <a href="shop.html">For Men</a>
                                    <a href="shop.html">Handbags</a>
                                    <a href="shop.html">Ladies Watches</a>
                                    <a href="shop.html">Bags</a>
                                    <a href="shop.html">Sport Shoes</a>
                                    <a href="shop.html">Reebok Shoes</a>
                                    <a href="shop.html">Puma Shoes</a>
                                    <a href="shop.html">Boxers</a>
                                    <a href="shop.html">Wallets</a>
                                    <a href="shop.html">Tops</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-cta pb-20">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6">
                            <div class="footer-cta__contact">
                                <div class="footer-cta__icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="footer-cta__text">
                                    <a href="tel:0123456">980. 029. 666. 99</a>
                                    <span>Working 8:00 - 22:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                            <div class="footer-cta__source">
                                <div class="footer-cta__source-content">
                                    <h4 class="footer-cta__source-title">Download App on Mobile</h4>
                                    <p>15% discount on your first purchase</p>
                                </div>
                                <div class="footer-cta__source-thumb">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/footer/f-google.jpg') }}"
                                            alt="google"></a>
                                    <a href="#"><img src="{{ asset('frontend/assets/img/footer/f-app.jpg') }}"
                                            alt="app"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright black-bg-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7 col-md-5">
                            <div class="footer-copyright__content">
                                <span>Copyright 2022 <a href="index.html">©Ninico</a>. All rights reserved. Powered by
                                    <a href="https://themeforest.net/user/theme_pure/portfolio">Theme_Pure</a>.</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-7">
                            <div class="footer-copyright__brand">
                                <img src="{{ asset('frontend/assets/img/footer/f-brand-icon-01.png') }}"
                                    alt="footer-brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->



    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
