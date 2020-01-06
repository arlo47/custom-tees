 <form class="filters-sidebar form-group w-10" method="GET" action="/filter">
 
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

    <h3>Price</h3>
    
        <section>
            <label for="min-input">Min:</label>
            <input class="form-control" name="minPrice" type="number">
        </section>
        <section>
            <label for="min-input">Max:</label>
            <input class="form-control" name="maxPrice" type="number">
        </section>

        <input class="btn btn-primary" type="submit" value="Filter">
</form>
