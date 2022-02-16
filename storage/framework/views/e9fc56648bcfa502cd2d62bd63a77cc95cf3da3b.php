
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.passive_review_list'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.review.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <?php if($m = Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        <?php echo e($m); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title"><?php echo app('translator')->get('words.passive_review_list'); ?></h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><?php echo app('translator')->get('words.rating'); ?></th>
                                                <th><?php echo app('translator')->get('words.content'); ?></th>
                                                <th><?php echo app('translator')->get('words.member'); ?></th>
                                                <th><?php echo app('translator')->get('words.product'); ?></th>
                                                <th><?php echo app('translator')->get('words.status'); ?></th>
                                                <th><?php echo app('translator')->get('words.actions'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                    <div class="item-rating">
                                                        <ul class="unstyled-list list-inline">
                                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                                <li class="ratings-list-item <?php if($r->rating >= $i): ?> custom-rating-orange <?php endif; ?>">
                                                                    <i data-feather="star" class="filled-star"></i>
                                                                </li>
                                                            <?php endfor; ?>
                                                        </ul>
                                                    </div>
                                                    </td>
                                                    <td><?php echo e($r->content); ?></td>
                                                    <td><a target="_blank" href="<?php echo e(route('panel.user.review.show', $r->getOneReviewUser->id)); ?>"><?php echo e($r->getOneReviewUser->name); ?></a></td>
                                                     <td><a target="_blank" href="<?php echo e(route('web.product.show',  $r->getOneReviewProduct->slug)); ?>"><?php echo e($r->getOneReviewProduct->title); ?></a></td>
                                                    <td>
                                                        <div class="custom-control custom-control-success custom-switch ml-auto">
                                                            <input type="checkbox" onchange="reviewStatus(<?php echo e($r->id); ?>);" class="custom-control-input" id="products_status-<?php echo e($r->id); ?>" <?php if($r->status): ?> checked <?php endif; ?>/>
                                                                <label class="custom-control-label" for="products_status-<?php echo e($r->id); ?>">
                                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                                </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="<?php echo e(route('panel.campaign.edit', $r->id)); ?>"><?php echo app('translator')->get('words.edit'); ?></a>
                                                                    <a href="<?php echo e(route('panel.review.destroy', $r->id)); ?>" class="dropdown-item text-danger"><?php echo app('translator')->get('words.delete'); ?></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/review/passive/index.blade.php ENDPATH**/ ?>