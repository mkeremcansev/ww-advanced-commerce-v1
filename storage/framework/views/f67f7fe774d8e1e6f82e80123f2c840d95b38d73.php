
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.homepage_design_edit'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('panel/app-assets/js/scripts/extensions/ext-component-drag-drop.js')); ?>"></script>
    <script src="<?php echo e(asset('panel')); ?>/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script>
        $(document).ready(function(){
            let array = []
            const list = $('#handle-list-2')
            $('#design_btn').on('click', function(){
                for (let i = 0; i < list[0].children.length; i++) {
                    array.push({number:list[0].children[i].attributes[2].value, title:list[0].children[i].attributes[1].value})
                } 
                $.ajax({
                    method: 'POST',
                    url: '<?php echo e(route("panel.design.update")); ?>',
                    data: {design:array},
                    dataType: 'json',
                    success:function(response){
                        location.reload()
                    },
                    error:function(response){
                        console.log(response)
                    }
                })
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel/app-assets/css/plugins/extensions/ext-component-drag-drop.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('panel')); ?>/app-assets/vendors/css/extensions/dragula.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="dd-with-handle">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <?php if($m = Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-body">
                                        <?php echo e($m); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo app('translator')->get('words.homepage_design'); ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="list-group" id="handle-list-2">
                                                <?php $__currentLoopData = setting('design'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item" data-design="<?php echo e($d['title']); ?>" data-number="<?php echo e($d['number']); ?>"><span class="handle mr-50">+</span><?php echo app('translator')->get('words.'.$d["title"].''); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" id="design_btn" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right"><?php echo app('translator')->get('words.save'); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/panel/general/design/index.blade.php ENDPATH**/ ?>