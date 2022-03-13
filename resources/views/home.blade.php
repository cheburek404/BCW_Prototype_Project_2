@extends('layouts.app')

@section('content')
<div class="head">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <div class="logo">
                <a href="{{ asset('/') }}"><img src="favicon/LogoFootprint.png"></a>
            </div>
            <h4 class="logo_name d-inline-flex p-2 bd-highlight">Iz <br>Kaldyru</h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#">цены</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">контакты</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="phone">+77073751542</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="hero">
        <div class="container spacing">
            <h2 class="primary-title">Хотите себе персональный сайт?</h2>
            <h3>Закажите сайт у нас!</h3>
            <a href="mailto:azatbakyt8@gmail.com" class="btn">Заказать</a>
        </div>
    </header>
</div>


{{--<div class="container-fluid">
    <div class="banner-slider">
        <a href="/"><img src="/img/back.jpg" class="banner1" style="border-radius:20px;" id="banner_1"></a>
        <a href="/"><img src="/img/993012.jpg" class="banner2" style="border-radius:20px;" id="banner_2"></a>
    </div>
</div>--}}


<header>
    <section class="our-product">
        <div class="container alert row">
            <h1 class="section-title">Какие сайты мы создаем?</h1>
            <article class="product spacing card">
                <h1 class="product_name">Сайт-визитка</h1>
                <p class="product_title">Многостраничный сайт</p>
                <hr>
                <h3 class="product_price">30 000 ₸</h3>
                <a href="#" class="btn">Заказать</a>
                <p class="product_description">Веб-страница, содержащий основную информацию об организации, частном лице, компании, товарах или услугах.</p>
            </article>

            <article class="product spacing card">
                <h1 class="product_name">Лендинг</h1>
                <p class="product_title">Одностраничный сайт</p>
                <hr>
                <h3 class="product_price">45 000 ₸</h3>
                <a href="#" class="btn">Заказать</a>
                <p class="product_description">Как правило состоящий из одной веб-страниц и используется для усиления эффективности рекламы, увеличения аудитории.</p>
            </article>
        </div>
    </section>
</header>

<main>
    <section class="our-guarantee">
        <div class="container-fluid alert row">
            <h1 class="section-title">Чего вы можете ожидать, когда мы будем работать вместе?</h1>
            <article class="guarantee card">
                <h3 class="guarantee_name">Blablabla</h3>
                <p class="guarantee_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur ea impedit iure iusto laborum nostrum officia sapiente!</p>
            </article>

            <article class="guarantee card">
                <h3 class="guarantee_name">Blablabla</h3>
                <p class="guarantee_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur ea impedit iure iusto laborum nostrum officia sapiente!</p>
            </article>

            <article class="guarantee card">
                <h3 class="guarantee_name">Blablabla</h3>
                <p class="guarantee_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur ea impedit iure iusto laborum nostrum officia sapiente!</p>
            </article>

            <article class="guarantee card">
                <h3 class="guarantee_name">Blablabla</h3>
                <p class="guarantee_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur ea impedit iure iusto laborum nostrum officia sapiente!</p>
            </article>
            <a href="#" class="btn">Получить консультацию</a>
        </div>
    </section>
</main>

<div>
    <div class="features-block testimonial testimonial-2">
        <div class="testimonial__blurb">
            <p>Сайт-визитка и лендинг, у них практически всегда информация подаётся в сжатой форме, чтобы донести до потенциального клиента только то, что должно побудить его к действию: купить, оставить номер телефона и так далее.</p>
        </div>
    </div>
</div>

{{--<div>
    <section class="why_we">
        <div class="container-fluid alert row">
            <h1 class="section-title">Почему мы?</h1>
            <article class="why card">
                <img class="why_img" src="img/ill/Coins_Monochromatic.svg" alt="coin">
                <h4 class="why_name">Адекватные цены</h4>
                <p class="why_description">Цены на создание сайтов, всегда варьируются, в зависимости, от сложности дизайна, программного функционала и количества загруженной на сайт информации. Однако, В нашей компании действуют очень доступные цены.</p>
                <a href="#" class="btn">Подробнее</a>
            </article>

            <article class="why card">
                <img class="why_img" src="img/ill/Security_Monochromatic.svg" alt="security">
                <h4 class="why_name">Безопасность</h4>
                <p class="why_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur ea impedit iure iusto laborum nostrum officia sapiente!</p>
                <a href="#" class="btn">Подробнее</a>
            </article>

            <article class="why card">
                <img class="why_img" src="img/ill/Network%20_Monochromatic.svg" alt="adaptive">
                <h4 class="why_name">Адаптивность</h4>
                <p class="why_description">Адаптивный сайт — дизайн веб-страниц, обеспечивающий правильное отображение сайта на различных устройствах, и динамически подстраивающийся под заданные размеры окна браузера.</p>
                <a href="#" class="btn">Подробнее</a>
            </article>

            <article class="why card">
                <img class="why_img" src="img/ill/Team%20work_Monochromatic.svg" alt="team_work">
                <h4 class="why_name">Особый подход</h4>
                <p class="why_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur ea impedit iure iusto laborum nostrum officia sapiente!</p>
                <a href="#" class="btn">Подробнее</a>
            </article>
        </div>
    </section>
</div>--}}

@include('layouts.feedback')

@include('layouts.footer')

@endsection



