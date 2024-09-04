@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <p>
                            Student List for Lesson <span style="text-decoration: underline">№{{ $lesson->lesson_number }} for {{ $lesson->date }}</span>
                        </p>
                        <a href="{{ route('admin.groups.journal.index', $id) }}" class="btn btn-secondary btn-sm float-left">Back
                            to Lessons</a>
                        <a href="{{ route('admin.group.journal.workingout.create', ['id' => $id, 'lesson' => $lesson->id ]) }}" class="btn btn-success btn-sm float-right">Create
                            New Working-out</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Present</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td class="{{ $student->pivot->present ? 'text-green' : 'text-danger' }}">{{ $student->pivot->present ? 'Присутній' : 'Відсутній' }} {{ $student->present }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
