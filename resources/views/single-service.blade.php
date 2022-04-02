@extends('layouts.default')
@section('title', $service->title_ru ." | Max Group Plus")
@section('content')
    <div class="content">
        <div class="titleblock" style=" background-image: url({{asset('images/mallbg.jpg')}})">
            <div class="container">
                <h1 align="center">{{$service->title_ru}}в</h1>
            </div>
        </div>
        <div class="mallnav">
            <div class="container">
                <p class="breadcrumbs"><a href="{{route('index')}}">Главная</a><a href="{{route('services')}}">Услуги</a><span class="active">{{$service->title_ru}}</span></p>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-7 col-md-12">
                        <article>
                            {!! $service->text_ru !!}
                        </article>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="formblock">
                            <div>
                                <p class="title">Для заказа заполните форму</p>
                                <form>
                                    <p>
                                        <input type="text" placeholder="Ваше имя"/>
                                    </p>
                                    <p>
                                        <input type="text" placeholder="Номер телефона"/>
                                    </p>
                                    <p>
                                        <input type="submit" value="Получить консультацию"/>
                                    </p>
                                </form>
                                <p>либо позвоните по телефону</p>
                                <p class="phone"><i class="fas fa-phone-alt"></i>(+99455) 223 80 40</p>
                                <p>и менеджер Ильнур даст вам детальную консультацию</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="grey">
            <div class="container">
                <h2>Наши работы</h2>
                <div class="gallery" id="gallery">
                    @foreach(json_decode($service->images) as $image)
                        <div class="mb-3 pics animation"><a href="{{asset($image)}}" data-fancybox="28mallimages" data-caption="28 Mall"><img class="img-fluid" src="{{asset($image)}}"/></a></div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h2>Другие услуги</h2>
                @include('includes._services')
            </div>
        </section>

    </div>
@endsection