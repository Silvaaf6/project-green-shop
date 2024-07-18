<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>transaksi</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png')}}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
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

   <!-- main-area-start -->
   <main>
      <!-- checkout-area start -->
      <section class="checkout-area pb-50 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
            <form action="#">
               <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                           <h3>Billing Details</h3>
                           <div class="row">
                                 <div class="col-md-12">
                                    <div class="country-select">
                                       <label>Country <span class="required">*</span></label>
                                       <select>
                                             <option value="volvo">United States</option>
                                             <option value="saab">Algeria</option>
                                             <option value="mercedes">Canada</option>
                                             <option value="audi">Germany</option>
                                             <option value="audi2">England</option>
                                             <option value="audi3">Qatar</option>
                                             <option value="audi5">Dominican Republic</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>First Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Last Name <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Company Name</label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Address <span class="required">*</span></label>
                                       <input type="text" placeholder="Street address" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list">
                                       <label>Town / City <span class="required">*</span></label>
                                       <input type="text" placeholder="Town / City" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>State / County <span class="required">*</span></label>
                                       <input type="text" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Postcode / Zip <span class="required">*</span></label>
                                       <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Email Address <span class="required">*</span></label>
                                       <input type="email" placeholder="" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="checkout-form-list">
                                       <label>Phone <span class="required">*</span></label>
                                       <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                       <input id="cbox" type="checkbox" />
                                       <label>Create an account?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                       <p>Create an account by entering the information below. If you are a returning
                                             customer please login at the top of the page.</p>
                                       <label>Account password <span class="required">*</span></label>
                                       <input type="password" placeholder="password" />
                                    </div>
                                 </div>
                           </div>
                           <div class="different-address">
                                 <div class="ship-different-title">
                                    <h3>
                                       <label>Ship to a different address?</label>
                                       <input id="ship-box" type="checkbox" />
                                    </h3>
                                 </div>
                                 <div id="ship-box-info">
                                    <div class="row">
                                       <div class="col-md-12">
                                             <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                   <option value="volvo">bangladesh</option>
                                                   <option value="saab">Algeria</option>
                                                   <option value="mercedes">Afghanistan</option>
                                                   <option value="audi">Ghana</option>
                                                   <option value="audi2">Albania</option>
                                                   <option value="audi3">Bahrain</option>
                                                   <option value="audi4">Colombia</option>
                                                   <option value="audi5">Dominican Republic</option>
                                                </select>
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                             </div>
                                       </div>
                                       <div class="col-md-12">
                                             <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" />
                                             </div>
                                       </div>
                                       <div class="col-md-6">
                                             <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="order-notes">
                                    <div class="checkout-form-list">
                                       <label>Order Notes</label>
                                       <textarea id="checkout-mess" cols="30" rows="10"
                                             placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="your-order mb-30 ">
                           <h3>Your order</h3>
                           <div class="your-order-table table-responsive">
                                 <table>
                                    <thead>
                                       <tr>
                                          <th class="product-name">Product</th>
                                          <th class="product-total">Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="cart_item">
                                             <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">$165.00</span>
                                             </td>
                                       </tr>
                                       <tr class="cart_item">
                                             <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                             </td>
                                             <td class="product-total">
                                                <span class="amount">$50.00</span>
                                             </td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr class="cart-subtotal">
                                             <th>Cart Subtotal</th>
                                             <td><span class="amount">$215.00</span></td>
                                       </tr>
                                       <tr class="shipping">
                                             <th>Shipping</th>
                                             <td>
                                                <ul>
                                                   <li>
                                                         <input type="radio" name="shipping"/>
                                                         <label>
                                                            Flat Rate: <span class="amount">$7.00</span>
                                                         </label>
                                                   </li>
                                                   <li>
                                                         <input type="radio" name="shipping"/>
                                                         <label>Free Shipping:</label>
                                                   </li>
                                                </ul>
                                             </td>
                                       </tr>
                                       <tr class="order-total">
                                             <th>Order Total</th>
                                             <td><strong><span class="amount">$215.00</span></strong>
                                             </td>
                                       </tr>
                                    </tfoot>
                                 </table>
                           </div>
                           <div class="payment-method">
                              <div class="accordion" id="checkoutAccordion">
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="checkoutOne">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                       Direct Bank Transfer
                                       </button>
                                    </h2>
                                    <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="paymentTwo">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                       Cheque Payment
                                       </button>
                                    </h2>
                                    <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Please send your cheque to Store Name, Store Street, Store Town, Store
                                       State / County, Store
                                       Postcode.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="paypalThree">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                       PayPal
                                       </button>
                                    </h2>
                                    <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                       <div class="accordion-body">
                                       Pay via PayPal; you can pay with your credit card if you don’t have a
                                       PayPal account.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="order-button-payment mt-20">
                                 <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place order</button>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </form>
         </div>
      </section>
      <!-- checkout-area end -->

      </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
      @include('include.frontend.footer')
      <!-- footer-area-end -->



      <!-- JS here -->
      <script src="{{ asset('frontend/assets/js/jquery.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/waypoints.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/swiper-bundle.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/slick.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/magnific-popup.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/nice-select.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/counterup.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/wow.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/isotope-pkgd.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/countdown.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/ajax-form.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/jquery-ui.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/meanmenu.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
   </body>
</html>