<!--Footer-->
<footer class="footer">
    <div class="container">
        <p><img src="{{asset('images/logo.png')}}"/></p>
        <p class="social">

            <a href="#" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="top" title="Мы на Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="top" title="Мы на Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="top" title="Мы на Youtube"><i class="fab fa-youtube"></i></a>
            <a href="#" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="top" title="Мы на Instagram"><i class="fab fa-instagram"></i></a>
        </p>
        <p class="copyright">© Copyright 2019 - Max Group Plus - Все права защищены <br> <small>Created by SiteMaster.az</small></p>
    </div>
</footer>
<a class="scrollToTop" href="#"> <i class="fas fa-chevron-up"></i></a>
</div>
<!-- Звонок-->
<div class="modal" style="display: none;" id="zvonok">
    <div>
        <p class="title" align="center">Заказ обратного звонка</p>
        <p align="center">Заполните форму ниже и представитель нашей компании свяжется с вами в ближайшее время</p>
        <form>
            <p>
                <input type="tel" id="phone3" placeholder="Номер телефона"/>
            </p>
            <p>
                <input type="submit" value="Перезвоните мне"/>
            </p>
        </form>
    </div>
</div>
<!-- Mobile nav-->
<div id="mainmenu">
    <ul>
        <li><a href="{{route('index')}}">Главная</a></li>
        <li><a href="{{route('portfolio')}}">О компании</a></li>
        <li><a href="{{route('services')}}">Услуги</a></li>
        <li><a href="{{route('services')}}">Каталог</a></li>
        <li><a href="{{route('contacts')}}">Контакты</a></li>
    </ul>
</div>
<div id="sidebarmenu">
    <div id="panel-mall">
        <p class="title">Молы
        <ul>
            @foreach(\App\Models\Malls::all()->take(5) as $item)
                <li><a href="{{route('single-mall', $item->slug)}}">{{$item->title_ru}}</a></li>
            @endforeach
        </ul>
        </p>
    </div>
    {{--<div id="panel-place">--}}
        {{--<p class="title">Рекламные места--}}
        {{--<ul>--}}
            {{--<li><a href="#">Лайтбоксы в паркингах</a></li>--}}
            {{--<li><a href="#">Колонны в паркингах</a></li>--}}
            {{--<li><a href="#">Пилларсы 4-х сторонние</a></li>--}}
            {{--<li><a href="#">Реклама в W/C</a></li>--}}
            {{--<li><a href="#">Рекламные стенды</a></li>--}}
            {{--<li><a href="#">Лайтбоксы</a></li>--}}
            {{--<li><a href="#">Реклама на бренд волл</a></li>--}}
            {{--<li><a href="#">Подвесная реклама</a></li>--}}
            {{--<li><a href="#">Реклама на мониторах</a></li>--}}
            {{--<li><a href="#">Брендирование лифтов</a></li>--}}
            {{--<li><a href="#">Брендирование эскалаторов</a></li>--}}
            {{--<li><a href="#">Фасадные окна</a></li>--}}
            {{--<li><a href="#">Реклама под потолком </a></li>--}}
            {{--<li><a href="#">Вращающиеся двери</a></li>--}}
        {{--</ul>--}}
        {{--</p>--}}
    {{--</div>--}}
</div>
<!--JavaScript-->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>