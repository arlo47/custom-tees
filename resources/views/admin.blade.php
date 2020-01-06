@extends('layouts.app')

@section('content')
    <h1>Admin Panel</h1>
    
    <div class="admin-container">
        @include('includes.admin-filters')

            <button class="btn btn-primary my-3">Create New</button>

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
                    @foreach($shirts as $shirt)
                        <tr>
                            <th>{{ $shirt->id }}</th>
                            <th>{{ $shirt->name }}</th>
                            <th>{{ $shirt->gender }}</th>
                            <th>{{ $shirt->color }}</th>
                            <th>{{ $shirt->size }}</th>
                            <th>${{ $shirt->price }}</th>
                            <th>
                                <button class="btn btn-info">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- pagination links -->
            {{ $shirts->links() }}
    </div>


@endsection