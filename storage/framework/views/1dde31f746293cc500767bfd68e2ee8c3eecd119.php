<!-- displayed if 'success' is returned with view -->
<?php if(session('success')): ?>
        <div class="alert alert-success mt-1">
            <?php echo e(session('success')); ?>

        </div>
<?php endif; ?>

<!-- displayed if 'error' is returned with view -->
<?php if(session('error')): ?>
        <div class="alert alert-danger mt-1">
            <?php echo e(session('error')); ?>

        </div>
<?php endif; ?>

<!-- these errors are displayed if any validation fails in the method invoked upon form action -->
<?php if($errors->any()): ?>
    <div class="alert alert-danger mt-1">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?><?php /**PATH C:\Users\Mohammed Malik\Documents\repos\custom-tees\resources\views/includes/messages.blade.php ENDPATH**/ ?>