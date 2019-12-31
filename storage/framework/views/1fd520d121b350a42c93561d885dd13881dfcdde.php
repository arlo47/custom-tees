<?php $__env->startSection('content'); ?>
    <h1>Search Results</h1>

    <?php if(count($shirts) > 0): ?>
        <table class="table">
            <thead>
                <th scope="col">
                    Image
                </th> 
                <th scope="col">
                    Name
                </th> 
                <th scope="col">
                    Gender
                </th> 
                <th scope="col">
                    Color
                </th> 
                <th scope="col">
                    Price
                </th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row">
                        <a href="/shirts/<?php echo e($shirt->id); ?>">
                            <img class="img-fluid" width="80" src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>">
                        </a> 
                    </th>
                    <th>
                        <?php echo e($shirt->name); ?>

                    </th>
                    <th>
                        <?php echo e($shirt->gender); ?>

                    </th>
                    <th>
                        <?php echo e($shirt->color); ?>

                    </th>
                    <th>
                        <?php echo e($shirt->price); ?>

                    </th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    <?php else: ?>
        <p>No search results.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gregf\Desktop\custom-tees-greg\resources\views/search-results.blade.php ENDPATH**/ ?>