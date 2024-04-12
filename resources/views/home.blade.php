@extends('layout2')

@section('content')

<section class="first-screen"> 
    <div class="fs-content">
        <div class="fs-content-block wrap">
            <div class="fs-block-left">
                 <h1 class="fs-title">Бухгалтерские услуги</h1>
                 <div class="wrap_flex">
                    <div>
                        <p class="fs-subtitle">Индивидуальный подход к каждому клиенту</p>
                        <p class="fs-subtitle">Комплексное ведение бухгалтерии: от учёта до отчётности</p>
                        <p class="fs-subtitle">Своевременное информирование о всех изменениях в законодательстве</p>
                    </div>
                    <div>
                        <p class="fs-subtitle">Конфиденциальность и надёжность в обработке ваших данных</p>
                        <p class="fs-subtitle">Экономию вашего времени благодаря оптимизации процессов</p>
                    </div>
                </div>
            </div>
            
            <a href="#contacts" class="link-button">Стать клиентом</a>
        </div>
    </div>
</section> 

<section class="uslugi-wrap">
    
    <div class="textbloc1 wrap">
        <h3 style="font-weight: bold; font-size: 120%; margin-bottom: 15px">Облегчаем ваш бизнес — с нами бухгалтерия становится простой и эффективной!</h3>
        <b><i>Primula Advies</i></b> ваш надёжный партнёр в области бухгалтерского учёта и финансового консультирования. Мы заботимся о вашем успехе, предоставляя качественные и профессиональные услуги по доступным ценам.
        Наши квалифицированные бухгалтеры и финансовые консультанты обладают глубокими знаниями и большим опытом работы в различных отраслях. Мы стремимся к тому, чтобы ваша бухгалтерия была полностью организованной, точной и соответствовала всем требованиям законодательства Нидерландов.
        Независимо от размера вашего бизнеса, мы готовы помочь вам достичь финансового успеха. Доверьте нам свою бухгалтерию, и вы сможете сосредоточиться на развитии вашего бизнеса, а не на ведении бумажной работы.
Выберите <b><i>Primula Advies</i></b>  — ваш надёжный партнёр в мире бухгалтерии и финансов! Вместе мы создаем безопасное и перспективное будущее!
    </div>
    
    <div class="uslugi-name" id="uslugi">Наши услуги</div>
    <div class="uslugi-block wrap">
        
        <div class="uslugi-block-item">     
            <div class="uslugi-block-txt">
                <p class="uslugi-block-h">Ведение бухгалтерского учета</p>
                <p class="uslugi-block-p">Проведение первичной документации, подготовка и оплата платежных поручений, отвечаем на требования налоговой и других контролирующих органов.</p>
            </div>
        </div>
        <div class="uslugi-block-item">
            <div class="uslugi-block-txt">
                <p class="uslugi-block-h">Кадровый учет и расчет зарплаты</p>
                <p class="uslugi-block-p">Ведение кадрового делопроизводства, расчет отпусков, больничных, пособий, начисление заработной платы и взносов, ведение электронных книжек.</p>
            </div>
        </div>
        <div class="uslugi-block-item">
            <div class="uslugi-block-txt">
                <p class="uslugi-block-h">Подготовка и сдача отчетности</p>
                <p class="uslugi-block-p">Формирование, сдача налоговой и бухгалтерской отчетности, расчет налогов и взносов, прогнозирование и оптимизация налогов, проведение сверок</p>
            </div>
        </div>
    </div>

    <div class="uslugi-dop wrap">
        <div class="uslugi-dop-txt">
            <p class="uslugi-block-hh">Мы обслуживаем фирмы с разными видами деятельности:</p>
            <p class="uslugi-block-pp">Строительство / Производство</p>
            <p class="uslugi-block-pp">Торговля / Услуги</p>
            <p class="uslugi-block-pp">Импорт / Экспорт / ВЭД</p>
        </div>
    </div>

    
</section>


<section class="contacts-wrap" id="contacts">
  <div class="contacts-name">Стать клиентом</div>
    <div class="contacts-block wrap">

        <div class="contacts-block-Form" id="contact_form">
            @include('form')
        </div>

    </div>
</section>

@endsection