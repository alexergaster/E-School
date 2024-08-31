@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit a Group</div>

                    <div class="card-body">
                        <form action="{{ route('admin.groups.update', $group->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       required value="{{ $group->name }}">
                            </div>

                            <div class="form-group">
                                <label for="lesson_day">Lesson Date</label>
                                <select id="lesson_day" name="lesson_day" class="form-control" required>
                                    @if($group->lesson_day == 'Субота')
                                        <option value="Субота" selected>Субота</option>
                                        <option value="Неділля">Неділля</option>
                                    @else
                                        <option value="Субота">Субота</option>
                                        <option value="Неділля" selected>Неділля</option>
                                    @endif


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_time">Start time</label>
                                <input type="time" class="form-control" id="start_time" name="start_time"
                                       value="{{ $group->start_time }}">
                            </div>

                            <div class="form-group">
                                <label for="audience">Audience</label>
                                <input type="text" class="form-control" id="audience" name="audience"
                                       value="{{ $group->audience }}">
                            </div>

                            <div class="form-group">
                                <label for="teacher_id">Section Teacher</label>
                                <select id="teacher_id" name="teacher_id" class="form-control" required>
                                    <option value="" disabled selected>Select teacher</option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{ $teacher->id }}" {{ $group->teacher_id == $teacher->id ? 'selected' : ''}}>
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
                                        <option value="{{ $program->id }}" {{ $group->program_id == $program->id ? 'selected' : ''}}>
                                            {{ $program->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
