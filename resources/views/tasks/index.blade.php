@extends('layouts.app')
@section('content')
<h1>Tasks</h1>
@if(count($tasks) > 1)
@foreach($tasks as $task)
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="/tasks/{{$task->id}}">{{$task->title}}</a></h5>
                <p class="card-text">{{$task->description}}</p>
            </div>
        </div>
    </div>
    </div>
    @endforeach
    @else
    @endif



    @endsection