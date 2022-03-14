
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.multiple_product_price_edit'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            if($('#all_products').is(':checked')){
                    $('#form').hide()
                } else {
                    $('#form').show()
                }
            $('#all_products').on('change', function(){
                if($(this).is(':checked')){
                    $('#form').hide()
                } else {
                    $('#form').show()
                }
            })
        })
    </script>
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.multiple_product_price_edit'); ?></h4>
                                </div>
                                <form method="POST" action="<?php echo e(route('panel.multiple.product.price.update')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body">
                                        <div class="alert alert-danger mb-3" role="alert">
                                            <div class="alert-body">
                                                <?php echo app('translator')->get('words.multiple_product_price_edit_alert'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="all_products" name="all_products">
                                                        <label class="custom-control-label" for="all_products"><?php echo app('translator')->get('words.all_products'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="variant" name="variant">
                                                        <label class="custom-control-label" for="variant"><?php echo app('translator')->get('words.variations_included'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="up" name="up">
                                                        <label class="custom-control-label" for="up"><?php echo app('translator')->get('words.up'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="down" name="down">
                                                        <label class="custom-control-label" for="down"><?php echo app('translator')->get('words.down'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="form">
                                            <label><?php echo app('translator')->get('words.category'); ?></label>
                                            <select class="select2 form-control" name="category_id">
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                                                    <?php if(count($c->getAllCategoriesCollection) > 0): ?>
                                                        <?php echo $__env->make('panel.multiple.product.price.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' => $c->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram"><?php echo app('translator')->get('words.value'); ?></label>
                                            <input type="text" class="form-control" name="value">
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

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/multiple/product/price/index.blade.php ENDPATH**/ ?>