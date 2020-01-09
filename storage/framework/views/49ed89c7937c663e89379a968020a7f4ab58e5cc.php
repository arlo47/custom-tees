 <form class="filters-sidebar form-group w-10" method="GET" action="/filter">
    <h2 class="h4"><i class="material-icons">filter_list</i> Filters</h2>
    <select class="d-block form-control" name="gender" id="gender-dropdown">
        <option value="">gender</option>
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>

    <select class="d-block form-control" name="size" id="size-dropdown">
        <option value="">size</option>
        <option value="S">Small</option>
        <option value="M">Medium</option>
        <option value="L">Large</option>
        <option value="XL">X-Large</option>
    </select>

    <select class="d-block form-control" name="color" id="color-dropdown">
        <option value="">color</option>
        <option value="black">Black</option>
        <option value="white">White</option>
    </select>
    <hr>
    <section>
        <label for="min-input">Min Price:</label>
        <input class="form-control" name="minPrice" type="number">
    </section>
    <section>
        <label for="min-input">Max Price:</label>
        <input class="form-control" name="maxPrice" type="number">
    </section>

    <input class="btn btn-primary my-2" type="submit" value="Filter">
</form>
<?php /**PATH C:\Users\TrackTik\Desktop\custom-tees3\PHPShoppingSiteV2\custom-tees\resources\views/includes/filters.blade.php ENDPATH**/ ?>