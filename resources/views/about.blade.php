@extends('layouts.master')

@section('title', 'E-School - Про школу')
@section('description', 'Дитяча школа програмування у Сумах – це простір для розвитку дітей у світі сучасних технологій. Ми пропонуємо курси з програмування, робототехніки, веб-дизайну та розробки електронних пристроїв для дітей від 7 років. Наше навчання допомагає дітям не тільки здобути технічні навички, а й розвивати критичне мислення та креативність.')
@section('keywords', 'дитяча школа програмування Суми, школа програмування для дітей від 7 років, навчання програмуванню в Сумах, школа IT для дітей, курси робототехніки для дітей Суми, сучасні технології для дітей, школа розробки електронних пристроїв')

@section('og_title', 'Курси для дітей у Сумах, від E-School - Про школу')
@section('og_description', 'Дитяча школа програмування у Сумах – це простір для розвитку дітей у світі сучасних технологій. Ми пропонуємо курси з програмування, робототехніки, веб-дизайну та розробки електронних пристроїв для дітей від 7 років. Наше навчання допомагає дітям не тільки здобути технічні навички, а й розвивати критичне мислення та креативність.')

@push('style')
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""
    />
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css"
    />
@endpush

@section('content')
    <div class="main__contacts">
        <div class="container">
            <div class="contacts__subtitle subtitle">Контакти</div>
            <div class="contacts__title title">Знайди нас будь де!</div>
            <div class="contacts__text text">
                Уроки проходят в аудиторія одного з найкращих університетів
                України - СумДУ, що забезпечує комфортні та сучасні умови.
            </div>
            <div class="contacts__body">
                <div class="contacts__map" id="map"></div>
                <div class="contacts__info">
                    <div class="footer__message">Будемо на зв'язку!</div>
                    <div class="footer__lists">
                        <li>
                            <a href="tel:380991612471">
                                <img src="{{ asset('images/misc/phone.svg') }}" alt=""/>
                                +38(099)-161-24-71
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/%D0%A1%D1%83%D0%BC%D1%81%D1%8C%D0%BA%D0%B8%D0%B9+%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%B2%D0%BD%D0%B8%D0%B9+%D1%83%D0%BD%D1%96%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82/@50.8922487,34.8410892,18z/data=!4m6!3m5!1s0x4128fe0120892805:0xb837b8752f41a97e!8m2!3d50.8922644!4d34.8418104!16s%2Fm%2F0bmc741?entry=ttu"
                               target="_blank">
                                <img src="{{ asset('images/misc/location.svg') }}" alt=""/>
                                вул. Римського-Корсакова 2, м.Cуми
                            </a>
                        </li>
                        <li>
                            <a href="mailto:ewoodplay@gmail.com">
                                <img src="{{ asset('images/misc/mail.svg') }}" alt=""/>
                                ewoodplay@gmail.com
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__about">
        <div class="container">
            <div class="performance__body">
                <!-- <div class="performance__image">
                  <img src="../img/misc/team.jpg" alt="" loading="lazy" />
                </div> -->
                <div class="performance__info" style="flex-basis: 100%;">
                    <div class="performance__subtitle subtitle">Про нас</div>
                    <div class="performance__title title">
                        Інформація про нашу школу
                    </div>
                    <div class="performance__text text">
                        <p>
                            Молода та дружна команда. Маємо великий досвід у проведенні
                            занять для дітей з робототехніки, електроніки та
                            програмування.
                        </p>
                        <p>
                            Кожен з наших викладачів не просто постійно працює в сфері
                            яку викладає, а живе цим. Маємо широкий досвід в розробці
                            електронних пристроїв, автоматизованих систем,
                            програмуванні, 3D друці та моделюванні. Ми на шляху
                            постійного розвитку над собою!
                        </p>
                    </div>
                    <div class="performance__button">
                        <a href="{{ route('staff.index') }}" class="button">Наша команда</a>
                    </div>
                </div>
            </div>

            <div class="about__subtitle subtitle">Про курси</div>
            <div class="about__title title">
                Ми пропонуємо особилву концепцію курсів
            </div>
            <div class="about__text text">
                <p>
                    На кожному занятті більшість завдань діти вирішують самостійно,
                    що розвиває впевненість та вміння самостійно приймати рішення.
                </p>
                <ul class="about__lists lists">
                    <li>
                        Проектний підхід (кожний урок є маленькою частиною великого
                        проекту)
                    </li>
                    <li>Актуальність та практичність занять</li>
                    <li>Кожен урок корисний та цікавий</li>
                    <li>Індивідуальний підхід до учнів</li>
                </ul>
                <p>
                    Наша мета – надати дітям розуміння того, що в житті не буває
                    нічого неймовірного і все можливо!
                </p>
            </div>
        </div>
    </div>
    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""
    ></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src="{{ asset('js/map.js') }}"></script>
@endsection
