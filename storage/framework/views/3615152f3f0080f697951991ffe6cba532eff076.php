   <footer class="footer-part">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-xl-4">
                   <div class="footer-widget"><a class="footer-logo" href="<?php echo e(route('web.index')); ?>"><img
                               src="<?php echo e(asset(setting('logo'))); ?>" alt="<?php echo e(setting('title')); ?>"></a>
                       <p class="footer-desc"><?php echo e(setting('description')); ?></p>
                       <ul class="footer-social">
                           <li><a class="icofont-facebook" href="<?php echo e(setting('facebook')); ?>"></a></li>
                           <li><a class="icofont-twitter" href="<?php echo e(setting('twitter')); ?>"></a></li>
                           <li><a class="icofont-instagram" href="<?php echo e(setting('instagram')); ?>"></a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-xl-4">
                   <div class="footer-widget contact">
                       <h3 class="footer-title"><?php echo app('translator')->get('words.contact'); ?></h3>
                       <ul class="footer-contact">
                           <li><i class="icofont-ui-email"></i>
                               <p>
                                   <span><?php echo e(setting('mail')); ?></span>
                                </p>
                           </li>
                           <li><i class="icofont-phone"></i>
                               <p>
                                   <span><?php echo e(setting('phone')); ?></span>
                                </p>
                           </li>
                           <li>
                               <i class="icofont-location-pin"></i>
                               <p><?php echo e(setting('adress')); ?></p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-xl-4">
                   <div class="footer-widget">
                       <h3 class="footer-title"><?php echo app('translator')->get('words.pages'); ?></h3>
                       <div class="footer-links">
                           <ul>
                               <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('web.page.info.show', $p->slug)); ?>"><?php echo e($p->title); ?></a></li>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
   <script src="<?php echo e(asset('web/vendor/bootstrap/jquery-1.12.4.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/vendor/bootstrap/popper.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/vendor/bootstrap/bootstrap.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/vendor/countdown/countdown.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/vendor/niceselect/nice-select.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/vendor/slickslider/slick.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/vendor/venobox/venobox.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/js/nice-select.js')); ?>"></script>
   <script src="<?php echo e(asset('web/js/countdown.js')); ?>"></script>
   <script src="<?php echo e(asset('web/js/accordion.js')); ?>"></script>
   <script src="<?php echo e(asset('web/js/venobox.js')); ?>"></script>
   <script src="<?php echo e(asset('web/js/slick.js')); ?>"></script>
   <script src="<?php echo e(asset('web/js/main.js')); ?>"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="<?php echo e(asset('web/story/dist/zuck.min.js')); ?>"></script>
   <script src="<?php echo e(asset('web/story/demo/script.js')); ?>"></script>
   <?php echo $__env->make('web.layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <script src="<?php echo e(asset('web/js/typeahead.js')); ?>"></script>
   <?php echo $__env->make('web.layouts.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->yieldContent('script'); ?>
   </body>
   </html>
<?php /**PATH C:\laragon\www\eticaretim\resources\views/web/layouts/footer.blade.php ENDPATH**/ ?>