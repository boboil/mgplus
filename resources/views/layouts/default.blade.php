<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!--Style bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"/>
    <!--Style Google Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap&amp;subset=cyrillic,cyrillic-ext"/>
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/back_style.css')}}"/>
    <!--Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Popper JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!--Bootstrap 4 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>
@include('layouts.header')
@yield('content')
@include('layouts.footer')