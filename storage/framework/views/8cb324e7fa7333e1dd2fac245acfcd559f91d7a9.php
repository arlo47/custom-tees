<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="main-image d-block mx-auto img-fluid" src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($shirt->image); ?>">
        </div>
        
        <div class="col-12 col-lg-6">
            <div class="card bg-light my-3">
                <h1 class="card-header h3"><?php echo e($shirt->name); ?></h1>
  
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Gender: <?php echo e($shirt->gender); ?></li>
                        <li class="list-group-item">Color: <?php echo e($shirt->color); ?></li>
                        <li class="list-group-item">Size: <?php echo e($shirt->size); ?></li>
                        <li class="list-group-item">Price: $<?php echo e($shirt->price); ?></li>
                    </ul>
                    
                    <a href="/add-to-cart/<?php echo e($shirt->id); ?>" class="cart-btn m-3 btn btn-primary d-flex align-items-center justify-content-center">
                        <i class="material-icons">shopping_cart</i>
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1332549\Desktop\custom-tees2\PHPShoppingSiteV2\custom-tees\resources\views/single-shirt.blade.php ENDPATH**/ ?>