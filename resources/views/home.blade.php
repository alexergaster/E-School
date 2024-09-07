@extends('layouts.master')

@section('title', 'E-School - Головна сторінка')

@section('content')
    <div class="main__welcome">
        <div class="container">
            <video class="welcome__video" autoplay loop muted playsinline>
                <source src="{{ asset('images/misc/video.mp4') }}"/>
            </video>
            <div class="welcome__body">
                <div class="welcome__subtitle subtitle">Ласкаво просимо</div>
                <div class="welcome__title title">
                    Нас обрали 1+ тисяч Учнів
                </div>
                <div class="welcome__text text">
                    Знайдіть відповідного викладача серед понад 20 викладачів
                </div>
                <div class="welcome__buttons">
                    <a href="/" class="button bouncy master_class">
                        На майстер-клас
                    </a>
                    <a
                        href="{{ route('about.index') }}"
                        class="button button-nude bouncy"
                        style="animation-delay: 0.12s"
                    >
                        Більше про школу
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main__advantages">
        <div class="container">
            <div class="advantages__info">
                <div class="advantages__subtitle subtitle">
                    Переваги нашої школи
                </div>
                <div class="advantages__title title">Отримайте якісну освіту</div>
                <div class="advantages__text text">
                    Досліджуй світ коду та роботів разом з E-school: де мрії стають
                    технологічною реальністю!
                </div>
            </div>
            <div class="advantages__cards">
                <div class="advantages__card">
                    <div class="card__front">
                        <div class="advantages__image">
                            <img src="{{ asset('images/misc/Різноманіття-програм-1.png') }}" alt=""/>
                        </div>
                        <div class="advantages__label">Різноманіття програм</div>
                        <div class="advantages__line"></div>
                        <div class="advantages__text">
                            Відкрийте безмежні можливості в різноманітті програм
                            E-school!
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="back-content center">
                            <h2>E-School</h2>
                            <div class="advantages__line"></div>
                            <span
                            >Наша школа пропонує велику кількість різноманітних
                      програм для різного віку вашої дитини. Починаючі від
                      робототехніки та електроніки завершуючи програмуваням та
                      вебдизайном!</span
                            >
                        </div>
                    </div>
                </div>
                <div class="advantages__card">
                    <div class="card__front">
                        <div class="advantages__image">
                            <img src="{{ asset('images/misc/Нестандартне_та_креативне_мислення-1.png') }}" alt=""/>
                        </div>
                        <div class="advantages__label">Нестандартне та креативне мислення</div>
                        <div class="advantages__line"></div>
                        <div class="advantages__text">
                            Завдяки особливим програмам E-school!
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="back-content center">
                            <h2>E-School</h2>
                            <div class="advantages__line"></div>
                            <span>Нестандартне та креативне мислення в E-school розвиває у учнів здатність знаходити інноваційні рішення та підходи до вирішення складних задач у сучасному світі.</span>
                        </div>
                    </div>
                </div>
                <div class="advantages__card">
                    <div class="card__front">
                        <div class="advantages__image">
                            <img src="{{ asset('images/misc/Графік-1.png') }}" alt=""/>
                        </div>
                        <div class="advantages__label">Зручний графік</div>
                        <div class="advantages__line"></div>
                        <div class="advantages__text">
                            Пропонуємо зручний та гнучкий графік занять та відпрацювань.
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="back-content center">
                            <h2>E-School</h2>
                            <div class="advantages__line"></div>
                            <span>Зручний графік уроків в E-school дозволяє учням ефективно поєднувати основне навчання та курсами, забезпечуючи гнучкість у навчані та індивідуальний підхід до навчання.</span>
                        </div>
                    </div>
                </div>
                <div class="advantages__card">
                    <div class="card__front">
                        <div class="advantages__image">
                            <img src="{{ asset('images/misc/Різноманіття-програм-1.png') }}" alt=""/>
                        </div>
                        <div class="advantages__label">Урок в укриті під час тривоги</div>
                        <div class="advantages__line"></div>
                        <div class="advantages__text">Безпечне навчання незважаючі ні на що!</div>
                    </div>
                    <div class="card__back">
                        <div class="back-content center">
                            <h2>E-School</h2>
                            <div class="advantages__line"></div>
                            <span>Уроки під час повітряної тривоги в E-school проходять в укритті СумДУ, забезпечуючи безперервність навчального процесу та безпеку студентів.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main__curses">
        <div class="container">
            <div class="curses__subtitle subtitle">Програми</div>
            <div class="curses__title title">Кожен учень важливий</div>
            <div class="curses__text text">
                Курси, які створені для розвитку здібностей у дітей та підлітків
                логічного та технічного мислення, які допоможуть досягти успіху в
                житті, ставши провідними фахівцями, творцями інноваційних
                продуктів та керівниками своїх підприємств.
            </div>
            @if($programs->count())
                <div class="curses__lists">
                    @each('includes.program', $programs->take(3), 'program')
                </div>
                <div class="curses__button">
                    <a href="{{ route('programs.index') }}" class="button bouncy">Переглянути усі курси</a>
                </div>
            @else
                <h1>На жаль курсів поки що немає(</h1>
            @endif

        </div>
    </div>

    <div class="main__performance">
        <div class="container">
            <div class="performance__body">
                <div class="performance__image">
                    <img src="{{ asset('images/misc/thumb-concept.png') }}" alt=""/>
                </div>
                <div class="performance__info">
                    <div class="performance__subtitle subtitle">Майстер клас</div>
                    <div class="performance__title title">
                        Не знаєте що сподобається вашій дитині?
                    </div>
                    <div class="performance__text text">
                        Реєструйтесь на <span>безкоштовний</span> майстер клас! На
                        ньому ви та ваша дитина дізнається все необхідне про майбутнє
                        навчання, познайомитесь з викладачами та з іншими учнями.
                        Отимаєте досвід з обраної програми та зможете обрати те, що
                        <span>підходить саме для вас!</span>
                    </div>
                    <div class="performance__button">
                        <a
                            href="/"
                            class="button bouncy master_class"
                            style="animation-delay: 0.5s"
                        >
                            Зраєстуватись на майстер клас
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($parents->count())
        <div class="main__reviews">
            <div class="container">
                <div class="reviews__subtitle subtitle">Вігуки</div>
                <div class="reviews__titile title">Ваші думки про нас</div>
                <div class="reviews__text text">
                    Ми з любов'ю зберігаємо усе, що ви думаєте про нас, нашу школу та
                    наші курси, щоб поділитись цим з усіма
                </div>
                <div class="reviews__body">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($parents as $parent)
                                <div class="swiper-slide">
                                    <div
                                        class="slider__title cours__title">{{ $parent->name }}</div>
                                    <div class="slider__text cours__text">{{ $parent->review }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('includes.mc', $programs)
@endsection


