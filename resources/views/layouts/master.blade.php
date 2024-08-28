<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bondarenko Oleksandr"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/misc/logo.png') }}" type="image/x-icon">
    @stack('style')
    <title>@yield('title', 'E-School')</title>
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
        <img src="{{ asset('images/misc/arrow-link.svg') }}" alt="" />
    </div>
</div>
</body>

<script>
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
            html.scrollTo({ top: 0, behavior: "smooth" });
        });
    }
</script>
</html>
