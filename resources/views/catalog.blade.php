@extends('layouts.app')

@section('content')
    <h1>Catalog Page</h1>
    
    <div class="shirts-container d-flex flex-direction-row">
        @include('includes.filters')

        <div class="d-flex flex-wrap justify-content-between">
            @if(count($shirts) > 0)
                @foreach($shirts as $shirt)
                    <div class="w-25 mx-4 my-1">
                        <img class="thumbnail img-fluid" src="{{ URL::to('/') }}/images/{{ $shirt->image }}" height="400">
        
                        <h3>
                            <a href="/shirts/{{ $shirt->id }}">{{ $shirt->name }}</a>
                        </h3>
        
                        <p><span>{{ $shirt->gender }}</span> | 
                            <span>{{ $shirt->color }}</span> | 
                            <span>{{ $shirt->size }}</span> |
                            <span>${{ $shirt->price }}</span>
                        </p>
                    </div>
                @endforeach
            @else
            <p>No search results.</p>
            @endif
            <!-- pagination links -->
            {{ $shirts->links() }}
        </div>
    </div>


@endsection