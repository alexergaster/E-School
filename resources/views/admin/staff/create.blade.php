@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Staff Member</div>

                    <div class="card-body">
                        <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <textarea class="form-control" id="qualification" name="qualification"
                                          rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" id="login" name="login" maxlength="50" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
