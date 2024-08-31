@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a Group</div>

                    <div class="card-body">
                        <form action="{{ route('admin.groups.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="lesson_date">Lesson Date</label>
                                <select id="lesson_date" name="lesson_date" class="form-control" required>
                                    <option value="" disabled selected>Select lesson date</option>
                                    <option value="Субота">Субота</option>
                                    <option value="Неділля">Неділля</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_time">Start time</label>
                                <input type="time" class="form-control" id="start_time" name="start_time">
                            </div>

                            <div class="form-group">
                                <label for="audience">Audience</label>
                                <input type="text" class="form-control" id="audience" name="audience">
                            </div>

                            <div class="form-group">
                                <label for="teacher_id">Section Teacher</label>
                                <select id="teacher_id" name="teacher_id" class="form-control" required>
                                    <option value="" disabled selected>Select teacher</option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">
                                            {{ $teacher->firstname . ' ' . $teacher->lastname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="program_id">Section Program</label>
                                <select id="program_id" name="program_id" class="form-control" required>
                                    <option value="" disabled selected>Select program</option>
                                    @foreach($programs as $program)
                                        <option value="{{ $program->id }}"> {{ $program->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
