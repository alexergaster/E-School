@extends('layouts.personal')

@section('content')
    <div class="main__marking">
        <div class="container">

            <div class="marking__title">
                Група <span id="groupName">{{ $group->name }}</span>
            </div>
            <div class="marking__body">
                <div class="marking__swap">
                    <a href="{{ route('teacher.group.lessons.index', ['id' => $teacher_id, 'group_id' => $group->id]) }}" class="button button__back">Назад</a>
                </div>
                <div class="marking__title">
                    Урок № <span class="marking__number">{{ $lesson->lesson_number  }}</span>, за
                    <span class="marking__date">{{ $lesson->date  }}</span>
                </div>
            </div>

            <form action="{{ route('teacher.group.lessons.update', ['id' => $teacher_id, 'group_id' => $group->id, 'lesson_id' => $lesson->id]) }}" method="POST" class="marking__form">
                @csrf
                @method("PATCH")

                <div class="form__marking-body">
                    @foreach($students as $student)
                        <div class="marking__item">
                            <label for="marking_list">{{ $student->name }}</label>
                            <select name="attendances[{{ $student->id }}]">
                                @if($student->pivot->present)
                                    <option value="0">Відсутній</option>
                                    <option value="1" selected>Присутній</option>
                                @else
                                    <option value="0" selected>Відсутній</option>
                                    <option value="1" >Присутній</option>
                                @endif

                            </select>
                        </div>
                    @endforeach
                </div>
                <div class="form__message"></div>
                <button class="button form__button">Save</button>
            </form>
        </div>
    </div>
@endsection
