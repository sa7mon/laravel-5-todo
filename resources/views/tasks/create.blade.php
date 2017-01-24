<?php
/**
 * Created by PhpStorm.
 * User: dsalmon
 * Date: 1/23/17
 * Time: 19:05
 */
?>

@extends('app')

@section('content')
    <h2>Create Task for Project "{{ $project->name }}"</h2>

    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection