<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/front-end/css/home2.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/front-end/photo/icon/favicon.ico') }}"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    @include('header.header')
    <section></section>
</head>

@yield('body')



</html>
