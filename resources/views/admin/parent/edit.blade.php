@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit a Parent Member</div>

                    <div class="card-body">
                        <form action="{{ route('admin.parents.update', $parent->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       required value="{{ old('name', $parent->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" id="login" name="login"
                                       required value="{{ old('login', $parent->login) }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password (Leave blank if not changing)</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="review">Review</label>
                                <textarea class="form-control" id="review" name="review"
                                          rows="3">{{ old('review', $parent->review) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
