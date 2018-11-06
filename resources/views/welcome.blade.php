@extends('layout')

@section('content')
    <h1>{{ $foo }}</h1>

    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
@endsection
