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
                   class="hover-underline-animation {{ request()->routeIs('about.index') ? 'active__page': '' }}">Про нас</a>
            </li>
            <li class="nav__item">
                <a href="{{ route('gallery.index') }}" class="hover-underline-animation {{ request()->routeIs('gallery.index') ? 'active__page': '' }}">Галерея</a>
            </li>
        </div>
        <div class="header__cabinet">
            {{--        <?php--}}
            {{--        if(isset($_SESSION["teacher_auth_id"])){--}}
            {{--            ?>--}}
            {{--        <form action="./index.php" method="POST">--}}
            {{--            <button class="button button__exit"--}}
            {{--                    name="user_exit" value="<?php echo $_SESSION["teacher_auth_id"] ?>">--}}
            {{--                <img src="../img/misc/arrow_right.svg" alt="" class="exit" /> <span>Вийти</span>--}}
            {{--            </button>--}}
            {{--        </form>--}}

            {{--            <?php--}}
            {{--            echo '<a href="./personal_office/teacher.php?teacher_id='. $_SESSION["teacher_auth_id"] .'" class="account"><img src="./img/misc/t.png" alt=""></a>';--}}
            {{--        }else if(isset($_COOKIE["user_auth_id"])){--}}
            {{--            ?>--}}
            {{--        <form action="./index.php" method="POST">--}}
            {{--            <button class="button button__exit"--}}
            {{--                    name="user_exit" value="<?php echo $_COOKIE["user_auth_id"] ?>">--}}
            {{--                <img src="../img/misc/arrow_right.svg" alt="" class="exit" /> <span>Вийти</span>--}}
            {{--            </button>--}}
            {{--        </form>--}}
            {{--            <?php--}}
            {{--            echo '<a href="./personal_office/parrent.php?id_user='. $_COOKIE["user_auth_id"] .'" class="account"><img src="./img/misc/t.png" alt=""></a>';--}}
            {{--        } else{--}}
            {{--            echo '--}}
            {{--                        <a href="/" class="header__button button">--}}
            {{--                          <span>Увійти</span>--}}
            {{--                          <img src="./img/misc/arrow_right.svg" alt=""/>--}}
            {{--                        </a>--}}
            {{--                  ';--}}
            {{--        }--}}
            {{--        ?>--}}
            <div class="button__menu"><span></span></div>
        </div>
    </div>
</div>
