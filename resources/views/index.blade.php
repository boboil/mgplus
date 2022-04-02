@extends('layouts.default')
@section('title', 'Главная страница | Max Group Plus')
@section('content')

    <div class="content">

        <!--SLider -->
        <div class="slider single-item">
            @foreach(\App\Models\Slide::all() as $slide)
                <div class="slider-content" style="background-image: url({{asset($slide->image)}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-sm-12">
                                <div class="utpblock">
                                    <div>
                                        {!! $slide->{'text_'.$lang} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <section class="tabsicon">
            <div class="container">
                <h2>@lang('index.garant')</h2>
                <ul class="nav nav-tabs">
                    @foreach($malls as $mall)
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#{{$mall->slug}}"><img src="{{asset($mall->logo)}}"/></a></li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($malls as $mall)
                        @if ($loop->first)
                            <div class="tab-pane active" id="{{$mall->slug}}">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-lg-6 col-sm-12">
                                    @if(isset($mall->images) && !empty($mall->images))
                                        <!--Галерея мола-->
                                            <div class="carousel slide" id="{{$mall->slug}}gallery" data-ride="carousel">
                                                <!--The slideshow -->
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($mall->images) as $image)
                                                        <div class="carousel-item"><a href="{{asset($image)}}" data-fancybox="{{$mall->slug}}images" data-caption="{{$mall->title_ru}}"><img src="{{asset($image)}}"/></a></div>
                                                    @endforeach
                                                </div>
                                                <!--Indicators-->
                                                <ul class="carousel-indicators">
                                                    @foreach(json_decode($mall->images) as $image)
                                                        <li data-target="#{{$mall->slug}}gallery" data-slide-to="{{ $loop->iteration - 1 }}"></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="malldesc">
                                            @if (App\Http\Middleware\LocaleMiddleware::getLocale() == 'az')
                                                <p class="malldesc_title"> <span>{{$mall->title_az}}</span></p>
                                                <div class="malldesc_desc">
                                                    {!! $mall->short_text_az !!}
                                                </div>
                                            @elseif (App\Http\Middleware\LocaleMiddleware::getLocale() == 'en')
                                                <p class="malldesc_title"> <span>{{$mall->title_en}}</span></p>
                                                <div class="malldesc_desc">
                                                    {!! $mall->short_text_en !!}
                                                </div>
                                            @else
                                                <p class="malldesc_title"> <span>{{$mall->title_ru}}</span></p>
                                                <div class="malldesc_desc">
                                                    {!! $mall->short_text_ru !!}
                                                </div>
                                            @endif
                                            <a class="malldesc_more" href="{{route('single-mall', $mall->slug)}}">Узнать о наличии свободных мест <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="tab-pane" id="{{$mall->slug}}">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-lg-6 col-sm-12">
                                        @if(isset($mall->images) && !empty($mall->images))
                                            <!--Галерея мола-->
                                            <div class="carousel slide" id="{{$mall->slug}}gallery" data-ride="carousel">
                                                <!--The slideshow -->
                                                <div class="carousel-inner">
                                                    @foreach(json_decode($mall->images) as $image)
                                                        <div class="carousel-item"><a href="{{asset($image)}}" data-fancybox="{{$mall->slug}}images" data-caption="{{$mall->title_ru}}"><img src="{{asset($image)}}"/></a></div>
                                                    @endforeach
                                                </div>
                                                <!--Indicators-->
                                                <ul class="carousel-indicators">
                                                    @foreach(json_decode($mall->images) as $image)
                                                        <li data-target="#{{$mall->slug}}gallery" data-slide-to="{{ $loop->iteration - 1 }}"></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="malldesc">
										@if (App\Http\Middleware\LocaleMiddleware::getLocale() == 'az')
											<p class="malldesc_title"> <span>{{$mall->title_az}}</span></p>
											<div class="malldesc_desc">
												{!! $mall->short_text_az !!}
                                            </div>
										@elseif (App\Http\Middleware\LocaleMiddleware::getLocale() == 'en')
											<p class="malldesc_title"> <span>{{$mall->title_en}}</span></p>
											<div class="malldesc_desc">
												{!! $mall->short_text_en !!}
                                            </div>
										@else
											<p class="malldesc_title"> <span>{{$mall->title_ru}}</span></p>
											<div class="malldesc_desc">
												{!! $mall->short_text_ru !!}
                                            </div>
										@endif
											<a class="malldesc_more" href="{{route('single-mall', $mall->slug)}}">Узнать о наличии свободных мест <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section class="grey adsplays">
            <div class="container">
                <h2>@lang('index.zone')</h2>
                <div class="row no-gutters">
                    @foreach(\App\Models\Area::all() as $area)
                    <div class="col-xl-3 col-md-4 col-sm-6 adsplays__item" id="singleplaysitem"><a class="front" href="#">
                            <p><i class="{{$area->text_ru}}"></i></p>
							@if (App\Http\Middleware\LocaleMiddleware::getLocale() == 'az')
								<p class="adsplays__item-title">{!! $area->title_az !!}<span></span></p></a>
							@elseif (App\Http\Middleware\LocaleMiddleware::getLocale() == 'en')
								<p class="adsplays__item-title">{!! $area->title_en !!}<span></span></p></a>
							@else
								<p class="adsplays__item-title">{!! $area->title_ru !!}<span></span></p></a>
							@endif
                        <div class="back">
                            <p class="title">@lang('index.lite')
                            <ul>
                                @foreach(\App\Models\Malls::all()->take(5) as $mall)
									@if (App\Http\Middleware\LocaleMiddleware::getLocale() == 'az')
										<li><a href="{{route('single-mall', $mall->slug)}}">{{$mall->title_az}}</a></li>
									@elseif (App\Http\Middleware\LocaleMiddleware::getLocale() == 'en')
										<li><a href="{{route('single-mall', $mall->slug)}}">{{$mall->title_en}}</a></li>
									@else
										<li><a href="{{route('single-mall', $mall->slug)}}">{{$mall->title_ru}}</a></li>
									@endif
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="adsplays__formblock">
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <h3 class="title">@lang('index.consultation')</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <input type="text" placeholder="@lang('index.name')"/>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <input type="text" placeholder="@lang('index.tel')"/>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            <input type="submit" value="@lang('index.cons')"/>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h2>@lang('index.comp')</h2>
                <div class="row">
                    @include('includes._services')
                </div>
            </div>
        </section>
        <section class="tabsicon team">
            <div class="container">
                <h2>@lang('index.project')</h2>
                <div class="row">
                    @foreach(\App\Models\Team::all() as $stuff)
                        <div class="col-xl-3 col-md-4 col-sm-6 team__item">
                            <div>
                                <div class="img"><img src="{{asset($stuff->image)}}"/></div>
                                <div class="team__item-title">
                                    <p class="title">{{$stuff->name_ru}}</p>
                                    <p>{{$stuff->position_ru}}м</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <article>
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-12">
                            <h2>о нас</h2>
                            {!! \App\Models\About::find(1)->text_ru !!}
                        </div>
                        <div class="col-xl-6 col-md-12"><img src="{{asset(\App\Models\About::find(1)->image)}}"/></div>
                    </div>
                </article>
            </div>
        </section>
    </div>
@endsection