@extends('layouts.app')
@section('content')
<a href="/tasks" class="btn tbn-default">Go Back</a>
<h1>{{$task->title}}</h1>
<h3>{{$task->description}}</h3>
<hr>
<small>good lack</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $task->user_id)
        {!! Form::open(['action' => ['App\Http\Controllers\TasksController@destroy', $task->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('delete',['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endif


@endsection