@extends('layouts.default')
@section('title', $mall->title_ru ." | Max Group Plus")
@section('content')
    <div class="content">
        <div class="titleblock" style=" background-image: url({{asset($mall->image)}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-md-4"><span class="logomall"><img src="{{asset($mall->logo)}}"/></span></div>
                    <div class="col-xl-9 col-md-8">
                        <h1>{{$mall->title_ru}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="mallnav">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">{{$mall->title_ru}}</a></li>
                    @foreach(\App\Models\Malls::where('id', '!=', $mall->id)->get() as $item)
                        <li><a href="{{route('single-mall', $item->slug)}}">{{$item->title_ru}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <section>
            <div class="container">
                <article>
                    {!! $mall->text_ru !!}
                </article>
            </div>
        </section>
        <div id="adsplaces">
            <section class="grey">
                <div class="container">
                    <h2>Рекламные зоны</h2>
                    <div class="nomobile" id="stickyblock">
                        <ul class="singleplaces row">
                            @foreach($mall->floors as $floor)
                                 <li class="col">
                                    <a href="#secondparking_{{$floor->id}}">{{$floor->title_ru}}</a>
                                    <ul>
                                        @foreach($floor->areas as $area)
                                            <li>
                                                <a href="#secondparking_lightboxparking_{{$area->id}}" data-toggle="collapse">{{$area->title_ru}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Навигация по местам размещеня в мобильном-->
                    <a class="inmobile mobileplaces" href="#mobileplaces">
                        Рекламные места в {{$mall->title_ru}} <i class="fas fa-angle-right"></i>
                    </a>
                    <div id="mobileplaces">
                        <ul>
                            @foreach($mall->floors as $floor)
                                <li>
                                    <a href="#secondparking_{{$floor->id}}">{{$floor->title_ru}}</a>
                                    <ul>
                                        @foreach($floor->areas as $area)
                                            <li>
                                                <a href="#secondparking_lightboxparking_{{$area->id}}" data-toggle="collapse">{{$area->title_ru}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row no-gutters singleplaysitem" id="adv_areas">
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-parking-lightbox"></i></p>
                    <p class="adsplays__item-title">Лайтбоксы в паркингах<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-parking-column"></i></p>
                    <p class="adsplays__item-title">Колонны в паркингах<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-pillars"></i></p>
                    <p class="adsplays__item-title">Пилларсы 4-х сторонние<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-ws"></i></p>
                    <p class="adsplays__item-title">Реклама в W/C<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-stand"></i></p>
                    <p class="adsplays__item-title">Рекламные стенды<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-lightbox"></i></p>
                    <p class="adsplays__item-title">Лайтбоксы<span>большие, средние, маленькие</span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-brandwall"></i></p>
                    <p class="adsplays__item-title">Реклама на бренд волл<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-pendant-advertising"></i></p>
                    <p class="adsplays__item-title">Подвесная реклама<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-monitor"></i></p>
                    <p class="adsplays__item-title">Реклама на мониторах<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-elevator"></i></p>
                    <p class="adsplays__item-title">Брендирование лифтов<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-eskalator"></i></p>
                    <p class="adsplays__item-title">Брендирование эскалаторов<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-windows"></i></p>
                    <p class="adsplays__item-title">Фасадные окна<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-pendant-advertising-2"></i></p>
                    <p class="adsplays__item-title">Реклама под потолком <span>малый потолок</span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-revolving-doors"></i></p>
                    <p class="adsplays__item-title">Вращающиеся двери<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-promotional"></i></p>
                    <p class="adsplays__item-title">Рекламные акции<span></span></p></span></div>
                        <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item"><span class="spanitem">
                    <p><i class="icon-promotional-2"></i></p>
                    <p class="adsplays__item-title">Изготовление рекламной продукции<span></span></p></span></div>
                    </div>
                </div>
            </section>
            @foreach($mall->floors as $floor)
                @foreach($floor->areas as $area)
                    <section class="collapse" id="secondparking_lightboxparking_{{$area->id}}">
                        <div class="container">
                            <h2>{{$area->title_ru}}</h2>
                            @foreach($area->places as $place)
                                <p align="center"><em>{{$floor->title_ru}}</em></p>
                                <div class="product_item">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-sm-12">
                                            <!--Галерея мола-->
                                            <div class="carousel slide" id="gallery{{$place->id}}" data-ride="carousel">
                                                <!--The slideshow-->
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($place->images) as $image)
                                                        <div class="carousel-item">
                                                            <a href="{{asset($image)}}" data-fancybox="gallery{{$place->id}}" data-caption="{{$mall->title_ru}}"><img src="{{asset($image)}}"/></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!--Left and right controls-->
                                                <div class="controlsblock"><a class="carousel-control-prev" href="#gallery{{$place->id}}" data-slide="prev"><i class="fal fa-long-arrow-left"></i></a><a class="carousel-control-next" href="#gallery{{$place->id}}" data-slide="next"><i class="fal fa-long-arrow-right"></i></a></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-12">
                                            <div class="product_item_desc"><span class="sticker green">Свободно</span>
                                                <h3>{{$place->title_ru}}</h3>
                                                <p class="meta">{{$floor->title_ru}}</p>
                                                {!! $place->text_ru !!}
                                                <div class="form-check" id="checkbox">
                                                    @if(!empty($place->price_1))
                                                        <label>
                                                            <input class="form-check-input" name="price_{{$place->id}}" type="radio"
                                                                   data-place="{{$place->title_ru}}"
                                                                   data-name="{{$place->title_ru}}"
                                                                   data-floor="{{$floor->title_ru}}"
                                                                   data-term="1 дней"
                                                                   data-price="{{$place->price_1}}"
                                                                   value="{{$place->price_1}}"
                                                            />
                                                            <span>до 1 дней  - {{$place->price_1}} маннат</span>
                                                        </label>
                                                    @endif
                                                    @if(!empty($place->price_10))
                                                        <label>
                                                            <input class="form-check-input" name="price_{{$place->id}}" type="radio"
                                                                   data-place="{{$place->title_ru}}"
                                                                   data-name="{{$place->title_ru}}"
                                                                   data-floor="{{$floor->title_ru}}"
                                                                   data-term="до 10 дней"
                                                                   data-price="{{$place->price_10}}"
                                                                   value="{{$place->price_10}}"
                                                            /><span>до 10 дней  - {{$place->price_10}} маннат</span>
                                                        </label>
                                                    @endif
                                                    @if(!empty($place->price_15))
                                                        <label>
                                                            <input class="form-check-input" name="price_{{$place->id}}" type="radio"
                                                                   data-place="{{$place->title_ru}}"
                                                                   data-name="{{$place->title_ru}}"
                                                                   data-floor="{{$floor->title_ru}}"
                                                                   data-term="до 15 дней"
                                                                   data-price="{{$place->price_15}}"
                                                                   value="{{$place->price_15}}"
                                                            /><span>до 15 дней  - {{$place->price_15}} маннат</span>
                                                        </label>
                                                    @endif
                                                    @if(!empty($place->price_21))
                                                        <label>
                                                            <input class="form-check-input" name="price_{{$place->id}}" type="radio"
                                                                   data-place="{{$place->title_ru}}"
                                                                   data-name="{{$place->title_ru}}"
                                                                   data-floor="{{$floor->title_ru}}"
                                                                   data-term="до 21 дня"
                                                                   data-price="{{$place->price_21}}"
                                                                   value="{{$place->price_21}}"
                                                            /><span>до 21 дня - {{$place->price_21}} маннат </span>
                                                        </label>
                                                    @endif
                                                </div><a class="malldesc_more" id="btn" href="#zakazblock">Заказать <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endforeach
            @endforeach
        </div>
        <!--Заказ всего + форма-->
        <section class="grey" id="zakazblock">
            <div class="container">
                <div class="adsplays__formblock">
                    <form id="adsplays__formblock">
                        <div class="row justify-content-between">
                            <div class="col-xl-7 col-md-12">
                                <h3 class="title">ВЫ ЗАКАЗЫВАЕТЕ</h3>
                                <table class="totalproduct">
                                    <thead>
                                    <tr>
                                        <th>Название рекламного места</th>
                                        <th class="price">Стоимость (маннат)</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>Итого</td>
                                        <td class="price total" data-total="0">0</td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="formblock">
                                    <div>
                                        <p class="title">Для заказа заполните форму</p>
                                        <p>
                                            <input type="text" placeholder="Ваше имя"/>
                                        </p>
                                        <p>
                                            <input type="text" placeholder="Номер телефона"/>
                                        </p>
                                        <p>
                                            <input type="submit" value="Получить консультацию"/>
                                        </p>
                                        <p>либо позвоните по телефону</p>
                                        <p class="phone"><i class="fas fa-phone-alt"></i>(+99455) 223 80 40</p>
                                        <p>и менеджер Ильнур даст вам детальную консультацию</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Другие молы-->
        <section class="other">
            <div class="container">
                <h2>Рассмотрите варианты размещения рекламы <br>в других торговых центрах</h2>
                <div class="row">
                    @foreach(\App\Models\Malls::where('id', '!=', $mall->id)->get() as $item)
                        <div class="col"><a href="{{route('single-mall', $item->slug)}}"> <img src="{{asset($item->logo)}}"/></a></div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection