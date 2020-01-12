@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="main-image d-block mx-auto img-fluid" src="{{ URL::to('/') }}/images/shirts/{{ $shirt->image }}">
        </div>
        
        <div class="col-12 col-lg-6">
            <div class="card bg-light my-3">
                <h1 class="card-header h3">{{ $shirt->name }}</h1>
  
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Gender: {{ $shirt->gender }}</li>
                        <li class="list-group-item">Color: {{ $shirt->color }}</li>
                        <li class="list-group-item">Size: {{ $shirt->size }}</li>
                        <li class="list-group-item">Price: ${{ $shirt->price }}</li>
                    </ul>
                    
                    <a href="/add-to-cart/{{$shirt->id}}" class="cart-btn m-3 btn btn-primary d-flex align-items-center justify-content-center">
                        <i class="material-icons">add_shopping_cart</i>
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection