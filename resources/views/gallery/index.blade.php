@extends('layouts.master')

@section('content')
    <div class="main__gallery">
        <div class="container">
            <div class="gallery__subtitle subtitle">Галерея</div>
            <div class="gallery__title title">Найкрщі моменти разом з вами</div>
            <div class="gallery__body">
                <div class="gallery__column">
                    @foreach($gallery[0] as $part1)
                        <img src="{{ $part1->image }}" alt="" loading="lazy"/>
                    @endforeach
                </div>
                <div class="gallery__column">
                    @foreach($gallery[1] as $part2)
                        <img src="{{ $part2->image }}" alt="" loading="lazy"/>
                    @endforeach
                </div>
                <div class="gallery__column">
                    @foreach($gallery[2] as $part3)
                        <img src="{{ $part3->image }}" alt="" loading="lazy"/>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
