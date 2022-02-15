
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.campaign_list'); ?>
<?php $__env->stopSection(); ?>
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.campaign_list'); ?></h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="category_list_table" class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><?php echo app('translator')->get('words.image'); ?></th>
                                                <th><?php echo app('translator')->get('words.campaign_name'); ?></th>
                                                <th><?php echo app('translator')->get('words.product_count'); ?></th>
                                                <th><?php echo app('translator')->get('words.status'); ?></th>
                                                <th><?php echo app('translator')->get('words.actions'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td><img width="100" src="<?php echo e(asset($c->image)); ?>" alt=""></td>
                                                    <td><?php echo e($c->title); ?></td>
                                                     <td><span class="text-primary"><?php echo app('translator')->get('words.product_count_text', ['count'=>$c->getAllCampaignAttributes->count()]); ?></span></td>
                                                    <td>
                                                        <?php if($c->status): ?>
                                                            <span class="text-success"><?php echo app('translator')->get('words.active'); ?></span>
                                                        <?php else: ?>
                                                            <span class="text-danger"><?php echo app('translator')->get('words.passive'); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                <a class="dropdown-item text-success" href="<?php echo e(route('panel.campaign.edit', $c->id)); ?>"><?php echo app('translator')->get('words.edit'); ?></a>
                                                                <form action="<?php echo e(route('panel.campaign.destroy', $c->id)); ?>" method="POST">
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

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/campaign/index.blade.php ENDPATH**/ ?>