@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>

    @if(count($shirts) > 0)
        <table class="table">
            <thead>
                <th scope="col">
                    Image
                </th> 
                <th scope="col">
                    Name
                </th> 
                <th scope="col">
                    Gender
                </th> 
                <th scope="col">
                    Color
                </th> 
                <th scope="col">
                    Price
                </th>
            </thead>
            <tbody>
            @foreach ($shirts as $shirt)
                <tr>
                    <th scope="row">
                        <a href="/shirts/{{ $shirt->id }}">
                            <img class="img-fluid" width="80" src="{{ URL::to('/') }}/images/{{ $shirt->image }}">
                        </a> 
                    </th>
                    <th>
                        {{ $shirt->name }}
                    </th>
                    <th>
                        {{ $shirt->gender }}
                    </th>
                    <th>
                        {{ $shirt->color }}
                    </th>
                    <th>
                        {{ $shirt->price }}
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <p>No search results.</p>
    @endif
@endsection