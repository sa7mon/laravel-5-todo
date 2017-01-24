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
    <h2>Projects</h2>

    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>

    @if ( !$projects->count() )
        You have no projects
    @else

        @foreach( $projects as $project )
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                    </h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                    {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    {!! Form::close() !!}
                </div>

            </div>

        @endforeach

    @endif


@endsection