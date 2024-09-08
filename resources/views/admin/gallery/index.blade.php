@extends('layouts.admin')

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Gallery List
                        <a href="{{ route('admin.gallery.create') }}" class="btn btn-success btn-sm float-right">Add
                            New Photo</a>
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
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($gallery as $photo)
                                <tr>
                                    <td>{{ $photo->id }}</td>
                                    <td><img class="w-25 h-25" src="{{ asset('storage/' . $photo->image) }}" alt="">
                                    </td>
                                    <td>
                                        <div>
                                            <form action="{{ route('admin.gallery.destroy', $photo->id) }}"
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
                        @if($gallery->total() > 10)
                            <div class="mt-2">{{ $gallery->links('pagination::bootstrap-5') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
