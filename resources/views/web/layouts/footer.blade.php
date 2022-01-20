   <footer class="footer-part">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-xl-3">
                   <div class="footer-widget"><a class="footer-logo" href="#"><img
                               src="{{ asset('web') }}/images/logo.png" alt="logo"></a>
                       <p class="footer-desc">{{ setting('description') }}</p>
                       <ul class="footer-social">
                           <li><a class="icofont-facebook" href="{{ setting('facebook') }}"></a></li>
                           <li><a class="icofont-twitter" href="{{ setting('twitter') }}"></a></li>
                           <li><a class="icofont-instagram" href="{{ setting('instagram') }}"></a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-xl-3">
                   <div class="footer-widget contact">
                       <h3 class="footer-title">@lang('words.contact')</h3>
                       <ul class="footer-contact">
                           <li><i class="icofont-ui-email"></i>
                               <p>
                                   <span>{{ setting('mail') }}</span>
                                </p>
                           </li>
                           <li><i class="icofont-phone"></i>
                               <p>
                                   <span>{{ setting('phone') }}</span>
                                </p>
                           </li>
                           <li>
                               <i class="icofont-location-pin"></i>
                               <p>{{ setting('adress') }}</p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-xl-3">
                   <div class="footer-widget">
                       <h3 class="footer-title">quick Links</h3>
                       <div class="footer-links">
                           <ul>
                               <li><a href="#">My Account</a></li>
                               <li><a href="#">Order History</a></li>
                               <li><a href="#">Order Tracking</a></li>
                               <li><a href="#">Best Seller</a></li>
                               <li><a href="#">New Arrivals</a></li>
                           </ul>
                           <ul>
                               <li><a href="#">Location</a></li>
                               <li><a href="#">Affiliates</a></li>
                               <li><a href="#">Contact</a></li>
                               <li><a href="#">Carrer</a></li>
                               <li><a href="#">Faq</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6 col-xl-3">
                   <div class="footer-widget">
                       <h3 class="footer-title">Download App</h3>
                       <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem
                           obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                       <div class="footer-app"><a href="#"><img src="{{ asset('web') }}/images/google-store.png"
                                   alt="google"></a><a href="#"><img src="{{ asset('web') }}/images/app-store.png"
                                   alt="app"></a></div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="footer-bottom">
                       <p class="footer-copytext">© All Copyrights Reserved by <a href="" class="custom-general-white">Canseworks</a></p>
                       <div class="footer-card"><a href="#"><img src="{{ asset('web') }}/images/payment/jpg/01.jpg"
                                   alt="payment"></a><a href="#"><img
                                   src="{{ asset('web') }}/images/payment/jpg/02.jpg" alt="payment"></a><a
                               href="#"><img src="{{ asset('web') }}/images/payment/jpg/03.jpg" alt="payment"></a><a
                               href="#"><img src="{{ asset('web') }}/images/payment/jpg/04.jpg" alt="payment"></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <script src="{{ asset('web/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
   <script src="{{ asset('web/vendor/bootstrap/popper.min.js') }}"></script>
   <script src="{{ asset('web/vendor/bootstrap/bootstrap.min.js') }}"></script>
   <script src="{{ asset('web/vendor/countdown/countdown.min.js') }}"></script>
   <script src="{{ asset('web/vendor/niceselect/nice-select.min.js') }}"></script>
   <script src="{{ asset('web/vendor/slickslider/slick.min.js') }}"></script>
   <script src="{{ asset('web/vendor/venobox/venobox.min.js') }}"></script>
   <script src="{{ asset('web/js/nice-select.js') }}"></script>
   <script src="{{ asset('web/js/countdown.js') }}"></script>
   <script src="{{ asset('web/js/accordion.js') }}"></script>
   <script src="{{ asset('web/js/venobox.js') }}"></script>
   <script src="{{ asset('web/js/slick.js') }}"></script>
   <script src="{{ asset('web/js/main.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   @include('web.layouts.alert')
   @yield('script')
   </body>
   </html>
