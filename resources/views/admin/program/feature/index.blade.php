@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Features List for <span class="text-bold">{{ $program->name }}</span> Program</p>

                        <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary btn-sm float-laft">Back
                            to Programs List</a>
                        <a href="{{ route('admin.features.create', $program->id) }}" class="btn btn-success btn-sm float-right">Create
                            New Feature</a>
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
                                <th>Content</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($features as $feature)
                                <tr>
                                    <td>{{ $feature->id }}</td>
                                    <td>{{ $feature->content }}</td>
                                    <td>
                                        <div>
                                            <form action="{{ route('admin.features.destroy', ['id'=> $program->id, 'feature'=>$feature->id]) }}"
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
