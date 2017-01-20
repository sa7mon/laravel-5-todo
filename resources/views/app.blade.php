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
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>