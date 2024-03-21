<!DOCTYPE html>
<!-- saved from url=(0028)https://wbcentrum.nl/?lng=ru -->
<html lang="ru" class=" FB_FW_ext KeyGen">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Добро пожаловать на WBCentrum.nl</title>
    <meta name="description" content="Центр обучения в Нидерландах. VCA курсы">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <script src="{{asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.mask.min.js') }}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/js/anime.min.js') }}"></script>


@vite( [
    'resources/css/app.css',
    'resources/css/bootstrap-icons.css',
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
                    <a href="https://wbcentrum.nl/?lng=ru&amp;view=home">
                        <img class="img-sh-white" style="border: 1px solid white; width: 256px; height: auto; border-radius:50%;" src="{{ Vite::asset('resources/images/wbc_512.png') }}" alt="WB Centrum">
                    </a>
                </div>
                <div><div class="w-100 my-2">
    <a href="{{ route('home', 'en') }}" class="butt-lng butt-en btn"><img src="{{ Vite::asset('resources/images/gb.png') }}" alt="" class="rect36 rounded-circle"></a>
    <a href="{{ route('home', 'ro') }}" class="butt-lng butt-ro btn"><img src="{{ Vite::asset('resources/images/ro.png') }}" alt="" class="rect36 rounded-circle"></a>
    <a href="{{ route('home', 'ru') }}" class="butt-lng butt-ru btn "><img src="{{ Vite::asset('resources/images/ru.png') }}" alt="" class="rect36 rounded-circle"></a>
    <a href="{{ route('home', 'lt') }}" class="butt-lng butt-lt btn "><img src="{{ Vite::asset('resources/images/lt.png') }}" alt="" class="rect36 rounded-circle"></a>
</div>
</div>
                <span class="fs-5 text-white text-uppercase font2 wide-3">{{ __('Центр обучения в Нидерландах') }} </span>
                <div class="border-bottom w-75 mx-auto">&nbsp;</div>
                <div><div class="w-100 my-2">
    <a href="https://wbcentrum.nl/?lng=ru&amp;view=home" class="m-2 butt-nav-home btn btn-sm btn-primary disabled border-0"><i class="bi bi-house mx-1"></i></a>
    <a href="https://wbcentrum.nl/?lng=ru&amp;view=vca-basis" class="m-2 butt-nav-vca-basis btn btn-sm btn-primary"><i class="bi bi-book me-2"></i>VCA курсы на русском</a>
    <a href="https://wbcentrum.nl/?lng=ru&amp;view=contacts" class="m-2 butt-nav-contacts btn btn-sm btn-primary"><i class="bi bi-info-circle me-2"></i>Контакты</a>


</div>
<script>$('.butt-nav-home').addClass("disabled border-0");</script></div>
                <div class="my-3">
    <div class="text-center __reader_view_article_wrap_8996320432305291__">
        <div class="text-center py-3">
            <h3 class="text-warning"><i class="bi bi-balloon me-3"></i>Добро пожаловать в центр обучения</h3>
            <h1>WB Centrum</h1>
            <p class="text-info">от компании Westerbouw B.V.</p>

            <img src="./Files/wbcentrum.jpeg" alt="" style="max-width: 100%; height: auto" class="my-3">
        </div>
        <div class="text-start">
            <p class="fs-5 text-warning"><i class="bi bi-shield-check me-2"></i><span>Здесь мы заботимся о вашем профессиональном росте</span></p>
            <p>Наш центр предлагает курсы <strong>VCA-basis на русском языке</strong>, которые помогут вам укрепить ваши навыки и получить важные знания в области безопасности на рабочем месте.</p>
            <p>Мы посвятили себя обучению и сертификации, чтобы обеспечить ваш успех и безопасность на рабочем месте. Наши опытные инструкторы и современные методики обучения гарантируют, что вы будете готовы к вызовам, которые предстоят вам в вашей профессии.</p>

            <p class="fs-5 text-warning"><i class="bi bi-check-circle me-2"></i><span>Присоединяйтесь к нам сегодня</span></p>
            <p>Начните ваше путешествие к безопасности и профессиональному росту сегодня. Узнайте больше о наших курсах на русском языке и регистрируйтесь, чтобы сделать шаг вперед к успешной и безопасной карьере.</p>
            <p>Вместе мы создаем безопасное и перспективное будущее!</p>
        </div>

        <div class="text-center py-4">
            <a href="https://wbcentrum.nl/?lng=ru&amp;view=vca-basis#gotoform" class="btn btn-primary">Записаться на курс сегодня</a>
        </div>


    </div>
</div>            </div>
        </div>

    </div>




</body></html>
