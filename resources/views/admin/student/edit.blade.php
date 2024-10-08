@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit a Student Member</div>

                    <div class="card-body">
                        <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="parent_id">Select Parent</label>
                                <select id="parent_id" name="parent_user_id" class="form-control select2" required>
                                    <option value="" disabled selected>Select a Parent</option>
                                    @foreach($parents as $parent)

                                        <option
                                            value="{{ $parent->id }}"{{ $student->parent_user_id == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       required value="{{ old('name', $student->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age"
                                       required value="{{ old('age', $student->age) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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
            $('#parent_id').select2({
                placeholder: "Select a Parent",
                allowClear: true
            });
        });
    </script>
@endsection

@section('styles')
    <!-- Підключення стилів select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
@endsection
