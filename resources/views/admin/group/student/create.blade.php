@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Student in Group
                    </div>


                    <h2 class="text-center">{{ $group->name }}</h2>

                    <div class="card-body">
                        <form action="{{ route('admin.groups.students.store', $group->id) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="students">Select Students</label>
                                <select id="students" name="students[]" class="form-control select2" multiple="multiple" required>
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->name }} ({{ $student->age }} years)</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Підключення бібліотеки select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#students').select2({
                placeholder: "Select Students",
                allowClear: true
            });
        });
    </script>
@endsection

@section('styles')
    <!-- Підключення стилів select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
@endsection
