@extends('layouts.app')

@section('content')
    <h1>Catalog Page</h1>
    
    <div class="shirts-container row">
        <div class="col-12 col-lg-3">
            @include('includes.filters')
        </div>

        <div class="col-12 col-lg-9 d-flex flex-wrap justify-content-between">
            <div class="row">
                @if(count($shirts) > 0)
                    @foreach($shirts as $shirt)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card m-1 p-1">
                                <a class="d-block text-dark" href="/shirts/{{ $shirt->id }}">
                                    <img class="thumbnail img-fluid card-img-top" src="{{ URL::to('/') }}/images/shirts/{{ $shirt->image }}" height="400">
                                </a>
                                
                                <div class="card-body">
                                    <h3 class="card-title h5 mt-2">{{ $shirt->name }}</h3>
                                    <p class="card-text h3">${{ $shirt->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <p>No search results.</p>
                @endif
            </div>
            <!-- pagination links -->
            {{ $shirts->appends(request()->input())->links() }}
        </div>
    </div>


@endsection