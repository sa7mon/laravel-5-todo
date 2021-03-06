<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::bind('task', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('project', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects.tasks', 'TasksController');
Route::resource('projects', 'ProjectsController');


