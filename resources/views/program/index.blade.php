@extends('layouts.master')

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
