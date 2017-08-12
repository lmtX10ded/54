<?php $__env->startSection('content'); ?>


<div class="row">
<div class="col-8">

<?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--	<a href="/games/<?php echo e($game->id); ?>"><?php echo e($game->title); ?></a>-->
<div class="card mt-1">
	<div class="card-block " >
		<a class="card-title" href="/games/<?php echo e($game->id); ?>"><?php echo e($game->title); ?></a>
		<p class="card-text">Published By: <?php echo e($game->publisher); ?></p>
		<p class="small">Game submitted by user <?php echo e($game->user->name); ?></p>
		<a href="/games/<?php echo e($game->id); ?>" class="btn btn-primary">Learn More</a>
	</div>
</div>



	
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div class="col-4">
		<?php echo $__env->make('partials.activeusers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>