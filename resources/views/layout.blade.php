<!DOCTYPE html>
<!-- saved from url=(0028)https://wbcentrum.nl/?lng=ru -->
<html lang="ru" class=" FB_FW_ext KeyGen">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Добро пожаловать на WBCentrum.nl</title>
    <meta name="description" content="Центр обучения в Нидерландах. VCA курсы">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <script src="{{asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.mask.min.js') }}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/js/anime.min.js') }}"></script>


@vite( [
    'resources/css/app.css',
    'resources/css/core.css',
    'resources/css/wins.css',

    'resources/js/app.js',
    'resources/js/base64.js',
    'resources/js/bootstrap.js',
    'resources/js/popper.js',
    'resources/js/utils.js',
    'resources/js/wins.js',
])

	<meta property="og:type" content="website">
	<meta property="og:site_name" content="wbcentrum.nl">
	<meta property="og:title" content="Добро пожаловать на WBCentrum.nl">
	<meta property="og:description" content="Центр обучения в Нидерландах. VCA курсы">
	<meta property="og:locale" content="ru_NL">
	<meta property="og:image" content="https://wbcentrum.nl/static/images/icons/og.png">

    <style>

        .font1 {font-family: 'Genos', monospace;}
        .font2 {font-family: 'Roboto', monospace;}
        .font3 {font-family: 'NotoSans', monospace;}
        .font4 {font-family: 'Nunito', monospace;}
        .font5 {font-family: 'Raleway', monospace;}
        .wide-1 {letter-spacing: 1px;}
        .wide-2 {letter-spacing: 2px;}
        .wide-3 {letter-spacing: 3px;}
        .wide-4 {letter-spacing: 4px;}
        .wide-6 {letter-spacing: 6px;}
        .wide-8 {letter-spacing: 8px;}
        .wide-10 {letter-spacing: 10px;}
        .wide-12 {letter-spacing: 12px;}

        .fs-7 { font-size: 0.9rem!important; }
        .fs-8 { font-size: 0.7rem!important; }
        .fs-9 { font-size: 0.5rem!important; }

        .logobg {color:  #174c4f;}

		.glare { background: url('/static/images/bgr/pageglare.png') top center no-repeat;}
		.glare1 { background: url('/static/images/bgr/pageglare1.png') top center no-repeat;}
		.glare2 { background: url('/static/images/bgr/glare-center.png') top center no-repeat;}
        .rect48 { width:48px; height:48px; }
        .rect36 { width:36px; height:36px; }
        .rect24 { width:24px; height:24px; }
        .rect20 { width:20px; height:20px; }


        html {
            height: 100%;
            font-family: 'NotoSans', monospace, sans-serif;
			background-color: #142239;
/*
            background: url('/static/images/bgr/tr-dots.png'), #142239;
			background-color: #142239;
            background-size: auto;
            background-repeat: repeat;
*/
            background-image: url("/static/images/bgr/bg-6.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }


        .img-sh-white {
            -webkit-filter: drop-shadow(0 0 12px #fff);
            filter: drop-shadow(0 0 12px #fff);
        }

        .green {color: Lime;}
        .bg-green {background-color: Lime;}

        /*a {text-decoration:none; color:Blue !important; font-weight:normal !important;}*/

    </style>

</head>
<body style="min-height:100%; margin:0 auto; max-width:800px; padding:0 0px;" class="text-white bg-primary bg-opacity-50">
    <div style="display:table; height:100%; width:100%;" class="px-3 bg-dark bg-opacity-75">

        <div style="display:table-row;height:100%;">
            <div style="display:table-cell; vertical-align:middle;height:100%; text-align: center;">
                <div class="py-4">
                    <a href="{{route('home', $locale ?? '')}}">
                        <img class="img-sh-white" style="border: 1px solid white; width: 256px; height: auto; border-radius:50%;" src="{{ Vite::asset('resources/images/wbc_512.png') }}" alt="WB Centrum">
                    </a>
                </div>
                <div><div class="w-100 my-2">
    <a href="{{ route('lang', 'en') }}" class="butt-lng butt-en btn"><img src="{{ Vite::asset('resources/images/gb.png') }}" alt="" class="rect36 rounded-circle"></a>
    <a href="{{ route('lang', 'ro') }}" class="butt-lng butt-ro btn"><img src="{{ Vite::asset('resources/images/ro.png') }}" alt="" class="rect36 rounded-circle"></a>
    <a href="{{ route('lang', 'ru') }}" class="butt-lng butt-ru btn "><img src="{{ Vite::asset('resources/images/ru.png') }}" alt="" class="rect36 rounded-circle"></a>
    <a href="{{ route('lang', 'lt') }}" class="butt-lng butt-lt btn "><img src="{{ Vite::asset('resources/images/lt.png') }}" alt="" class="rect36 rounded-circle"></a>
</div>
</div>
                <span class="fs-5 text-white text-uppercase font2 wide-3">{{ __('Центр обучения в Нидерландах') }} </span>
                <div class="border-bottom w-75 mx-auto">&nbsp;</div>
                <div><div class="w-100 my-2">
    <a href="{{ route('home') }}" class="m-2 butt-nav-home btn btn-sm btn-primary disabled border-0"><i class="bi bi-house mx-1"></i></a>
    <a href="{{route('form') }}" class="m-2 butt-nav-vca-basis btn btn-sm btn-primary"><i class="bi bi-book me-2"></i>{{__('Стать клиентом')}}</a>
    <a href="{{route('contacts')}}" class="m-2 butt-nav-contacts btn btn-sm btn-primary"><i class="bi bi-info-circle me-2"></i>{{__('Контакты')}}</a>


</div>
<script>$('.butt-nav-home').addClass("disabled border-0");</script></div>
       @yield('content')
    </div>
        </div>

    </div>


@stack('styles')
@stack('scripts')
</body></html>
