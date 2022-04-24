    <footer class="footer-part">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-xl-4">
                   <div class="footer-widget"><a class="footer-logo" href="{{ route('web.index') }}"><img
                               src="{{ asset(setting('logo')) }}" alt="{{ setting('title') }}"></a>
                       <p class="footer-desc">{{ setting('description') }}</p>
                       <ul class="footer-social">
                           <li><a class="icofont-facebook" href="{{ setting('facebook') }}"></a></li>
                           <li><a class="icofont-twitter" href="{{ setting('twitter') }}"></a></li>
                           <li><a class="icofont-instagram" href="{{ setting('instagram') }}"></a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-xl-4">
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
               <div class="col-sm-6 col-xl-4">
                   <div class="footer-widget">
                       <h3 class="footer-title">@lang('words.pages')</h3>
                       <div class="footer-links">
                           <ul>
                               @foreach ($pages as $p)
                                <li><a href="{{ route('web.page.info.show', $p->slug) }}">{{ $p->title }}</a></li>
                               @endforeach
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="footer-bottom">
                       <p class="footer-copytext">© All Copyrights Reserved by <a href="https://canseworks.net" class="custom-general-white">Canseworks</a></p>
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
   <script src="{{ asset('web/story/dist/zuck.min.js') }}"></script>
   <script src="{{ asset('web/story/demo/script.js') }}"></script>
   @include('web.layouts.alert')
   <script src="{{ asset('web/js/typeahead.js') }}"></script>
   @include('web.layouts.script.script')
   @yield('script')
   </body>
   </html>
