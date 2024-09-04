@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Workingout</div>

                    <div class="card-body">
                        <form action="{{ route('admin.workingout.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date"
                                       required>

                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="id_lesson">Select Lesson</label>
                                <select id="id_lesson" name="id_lesson" class="form-control select2" required>
                                    <option value="" disabled selected>Select a Lesson</option>
                                    @foreach($lessons as $lesson)
                                        <option value="{{ $lesson->id }}">{{ $lesson->lesson_number }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_student">Select Student</label>
                                <select id="id_student" name="id_student" class="form-control select2" required>
                                    <option value="" disabled selected>Select a Student</option>
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_teacher">Select Teacher</label>
                                <select id="id_teacher" name="id_teacher" class="form-control select2" required>
                                    <option value="" disabled selected>Select a Teacher</option>
                                    @foreach($teachers as $teacher)
                                        <option
                                            value="{{ $teacher->id }}">{{ $teacher->firstname . ' ' . $teacher->lastname }}</option>
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#id_lesson').select2({
                placeholder: "Select a Lesson",
                allowClear: true
            });
        });

        $(document).ready(function () {
            $('#id_student').select2({
                placeholder: "Select a Student",
                allowClear: true
            });
        });

        $(document).ready(function () {
            $('#id_teacher').select2({
                placeholder: "Select a Teacher",
                allowClear: true
            });
        });
    </script>
@endsection


@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
@endsection
