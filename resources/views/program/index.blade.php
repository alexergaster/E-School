@extends('layouts.master')

@section('title', 'E-School - Програми школи')
@section('description', 'Дитяча школа програмування у Сумах пропонує різноманітні програми навчання для дітей від 7 років: курси з веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв. Оберіть програму, яка допоможе вашій дитині опанувати сучасні технології та розкрити свій потенціал.')
@section('keywords', 'курси програмування для дітей Суми, дитячі курси веб-дизайну, навчання Python для дітей, програми навчання робототехніка для дітей, курси JavaScript для дітей, навчальні програми з програмування, курси розробки електронних пристроїв')

@section('og_title', 'Курси для дітей у Сумах, від E-School - Програми школи')
@section('og_description', 'Дитяча школа програмування у Сумах пропонує різноманітні програми навчання для дітей від 7 років: курси з веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв. Оберіть програму, яка допоможе вашій дитині опанувати сучасні технології та розкрити свій потенціал.')

@section('content')
    <div class="main__curses">
        <div class="container">
            <div class="curses__subtitle subtitle">Програми</div>
            <div class="curses__title title">Усі програми нашої школи</div>
            <div class="curses__text text">
                Курси, які створені для розвитку здібностей у дітей та підлітків
                логічного та технічного мислення, які допоможуть досягти успіху в
                житті, ставши провідними фахівцями, творцями інноваційних
                продуктів та керівниками своїх підприємств.
            </div>
            @if($programs->count())
                <div class="curses__lists">
                    @foreach($programs as $program)
                        @include('includes.program', $program)
                    @endforeach
                </div>
            @else
                <h1>На жаль курсів коки що немає(</h1>
            @endif
            <div class="curses__button">
                <a href="/" class="button bouncy master_class"
                >Записатись на майстер клас</a
                >
            </div>
        </div>
    </div>

    @include('includes.questions')
@endsection
