@extends('layouts.personal')

@section('content')
    <div class="main__marking">
        <div class="container">

            <div class="marking__title">
                Уроки групи <span id="groupName">{{ $group->name }}</span>
            </div>
            <div class="marking__body">
                    <div class="marking__swap">
                        <a href="{{ route('teacher.groups.index',$teacher_id) }}" class="button button__back">Назад</a>
                    </div>
{{--                <div class="marking__swap">--}}
{{--                    <a href="{{ route('teacher.groups.index',$teacher_id) }}" class="button button__back">Новий Урок</a>--}}
{{--                </div>--}}
            </div>
            <table class="lesson__table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Number Lesson</th>
                    <th>Date Lesson</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lessons as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->lesson_number }}</td>
                        <td>{{ $lesson->date }}</td>
                        <td>
                            <div class="mb-2">
                                <a href="{{ route('teacher.group.lessons.edit', ['id' => $teacher_id, 'group_id' => $group->id, 'lesson_id' => $lesson->id]) }}"
                                   class="button table__button">View/Edit</a>
                            </div>
                            <div>
                                <form action="{{ route('teacher.group.lessons.destroy', ['id' => $teacher_id, 'group_id' => $group->id, 'lesson_id' => $lesson->id]) }}"
                                      method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button table__button"
                                            onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
