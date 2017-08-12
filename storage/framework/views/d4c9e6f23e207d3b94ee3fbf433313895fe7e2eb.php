<?php $__env->startSection( 'content' ); ?>
<div class="row">
<div class="col-8">
<div class="card w-50 m-1">
	<!--        <img class="card-img-top" src="/<?php echo e($game->title); ?>.png" alt="Card image cap">-->
	<img class="card-img-top" src="<?php echo e(Storage::url($game->image)); ?>" alt="Card image cap">
	<div class="card-block">
		<h3 class="card-title"><?php echo e($game->title); ?></h3>
		<p class="card-text"><?php echo e($game->title); ?> is published by <?php echo e($game->publisher); ?></p>
		<p class="small">Game submitted by user <?php echo e($game->user->name); ?></p>
		<a href="/games" class="btn btn-primary">List Games</a>
	</div>
</div>
</div>
<div class="col-4">
	<?php echo $__env->make('partials.activeusers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</div>

<div class="reviews">
	<hr>
	<h4>What Gamers Are Saying</h4>
	<ul class="list-group">
		<?php $__currentLoopData = $game->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li class="list-group-item"><?php echo e($review->body); ?>

			<hr>
			<small class="text-primary"><a href="/reviews/<?php echo e($review->id); ?>">posted <?php echo e($review->created_at->diffForHumans()); ?> by user <?php echo e($review->user->name); ?></a></small>
		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>

<!--<?php if( auth()->check() ): ?>-->
<!--<div class="card-block">-->
<!--	<form method="post" action="/games/<?php echo e($game->id); ?>/reviews">-->
<!--		<?php echo e(csrf_field()); ?>-->
<!--		<div class="form-group">-->
<!--			<textarea name="body" class="form-control" placeholder="Add a review"></textarea>-->
<!--		</div>-->
<!--		<div class="form-group">-->
<!--			<button type="submit" class="btn btn-primary">Add a review</button>-->
<!--		</div>-->
<!--		<?php echo $__env->make('partials.formerrors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->
<!--	</form>-->
<!--</div>-->
<!--<?php endif; ?>-->

<ul class="list-group mt-2">
	<li class="list-group-item list-group-flush">

		<a href="/reviews/<?php echo e($game->id); ?>/create">Add a review!</a>
		<hr>
	</li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'layouts.master' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>