@extends('layouts.default')
@section('title', 'Портфолио | Max Group Plus')
@section('content')
    <div class="content">
        <div class="titleblock" style=" background-image: url({{asset('images/mallbg.jpg')}})">
            <div class="container">
                <h1 align="center">Портфолио</h1>
            </div>
        </div>
        <div class="mallnav">
            <div class="container">
                <p class="breadcrumbs"><a href="{{route('index')}}">Главная</a><span class="active">Портфолио</span></p>
            </div>
        </div>
        <section>
            <div class="container">
                <article>
                    <h2>{{$portfolio->title_ru}}</h2>
                    {!! $portfolio->text_ru !!}
                </article>
            </div>
        </section>
        <section class="grey">
            <div class="container">
                <h2>Наши работы</h2>
                <div class="gallery" id="gallery">
                    @foreach(json_decode($portfolio->images) as $image)
                        <div class="mb-3 pics animation"><a href="{{asset($image)}}" data-fancybox="28mallimages" data-caption="28 Mall"><img class="img-fluid" src="{{asset($image)}}"/></a></div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection