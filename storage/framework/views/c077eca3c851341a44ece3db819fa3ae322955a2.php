<?php $__env->startSection('content'); ?>



<div class="col-12 my-3">
	<div class="card">
		<div class="card-block">
			<h3 class="card-title"><?php echo e($review->body); ?></h3>
			<p class="small">a review of <a href="/games/<?php echo e($review->game->id); ?>"><?php echo e($review->game->title); ?></a> submitted by <?php echo e($review->user->name); ?> <?php echo e($review->created_at->diffForHumans()); ?></p>
			<a href = "/reviews" class="btn btn-primary" > List All Reviews </a>
		</div>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>