@extends('layouts.app')

@section('content')
<div class="head">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <div class="logo">
                <a href="home.html"><img src="favicon/LogoFootprint.png"></a>
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

<div>
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
</div>

<div class="sendForm container-fluid">
    <h1 class="section-title">Давайте обсудим про ваш будущий сайт</h1>
    <div class="alert">
        <form action="sender.php" method="post">
            <label class="inputForm"><input type="text" class="name form-control" name="name" placeholder="Ваше имя *" required></label>
            <label class="inputForm"><input type="text" class="phone form-control" name="phone" placeholder="Ваш телефон *"></label>
            <label class="inputForm"><input type="email" class="form-control" name="email" placeholder="Ваш E-mail *" required></label>
            <button type="button" class="send-form btn btn-primary mb-2">Отправить форму</button>
            <div class="status"></div>
        </form>
    </div>
</div>

<footer class="container-fluid">
    <div class="end-webList alert row">
        <p class="footLogo"><img src="favicon/logotype-200x200.png"></p>
        <ul class="social-icons">
            <li><a class="social-icon-whatsapp" href="https://wa.me/77073751542?text=Здравствуйте,%20я%20заинтересован(a)%20в%20покупке%20ваших%20услуг!" target="_blank" rel="noopener"></a></li>
            <li><a class="social-icon-phone" href="tel:+77073751542" rel="noopener"></a></li>
            <li><a class="social-icon-envelope" href="mailto:azatbakyt8@gmail.com" rel="noopener"></a></li>
            <li><a class="social-icon-github" href="https://github.com/cheburek404" target="_blank" rel="noopener"></a></li>
        </ul>
    </div>
</footer>

<script src="js/jquery.validate.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
