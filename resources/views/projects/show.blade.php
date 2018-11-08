@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    <ul>
        @foreach($project->tasks as $task)
            <li>{{ $task->description }}</li>
        @endforeach
    </ul>
    <p>
        <a href="/projects/{{ $project->id }}/edit">edit</a>
    </p>
@endsection
