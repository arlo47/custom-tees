<?php $__env->startSection('content'); ?>

<div class="table-responsive">
                <table class="table">
                    <thead>
                        <th></th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $shoppingCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>" height="100"></th>
                                <th><?php echo e($shirt->name); ?></th>
                                <th><?php echo e($shirt->gender); ?></th>
                                <th><?php echo e($shirt->color); ?></th>
                                <th><?php echo e($shirt->size); ?></th>
                                <th>$<?php echo e($shirt->price); ?></th>
                                <th><?php echo e($shirt->quantity); ?></th>
                                <th><a href="/remove/<?php echo e($shirt->id); ?>">Remove</a>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total: $<?php echo e(number_format($shoppingCartTotal, 2)); ?></th>
                        <th></th>
                    </tr>
                    </tbody>
                </table>
            </div>

    <!-- <div class="col-12 col-md-6 col-lg-4">
        <div class="card m-1 p-1">
            <a class="d-block text-dark" href="/shirts/<?php echo e($shirt->id); ?>">
                <img class="thumbnail img-fluid card-img-top" src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>" height="400">
            </a>
                                
            <div class="card-body">
                <h3 class="card-title h5 mt-2"><?php echo e($shirt->name); ?></h3>
                    <p class="card-text h3">$<?php echo e($shirt->price); ?></p>
            </div>
        </div>
    </div> -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\repos\custom-tees\resources\views/shoppingcart.blade.php ENDPATH**/ ?>