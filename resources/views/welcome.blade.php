<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

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

    {{-- header --}}
    @include('include.frontend.header')
    {{-- header end --}}

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
                                                    <h3 class="tpslidertwo__title mb-10"> <br>
                                                        Koleksi Tanaman Hias</h3>
                                                    <p>Siap Untuk Menghiasi Rumah Anda</p>
                                                    <div class="tpslidertwo__slide-btn">
                                                        <a class="tp-btn banner-animation" href="{{route('layouts.produk')}}">Belanja Sekarang
                                                            <i class="fal fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                            <div class="tpslidertwo__img p-relative text-end">
                                                <img src="{{ asset('frontend/assets/img/slider/banner2.png') }}"
                                                    alt="">
                                                {{-- <div class="tpslidertwo__img-shape">
                                                    <img src="{{ asset('frontend/assets/img/slider/banner2.png') }}"
                                                        alt="tag">
                                                </div> --}}
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
                                                    <h3 class="tpslidertwo__title mb-10"><br> Berbagai Macam Bibit
                                                    </h3>
                                                    <p>Bibit Asli dan Terjamin Pertumbuhannya</p>
                                                    <div class="tpslidertwo__slide-btn">
                                                        <a class="tp-btn banner-animation" href="{{route('layouts.produk')}}">Belanja Sekarang
                                                            <i class="fal fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                            <div class="tpslidertwo__img p-relative text-end">
                                                <img src="{{ asset('frontend/assets/img/slider/banner3.png') }}"
                                                    alt="">
                                                {{-- <div class="tpslidertwo__img-shape">
                                                    <img src="{{ asset('frontend/assets/img/slider/banner3.png') }}"
                                                        alt="tag">
                                                </div> --}}
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
                                                    <h3 class="tpslidertwo__title mb-10"><br>Berbagai Macam Pupuk</h3>
                                                    <p>Pupuk Berkualitas dan Terjamin Puas</p>
                                                    <div class="tpslidertwo__slide-btn">
                                                        <a class="tp-btn banner-animation" href="{{route('layouts.produk')}}">Belanja Sekarang
                                                            <i class="fal fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                            <div class="tpslidertwo__img p-relative text-end">
                                                <img src="{{ asset('frontend/assets/img/slider/bannerr.png') }}"
                                                    alt="">
                                                {{-- <div class="tpslidertwo__img-shape">
                                                    <img src="{{ asset('frontend/assets/img/slider/bannerr.png') }}"
                                                        alt="tag">
                                                </div> --}}
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
        <section class="banner-area pt-100 pb-30">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-3">
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/2.png') }}" alt="">
                            <div class="banneritem__content">
                                <h4 class="banneritem__content-tiele text-light"><a href="{{route('layouts.produk')}}">Bibit</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/3.png') }}" alt="">
                            <div class="banneritem__content banner-center">
                                <h4 class="banneritem__content-tiele text-light"><a href="{{route('layouts.produk')}}">Tanaman</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="banneritem__thumb banner-animation text-center p-relative">
                            <img src="{{ asset('frontend/assets/img/banner/1.png') }}" alt="">
                            <div class="banneritem__content">
                                <h4 class="banneritem__content-tiele text-light"><a href="{{route('layouts.produk')}}">Pupuk</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

    </main>
    <!-- main-area-end -->

    {{-- footer --}}
    @include('include.frontend.footer')
    {{-- footer end --}}


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
