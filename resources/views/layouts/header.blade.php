
<body>
<div id="page">
    <header class="header fixed-top">
        <div class="mobileheader">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto"><a class="linkmenu" href="#sidebarmenu"><i class="fas fa-bars"></i></a></div>
                <div class="col-auto"><a href="{{route('index')}}"><img src="{{asset('images/logo.png')}}"/></a></div>
                <div class="col-auto"><a class="linkmenu" href="#mainmenu"><i class="fas fa-ellipsis-v"></i></a></div>
            </div>
        </div>
        <div class="container nomobile">
            <div class="row no-gutters">
                <div class="col-1"><a class="linkmenuheader" href="#sidebarmenu"><i class="fal fa-bars"></i></a></div>
                <div class="col-11">
                    <div class="mainheader">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto"><a href="{{route('index')}}"><img class="logo" src="{{asset('images/logo.png')}}"/></a></div>
                            <div class="col-auto">
                                <nav class="navbar navbar-expand-sm justify-content-center">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active"><a href="{{route('index')}}">@lang('header.main')</a></li>
                                        <li class="nav-item"><a href="{{route('services')}}">@lang('header.services')</a>
                                            <ul>
                                                @foreach(\App\Models\Service::all() as $service)
                                                    <li class="nav-item"><a href="{{route('single-service', $service->slug)}}">{{$service->title_ru}}</a></li>
                                                @endforeach
                                                {{--<li class="nav-item"><a href="#">Изготовление стендов</a></li>--}}
                                                {{--<li class="nav-item"><a href="#">Разработка концепций акций</a></li>--}}
                                                {{--<li class="nav-item"><a href="#">Предоставление промоутеров</a></li>--}}
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="{{route('portfolio')}}">@lang('header.portfolio')</a></li>
                                        <li class="nav-item"><a href="{{route('contacts')}}">@lang('header.contacts')</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto right">
                                <p class="phone"><i class="fas fa-phone-alt"></i>(+99450) 222 34 45</p><a class="callus" data-fancybox="form" data-src="#zvonok" href="javascript:;">@lang('header.tel')</a>
                            </div>
                            <div class="col-auto right">
                                <div id="lang_sel_list">
                                    <div class="wpml-ls-statics-shortcode_actions">
                                        <ul>
                                            <li><a class="wpml-ls-link" href="{{route('setlocale', ['lang' => 'ru'])}}">RU</a></li>
                                            <li><a class="wpml-ls-link" href="{{route('setlocale', ['lang' => 'az'])}}">AZ</a></li>
                                            <li><a class="wpml-ls-link" href="{{route('setlocale', ['lang' => 'en'])}}">EN</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container inmobile">
            <p class="phone"><i class="fas fa-phone-alt"></i>(+99450) 222 34 45</p><a class="callus" data-fancybox="mobileform" data-src="#zvonok" href="javascript:;">@lang('header.tel')</a>
            <div id="lang_sel_list">
                <div class="wpml-ls-statics-shortcode_actions">
                    <ul>
                        <li><a class="wpml-ls-link" href="{{route('setlocale', ['lang' => 'ru'])}}">RU</a></li>
                        <li><a class="wpml-ls-link" href="{{route('setlocale', ['lang' => 'az'])}}">AZ</a></li>
                        <li><a class="wpml-ls-link" href="{{route('setlocale', ['lang' => 'en'])}}">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>