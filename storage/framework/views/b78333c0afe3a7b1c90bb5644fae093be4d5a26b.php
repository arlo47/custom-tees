<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 m-1">
            <img class="img-fluid" src="<?php echo e(URL::to('/')); ?>/images/banner.jpg">
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 col-lg-6 m-1 m-lg-0">
            <a href="/filter?gender=M&size=&color=&minPrice=&maxPrice=">
                <img class="img-fluid" src="<?php echo e(URL::to('/')); ?>/images/mens.jpg">
            </a>
        </div>
        <div class="col-12 col-lg-6 m-1 m-lg-0">
            <a href="/filter?gender=F&size=&color=&minPrice=&maxPrice=">
                <img class="img-fluid" src="<?php echo e(URL::to('/')); ?>/images/womens.jpg">
            </a>
        </div>
    </div>
    
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\0722273\repositories\custom-tees\resources\views/index.blade.php ENDPATH**/ ?>