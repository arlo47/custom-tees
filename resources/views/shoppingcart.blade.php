@extends('layouts.app')

@section('content')

<div class="table-responsive">
                <table class="table">
                    <thead>
                        <th></th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </thead>
                    <tbody>
                    @foreach($shoppingCart as $shirt)
                            <tr>
                                <th><img src="{{ URL::to('/') }}/images/{{ $shirt->image }}" height="100"></th>
                                <th>{{ $shirt->name }}</th>
                                <th>{{ $shirt->gender }}</th>
                                <th>{{ $shirt->color }}</th>
                                <th>{{ $shirt->size }}</th>
                                <th>${{ $shirt->price }}</th>
                                <th>{{$shirt->quantity}}</th>
                                <th><a href="/remove/{{$shirt->id}}">Remove</a>
                            </tr>
                    @endforeach
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total: ${{number_format($shoppingCartTotal, 2)}}</th>
                        <th></th>
                    </tr>
                    </tbody>
                </table>
            </div>

    <!-- <div class="col-12 col-md-6 col-lg-4">
        <div class="card m-1 p-1">
            <a class="d-block text-dark" href="/shirts/{{ $shirt->id }}">
                <img class="thumbnail img-fluid card-img-top" src="{{ URL::to('/') }}/images/{{ $shirt->image }}" height="400">
            </a>
                                
            <div class="card-body">
                <h3 class="card-title h5 mt-2">{{ $shirt->name }}</h3>
                    <p class="card-text h3">${{ $shirt->price }}</p>
            </div>
        </div>
    </div> -->

@endsection