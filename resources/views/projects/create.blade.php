@extends('layout')

@section('content')
    <h1>Create a new Project</h1>
    <form method="POST" action="/projects">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project Title" required value="{{ old('title') }}" required>
        </div>

        <div>
            <textarea name="description" placeholder="Project description" required>{{ old('description') }}</textarea>
        </div>

        <div>
            <button type="submit">Create project</button>
        </div>
        @include('errors')
    </form>
@endsection
