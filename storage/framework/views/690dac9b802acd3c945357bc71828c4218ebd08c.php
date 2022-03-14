
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.xml_product_insert'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul class="pt-1 pb-1">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if($m = Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        <?php echo e($m); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo app('translator')->get('words.xml_product_insert'); ?></h4>
                                    <a href="<?php echo e(route('panel.xml.sample.file.download')); ?>" class="btn btn-warning waves-effect waves-float waves-light float-right"><?php echo app('translator')->get('words.xml_sample_file_download'); ?></a>
                                </div>
                                <form method="POST" action="<?php echo e(route('panel.xml.product.insert.store')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="image"><?php echo app('translator')->get('words.xml_file'); ?></label>
                                            <input type="file" class="form-control" name="xml">
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right"><?php echo app('translator')->get('words.save'); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/xml/index.blade.php ENDPATH**/ ?>