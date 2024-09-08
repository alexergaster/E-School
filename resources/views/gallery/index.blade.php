@extends('layouts.master')

@section('title', 'E-School - Галерея школи')
@section('description', 'Подивіться, як проходять заняття у дитячій школі програмування у Сумах! У нашій галереї ви знайдете фотографії учнів на курсах з веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв. Дізнайтеся, як ми допомагаємо дітям від 7 років розвиватися у світі сучасних технологій.')
@section('keywords', 'фотогалерея школи програмування Суми, заняття програмування для дітей фото, фото з курсів веб-дизайну для дітей, навчання Python фото, фотозвіт курсів робототехніки, діти на курсах програмування, галерея школи IT для дітей')

@section('og_title', 'Курси для дітей у Сумах, від E-School - Глерея школи')
@section('og_description', 'Подивіться, як проходять заняття у дитячій школі програмування у Сумах! У нашій галереї ви знайдете фотографії учнів на курсах з веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв. Дізнайтеся, як ми допомагаємо дітям від 7 років розвиватися у світі сучасних технологій.')

@section('content')
    <div class="main__gallery">
        <div class="container">
            <div class="gallery__subtitle subtitle">Галерея</div>
            <div class="gallery__title title">Найкрщі моменти разом з вами</div>
            <div class="gallery__body">
                <div class="gallery__column">
                    @foreach($gallery[0] as $part1)
                        <img src="storage/{{ $part1->image }}" alt="" loading="lazy"/>
                    @endforeach
                </div>
                <div class="gallery__column">
                    @foreach($gallery[1] as $part2)
                        <img src="storage/{{ $part2->image }}" alt="" loading="lazy"/>
                    @endforeach
                </div>
                <div class="gallery__column">
                    @foreach($gallery[2] as $part3)
                        <img src="storage/{{ $part3->image }}" alt="" loading="lazy"/>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
