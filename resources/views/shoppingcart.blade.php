@extends('layouts.app')

@section('content')

@foreach($shoppingCart as $shirt)

    <div class="col-12 col-md-6 col-lg-4">
        <div class="card m-1 p-1">
            <a class="d-block text-dark" href="/shirts/{{ $shirt->id }}">
                <img class="thumbnail img-fluid card-img-top" src="{{ URL::to('/') }}/images/{{ $shirt->image }}" height="400">
            </a>
                                
            <div class="card-body">
                <h3 class="card-title h5 mt-2">{{ $shirt->name }}</h3>
                    <p class="card-text h3">${{ $shirt->price }}</p>
            </div>
        </div>
    </div>
@endforeach
@endsection