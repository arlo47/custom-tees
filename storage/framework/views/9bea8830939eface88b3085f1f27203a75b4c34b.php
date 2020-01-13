<?php $__env->startSection('content'); ?>
    <h1>Edit Shirt</h1>

    <?php echo Form::open(['action' => ['ShirtsController@update', $shirt->id], 'method' => 'POST']); ?>


        <div class="form-group">
            <?php echo e(Form::label('name', 'Name')); ?>

            <?php echo e(Form::text('name', $shirt->name, ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('gender', 'Gender')); ?>

            <?php echo e(Form::select('gender',[
                'M' => 'Male',
                'F' => 'Female'
               ], $shirt->gender, ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('size', 'Size')); ?>

            <?php echo e(Form::select('size',[
                'S' => 'Small',
                'M' => 'Medium',
                'L' => 'Large',
                'XL' => 'Extra Large'
        ], $shirt->size, ['class' => 'form-control'])); ?>

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
        ], $shirt->color, ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('price', 'Price')); ?>

            <?php echo e(Form::number('price', $shirt->price, ['class' => 'form-control'])); ?>

        </div>
        
        <!-- hidden element to spoof PUT request -->
        <?php echo e(Form::hidden('_method', 'PUT')); ?>


        <?php echo e(Form::submit('Save', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mohammed Malik\Documents\repos\custom-tees\resources\views/edit.blade.php ENDPATH**/ ?>