@extends('layouts.app')
@section('content')
<h1>Create Tasks</h1>
{!! Form::open(['action' => 'App\Http\Controllers\TasksController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','', ['class' => 'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('title','Description')}}
        {{Form::textarea('description','', ['class' => 'form-control', 'placeholder'=> 'Description'])}}
    </div>
    <!-- <div class="form-group">
    {{Form::label('title','important')}}
    {{Form::select('size', ['L' => 'vary', 'S' => 'not'], null, ['placeholder' => 'select...'], ['class' => 'form-control', 'placeholder'=> 'Description'])}}
    </div> -->
    {{Form::submit('Save',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection