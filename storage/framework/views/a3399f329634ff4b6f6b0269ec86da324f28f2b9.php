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
                    <?php $__currentLoopData = $shoppingCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoppingCart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><img src="<?php echo e(URL::to('/')); ?>/images/shirts/<?php echo e($shoppingCart->image); ?>" height="100"></th>
                                <th><?php echo e($shoppingCart->name); ?></th>
                                <th><?php echo e($shoppingCart->gender); ?></th>
                                <th><?php echo e($shoppingCart->color); ?></th>
                                <th><?php echo e($shoppingCart->size); ?></th>
                                <th>$<?php echo e($shoppingCart->price); ?></th>
                                <th><?php echo e($shoppingCart->quantity); ?></th>
                                <th><a href="/remove/<?php echo e($shoppingCart->id); ?>">Remove</a>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repositories\custom-tees\resources\views/shoppingcart.blade.php ENDPATH**/ ?>