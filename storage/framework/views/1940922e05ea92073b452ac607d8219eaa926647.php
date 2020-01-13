<?php $__env->startSection('content'); ?>
    <h1>Create New Shirt</h1>

    <?php echo Form::open(['action' => 'ShirtsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


        <div class="form-group">
            <?php echo e(Form::label('name', 'Name')); ?>

            <?php echo e(Form::text('name', '', ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('gender', 'Gender')); ?>

            <?php echo e(Form::select('gender',[
                'M' => 'Male',
                'F' => 'Female'
            ], null, ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('size', 'Size')); ?>

            <?php echo e(Form::select('size',[
                'S' => 'Small',
                'M' => 'Medium',
                'L' => 'Large',
                'XL' => 'Extra Large'
            ], null, ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('color', 'Color')); ?>

            <?php echo e(Form::select('color', [
                'black' => 'Black',
                'pink' => 'Pink',
                'white' => 'White',
                'grey' => 'Grey',
                'orange' => 'Orange',
                'red' => 'Red'
        ], '', ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('price', 'Price')); ?>

            <?php echo e(Form::number('price', 0, ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('price', 'Image')); ?>

            <?php echo e(Form::file('image', ['class' => 'form-control'])); ?>

        </div>

        <?php echo e(Form::submit('Save', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mohammed Malik\Documents\repos\custom-tees\resources\views/create.blade.php ENDPATH**/ ?>