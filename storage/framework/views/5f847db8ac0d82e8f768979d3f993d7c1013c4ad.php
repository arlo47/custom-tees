 <form class="filters-sidebar" method="GET" action="/filter">
 
    <div class="row">
        <div class="form-group col-4">
            <label><strong>Gender</strong></label>

            <select class="form-control" name="gender" id="gender-dropdown">
                <option value="">gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

        <div class="form-group col-4">
            <label><strong>Size</strong></label>

            <select class="form-control" name="size" id="size-dropdown">
                <option value="">size</option>
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">X-Large</option>
            </select>
        </div>

        <div class="form-group col-4">
            <label><strong>Color</strong></label>

            <select class="form-control" name="color" id="color-dropdown">
                <option value="">color</option>
                <option value="black">Black</option>
                <option value="white">White</option>
            </select>
        </div>

    </div>
    <div class="row">
        <div class="form-group col-4">
            <label class="float-right"><strong>Price</strong></label>
        </div>
        <div class="form-group col-4">
            <label for="min-input">Min:</label>
            <input class="form-control" name="minPrice" type="number">
        </div>
        <div class="form-group col-4">
            <label for="min-input">Max:</label>
            <input class="form-control" name="maxPrice" type="number">
        </div>
        
    </div>

    <input class="btn btn-primary" type="submit" value="Filter">
</form>
<?php /**PATH C:\Users\gregf\Desktop\custom-tees-greg\resources\views/includes/admin-filters.blade.php ENDPATH**/ ?>