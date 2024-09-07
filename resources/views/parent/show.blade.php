@extends('layouts.master')

@section('robots', 'noindex, nofollow')

@section('content')

    <div class="main__parrent">
        <div class="container">
            <div class="parrent__top">
                <div class="parrent__name">
                    ПІП:<span>{{ $parent->name }}</span>
                </div>
                <div class="parrent__balance">
                    <div class="balance__value">
                        <img src="{{ asset('images/misc/purse.svg') }}" alt=""/>
                        <p title="*Кошти з гаманця не повертаються назад на карту">
                            Баланс:
                            <span class="balance__purse">{{ $parent->balance }} ₴</span>
                        </p>
                    </div>
                    <div class="balance__add">
                        <a href="" class="button button__balance">
                            Додати <img src="{{ asset('images/misc/plus.svg') }}" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="parrent__body">
                @foreach($children as $child)
                    <div class="parrent__childs">
                        <div class="parrent__child">
                            <div class="child__name">
                                ПІП: <span> {{ $child->name }} </span>
                            </div>
                        </div>
                        <div class="curses__lists">
                            @foreach($child->groups as $group)
                                <div class="curses__curs">
                                    <div class="course__status"
                                         style="background-color: black"> Оплачено\не оплачено
                                    </div>
                                    <div class="course__image">
                                        <a href="{{ route('programs.show', $group->program->id) }}">
                                            <img src="{{  $group->program->image }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="course__body">
                                        <div class="course__title">
                                            {{ $group->program->name }}
                                        </div>
                                        <div class="course__price">
                                            Вартість: <span>{{ $group->program->price }}₴</span> / місяць
                                        </div>
                                    </div>
                                    <div class="course__buttons">
                                        <div class="course__button button__payment">
                                            <a href="#">Оплатити</a>
                                        </div>
                                        <!-- <div class="cours__button">
                                          <a href="#">Застосувати знижку</a>
                                        </div> -->
                                        <div class="form__error message__course"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <form action="{{ route('parent.review.update', $parent->id) }}" method="POST" class="parrent__review">
                @csrf
                @method('PATCH')

                <label class="title">Поділіться вашими враженнями від нашої школи</label>
                <textarea
                    name="review"
                    required
                    placeholder="Ваш відгук"
                >{{ $parent->review }}</textarea>
                <div class="form__message"></div>
                <button class="button review__button">Залишити відгук</button>
            </form>
        </div>
    </div>
@endsection
