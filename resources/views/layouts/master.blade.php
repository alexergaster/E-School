<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bondarenko Oleksandr"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'E-School')</title>
    <meta name="description" content="@yield('description', 'Дитяча школа програмування у Сумах: курси веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв для дітей від 7 років. Запишіться зараз і дайте своїй дитині шанс розкрити потенціал у сучасних технологіях!')">
    <meta name="keywords" content="@yield('keywords', 'курси для дітей, курси Суми, веб-дизайн для дітей, курси програмування, Python для дітей, JavaScript для дітей, роботехніка, навчання електроніці, курси IT для дітей, розробка електронних пристроїв, Суми, навчання програмуванню')">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    <meta property="og:title" content="@yield('og_title', 'Курси для дітей у Сумах, від E-School')">
    <meta property="og:description" content="@yield('og_description', 'Курси для дітей від 7 років у Сумах: веб-дизайн, програмування на Python і JavaScript, роботехніка, розробка електронних пристроїв.')">
    <meta property="og:image" content="@yield('og_image', asset('storage/images/misc/logo.png'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/images/misc/logo.png') }}" type="image/x-icon">
    @stack('style')

</head>
<body>
<div class="wrapper">

    @include('includes.preloader')


    <header>
        @include('includes.header')
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
    <div class="link__top">
        <img src="{{ asset('storage/images/misc/arrow-link.svg') }}" alt=""/>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".swiper", {
        loop: true,
        autoHeight: true,

        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000,
        },
    });

    if (document.querySelector(".link__top")) {
        const BUTTON_VISIBLE_PIXEL = 300;

        const buttonToTop = document.querySelector(".link__top");

        addEventListener("scroll", () => {
            if (BUTTON_VISIBLE_PIXEL < window.scrollY) {
                buttonToTop.classList.add("_visible");
            } else {
                buttonToTop.classList.remove("_visible");
            }
        });

        buttonToTop.addEventListener("click", () => {
            const html = document.querySelector("html");
            html.scrollTo({top: 0, behavior: "smooth"});
        });
    }
</script>

</html>
