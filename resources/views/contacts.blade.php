@extends('layout')

@section('content')
<div class="text-start">

        <p>
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
        <p class="py-1"><i class="me-1 bi bi-bank text-warning me-3"></i><span class="text-warning">NL 49 INGB 0004933043</span></p>

    </div>
@endsection
