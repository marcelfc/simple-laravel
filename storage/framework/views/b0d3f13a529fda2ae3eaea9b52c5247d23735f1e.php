<?php $__env->startComponent('admin.layouts.elements.body'); ?>
<?php $__env->slot('title'); ?> Páginas <?php $__env->endSlot(); ?>
<?php $__env->slot('description'); ?>  Inclusão de página <?php $__env->endSlot(); ?>

    <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-xs btn-default"> Voltar </a>

    <form action="<?php echo e(route('pages.store')); ?>" class="form-horizontal" method="post">
        <?php echo $__env->make('admin.pages.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </form>



<?php echo $__env->renderComponent(); ?>