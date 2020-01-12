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
                    @foreach($shoppingCart as $shoppingCart)
                            <tr>
                                <th><img src="{{ URL::to('/') }}/images/shirts/{{ $shoppingCart->image }}" height="100"></th>
                                <th>{{ $shoppingCart->name }}</th>
                                <th>{{ $shoppingCart->gender }}</th>
                                <th>{{ $shoppingCart->color }}</th>
                                <th>{{ $shoppingCart->size }}</th>
                                <th>${{ $shoppingCart->price }}</th>
                                <th>{{$shoppingCart->quantity}}</th>
                                <th><a href="/remove/{{$shoppingCart->id}}">Remove</a>
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
@endsection