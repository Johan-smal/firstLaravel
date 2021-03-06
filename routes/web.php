<?php

//app()->singleton('example', function() {
//    return new \App\Example;
//});
use App\Services\Twitter;
use App\Repositories\UserRepository;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(UserRepository $user) {
    dd($user);

    return view('welcome');
});
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/*
 * GET /projects {index}
 * GET /projects/create {create}
 * POST /projects {store}
 * GET /projects/1/edit {edit}
 * PATCH /projects/1 {update}
 * DELETE /projects/1 {destroy}
 */
Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destoy');
