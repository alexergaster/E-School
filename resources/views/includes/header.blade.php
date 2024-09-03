<div class="container">
    <div class="header__body">
        <div class="header__logo">
            <a href="/">
                <img src="{{ asset('images/misc/main_logo.png') }}" alt="Логотип школи"/>
            </a>
        </div>
        <div class="header__nav">
            <li class="nav__item">
                <a href="{{ route('programs.index') }}"
                   class="hover-underline-animation {{ request()->routeIs('programs.index', 'programs.show')  ? 'active__page' : '' }}">Програми</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('staff.index') }}"
                   class="hover-underline-animation {{ request()->routeIs('staff.index') ? 'active__page': '' }}">Команда</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('price.index') }}"
                   class="hover-underline-animation {{ request()->routeIs('price.index') ? 'active__page': '' }}">Ціни
                    та правила</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('about.index') }}"
                   class="hover-underline-animation {{ request()->routeIs('about.index') ? 'active__page': '' }}">Про
                    нас</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('gallery.index') }}"
                   class="hover-underline-animation {{ request()->routeIs('gallery.index') ? 'active__page': '' }}">Галерея</a>
            </li>
        </div>
        <div class="header__cabinet">

            @guest('teacher')
                @guest('parent')
                    <a href="/" class="header__button button">
                        <span>Увійти</span>
                        <img src="{{ asset('images/misc/arrow_right.svg') }}" alt=""/>
                    </a>
                @endguest
            @endguest

            @auth('teacher')
                <a href="" class="account"><img src="{{ asset('images/misc/t.png') }}" alt=""></a>
                <a href="{{ route('teacher.logout') }}" class="button table__button">
                    <span>Вийти</span>
                </a>
            @endauth

{{--            @auth('parent')--}}
{{--                <a href="" class="account"><img src="{{ asset('images/misc/t.png') }}" alt=""></a>--}}
{{--                <a href="{{ route('parent.logout') }}" class="button table__button">--}}
{{--                    <span>Вийти</span>--}}
{{--                </a>--}}
{{--            @endauth--}}
            <div class="button__menu"><span></span></div>
        </div>
    </div>
</div>

@include('includes.auth')

<script>
    if (document.querySelector(".button__menu")) {
        const buttonMenu = document.querySelector(".button__menu");

        buttonMenu.addEventListener("click", () => {
            openOrCloseMenu(buttonMenu);
        });

        function openOrCloseMenu(buttonMenu) {
            const menu = document.querySelector(".header__nav");
            menu.classList.toggle("active");
            buttonMenu.classList.toggle("button__menu-active");
            document.body.classList.toggle("menu__active");
        }
    }

    if (
        document.querySelector(".popup__auth") &&
        document.querySelector(".header__button")
    ) {
        const popup = document.querySelector(".popup__auth");
        const openButtonAuth = document.querySelector(".header__button");
        const popupAuthCloses = [
            document.querySelector(".auth__field"),
            document.querySelector(".auth__close"),
        ];

        const buttonsPopupAuth = [openButtonAuth, ...popupAuthCloses];

        buttonsPopupAuth.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                if (popup.classList.contains('_open')) {
                    document.body.classList.remove("menu__active");
                    popup.classList.remove("_open");
                } else {
                    document.body.classList.add("menu__active");
                    popup.classList.add("_open");
                }

            });
        });
    }
</script>
