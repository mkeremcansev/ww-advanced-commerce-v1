<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('words.logs'); ?>
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
                      <div class="col-lg-3 mb-2">
                        <div class="list-group">
                          <?php $__currentLoopData = $folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $folder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="list-group-item">
                              <?php echo e(\Rap2hpoutre\LaravelLogViewer\LaravelLogViewer::DirectoryTreeStructure($storage_path, $structure)); ?>

                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="?l=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($file)); ?>" class="list-group-item <?php if($current_file == $file): ?> active <?php endif; ?>">
                              <?php echo e($file); ?>

                            </a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      </div>
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
                                    <h4 class="card-title"><?php echo app('translator')->get('words.logs'); ?></h4>
                                    <div class="btn-group">
                                      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <?php if($current_file): ?>
                                          <a href="?dl=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($current_file)); ?><?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>" class="dropdown-item text-success"><?php echo app('translator')->get('words.download'); ?></a>
                                          <a href="?clean=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($current_file)); ?><?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>" class="dropdown-item text-primary"><?php echo app('translator')->get('words.file_clear'); ?></a>
                                          <a href="?del=<?php echo e(\Illuminate\Support\Facades\Crypt::encrypt($current_file)); ?><?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>" class="dropdown-item text-warning"><?php echo app('translator')->get('words.delete'); ?></a>
                                          <?php if(count($files) > 1): ?>
                                            <a href="?delall=true<?php echo e(($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : ''); ?>" class="dropdown-item text-danger"><?php echo app('translator')->get('words.all_files_delete'); ?></a>
                                          <?php endif; ?>
                                        <?php endif; ?>
                                      </div>
                                  </div>
                                </div>
                                <div class="card-datatable">
                                  <table class="dt-responsive table">
                                    <thead>
                                      <tr>
                                        <th></th>
                                          <th><?php echo app('translator')->get('words.status'); ?></th>
                                          <th><?php echo app('translator')->get('words.date'); ?></th>
                                          <th><?php echo app('translator')->get('words.content'); ?></th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr data-display="stack<?php echo e($key); ?>">
                                          <td></td>
                                          <td class="nowrap text-<?php echo e($log['level_class']); ?>">
                                            <?php echo e($log['level']); ?>

                                          </td>
                                          <td class="date"><?php echo e($log['date']); ?></td>
                                          <td class="text">
                                            <?php echo e($log['text']); ?>

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


<?php echo $__env->make('panel.layouts.extends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\eticaretim\resources\views/vendor/laravel-log-viewer/log.blade.php ENDPATH**/ ?>