@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Parents List
                        <a href="{{ route('admin.parents.create') }}" class="btn btn-success btn-sm float-right">Create
                            New Parent</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="GET" action="{{ route('admin.parents.index') }}" class="mb-3">
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
                                <th>Login</th>
                                <th>Balance</th>
                                <th>Review</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($parents as $parent)
                                <tr>
                                    <td>{{ $parent->id }}</td>
                                    <td>{{ $parent->name }}</td>
                                    <td>{{ $parent->login }}</td>
                                    <td>{{ $parent->balance }}</td>
                                    <td>{{ $parent->review }}</td>
                                    <td>
                                        <div class="mb-2">
                                            <a href="{{ route('admin.parents.edit', $parent->id) }}"
                                               class="btn btn-warning btn-sm w-100">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin.parents.destroy', $parent->id) }}"
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
                        <div class="mt-2">{{ $parents->links('pagination::bootstrap-5') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
