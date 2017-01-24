<?php
/**
 * Created by PhpStorm.
 * User: dsalmon
 * Date: 1/23/17
 * Time: 19:06
 */
?>

@extends('app')

@section('content')
    <h2>Edit Task "{{ $task->name }}"</h2>

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection