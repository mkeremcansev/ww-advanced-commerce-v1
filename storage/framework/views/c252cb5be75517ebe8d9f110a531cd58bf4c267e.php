
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.user_review_text',['name'=>$user->name, 'surname'=>$user->surname]); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="kb-category-search">
                    <div class="row">
                        <div class="col-12">
                            <?php if($m = Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        <?php echo e($m); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card knowledge-base-bg text-center">
                                <div class="card-body">
                                    <h2 class="text-primary mb-3"><?php echo app('translator')->get('words.user_review_text',['name'=>$user->name, 'surname'=>$user->surname]); ?></h2>
                                    <form class="kb-search-input">
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i data-feather="search"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="searchbar" placeholder="<?php echo app('translator')->get('words.you_can_search'); ?>" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="knowledge-base-category">
                    <div class="row kb-search-content-info match-height">
                        <?php if($user->getAllUserReviews->count()): ?>
                            <?php $__currentLoopData = $user->getAllUserReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="kb-title">
                                                <div class="item-rating">
                                                    <ul class="unstyled-list list-inline">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <li class="ratings-list-item <?php if($r->rating >= $i): ?> custom-rating-orange <?php endif; ?>">
                                                                <i data-feather="star" class="filled-star"></i>
                                                            </li>
                                                        <?php endfor; ?>
                                                    </ul>
                                                </div>
                                            </h6>
                                            <div class="list-group list-group-circle">
                                                <p><?php echo e($r->content); ?></p>
                                            </div>
                                            <?php if($r->status): ?>
                                                <div class="mb-1">
                                                    <a href="<?php echo e(route('panel.user.review.update', ['id'=>$r->id, 'status'=>0])); ?>" class="btn btn-warning waves-effect waves-float waves-light w-100"><?php echo app('translator')->get('words.to_passive'); ?></a>
                                                </div>
                                            <?php else: ?>
                                                <div class="mb-1">
                                                    <a href="<?php echo e(route('panel.user.review.update', ['id'=>$r->id, 'status'=>1])); ?>" class="btn btn-success waves-effect waves-float waves-light w-100"><?php echo app('translator')->get('words.to_active'); ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="mb-1">
                                                <a href="<?php echo e(route('panel.user.review.destroy', $r->id)); ?>" class="btn btn-danger waves-effect waves-float waves-light w-100"><?php echo app('translator')->get('words.delete'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <div class="col-12 text-center">
                                <h4 class="mt-4"><?php echo app('translator')->get('words.user_not_have_review', ['name'=>$user->name, 'surname'=>$user->surname]); ?></h4>
                            </div>
                        <?php endif; ?>
                        <div class="col-12 text-center no-result no-items">
                            <h4 class="mt-4"><?php echo app('translator')->get('words.not_have_review'); ?></h4>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/user/review/index.blade.php ENDPATH**/ ?>