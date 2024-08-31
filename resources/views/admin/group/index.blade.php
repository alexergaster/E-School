@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Group List
                        <a href="{{ route('admin.groups.create') }}" class="btn btn-success btn-sm float-right">Create
                            New Group</a>
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
                                <th>Name</th>
                                <th>Lesson Day</th>
                                <th>Start Time</th>
                                <th>Audience</th>
                                <th>Teacher</th>
                                <th>Program</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->lesson_day }}</td>
                                    <td>{{ $group->start_time }}</td>
                                    <td>{{ $group->audience }}</td>
                                    <td>{{ $group->teacher->id . '. ' . $group->teacher->firstname . ' ' . $group->teacher->lastname }}</td>
                                    <td>{{ $group->program->id . '. ' .$group->program->name }}</td>
                                    <td>
                                        <div class="mb-2">
                                            <a href="{{ route('admin.groups.students.index', $group->id) }}"
                                               class="btn btn-primary btn-sm w-100">View</a>
                                        </div><div class="mb-2">
                                            <a href="{{ route('admin.groups.edit', $group->id) }}"
                                               class="btn btn-warning btn-sm w-100">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin.groups.destroy', $group->id) }}"
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
                        @if($groups->total() > 10)
                            <div class="mt-2">{{ $groups->links('pagination::bootstrap-5') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
