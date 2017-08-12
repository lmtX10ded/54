<?php $__env->startSection('content'); ?>

<h2>Add a Review for <?php echo e($game->title); ?></h2>

<div>
<div class="card-block">
<form method="POST" action="/games/<?php echo e($game->id); ?>/reviews">
	<?php echo e(csrf_field()); ?>

	<div class="form-group">
	<textarea name="body" class="form-control" placeholder="Add a review"></textarea>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary">Add a review!</button>
	</div>
	<?php echo $__env->make('partials.formerrors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</form>
</div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>