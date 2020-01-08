<?php if(session('success')): ?>
        <div class="alert alert-success mt-1">
            <?php echo e(session('success')); ?>

        </div>
<?php endif; ?>

<?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
<?php endif; ?><?php /**PATH C:\Users\gregf\Desktop\custom-tees-master\resources\views/includes/messages.blade.php ENDPATH**/ ?>