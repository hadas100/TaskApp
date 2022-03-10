@extends('layouts.app')
@section('content')
<h1>About</h1>
@if(count($services1) > 0)
        <ul>
            @foreach( $services1 as $service)
            <li>
                {{$service}}
            </li>
            @endforeach
        </ul>
        @endif
@endsection