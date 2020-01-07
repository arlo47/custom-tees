@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-6">
        <img class="thumbnail img-fluid" src="{{ URL::to('/') }}/images/{{ $shirt->image }}">
    </div>
    
    <div class="col-6">
        <h1>{{ $shirt->name }}</h1>

        <ul>
            <li>Gender: {{ $shirt->gender }}</li>
            <li>Color: {{ $shirt->color }}</li>
            <li>Size: {{ $shirt->size }}</li>
            <li>Price: ${{ $shirt->price }}</li>
        </ul>
        
        <a href="#" class="cart-btn btn btn-primary d-flex align-items-center justify-content-center">
            <i class="material-icons">shopping_cart</i>
            Add to Cart
        </a>
    </div>

</div>
@endsection