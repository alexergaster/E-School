@extends('layouts.personal')

@section('content')
    <div class="main__teacherpage">
        <div class="container">
            <div class="teacherpage__title">
                Ви увійшли як: <span>{{ $teacher->firstname . ' ' . $teacher->lastname }}</span>
            </div>
            <div class="teacherpage__body">
                <div class="teacherpage__filtrs">
                    <div class="filtr__title">Сортувати групи за:</div>
                    <div class="filters__filter">
                        <a href="{{ route('teacher.groups.index', ['id' => $teacher->id, 'all_groups' => true]) }}"
                           class="filter__item">Всі групи</a>
                        <a href="{{ route('teacher.groups.index', $teacher->id) }}" class="filter__item">Мої групи</a>
                    </div>
                </div>
                <div class="teacherpage__groups">
                    @foreach($groups as $group)
                        <div class="groups__group">
                            <div class="group__body">
                                <div class="group__image">
                                    <img src="{{ $group->program->image }}" alt=""/>
                                </div>
                                <div class="group__info">
                                    <div class="group__title">Група <span>{{ $group->name }}</span></div>
                                    <div class="group__subtitle">{{ $group->program->name }}</div>
                                    <div
                                        class="group__teacher">{{ $group->teacher->firstname . ' ' . $group->teacher->lastname }}
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('teacher.group.lessons.index', ['id' => $teacher->id, 'group_id' => $group->id]) }}"
                               class="button group__button">Обрати</a>
                        </div>
                    @endforeach
                </div>

                {{--                <div class="teacherpage__button">--}}
                {{--                    <a href="" class="button">Мої відпрацювання</a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
