@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Program Details</p>

                        <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary btn-sm float-laft">Back
                            to Programs List</a>
                        <a href="{{ route('admin.sections.create', $program) }}"
                           class="btn btn-success btn-sm float-right mr-3">Create New Section</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1 class="text-center mb-5">{{ $program->name }} </h1>

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Content</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sections as $section)
                                <tr>
                                    <td>{{ $section->id }}</td>
                                    <td>{{ $section->name }}</td>
                                    <td>{{ $section->content }}</td>
                                    <td style="width: 150px">
                                        <a href="{{ route('admin.sections.edit', ['program' => $program->id,'section' => $section->id]) }}"
                                           class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.sections.destroy', ['program' => $program->id,'section' => $section->id]) }}" method="POST"
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
