@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Working-outs List
                        <a href="{{ route('admin.workingout.create') }}" class="btn btn-success btn-sm float-right">Create
                            New Working-outs</a>
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
                                <th>Date</th>
                                <th>Location</th>
                                <th>Lesson</th>
                                <th>Teacher</th>
                                <th>Student</th>
                                <th>Present</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($workingouts as $workingout)
                                <tr>
                                    <td>{{ $workingout->id }}</td>
                                    <td>{{ $workingout->date }}</td>
                                    <td>{{ $workingout->location }}</td>
                                    <td>{{ $workingout->lesson->id . '. №' . $workingout->lesson->lesson_number . ' for ' . $workingout->lesson->date }}</td>
                                    <td>{{ $workingout->teacher->id . '. ' . $workingout->teacher->firstname . ' ' . $workingout->teacher->lastname }}</td>
                                    <td>{{ $workingout->student->id . '. ' . $workingout->student->name }}</td>
                                    <td class="{{ $workingout->present ? 'text-green' : 'text-danger' }}">{{ $workingout->present ? 'Присутній' : 'Відсутній' }}</td>

                                    <td>
                                        <div>
                                            <form action="{{ route('admin.workingout.destroy', $workingout->id) }}"
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
                        @if($workingouts->total() > 10)
                            <div class="mt-2">{{ $workingouts->links('pagination::bootstrap-5') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
