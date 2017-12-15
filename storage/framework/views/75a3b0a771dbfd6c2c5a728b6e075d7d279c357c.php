<?php $__env->startComponent('admin.layouts.elements.body'); ?>
    <?php $__env->slot('title'); ?> Páginas <?php $__env->endSlot(); ?>
    <?php $__env->slot('description'); ?>  <?php $__env->endSlot(); ?>

    <h4><?php echo e($page->title); ?></h4>
    <p>
        <small>
            Criado em <?php echo e($page->created_at->format("d/m/Y H:i:s")); ?> | Atualiado em <?php echo e($page->updated_at->format("d/m/Y H:i:s")); ?>

        </small>
    </p>
    <?php echo $page->body; ?>


    <a href="<?php echo e(route('pages.index')); ?>" class="btn btn-xs btn-default"> Voltar </a>
    <a href="<?php echo e(route('pages.edit', $page->id)); ?>" class="btn btn-xs btn-default"> Editar </a>
    <form action="<?php echo e(route('pages.destroy', $page->id)); ?>" class="form-horizontal" method="post" style="display: inline-block">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="remover" class="btn btn-xs btn-default">
    </form>

<?php echo $__env->renderComponent(); ?>