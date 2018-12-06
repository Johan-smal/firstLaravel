<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required|max:255']);
        $project->addTask($attributes);
        return back();
    }

    public function update(Task $task)
    {
//        if (request()->has('completed')) {
//            $task->complete();
//        } else {
//            $task->inComplete();
//        }

        $method = request()->has('completed') ? 'complete' : 'inComplete';
        $task->$method();
        return back();
    }
}
