@extends('layout2')

@section('content')

<style>
.contacts-block-icon{
    margin-top: 50px;
    margin-bottom: 50px;
}

.contacts-block-icon img {
    max-width: 30px;
}

h2 {
    margin-top: 50px;
}

</style>

    <h2>Контакты</h2>

    <div class="contacts-block-icon">
        <div class="contacts-block-icon-img">
            <img src="{{Vite::asset('resources/svg/map.svg')}}" alt="location">
            <div class="contacts-block-icon-txt">
                <p>г. Новороссийск, ул. Губернского, 25</p> 
            </div>
        </div>
        <div class="contacts-block-icon-img">
            <img src="{{Vite::asset('resources/svg/clock.svg')}}" alt="clock">
            <div class="contacts-block-icon-txt">
                <p>ПН-ПТ: 09:00-18:00 СБ-ВС: Выходной</p> 
            </div>
        </div>
        <div class="contacts-block-icon-img">
            <img src="{{Vite::asset('resources/svg/mail.svg')}}" alt="mail">
            <div class="contacts-block-icon-txt">
                <p>info@uslugidon.ru</p> 
            </div>
        </div>
        <div class="contacts-block-icon-img">
            <img src="{{Vite::asset('resources/svg/telephone.svg')}}" alt="telephone">
            <div class="contacts-block-icon-txt">
                <a href="tel:+78633339750">8 (863) 333-97-50</a>
            </div>
        </div>
    </div>
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>

        {{-- <p>
            <i class="me-2 bi bi-telephone text-warning"></i>
            <a href="https://wa.me/+31641711191" target="_blank" class="btn btn-outline-black px-1"><i class="bi bi-whatsapp green"></i></a>
            <a href="tel:+31 641 7111 91" target="_blank" class="btn btn-sm btn-link me-1 text-info fs-5 fw-bold text-decoration-none lh-1">+31 641 7111 91</a>
            <span class="text-secondary text-nowrap">
                <img src="{{ Vite::asset('resources/images/gb.png') }}" alt="" class="rect20 rounded-circle me-1">
                <img src="{{ Vite::asset('resources/images/lt.png') }}" alt="" class="rect20 rounded-circle me-1">
                <img src="{{ Vite::asset('resources/images/ru.png') }}" alt="" class="rect20 rounded-circle me-1">
            </span>
        </p>

        <p>
            <i class="me-2 bi bi-telephone text-warning"></i>
            <a href="https://wa.me/+31641711193" target="_blank" class="btn btn-outline-black px-1"><i class="bi bi-whatsapp green"></i></a>
            <a href="tel:+31 641 7111 93" target="_blank" class="btn btn-sm btn-link me-1 text-info fs-5 fw-bold text-decoration-none lh-1"> +31 641 7111 93</a>
            <span class="text-secondary text-nowrap">
                <img src="https://cdn.exa.icu/images/flags/ro.png" alt="" class="rect20 rounded-circle me-1">
                <img src="https://cdn.exa.icu/images/flags/ru.png" alt="" class="rect20 rounded-circle me-1">
            </span>
        </p>

        <p><i class="me-1 bi bi-facebook text-warning"></i><a href="https://www.facebook.com/wbcentrum" target="_blank" class="btn btn-link text-warning">https://www.facebook.com/wbcentrum</a></p>
        <p><i class="me-1 bi bi-envelope-open text-warning"></i><a href="mailto:wbcentrum@gmail.com" target="_blank" class="btn btn-link text-warning">wbcentrum@gmail.com</a></p>
        <p><i class="me-1 bi bi-geo-alt-fill text-warning"></i><a href="https://maps.app.goo.gl/iQgydWVGwEfYDiFd7" target="_blank" class="btn btn-link text-warning">Bredewater 26, Zoetermeer, NL</a></p>


        <p class="py-1"><i class="me-1 bi bi-buildings text-warning me-3"></i><span class="text-warning"><strong>WESTERBOUW BV</strong> (KvK: 90400313)</span></p>
        <p class="py-1"><i class="me-1 bi bi-bank text-warning me-3"></i><span class="text-warning">NL 49 INGB 0004933043</span></p> --}}

@endsection
