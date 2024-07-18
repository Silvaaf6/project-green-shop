<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Cart</title>
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
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
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
 @include('include.frontend.header')
   <!-- header-area-end -->



   <!-- header-cart-start -->
 
   <!-- header-cart-end -->

   <!-- main-area-start -->
   <main>
          
      <!-- cart area -->
      <div class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
         <div class="row">
            <div class="col-12">
                  <form action="#">
                     <div class="table-content table-responsive">
                        <table class="table">
                              <thead>
                                 <tr>
                                    <th class="product-thumbnail">Gambar Produk</th>
                                    <th class="cart-product-name">Nama Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-add-to-cart">Check Out</th>
                                    <th class="product-remove">Hapus</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($keranjangItem as $cart)
                                     
                                  <tr>
                                     <td class="product-thumbnail">
                                        <a href="shop-details.html"><img src="assets/img/product/home-three/product-60.jpg" alt="">
                                        </a>
                                     </td>
                                     <td class="product-name">
                                        <a href="shop-details.html">{{ $cart->barang->Nama_Barang }}</a>
                                     </td>
                                     <td class="product-price">
                                        <span class="amount">Rp.{{ $cart->barang->Harga }}</span>
                                     </td>
                                     <td class="product-quantity">
                                         <a href="shop-details.html">{{ $cart->Jumlah }}</a>
                                     </td>
                                     <td class="product-subtotal">
                                        <span class="amount">Rp.{{ $cart->barang->Harga * $cart->Jumlah }}</span>
                                     </td>
                                     <td class="product-add-to-cart">
                                        <button class="tp-btn tp-color-btn  tp-wish-cart banner-animation">Checkout</button>
                                     </td>
                                     <td class="product-remove">
                                       <form action="{{ route('delete', ['id' => $cart->id]) }}" method="POST" style="display: inline;">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer; color: red;">
                                               Hapus
                                           </button>
                                       </form>
                                   </td>
                                  </tr>
                                  @endforeach
 
                               </tbody>
                        </table>
                        <br>
                        <div class="cart-page-total" style="max-width: 300px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                           <h2 style="font-size: 1.2em;">Total Keranjang</h2>
                           <ul class="mb-20" style="list-style: none; padding: 0;">
                               <li style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                   <span>Subtotal</span>
                                   {{-- <span>{{ $subtotal }}</span> --}}
                               </li>
                           </ul>
                           <a href="checkout.html" class="tp-btn tp-color-btn banner-animation" style="font-size: 0.9em; padding: 8px 16px;">Proses Ke Pembayaran</a>
                       </div>
                       
                     </div>
                  </form>
            </div>
         </div>
         </div>
      </div>
      <!-- cart area end-->

      </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
     @include('include.frontend.footer  ')
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
      <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
   </body>
</html>