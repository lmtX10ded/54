<?php if($message = session('message')): ?>
<div class="alert alert-<?php echo e(session('type')); ?>"><?php echo $message; ?></div>
<?php endif; ?>




