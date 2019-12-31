 <form class="filters-sidebar" method="GET" action="/filter">
 
    <select class="d-block" name="gender" id="gender-dropdown">
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>

    <select class="d-block" name="size" id="size-dropdown">
        <option value="S">Small</option>
        <option value="M">Medium</option>
        <option value="L">Large</option>
        <option value="XL">X-Large</option>
    </select>

    <select class="d-block" name="color" id="color-dropdown">
        <option value="black">Black</option>
        <option value="white">White</option>
    </select>

    <h3>Price</h3>
    
        <section>
            <label for="min-input">Min:</label>
            <input name="minPrice" type="number">
        </section>
        <section>
            <label for="min-input">Max:</label>
            <input name="maxPrice" type="number">
        </section>

        <input class="btn btn-primary" type="submit" value="Filter">
</form>
<?php /**PATH C:\Users\gregf\Desktop\custom-tees-greg\resources\views/includes/filters.blade.php ENDPATH**/ ?>