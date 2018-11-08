@extends('layout')

@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach($projects as $project)
            <li><a href="/projects/{{$project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
    <a href="/projects/create">create new project</a>
@endsection
