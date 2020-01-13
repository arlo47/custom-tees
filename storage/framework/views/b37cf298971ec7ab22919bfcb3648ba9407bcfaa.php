<form class="filters-sidebar" method="GET" action="/admin/filter">
    <h2 class="h4"><i class="material-icons">filter_list</i> Filters</h2>
    <div class="row">
        <div class="form-group col-4">
            <select class="form-control" name="gender" id="gender-dropdown">
                <option value="">gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

        <div class="form-group col-4">
            <select class="form-control" name="size" id="size-dropdown">
                <option value="">size</option>
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">X-Large</option>
            </select>
        </div>

        <div class="form-group col-4">
            <select class="d-block form-control" name="color" id="color-dropdown">
                <option value="">color</option>
                <option value="black">Black</option>
                <option value="pink">Pink</option>
                <option value="white">White</option>
                <option value="grey">Grey</option>
                <option value="orange">Orange</option>
                <option value="red">Red</option>
            </select>
        </div>

    </div>
    <div class="row">
        <div class="form-group col-4">
            <input class="form-control" name="minPrice" type="number" placeholder="Min Price">
        </div>
        <div class="form-group col-4">
            <input class="form-control" name="maxPrice" type="number" placeholder="Max Price">
        </div>
    </div>
    <input class="btn btn-primary" type="submit" value="Filter">
</form>
<?php /**PATH C:\Users\Mohammed Malik\Documents\repos\custom-tees\resources\views/includes/admin-filters.blade.php ENDPATH**/ ?>