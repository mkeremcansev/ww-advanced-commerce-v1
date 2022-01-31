
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.campaign_edit'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="form-control-repeater">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.campaign_edit'); ?></h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('panel.campaign.update', $campaign->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-12 col-12">

                                                <div class="form-group">
                                                        <label for="name"><?php echo app('translator')->get('words.campaign_name'); ?></label>
                                                        <input type="text" class="form-control" name="title" value="<?php echo e($campaign->title); ?>">
                                                    </div>

                                                <div class="form-group">
                                                    <label><?php echo app('translator')->get('words.campaign_products'); ?></label>
                                                        <select class="select2 form-control" name="products[]" multiple>
                                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($p->id); ?>" <?php if($campaign->getAllCampaignAttributes->contains('product_id',$p->id)): ?> selected <?php endif; ?>><?php echo e($p->getOneProductAttributes->title); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="image"><?php echo app('translator')->get('words.image'); ?></label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>

                                                <div class="form-group" id="updated_image">
                                                    <label for="customFile"><?php echo app('translator')->get('words.updated_image'); ?></label>
                                                    <div class="custom-file">
                                                        <img width="150" src="<?php echo e(asset($campaign->image)); ?>">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mb-1 mt-1 float-right"><?php echo app('translator')->get('words.save'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/campaign/update/index.blade.php ENDPATH**/ ?>