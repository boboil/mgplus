@extends('layouts.default')
@section('title', 'О нас | Max Group Plus')
@section('content')
<div class="content">
    <section>
        <div class="container">
            <article>
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-12">
                        <h2>о нас</h2>
                        {!! $about->{'text_'.$lang} !!}
                    </div>
                    <div class="col-xl-6 col-md-12"><img src="{{asset($about->image)}}"/></div>
                </div>
            </article>
        </div>
    </section>
</div>
@endsection