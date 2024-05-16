<!DOCTYPE html>
<html lang="ru" class=" FB_FW_ext KeyGen">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" type="image/svg+xml" href="https://uslugidon.ru/img/favicon.svg"> --}}
    <title>Бухгалтерские услуги  — Аутсорсинг бухгалтерских услуг</title>
    <meta name="description" content="Оказываем ведение бухгалтерского учета для ИП и ООО, профессиональные бухгалтерские услуги Новороссийск под ключ, удалённый аутсорсинг бухгалтерских услуг">
    <meta name="keywords" content="аутсорсинг,бухгалтерские услуги новороссийск,бух услуги новороссийск,аутсорсинг бухгалтерских услуг,бухгалтерский аутсорсинг,услуги бухгалтера">
    <meta property="og:title" content="Бухгалтерские услуги Новороссийск — Аутсорсинг бухгалтерских услуг">
    <meta property="og:description" content="Оказываем ведение бухгалтерского учета для ИП и ООО, профессиональные бухгалтерские услуги Новороссийск под ключ, удалённый аутсорсинг бухгалтерских услуг">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Аутсорсинговая компания - УслугиДон">  
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
    'resources/css/style2.css',
    'resources/css/normalize.css',

    'resources/js/app.js',
    'resources/js/base64.js',
    'resources/js/bootstrap.js',
    'resources/js/popper.js',
    'resources/js/utils.js',
    'resources/js/wins.js',
])

</head>

<body>
    <section class="header-wrap"> 
         <header class="wrap">
            <div class="header-top">
                <div class="header-to-logo">
                    <a href="{{route('home')}}">
                        <img src="{{ Vite::asset('resources/images/logo2.png')}}" width="100" height="108" alt="" class="logo">
                    </a>  
                </div>

                <div class="header-top-menu">
<ul class="menu"> 
                            <li><a href="{{route('home')}}" @if(Request::path() == '/') class="active"@endif>{{__('Главная')}}</a></li>
                            <li><a href="{{route('home')}}#contacts">{{__('Стать клиентом')}}</a></li>
                            <li><a href="{{ route('contacts') }}" @if(Request::path() == 'contacts') class="active"@endif>{{__('Контакты')}}</a></li>
                            <select id="select_language">
                                <option value="{{ route('lang', 'ru') }}" @if(Lang::locale()== 'ru') selected @endif>RU</option>
                                <option value="{{ route('lang', 'en') }}" @if(Lang::locale()== 'en') selected @endif>EN</option>
                                <option value="{{ route('lang', 'ro') }}" @if(Lang::locale()== 'ro') selected @endif>RO</option>
                                <option value="{{ route('lang', 'lt') }}" @if(Lang::locale()== 'lt') selected @endif>LT</option>
                            </select>
                    </ul>	

</div> 

                <div class="tel-block">
                    <a href="tel:+78633339750">8 (863) 333-97-50</a>
                </div>
            </div>
         </header>
    </section> 
    
    @yield('content')
      
   
    <section class="footer-wrap">
        <div class="footer-block wrap">
            <div class="footer-block-copyright">
                <p class="footer-txt-h">Primula Advies</p> 
                <p class="footer-txt">© 2024 Primula Advies</p>
                <p class="footer-txt">ИНН: 6168071676</p>
                <p class="footer-txt">ОГРН: 1146194001359</p> 
                <a class="footer-txt" href="{{route('policy')}}" target="_blank" rel="nofollow">Политика конфиденциальности</a>
            </div>

            <div class="footer-block-icon">
                <div class="footer-telefon">
                    <a href="tel:"></a>
                </div>
           <div class="soc-seti">
            <img src="{{ Vite::asset('resources/images/logo2.png')}}" width="100" height="108" alt="" class="logo">
                </div> 
            </div>
        </div>
    </section>
	
<script>

    $('#select_language').change(function(){
        location.href = $(this).val()
    })

</script>



</body></html>
{{-- ngrok http http://127.0.0.1:8000 --}}