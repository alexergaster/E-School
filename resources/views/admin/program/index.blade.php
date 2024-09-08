@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Programs List
                        <a href="{{ route('admin.programs.create') }}" class="btn btn-success btn-sm float-right">Create
                            New Program</a>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Tag</th>
                                <th style="max-width: 400px;">Description</th>
                                <th>Price</th>
                                <th>Recommended Age</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($programs as $program)
                                <tr>
                                    <td>{{ $program->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->name }}"
                                             style="max-width: 100px; height: auto; border-radius: 5px;">
                                    </td>
                                    <td>{{ $program->name }}</td>
                                    <td>{{ $program->tag }}</td>
                                    <td style="max-width: 300px; word-wrap: break-word;">{{ $program->description }}</td>
                                    <td>{{ $program->price }}</td>
                                    <td>{{ $program->recommended_age }}</td>
                                    <td>
                                        <div class="mb-2">
                                            <a href="{{ route('admin.sections.index', $program->id) }}"
                                               class="btn btn-primary btn-sm w-100">Sections</a>
                                        </div>
                                        <div class="mb-2">
                                            <a href="{{ route('admin.features.index', $program->id) }}"
                                               class="btn btn-primary btn-sm w-100">Features</a>
                                        </div>

                                        <div class="mb-2">
                                            <a href="{{ route('admin.programs.edit', $program->id) }}"
                                               class="btn btn-warning btn-sm w-100">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST"
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
