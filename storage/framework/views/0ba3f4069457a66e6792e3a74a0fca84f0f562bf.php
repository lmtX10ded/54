<table class="table table-sm table-hover">
    <thead class="thead">
    <tr>
        <th>User Name</th>
        <th>Games Submitted</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $activeusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($activeuser->name); ?></td>
            <td><?php echo e($activeuser->submitted_games); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>