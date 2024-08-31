@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Student List in Group</p>

                        <a href="{{ route('admin.groups.index') }}" class="btn btn-secondary btn-sm float-left">Back
                            to Group List</a>
                        <a href="{{ route('admin.groups.students.create', $group->id ) }}" class="btn btn-success btn-sm float-right">Add Student in Group</a>
                    </div>



                    <h2 class="text-center">{{ $group->name }}</h2>
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
                                <th>Name</th>
                                <th>Age</th>
                                <th>Parent ID</th>
                                <th>Parent Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->parent->id }}</td>
                                    <td>{{ $student->parent->name }}</td>
                                    <td>
                                        <div>
                                            <form
                                                action="{{ route('admin.groups.students.destroy', ['group_id' => $group->id, 'student_id' => $student->id]) }}"
                                                method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm w-100"
                                                        onclick="return confirm('Are you sure?')">Delete
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
            </div>
        </div>
    </div>
@endsection
