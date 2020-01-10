<!-- displayed if 'success' is returned with view -->
@if(session('success'))
        <div class="alert alert-success mt-1">
            {{ session('success') }}
        </div>
@endif

<!-- displayed if 'error' is returned with view -->
@if(session('error'))
        <div class="alert alert-danger mt-1">
            {{ session('error') }}
        </div>
@endif

<!-- these errors are displayed if any validation fails in the method invoked upon form action -->
@if ($errors->any())
    <div class="alert alert-danger mt-1">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif