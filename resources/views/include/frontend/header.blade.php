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
                                            <a href="{{ route('welcome') }}">Beranda</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Kategori</a>
                                            <ul class="submenu">
                                                <li><a
                                                        href="{{ route('filter', ['nama_kategori' => 'tanaman']) }}">Tanaman</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('filter', ['nama_kategori' => 'bibit']) }}">Bibit</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('filter', ['nama_kategori' => 'pupuk']) }}">Pupuk</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            {{-- <div class="mainmenu__logo">
                                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                            </div> --}}
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
                            <a href="{{ route('profile') }}"><i class="fal fa-user"></i></a>
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
                    <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/shop3.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="main-menu">
                    <ul>
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Kategori</a>
                            <ul class="submenu">
                                <li><a href="{{ route('filter', ['nama_kategori' => 'tanaman']) }}">Tanaman</a></li>
                                <li><a href="{{ route('filter', ['nama_kategori' => 'bibit']) }}">Bibit</a></li>
                                <li><a href="{{ route('filter', ['nama_kategori' => 'pupuk']) }}">Pupuk</a></li>
                            </ul>
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
                        <a href="{{ route('profile') }}"><i class="fal fa-user"></i></a>
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
                        <a href="{{ route('profile') }}"><i class="fal fa-user"></i></a>
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
                            <a href="{{ route('profile') }}"><i class="fal fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-md-lg-area -->

<!-- header-cart-start -->
<div class="tpcartinfo tp-cart-info-area p-relative">
    <button class="tpcart__close"><i class="fal fa-times"></i></button>
    <div class="tpcart">
        <h4 class="tpcart__title">Keranjang</h4>
        <div class="tpcart__product">
            <div class="tpcart__product-list">
                <ul>
                    <li>
                        <div class="tpcart__item">
                            <div class="tpcart__img">
                                <img src="{{ asset('frontend/assets/img/logo/.jpg') }}" alt="">
                                <div class="tpcart__del">
                                    <a href="#"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                            <div class="tpcart__content">
                                <span class="tpcart__content-title"><a href="shop-details.html">Tanaman</a>
                                </span>
                                <div class="tpcart__cart-price">
                                    <span class="quantity">1 x</span>
                                    <span class="new-price">Rp. 12.000,00</span>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="tpcart__checkout">
                <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                    <span> Jumlah Total:</span>
                    <span class="heilight-price"> $300.00</span>
                </div>
                <div class="tpcart__checkout-btn">
                    <a class="tpcheck-btn" href="">Transaksi</a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="cartbody-overlay"></div>
<!-- header-cart-end -->
