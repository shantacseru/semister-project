;

<?php $__env->startSection('cssfile'); ?>

  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">
        
    <div class="col-md-8 col-md-offset-2 well cls1">
      
		<img src="<?php echo e($item->filename); ?>">

	</div>

</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>