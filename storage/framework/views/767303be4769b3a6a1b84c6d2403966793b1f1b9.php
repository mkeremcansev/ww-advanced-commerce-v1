
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.category_edit'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    <?php echo app('translator')->get('words.category_alert'); ?>
                                </div>
                            </div>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul class="pt-1 pb-1">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo app('translator')->get('words.category_edit'); ?></h4>
                                </div>
                                <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('panel.category.update', $category->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('words.main_category'); ?></label>
                                            <select class="select2 form-control" name="parent_id">
                                                <?php if($category->parent_id == 0): ?>
                                                    <option value="" selected readonly><?php echo app('translator')->get('words.not'); ?></option>
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($c->id); ?>"
                                                            <?php echo e($c->getCategoryBlock($category->id, $c->parent_id)); ?>

                                                            <?php if($category->parent_id == $c->id): ?> selected
                                                        <?php elseif($category->id == $c->id): ?> disabled
                                                    <?php endif; ?>>
                                                    <?php echo e($c->title); ?>

                                                    </option>
                                                    <?php if(count($c->getAllCategoriesCollection) > 0): ?>
                                                        <?php echo $__env->make('panel.category.update.layouts.parents',
                                                        ['getAllSubCategoriesCollection' =>
                                                        $c->getAllCategoriesCollection, 'parent_title' =>
                                                        $c->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"><?php echo app('translator')->get('words.category_name'); ?></label>
                                            <input type="text" class="form-control" value="<?php echo e($category->title); ?>"
                                                name="title">
                                        </div>

                                        <div class="form-group">
                                            <label for="image"><?php echo app('translator')->get('words.image'); ?></label>
                                            <input type="file" class="form-control" name="image">
                                        </div>

                                        <div class="form-group" id="updated_image">
                                            <label for="customFile"><?php echo app('translator')->get('words.updated_image'); ?></label>
                                            <div class="custom-file">
                                                <img width="150" src="<?php echo e(asset($category->image)); ?>" alt="">
                                            </div>
                                        </div>

                                        <button type="submit" id="update" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right"><?php echo app('translator')->get('words.save'); ?></button>
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

<?php echo $__env->make('panel.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/category/update/index.blade.php ENDPATH**/ ?>