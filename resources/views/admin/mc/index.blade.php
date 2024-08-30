@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Master Class List
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
                                <th>Parent Name</th>
                                <th>Parent Phone</th>
                                <th>Child Name</th>
                                <th>Child Age</th>
                                <th>Comment</th>
                                <th>Programs</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mcs as $mc)
                                <tr>
                                    <td>{{ $mc->id }}</td>
                                    <td>{{ $mc->parent_name }}</td>
                                    <td>{{ $mc->parent_phone }}</td>
                                    <td>{{ $mc->child_name }}</td>
                                    <td>{{ $mc->child_age }}</td>
                                    <td>{{ $mc->comment }}</td>
                                    <td>
                                        @foreach($mc->program as $program)
                                            <p>{{ $program->tag }} </p>
                                        @endforeach
                                    </td>
                                    <td>
                                        {{--                                    <div class="mb-2">--}}
                                        {{--                                            <a href="{{ route('admin.programs.edit', $program->id) }}"--}}
                                        {{--                                               class="btn btn-warning btn-sm w-100">Edit</a>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div>--}}
                                        <form action="{{ route('admin.mc.destroy', $mc->id) }}" method="POST">
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
