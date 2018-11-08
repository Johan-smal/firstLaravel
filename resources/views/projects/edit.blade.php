@extends('layout')

@section('content')
    <h1>Edit Project</h1>

    <form method="post" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description">{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update Project</button>
        </div>
    </form>
    <form method="post" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">Delete Project</button>
        </div>
    </form>
@endsection
