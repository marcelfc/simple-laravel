<?php $__env->startComponent('admin.layouts.elements.body'); ?>
<?php $__env->slot('title'); ?> Páginas <?php $__env->endSlot(); ?>
<?php $__env->slot('description'); ?> Administração de Páginas <?php $__env->endSlot(); ?>

<a href="<?php echo e(route('pages.create')); ?>" class="btn btn-default"> novo </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th class="text-right">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($page->id); ?></td>
                    <td><?php echo e($page->title); ?></td>
                    <td class="text-right">
                        <a href="<?php echo e(route('pages.show', $page->id)); ?>" class="btn btn-default">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($pages->links()); ?>

<?php echo $__env->renderComponent(); ?>