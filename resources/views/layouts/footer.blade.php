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
        <p class="copyright">© Copyright {{\Carbon\Carbon::now()->format('Y')}} - Max Group Plus - Все права защищены <br> <small>Created by SiteMaster.az</small></p>
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
        <p class="title">@lang('header.services')
        <ul>
            @foreach($services as $item)
                <li><a href="{{route('single-service', $item->slug)}}">{{$item->{'title_'.$lang} }}</a></li>
            @endforeach
        </ul>
        </p>
    </div>
</div>
<!--JavaScript-->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>