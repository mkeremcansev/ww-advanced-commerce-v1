
<?php $__env->startSection('title', __('words.my_account')); ?>
<?php echo $__env->make('web.account.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="inner-section profile-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4><?php echo app('translator')->get('words.my_account'); ?></h4>
                        <button data-bs-toggle="modal" data-bs-target="#profile-edit"><?php echo app('translator')->get('words.change_password'); ?></button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label"><?php echo app('translator')->get('words.name'); ?></label>
                                    <input class="form-control" type="text" value="<?php echo e(Auth::user()->name); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label"><?php echo app('translator')->get('words.surname'); ?></label>
                                    <input class="form-control" type="text" value="<?php echo e(Auth::user()->surname); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label"><?php echo app('translator')->get('words.email_adress'); ?></label>
                                    <input class="form-control" type="email" value="<?php echo e(Auth::user()->email); ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4><?php echo app('translator')->get('words.phone_numbers'); ?></h4>
                        <button data-bs-toggle="modal" data-bs-target="#contact-add"><?php echo app('translator')->get('words.user_phone_create'); ?></button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <?php if(Auth::user()->getAllUserAttributePhones->count()): ?>
                                <?php $__currentLoopData = Auth::user()->getAllUserAttributePhones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card contact">
                                            <p><?php echo e($u->title); ?></p>
                                            <ul>
                                                <li>
                                                    <button type="button" onclick="destroyUserAttribute('<?php echo e($u->hash); ?>');" class="trash icofont-ui-delete" title="<?php echo app('translator')->get('words.delete'); ?>"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                 <p class="text-center mb-1"><?php echo app('translator')->get('words.not_have_data'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4><?php echo app('translator')->get('words.adresses'); ?></h4>
                        <button data-bs-toggle="modal" data-bs-target="#address-add"><?php echo app('translator')->get('words.user_adress_create'); ?></button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <?php if(Auth::user()->getAllUserAttributeAdresses->count()): ?>
                                <?php $__currentLoopData = Auth::user()->getAllUserAttributeAdresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card address">
                                            <p><?php echo e($u->title); ?></p>
                                            <ul class="user-action">
                                                <li>
                                                    <button type="button" onclick="destroyUserAttribute('<?php echo e($u->hash); ?>');" class="trash icofont-ui-delete" title="<?php echo app('translator')->get('words.delete'); ?>"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <p class="text-center mb-1"><?php echo app('translator')->get('words.not_have_data'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4><?php echo app('translator')->get('words.my_reviews'); ?></h4>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <?php if(Auth::user()->getAllUserReviews->count()): ?>
                                <?php $__currentLoopData = Auth::user()->getAllUserReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-lg-4 alert fade show">
                                        <div class="profile-card address">
                                                <?php if($r->status): ?>
                                                <h6 class="text-center text-success">
                                                    <a target="_blank" class="custom-primary-text" href="<?php echo e(route('web.product.show',$r->getOneReviewProduct->slug)); ?>">
                                                        <?php echo e($r->getOneReviewProduct->title); ?>

                                                    </a>
                                                    <?php echo app('translator')->get('words.review_status_seperator', ['status'=>__('words.active')]); ?>
                                                </h6>
                                                <?php else: ?>
                                                <h6 class="text-center text-danger">
                                                    <a target="_blank" href="<?php echo e(route('web.product.show',$r->getOneReviewProduct->slug)); ?>">
                                                        <?php echo e($r->getOneReviewProduct->title); ?>

                                                    </a>
                                                    <?php echo app('translator')->get('words.review_status_seperator', ['status'=>__('words.passive')]); ?>
                                                </h6>
                                                <?php endif; ?>
                                            <p><?php echo e($r->content); ?></p>
                                            <ul class="user-action">
                                                <li>
                                                    <button type="button" onclick="destroyUserReview('<?php echo e($r->hash); ?>');" class="trash icofont-ui-delete" title="<?php echo app('translator')->get('words.delete'); ?>"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="review-rating text-center">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <li class="<?php if($r->rating >= $i): ?> icofont-ui-rating <?php else: ?> icofont-ui-rate-blank <?php endif; ?> "></li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <p class="text-center mb-1"><?php echo app('translator')->get('words.not_have_data'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="contact-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3><?php echo app('translator')->get('words.user_phone_create'); ?></h3>
                </div>
                <div class="form-group">
                    <label class="form-label"><?php echo app('translator')->get('words.phone_number'); ?></label>
                    <input class="form-control" type="text" id="phone">
                </div>
                <button class="form-btn" type="button" id="add-to-user-phone"><?php echo app('translator')->get('words.save'); ?></button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <form class="modal-form">
                <div class="form-title">
                    <h3><?php echo app('translator')->get('words.user_adress_create'); ?></h3>
                </div>
                <div class="form-group">
                    <label class="form-label"><?php echo app('translator')->get('words.adress'); ?></label>
                    <textarea class="form-control" id="adress"></textarea>
                </div>
                <button class="form-btn" type="button" id="add-to-user-adress"><?php echo app('translator')->get('words.save'); ?></button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i
                    class="icofont-close"></i></button>
            <div class="modal-form">
                <div class="form-title">
                    <h3><?php echo app('translator')->get('words.change_password'); ?></h3>
                </div>
                <div class="form-group">
                    <label class="form-label"><?php echo app('translator')->get('words.password'); ?></label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label class="form-label"><?php echo app('translator')->get('words.repeat_password'); ?></label>
                    <input type="password" class="form-control" id="repeat">
                </div>
                <button class="form-btn" type="button" id="change-to-password"><?php echo app('translator')->get('words.save'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/web/account/index.blade.php ENDPATH**/ ?>