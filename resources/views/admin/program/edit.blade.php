@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Program</div>

                    <div class="card-body">
                        <form action="{{ route('admin.programs.update', $program->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="image">Program Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if ($program->image)
                                    <img src="{{ asset('storage/' . $program->image) }}" alt="Profile Image"
                                         class="img-thumbnail mt-2" style="width: 150px;">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name">Program Title</label>
                                <input type="text" class="form-control" id="name" name="name" maxlength="255"
                                       required value="{{ old('name', $program->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="tag">Program Tag</label>
                                <input type="text" class="form-control" id="tag" name="tag" maxlength="50"
                                       required value="{{ old('name', $program->tag) }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                          rows="3">{{ old('name', $program->description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required
                                       value="{{ old('name', $program->price) }}">
                            </div>

                            <div class="form-group">
                                <label for="recommended_age">Recommended Age</label>
                                <input type="number" class="form-control" id="recommended_age" name="recommended_age"
                                       value="{{ old('name', $program->recommended_age) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
