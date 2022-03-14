
<?php $__env->startSection('title', $product->getOneProductAttributes->title); ?>
<?php $__env->startSection('description', $product->getOneProductSeoAttributes->description); ?>
<?php $__env->startSection('keywords', $product->getOneProductSeoAttributes->keywords); ?>
<?php echo $__env->make('web.product.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php ($p = $product->getOneProductAttributes); ?>
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            <?php $__currentLoopData = getProductLabel($p->discount, $p->price, $product->created_at, $product->getAllProductReviews->avg('rating')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($l['status']): ?>
                                    <label class="details-label <?php echo e($l['code']); ?>"><?php echo e($l['title'].$l['value']); ?></label>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <ul class="details-preview">
                            <?php $__currentLoopData = $product->getAllProductImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><img src="<?php echo e(asset($i->image)); ?>" alt="<?php echo e($p->title); ?>"></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <ul class="details-thumb">
                            <?php $__currentLoopData = $product->getAllProductImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><img src="<?php echo e(asset($i->image)); ?>" alt="<?php echo e($p->title); ?>"></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                <ul class="product-navigation">
                    <h3><?php echo e($p->title); ?> </h3>
                </ul>
                    <div class="details-content">
                        <div class="details-meta">
                            <p><?php echo app('translator')->get('words.category'); ?><span><?php echo e($product->getOneProductCategory->title); ?></span></p>
                            <p><?php echo app('translator')->get('words.brand'); ?><span><?php echo e($product->getOneProductBrand->title); ?></span></p>
                        </div>
                        <div class="details-rating">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <i class="<?php if( round((float)$product->getAllProductReviews->avg('rating')) >= $i): ?> active <?php endif; ?>  icofont-star"></i>
                            <?php endfor; ?>
                            <a href="#product-review-section"><?php echo app('translator')->get('words.review_count', ['count'=>$product->getAllProductReviews->count()]); ?></a>
                        </div>
                        <h3 class="details-price">
                            <?php if($p->discount): ?>
                                <del><?php echo e(getMoneyOrder($p->price)); ?></del>
                                <span><?php echo e(getMoneyOrder($p->discount)); ?></span>
                            <?php else: ?>
                                <span><?php echo e(getMoneyOrder($p->price)); ?></span>
                            <?php endif; ?>
                        </h3>
                        <p class="details-desc">
                            <div class="mb-4">
                                <?php echo getShowMore($p->description).'...'; ?>

                                <a class="main-text-color" href="#informations"><?php echo app('translator')->get('words.show_more'); ?></a>
                            </div>
                        </p>
                            <?php $__currentLoopData = $product->getAllProductVariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="attr-detail attr-size">
                                <strong><?php echo e($v->title); ?></strong>
                                <ul class="list-filter size-filter font-small">
                                    <?php $__currentLoopData = $v->getAllVariantAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($a->stock): ?>
                                            <?php if($a->price): ?>
                                                <li class="custom-data-tooltip" data-tooltip="<?php echo app('translator')->get('words.plus_price', ['price'=>getMoneyOrder($a->price)]); ?>" variant-hash="<?php echo e($a->hash); ?>">
                                                    <a class="variant-attr" variant-stock="<?php echo e($a->stock); ?>">
                                                        <?php echo e($a->title); ?>

                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <li class="variant-price" variant-hash="<?php echo e($a->hash); ?>" variant-price="<?php echo e($a->price); ?>">
                                                    <a class="variant-attr" variant-stock="<?php echo e($a->stock); ?>"><?php echo e($a->title); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php else: ?>
                                                <li><a class="custom-disabled-alert" variant-stock="<?php echo e($a->stock); ?>"><?php echo e($a->title); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="details-action-group mt-4">
                                <a class="details-wish wish w-100 custom-cursor-pointer" id="add-to-wishlist">
                                    <i class="icofont-heart"></i>
                                    <span><?php echo app('translator')->get('words.add_to_wishlist'); ?></span>
                                </a>
                            </div>
                            <div class="detail-action-group mt-4">
                                <div class="product-action">
                                    <button class="action-minus">
                                        <i class="icofont-minus"></i>
                                    </button>
                                    <input class="action-input" type="text" value="1" min="1" id="quantity">
                                    <button class="action-plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                                <button class="detail-add-btn w-100" id="add-to-cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <?php echo app('translator')->get('words.add_to_cart'); ?>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section" id="informations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <h3 class="frame-title"><?php echo app('translator')->get('words.description'); ?></h3>
                        <div class="tab-descrip">
                            <?php echo $p->description; ?>

                        </div>
                    </div>
                    <div class="product-details-frame">
                        <h3 class="frame-title"><?php echo app('translator')->get('words.information'); ?></h3>
                        <table class="table table-bordered">
                            <tbody>
                                <?php $__currentLoopData = $product->getAllProductInformations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($i->title); ?></th>
                                        <td><?php echo e($i->description); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="product-details-frame" id="product-review-section">
                        <?php if($product->getAllProductReviews->count()): ?>
                            <h3 class="frame-title"><?php echo app('translator')->get('words.reviews', ['count'=>$product->getAllProductReviews->count()]); ?></h3>
                            <ul class="review-list">
                                    <?php $__currentLoopData = $product->getAllProductReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="review-item">
                                            <div class="review-media">
                                                <h5 class="review-meta">
                                                    <a><?php echo e($r->getOneReviewUser->name); ?></a>
                                                    <span><?php echo e($r->created_at->diffForHumans()); ?></span>
                                                </h5>
                                            </div>
                                            <ul class="review-rating">
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <li class="<?php if($r->rating >= $i): ?> icofont-ui-rating <?php else: ?> icofont-ui-rate-blank <?php endif; ?> "></li>
                                                <?php endfor; ?>
                                            </ul>
                                            <p class="review-desc"><?php echo e($r->content); ?></p>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                                <p class="text-center"><?php echo app('translator')->get('words.not_have_product_review'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(!$product->getAllProductAuthReviews->contains('user_id',Auth::user()->id) AND Auth::user()->email_verified_at): ?>
                            <div class="product-details-frame">
                                <div class="review-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="star-rating">
                                                <input type="radio" class="rating-input" name="rating" id="star-1" value="5">
                                                <label for="star-1"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-2" value="4">
                                                <label for="star-2"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-3" value="3">
                                                <label for="star-3"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-4" value="2">
                                                <label for="star-4"></label>
                                                <input type="radio" class="rating-input" name="rating" id="star-5" value="1">
                                                <label for="star-5"></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="review_content" placeholder="<?php echo app('translator')->get('words.content'); ?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" id="add-to-review" class="btn btn-inline">
                                                <span><?php echo app('translator')->get('words.add_review'); ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/web/product/index.blade.php ENDPATH**/ ?>