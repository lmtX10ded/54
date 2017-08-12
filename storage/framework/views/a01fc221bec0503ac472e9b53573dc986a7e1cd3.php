 
<?php $__env->startSection('content'); ?>
 
    <h2>Add a game</h2>
 
    <form method="post" action="/games" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Game Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" placeholder="Game Title" required value="<?php echo e(old('title')); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Game Publisher</label>
            <div class="col-sm-9">
                <input name="publisher" type="text" class="form-control" id="publisherid"
                       placeholder="Game Publisher" required value="<?php echo e(old('publisher')); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Release Date</label>
            <div class="col-sm-9">
                <input name="releasedate" type="text" class="form-control" id="releasedateid"
                       placeholder="Release Date" required value="<?php echo e(old('releasedate')); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="gameimageid" class="col-sm-3 col-form-label">Game Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="gameimageid" class="custom-file-input" required value="<?php echo e(old('image')); ?>">
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Game</button>
            </div>
        </div>
        
        <?php echo $__env->make('partials.formerrors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </form>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>