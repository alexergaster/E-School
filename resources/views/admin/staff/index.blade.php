@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Teachers List
                        <a href="{{ route('admin.staff.create') }}" class="btn btn-success btn-sm float-right">Create
                            New Teacher</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Experience (years)</th>
                                <th>Qualification</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->firstname }}</td>
                                    <td>{{ $teacher->lastname }}</td>
                                    <td>{{ $teacher->experience }}</td>
                                    <td>{{ $teacher->qualification }}</td>
                                    <td>
                                        <a href="{{ route('admin.staff.edit', $teacher->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.staff.destroy', $teacher->id) }}" method="POST"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{--                        {{ $teachers->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
