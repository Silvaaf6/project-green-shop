<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>produk</title>
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

    <!-- product-area-start -->
    <section class="product-area pb-65">
        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div
                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">
                        @foreach ($barang as $data)
                            <div class="col">
                                <div class="tpproduct tpproductitem mb-15 p-relative">
                                    <div class="tpproduct__thumb">
                                        <div class="tpproduct__thumbitem p-relative">
                                            <a href="shop-details-2.html">
                                                <img src="{{ asset('images/barang/' . $data->gambar_produk) }}" alt="" style="width: 255px; height: 300px;">
                                            </a>
                                            <div class="tpproduct__thumb-bg">
                                                <div class="tpproductactionbg">
                                                    <a href="{{ route('detail', ['id' => $data->id]) }}"><i class="fal fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct__content-area">
                                        <h3 class="tpproduct__title mb-5">{{ $data->nama_barang }}</h3>
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
        </div>
    </section>
    <!-- product-area-end -->

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
