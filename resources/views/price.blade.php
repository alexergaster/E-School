@extends('layouts.master')

@section('content')
    <div class="main__price">
        <div class="container">
            <div class="price__subtitle subtitle">Ціни</div>
            <div class="price__title title">Найкращі ціни в місті Суми</div>
            <div class="price__text text">
                Дізнайтесь ціни*, кількість занять та рекомендований вік для
                кожної програми
            </div>
            <div class="price__specification">
                *Ціни вказані без урахування знижок
            </div>
            <table class="price__table">
                <thead>
                <tr>
                    <th>Назва курсу</th>
                    <th>Вік</th>
                    <th class="element">Кількість занять</th>
                    <th class="element">Тривалість заняття</th>
                    <th>Ціна абонименту</th>
                </tr>
                </thead>
                <tbody>
                @foreach($programs as $program)
                    <tr>
                        <td>{{ $program->name }}</td>
                        <td>{{ $program->recommended_age }}+</td>
                        <td class="element">{{ $program->number_lesson }}</td>
                        <td class="element">2 год.</td>
                        <td>{{ $program->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="main__rules">
        <div class="container">
            <div class="rules__subtitle subtitle">Правила та обов'язки</div>
            <div class="rules__title title">
                Наші та ваші права та обов'язки
            </div>
            <div class="rules__text text">
                <p>
                    Ми - школа програмування та електроніки E-School, зобов'язуємся
                    надавати вам наші послуги в полному об'ємі та обсязі
                    встановленою публічною афертою.
                </p>
                <p>
                    Ви - маєте вчасно сплачувати наші послуги. Ви та ваші діти мають
                    дотримуватись правил безпеки роботи та життєдіялності під час
                    відвування уроків.
                </p>
            </div>
        </div>
    </div>

    <div class="main__questions">
        <div class="container">
            <div class="questions__subtitle subtitle questions__price">
                Питання
            </div>
            <div class="questions__title title questions__price">
                Є питання - Пояснимо!
            </div>
            <div class="questions__text text questions__price">
                Відповіді на питання, які нам задають частіше всього
            </div>
            <div class="questions__items">
                <div class="questions__item">
                    <div class="questions__label subtitle">
                        Де саме прописані ваші та наші права і обов'язки?
                    </div>
                    <div class="questions__body">
                        Наші обов'язки прописані в <a href="">публічній аферті</a>. В
                        ній також прописані й ваші права та обов'язки як батьків та
                        права і обов'язки вашої дитиини.
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__label subtitle">
                        Які знижки можуть діяти на ціну курсу?
                    </div>
                    <div class="questions__body">
                        Знижки діють за кожен рік, який ви з нами.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/questions.js') }}"></script>
    <script>
        if (document.querySelector(".price__table")) {
            const elements = document.querySelectorAll(".element");

            window.addEventListener("resize", () => {
                if (window.innerWidth <= 510) {
                    elements.forEach((e) => {
                        e.classList.add("_hidden");
                    });
                } else {
                    elements.forEach((e) => {
                        e.classList.remove("_hidden");
                    });
                }
            });
        }
    </script>
@endsection


