@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 m-1">
            <img class="img-fluid" src="{{ URL::to('/') }}/images/banner.jpg">
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 col-lg-6 m-1 m-lg-0">
            <a href="/filter?gender=M&size=&color=&minPrice=&maxPrice=">
                <img class="img-fluid" src="{{ URL::to('/') }}/images/mens.jpg">
            </a>
        </div>
        <div class="col-12 col-lg-6 m-1 m-lg-0">
            <a href="/filter?gender=F&size=&color=&minPrice=&maxPrice=">
                <img class="img-fluid" src="{{ URL::to('/') }}/images/womens.jpg">
            </a>
        </div>
    </div>
    
    
    
@endsection