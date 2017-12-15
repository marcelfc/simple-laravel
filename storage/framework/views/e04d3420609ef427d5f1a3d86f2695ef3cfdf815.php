<?php $__env->startComponent('admin.layouts.elements.body'); ?>
<?php $__env->slot('title'); ?> Páginas <?php $__env->endSlot(); ?>
<?php $__env->slot('description'); ?> Edição de Página <?php $__env->endSlot(); ?>



    <form action="<?php echo e(route('pages.update', $page->id)); ?>" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        <?php echo $__env->make('admin.pages.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </form>

    <a href="<?php echo e(route('pages.show', $page->id)); ?>" class="btn btn-xs btn-default"> Voltar </a>



<?php echo $__env->renderComponent(); ?>