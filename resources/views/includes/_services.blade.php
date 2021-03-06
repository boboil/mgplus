<div class="row">
    @foreach(\App\Models\Service::all() as $serv)
        <div class="col-xl-3 col-md-4 col-sm-6 services__item"><a href="{{route('single-service', $serv->slug)}}">
                <div>
                    <div class="img"><img src="{{asset(json_decode($serv->image)[0])}}"/></div>
					@if (App\Http\Middleware\LocaleMiddleware::getLocale() == 'az')
						<div class="services__item-title"><span>{{$serv->title_az}}</span></div>
					@elseif (App\Http\Middleware\LocaleMiddleware::getLocale() == 'en')
						<div class="services__item-title"><span>{{$serv->title_en}}</span></div>
					@else
						<div class="services__item-title"><span>{{$serv->title_ru}}</span></div>
					@endif
                </div></a>
        </div>
    @endforeach
</div>