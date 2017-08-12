<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-8">
<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-12 mb-3">
	<div class="card">
		<div class="card-block">
			<p class="card-text">
				<?php echo e($review->user->name); ?> left a <a href="/reviews/<?php echo e($review->id); ?>">review</a> for <a href="/games/<?php echo e($review->game->id); ?>"><?php echo e($review->game->title); ?></a> <?php echo e($review->created_at->diffForHumans()); ?>

			</p>
		</div>
		
	</div>
	
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
	<div class="col-4">
		<?php echo $__env->make('partials.activeusers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div></div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>