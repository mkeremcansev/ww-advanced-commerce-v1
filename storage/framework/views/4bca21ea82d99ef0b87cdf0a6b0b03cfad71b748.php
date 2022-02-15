
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('words.product_create'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" integrity="sha512-foIijUdV0fR0Zew7vmw98E6mOWd9gkGWQBWaoA1EOFAx+pY+N8FmmtIYAVj64R98KeD2wzZh1aHK0JSpKmRH8w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var $repeater = $('.repeater').repeater({
        repeaters: [{
            selector: '.inner-repeater',
            repeaters: [{
                selector: '.deep-inner-repeater'
            }]
        }]
    });
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
            <form action="<?php echo e(route('panel.product.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
            <section>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-12">
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
                            <div class="card-body">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" aria-controls="home" role="tab" aria-selected="false">
                                            <i data-feather='shopping-bag'></i>
                                        <?php echo app('translator')->get('words.product'); ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="variation-tab" data-toggle="tab" href="#variation" aria-controls="profile" role="tab" aria-selected="false">
                                            <i data-feather='codepen'></i>
                                            <?php echo app('translator')->get('words.variation'); ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="images-tab" data-toggle="tab" href="#images" aria-controls="about" role="tab" aria-selected="true">
                                            <i data-feather='upload'></i>
                                            <?php echo app('translator')->get('words.images'); ?>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" aria-controls="about" role="tab" aria-selected="true">
                                            <i data-feather='info'></i>
                                            <?php echo app('translator')->get('words.information'); ?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product" aria-labelledby="product-tab" role="tabpanel">
                                        <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="name"><?php echo app('translator')->get('words.product_name'); ?></label>
                                                        <input type="text" class="form-control" name="title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="category_name"><?php echo app('translator')->get('words.price'); ?></label>
                                                        <input type="text" class="form-control" name="price">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="category_name"><?php echo app('translator')->get('words.discount_price'); ?></label>
                                                        <div class="badge badge-light-success"><?php echo app('translator')->get('words.product_discount_alert'); ?>
                                                        </div>
                                                        <input type="text" class="form-control" name="discount">
                                                    </div>

                                                    <div class="form-group">
                                                        <label><?php echo app('translator')->get('words.category'); ?></label>
                                                        <select class="select2 form-control" name="category_id">
                                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                                                                <?php if(count($c->getAllCategoriesCollection) > 0): ?>
                                                                    <?php echo $__env->make('panel.product.create.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' => $c->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><?php echo app('translator')->get('words.brand'); ?></label>
                                                        <select class="select2 form-control" name="brand_id">
                                                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($b->id); ?>"><?php echo e($b->title); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="description"><?php echo app('translator')->get('words.description'); ?></label>
                                                        <textarea type="text" class="form-control" name="description" id="tiny"></textarea>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="variation" aria-labelledby="variation-tab" role="tabpanel">
                                        <div class="card">
                                            <div class="repeater">
                                                <div class="card-body">
                                                    <div data-repeater-list="list">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-md-10 col-12">
                                                                    <div class="form-group">
                                                                        <label for="name"><?php echo app('translator')->get('words.variation_name'); ?></label>
                                                                        <input type="text" name="variant" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-12">
                                                                    <div class="form-group">
                                                                        <button data-repeater-delete type="button" class="btn btn-danger waves-effect waves-float waves-light w-100">
                                                                            <?php echo app('translator')->get('words.delete'); ?>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="inner-repeater">
                                                                <div data-repeater-list="attribute">
                                                                    <div data-repeater-item>
                                                                        <div class="row d-flex align-items-end">
                                                                            <div class="col-md-4 col-12">
                                                                                <div class="form-group">
                                                                                    <label for=""><?php echo app('translator')->get('words.attribute_name'); ?></label>
                                                                                    <input type="text" class="form-control" name="attribute_title" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-12">
                                                                                <div class="form-group">
                                                                                    <label for=""><?php echo app('translator')->get('words.attribute_stock'); ?></label>
                                                                                    <input type="text" class="form-control" name="attribute_stock"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-12">
                                                                                <div class="form-group">
                                                                                    <label for=""><?php echo app('translator')->get('words.attribute_price'); ?></label>
                                                                                    <input type="text" class="form-control" name="attribute_price"/>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-2 col-12">
                                                                                <div class="form-group">
                                                                                    <button class="btn btn-danger text-nowrap variant-btn-canseworks w-100" data-repeater-delete type="button">
                                                                                        <?php echo app('translator')->get('words.delete'); ?>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button data-repeater-create type="button" class="btn btn-primary waves-effect waves-float waves-light w-100 mb-2 mt-2">
                                                                    <?php echo app('translator')->get('words.add_deep_attribute'); ?>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button data-repeater-create type="button" class="btn btn-success waves-effect waves-float waves-light w-100">
                                                        <?php echo app('translator')->get('words.add_attribute'); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="images" aria-labelledby="images-tab" role="tabpanel">
                                        <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="name"><?php echo app('translator')->get('words.images'); ?></label>
                                                        <input type="file" class="form-control" name="images[]" multiple>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                        <div class="card">
                                            <div class="repeater">
                                                <div class="card-body">
                                                    <div data-repeater-list="informations">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-md-5 col-12">
                                                                    <div class="form-group">
                                                                        <label for="name"><?php echo app('translator')->get('words.title'); ?></label>
                                                                        <input type="text" name="information_title" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-12">
                                                                    <div class="form-group">
                                                                        <label for="name"><?php echo app('translator')->get('words.description'); ?></label>
                                                                        <input type="text" name="information_description" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-12">
                                                                    <div class="form-group">
                                                                        <button data-repeater-delete type="button" class="btn btn-danger waves-effect waves-float waves-light w-100">
                                                                            <?php echo app('translator')->get('words.delete'); ?>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button data-repeater-create type="button" class="btn btn-success waves-effect waves-float waves-light w-100">
                                                        <?php echo app('translator')->get('words.add_attribute'); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-warning waves-effect waves-float waves-light w-100"><?php echo app('translator')->get('words.save'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/product/create/index.blade.php ENDPATH**/ ?>