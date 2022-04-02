@extends('layouts.default')
@section('title', 'Контакты | Max Group Plus')
@section('content')
        <div class="content">
            <div class="titleblock" style=" background-image: url({{asset('images/mallbg.jpg')}})">
                <div class="container">
                    <h1 align="center">Контакты</h1>
                </div>
            </div>
            <div class="mallnav">
                <div class="container">
                    <p class="breadcrumbs"><a href="{{route('index')}}">Главная</a><span class="active">Контакты</span></p>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-12">
                            <h3>Наши Контакты</h3>
                            <p><strong>Номер телефона:</strong></p>
                            <p><i class="fas fa-phone-alt"> </i>(+99450) 222 34 45</p>
                            <p><strong>Наш E-mail:</strong></p>
                            <p><i class="fas fa-at"></i> info@maxgroupplus.az</p>
                            <h3>Наш адрес</h3>
                            <p>Баку, Название улицы 28</p>
                        </div>
                        <div class="col-xl-8 col-md-12">
                            <h3>Форма обратной связи</h3>
                            <form method="get" action="">
                                <p>
                                    <input placeholder="Ваше имя"/>
                                </p>
                                <p>
                                    <input placeholder="Номер телефона"/>
                                </p>
                                <p>
                                    <input placeholder="Ваш E-mail"/>
                                </p>
                                <p>
                                    <textarea placeholder="Ваш вопрос"></textarea>
                                </p>
                                <p>
                                    <input type="submit" value="Отправить"/>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection