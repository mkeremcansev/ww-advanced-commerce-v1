
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.showcase_edit'); ?>
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
                <section>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.showcase_edit'); ?></h4>
                                </div>
                                <form method="POST" action="<?php echo e(route('panel.showcase.update', $showcase->id)); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="repeater">
                                        <div class="card-body">
                                            <div class="alert alert-danger" role="alert">
                                                <div class="alert-body">
                                                    <?php echo app('translator')->get('words.showcase_alert'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name"><?php echo app('translator')->get('words.showcase_title'); ?></label>
                                                <input type="text" class="form-control" name="title" value="<?php echo e($showcase->title); ?>">
                                            </div>
                                            <div data-repeater-list="showcases">
                                                <?php $__currentLoopData = $showcase->getAllShowcaseAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div data-repeater-item>
                                                    <div class="row d-flex align-items-end">
                                                        <div class="col-md-4 col-12">
                                                            <div class="form-group">
                                                                <label for="name"><?php echo app('translator')->get('words.showcase_image'); ?></label>
                                                                <input type="file" name="image" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12">
                                                            <div class="form-group">
                                                                <label><?php echo app('translator')->get('words.showcase_category'); ?></label>
                                                                <select class="form-control" name="category_id">
                                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($c->id); ?>" <?php if($c->id == $a->category_id): ?> selected <?php endif; ?>><?php echo e($c->title); ?></option>
                                                                        <?php if(count($c->getAllCategoriesCollection) > 0): ?>
                                                                            <?php echo $__env->make('panel.showcase.update.layouts.parents', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' => $c->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12">
                                                            <div class="form-group">
                                                                <label for="name"><?php echo app('translator')->get('words.showcase_url'); ?></label>
                                                                <input type="text" name="url" class="form-control" value="<?php echo e($a->url); ?>" />
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
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <button data-repeater-create type="button" class="btn btn-success waves-effect waves-float waves-light w-100">
                                                <?php echo app('translator')->get('words.add_attribute'); ?>
                                            </button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right"><?php echo app('translator')->get('words.save'); ?></button>
                                        </div>
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

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/showcase/update/index.blade.php ENDPATH**/ ?>