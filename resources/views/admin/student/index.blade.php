@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Student List
                        <a href="{{ route('admin.students.create') }}" class="btn btn-success btn-sm float-right">Create
                            New Student</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="GET" action="{{ route('admin.students.index') }}" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search by name"
                                       value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>

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
                                        <div class="mb-2">
                                            <a href="{{ route('admin.students.edit', $student->id) }}"
                                               class="btn btn-warning btn-sm w-100">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin.students.destroy', $student->id) }}"
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
                            @if($students->total() > 10)
                                <div class="mt-2">{{ $student->links('pagination::bootstrap-5') }}</div>
                            @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
