<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-6">
        <img class="thumbnail img-fluid" src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>">
    </div>
    
    <div class="col-6">
        <h1><?php echo e($shirt->name); ?></h1>

        <ul>
            <li>Gender: <?php echo e($shirt->gender); ?></li>
            <li>Color: <?php echo e($shirt->color); ?></li>
            <li>Size: <?php echo e($shirt->size); ?></li>
            <li>Price: $<?php echo e($shirt->price); ?></li>
        </ul>
        
        <a href="#" class="btn btn-primary">Add to Cart</a>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gregf\Desktop\custom-tees\custom-tees\resources\views/single-shirt.blade.php ENDPATH**/ ?>