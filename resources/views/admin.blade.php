@extends('layouts.app')

@section('content')
    <h1>Admin Panel</h1>
    
    <div class="admin-container">
        @include('includes.admin-filters')

            <div class="d-flex justify-content-between align-items-end">
                <a href="/admin/create" class="btn btn-primary my-3">Create New</a>
                {{ $shirts->appends(request()->input())->links() }}
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
                        @foreach($shirts as $shirt)
                            <tr>
                                <th>{{ $shirt->id }}</th>
                                <th>{{ $shirt->name }}</th>
                                <th>{{ $shirt->gender }}</th>
                                <th>{{ $shirt->color }}</th>
                                <th>{{ $shirt->size }}</th>
                                <th>${{ $shirt->price }}</th>
                                <th>
                                    <a href="/admin/edit/{{ $shirt->id }}" class="btn btn-info">Update</a>
                                    {!! Form::open(['action' => ['ShirtsController@destroy', $shirt->id], 'method' => 'POST', 'class' => 'd-inline']) !!}
                                        <!-- hidden element to spoof DELETE request -->
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::Submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                <!-- pagination links -->
                {{ $shirts->appends(request()->input())->links() }}
            </div>
    </div>


@endsection