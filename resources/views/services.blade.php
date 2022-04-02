@extends('layouts.default')
@section('title', "Услуги | Max Group Plus | Max Group Plus")
@section('content')
    <div class="content">
        <div class="titleblock" style=" background-image: url({{asset('images/mallbg.jpg')}})">
            <div class="container">
                <h1 align="center">Услуги</h1>
            </div>
        </div>
        <div class="mallnav">
            <div class="container">
                <p class="breadcrumbs"><a href="{{route('index')}}">Главная</a><span class="active">Услуги</span></p>
            </div>
        </div>
        <section>
            <div class="container">
                <article>
                    <h2>Заголовок 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. </p>
                    <h3>Заголовок 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p>
                </article>
                @include('includes._services')
            </div>
        </section>
    </div>
@endsection