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
<body>
@section('sidebar')
    <div class="container sidebar">
        This is the master sidebar.
    </div>
@show

<div class="container">
    @if (Session::has('message'))
        <div class="flash alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class='flash alert-danger'>
            @foreach ( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @yield('content')
</div>
</body>
<head>
        <title>App Name - @yield('title')</title>
        {{ HTML::style('css/app.css') }}
        {{ HTML::script('js/app.js') }}
</head>
</html>