
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.order_list'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.order.script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.order_list'); ?></h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><?php echo app('translator')->get('words.order_number_1'); ?></th>
                                                <th><?php echo app('translator')->get('words.total_price'); ?></th>
                                                <th><?php echo app('translator')->get('words.user'); ?></th>
                                                <th><?php echo app('translator')->get('words.order_adress'); ?></th>
                                                <th><?php echo app('translator')->get('words.order_phone'); ?></th>
                                                <th><?php echo app('translator')->get('words.status'); ?></th>
                                                <th><?php echo app('translator')->get('words.actions'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo e($o->id); ?></td>
                                                    <td><?php echo e(getMoneyOrder($o->total)); ?></td>
                                                    <td><?php echo app('translator')->get('words.name_surname', ['name'=>$o->getOneUsers->name, 'surname'=>$o->getOneUsers->surname]); ?></td>
                                                    <td><?php echo e($o->adress); ?></td>
                                                    <td><?php echo e($o->phone); ?></td>
                                                    <td>
                                                            <select class="form-control" onchange="orderStatus(<?php echo e($o->id); ?>, this.value)">
                                                                <?php $__currentLoopData = orderStatusData($o->status); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($s['value']); ?>" <?php if($s['status']): ?> selected <?php endif; ?>><?php echo e($s['text']); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="<?php echo e(route('panel.order.show', $o->id)); ?>"><?php echo app('translator')->get('words.detail'); ?></a>
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

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/order/index.blade.php ENDPATH**/ ?>