<?php if($paginator->hasPages()): ?>
    <div class="row mt-3">
        <div class="col-lg-12">
            <ul class="pagination">
                <?php if($paginator->onFirstPage()): ?>
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="fas fa-long-arrow-alt-left"></i></a>
                    </li>
                <?php endif; ?>
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(is_string($element)): ?>
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                    <?php endif; ?>
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="page-item active" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                            <?php else: ?>
                                <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/vagrant/code/eticaretim/resources/views/vendor/pagination/pagination.blade.php ENDPATH**/ ?>