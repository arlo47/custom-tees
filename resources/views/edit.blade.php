@extends('layouts.app')

@section('content')
    <h1>Edit Shirt</h1>

    {!! Form::open(['action' => ['ShirtsController@update', $shirt->id], 'method' => 'POST']) !!}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $shirt->name, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('gender', 'Gender') }}
            {{ Form::select('gender',[
                'M' => 'Male',
                'F' => 'Female'
               ], $shirt->gender, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('size', 'Size') }}
            {{ Form::select('size',[
                'S' => 'Small',
                'M' => 'Medium',
                'L' => 'Large',
                'XL' => 'Extra Large'
        ], $shirt->size, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('color', 'Color') }}
            {{ Form::select('color', [
                'black' => 'Black',
                'pink' => 'Pink',
                'white' => 'White',
                'grey' => 'Grey',
                'orange' => 'Orange',
                'red' => 'Red'
        ], $shirt->color, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', $shirt->price, ['class' => 'form-control']) }}
        </div>
        
        <!-- hidden element to spoof PUT request -->
        {{ Form::hidden('_method', 'PUT') }}

        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection