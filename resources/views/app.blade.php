<?php
/**
 * Created by PhpStorm.
 * User: dsalmon
 * Date: 1/18/17
 * Time: 17:56
 */

?>

<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        {{ HTML::style('css/app.css') }}
        {{ HTML::script('js/app.js') }}
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @if (Session::has('message'))
        <div class="flash alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    @yield('content')
</div>
</body>
</html>