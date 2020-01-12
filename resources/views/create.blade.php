@extends('layouts.app')

@section('content')
    <h1>Create New Shirt</h1>

    {!! Form::open(['action' => 'ShirtsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('gender', 'Gender') }}
            {{ Form::select('gender',[
                'M' => 'Male',
                'F' => 'Female'
            ], null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('size', 'Size') }}
            {{ Form::select('size',[
                'S' => 'Small',
                'M' => 'Medium',
                'L' => 'Large',
                'XL' => 'Extra Large'
            ], null, ['class' => 'form-control']) }}
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
        ], '', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', 0, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Image') }}
            {{ Form::file('image', ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection