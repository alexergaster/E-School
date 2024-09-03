@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lesson List for Group: <span class="text-uppercase"
                                                     style="text-decoration: underline">{{ $group->name }}</span>
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
                                <th>Number Lesson</th>
                                <th>Date Lesson</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $lesson)
                                <tr>
                                    <td>{{ $lesson->id }}</td>
                                    <td>{{ $lesson->lesson_number }}</td>
                                    <td>{{ $lesson->date }}</td>
                                    <td>
                                        <div class="mb-2">
                                            <a href="{{ route('admin.groups.journal.show', ['id' => $group->id, 'lesson' => $lesson->id ]) }}"
                                               class="btn btn-primary btn-sm w-100">View</a>
                                        </div>
                                        <div>
                                            <form
                                                action="{{ route('admin.groups.journal.destroy', ['id' => $group->id, 'lesson' => $lesson->id ]) }}"
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
                        {{--                        @if($groups->total() > 10)--}}
                        {{--                            <div class="mt-2">{{ $groups->links('pagination::bootstrap-5') }}</div>--}}
                        {{--                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
