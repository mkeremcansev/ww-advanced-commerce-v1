<?php $__currentLoopData = $getAllSubCategoriesCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td></td>
        <td><img width="150" src="<?php echo e(asset($c->image)); ?>" alt="<?php echo e($c->title); ?>"></td>
        <td><?php echo e($parent_title . __('words.separator') . $c->title); ?></td>
        <td>
            <div class="btn-group">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('words.actions'); ?></button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item text-success" href="<?php echo e(route('panel.category.edit', $c->id)); ?>"><?php echo app('translator')->get('words.edit'); ?></a>
                    <form method="POST" action="<?php echo e(route('panel.category.destroy', $c->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="dropdown-item text-danger w-100"><?php echo app('translator')->get('words.delete'); ?></button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
    <?php if(count($c->getAllCategoriesCollection) > 0): ?>
        <?php echo $__env->make('panel.category.layouts.tree', ['getAllSubCategoriesCollection' => $c->getAllCategoriesCollection, 'parent_title' =>$parent_title. __('words.separator'). $c->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/vagrant/code/eticaretim/resources/views/panel/category/layouts/tree.blade.php ENDPATH**/ ?>