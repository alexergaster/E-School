@extends('layouts.personal')

@section('content')
    <div class="main__marking">
        <div class="container">

            <div class="marking__title">
                Відпрацювання
            </div>
            <div class="marking__body">
                <div class="marking__swap">
                    <a href="{{ route('teacher.groups.index', $teacher->id) }}" class="button button__back">Назад</a>
                </div>
            </div>

            <table class="lesson__table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Lesson</th>
                    <th>Student</th>
                    <th>Present</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($workingouts as $workingout)
                    <tr>
                        <td>{{ $workingout->id }}</td>
                        <td>{{ $workingout->date }}</td>
                        <td>{{ $workingout->location }}</td>
                        <td>{{ $workingout->lesson->id . ') №' . $workingout->lesson->lesson_number }}</td>
                        <td>{{ $workingout->student->id . ') ' .  $workingout->student->name}}</td>
                        <td style="{{ $workingout->present ? 'color: green;' : 'color: red;' }}">
                            {{ $workingout->present ? 'Присутній' : 'Відсутній' }}
                        </td>
                        <td>
                            <div class="">
                                <a href="{{ route('teacher.workingout.edit', ['id' => $teacher->id, 'workingout' => $workingout->id]) }}"
                                   class="button table__button">Відмітити</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
