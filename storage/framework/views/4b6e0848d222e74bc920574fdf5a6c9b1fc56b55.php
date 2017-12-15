<?php $__env->startComponent('admin.layouts.default'); ?>
<h3><?php echo e($title); ?> <small><?php echo e($description); ?></small></h3>

<div class="panel panel-default">
    <div class="panel-body">
        <?php echo e($slot); ?>

    </div>
</div>
<?php echo $__env->renderComponent(); ?>