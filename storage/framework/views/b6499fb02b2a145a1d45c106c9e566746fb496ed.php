 
<?php $__env->startSection('content'); ?>
 
    <h2>Log In</h2>
    
    <form method="POST" action="/login">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
        <?php echo $__env->make('partials.formerrors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </form>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>