@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    @if ($project->tasks->count())
    <div>
        @foreach($project->tasks as $task)
            <div>
                <form method="POST" action="/completed-tasks/{{ $task->id }}">
                    @if ($task->completed)
                        @method('DELETE')
                    @endif
                    @csrf
                    <label class="checkbox {{ ($task->completed) ? 'is-complete' : ''}}" for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ ($task->completed) ? 'checked' : ''}}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
    @endif
    <div>
        <form method="POST" action="/projects/{{ $project->id }}/tasks">
            @csrf
            <div>
                <label for="description">New Task</label>
                <input type="input" name="description" placeholder="New Task" required>
            </div>
            <button type="submit">Add Task</button>
        </form>
    </div>

    @include('errors')
    <p>
        <a href="/projects/{{ $project->id }}/edit">edit</a>
    </p>
@endsection
