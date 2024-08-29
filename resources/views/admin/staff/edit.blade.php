@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit a Staff Member</div>

                    <div class="card-body">
                        <form action="{{ route('admin.staff.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50"
                                       required value="{{ old('firstname', $teacher->firstname) }}">
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50"
                                       required value="{{ old('lastname', $teacher->lastname) }}">
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <textarea class="form-control" id="qualification" name="qualification"
                                          rows="3">{{ old('qualification', $teacher->qualification) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" id="login" name="login" maxlength="50" required
                                       value="{{ old('login', $teacher->login) }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password (Leave blank if not changing)</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if ($teacher->image)
                                    <img src="{{ asset($teacher->image) }}" alt="Profile Image"
                                         class="img-thumbnail mt-2" style="width: 150px;">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
