<div class="container mb-2 mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="simple-marquee-container">
                <div class="marquee-sibling">
					<i class="fa fa-bullhorn"></i>
				</div>
                <div class="marquee">
                    <ul class="marquee-content-items">
                        <?php $__currentLoopData = Cache::get('announcements'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($a->content); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/homepage/layouts/announcement.blade.php ENDPATH**/ ?>