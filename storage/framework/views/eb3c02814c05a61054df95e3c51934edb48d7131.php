<?php $__env->startSection('content'); ?>
    <h1>Catalog Page</h1>
    
    <div class="shirts-container d-flex flex-direction-row">
        <?php echo $__env->make('includes.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="d-flex flex-wrap justify-content-between">
            <?php if(count($shirts) > 0): ?>
                <?php $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-25 mx-4 my-1">
                        <img class="thumbnail img-fluid" src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>" height="400">
        
                        <h3>
                            <a href="/shirts/<?php echo e($shirt->id); ?>"><?php echo e($shirt->name); ?></a>
                        </h3>
        
                        <p><span><?php echo e($shirt->gender); ?></span> | 
                            <span><?php echo e($shirt->color); ?></span> | 
                            <span><?php echo e($shirt->size); ?></span> |
                            <span>$<?php echo e($shirt->price); ?></span>
                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <p>No search results.</p>
            <?php endif; ?>
            <!-- pagination links -->
            <?php echo e($shirts->links()); ?>

        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gregf\Desktop\custom-tees-greg\resources\views/catalog.blade.php ENDPATH**/ ?>