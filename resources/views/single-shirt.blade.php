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
        
        <a href="#" class="btn btn-primary">Add to Cart</a>
    </div>

</div>
@endsection