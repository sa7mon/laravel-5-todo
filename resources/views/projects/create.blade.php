<?php
/**
 * Created by PhpStorm.
 * User: dsalmon
 * Date: 1/18/17
 * Time: 17:49
 */
?>
@extends('app')

@section('content')
    <h2>Create Project</h2>

    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
    @include('projects/partials/_form', ['submit_text' => 'Create Project'], array('class' => 'btn btn-info'))
    {!! Form::close() !!}
@endsection