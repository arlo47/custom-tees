<?php $__env->startSection('content'); ?>
    <h1>Admin Panel</h1>
    
    <div class="admin-container">
        <?php echo $__env->make('includes.admin-filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="d-flex justify-content-between align-items-end">
                <a href="/admin/create" class="btn btn-primary my-3">Create New</a>
                <?php echo e($shirts->appends(request()->input())->links()); ?>

            </div>

            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($shirt->id); ?></th>
                                <th><?php echo e($shirt->name); ?></th>
                                <th><?php echo e($shirt->gender); ?></th>
                                <th><?php echo e($shirt->color); ?></th>
                                <th><?php echo e($shirt->size); ?></th>
                                <th>$<?php echo e($shirt->price); ?></th>
                                <th>
                                    <a href="/admin/edit/<?php echo e($shirt->id); ?>" class="btn btn-info">Update</a>
                                    <?php echo Form::open(['action' => ['ShirtsController@destroy', $shirt->id], 'method' => 'POST', 'class' => 'd-inline']); ?>

                                        <!-- hidden element to spoof DELETE request -->
                                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                        <?php echo e(Form::Submit('Delete', ['class' => 'btn btn-danger'])); ?>

                                    <?php echo Form::close(); ?>

                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                <!-- pagination links -->
                <?php echo e($shirts->appends(request()->input())->links()); ?>

            </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\0722273\repositories\custom-tees\resources\views/admin.blade.php ENDPATH**/ ?>