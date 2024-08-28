<div class="curses__curs">
    <div class="course__image">
        <a href="{{ route('programs.show', $program) }}"><img src="{{ asset($program->image) }}" alt="Зображення курсу"/></a>
    </div>
    <div class="course__title">
        {{ $program->name }}
    </div>
    <div class="course__text">
        {{ $program->description }}
    </div>
    <div class="course__price">
        Вартість: <span>{{$program->price}}</span> / місяць
    </div>
    <div class="course__button">
        <a href="{{ route('programs.show', $program) }}">Детальніше</a>
    </div>
</div>
