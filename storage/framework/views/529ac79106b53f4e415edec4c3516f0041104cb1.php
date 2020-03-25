<?php echo $__env->make('partials.headcontent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
	<?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
<?php echo $__env->make('partials.footercontent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>