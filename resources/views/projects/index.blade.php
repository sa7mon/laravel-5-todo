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

    @if ( !$projects->count() )
        You have no projects
    @else
        <ul>
            @foreach( $projects as $project )
                <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection