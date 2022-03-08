
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.product_list'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.product.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.product_list'); ?></h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><?php echo app('translator')->get('words.product_name'); ?></th>
                                                <th><?php echo app('translator')->get('words.brand'); ?></th>
                                                <th><?php echo app('translator')->get('words.category'); ?></th>
                                                <th><?php echo app('translator')->get('words.price'); ?></th>
                                                <th><?php echo app('translator')->get('words.variation'); ?></th>
                                                <th><?php echo app('translator')->get('words.status'); ?></th>
                                                <th><?php echo app('translator')->get('words.actions'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php ($product = $p->getOneProductAttributes); ?>
                                                <tr>
                                                    <td></td>
                                                    <td><a target="_blank" href="<?php echo e(route('web.product.show', $product->slug)); ?>"><?php echo e($product->title); ?></a></td>
                                                    <td><?php echo e($p->getOneProductBrand->title); ?></td>
                                                    <td><?php echo e($p->getOneProductCategory->title); ?></td>
                                                    <td class="custom-list-style-none">
                                                        <?php if($product->discount): ?>
                                                            <li class="text-danger">
                                                                <del><?php echo e(getMoneyOrder($product->price)); ?></del>
                                                            </li>
                                                            <li><?php echo e(getMoneyOrder($product->discount)); ?></li>
                                                        <?php else: ?>
                                                            <span><?php echo e(getMoneyOrder($product->price)); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php $__currentLoopData = $p->getAllProductVariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <h5><?php echo e($v->title); ?></h5>
                                                                <?php $__currentLoopData = $v->getAllVariantAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <span>
                                                                        <?php echo app('translator')->get('words.variant_attributes_count', ['variant'=>$a->title, 'count'=>$a->stock]); ?>
                                                                    </span>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-control-success custom-switch ml-auto">
                                                            <input type="checkbox" onchange="productStatus(<?php echo e($p->id); ?>);" class="custom-control-input" id="products_status-<?php echo e($p->id); ?>" <?php if($p->status): ?> checked <?php endif; ?>/>
                                                                <label class="custom-control-label" for="products_status-<?php echo e($p->id); ?>">
                                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                                </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="<?php echo e(route('panel.product.edit', $product->id)); ?>"><?php echo app('translator')->get('words.edit'); ?></a>
                                                                <form action="<?php echo e(route('panel.product.destroy', $p->id)); ?>" method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button class="dropdown-item text-danger w-100" href=""><?php echo app('translator')->get('words.delete'); ?></button>
                                                                </form>

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

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/product/index.blade.php ENDPATH**/ ?>