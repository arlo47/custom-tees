<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $shoppingCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="card m-1 p-1">
            <a class="d-block text-dark" href="/shirts/<?php echo e($shirt->id); ?>">
                <img class="thumbnail img-fluid card-img-top" src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>" height="400">
            </a>
                                
            <div class="card-body">
                <h3 class="card-title h5 mt-2"><?php echo e($shirt->name); ?></h3>
                    <p class="card-text h3">$<?php echo e($shirt->price); ?></p>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1332549\Documents\PHP(Part2)\repos\custom-tees\resources\views/shoppingcart.blade.php ENDPATH**/ ?>