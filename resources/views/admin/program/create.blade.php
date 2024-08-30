@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Program</div>

                    <div class="card-body">
                        <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="image">Program Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>


                            <div class="form-group">
                                <label for="name">Program Title</label>
                                <input type="text" class="form-control" id="name" name="name" maxlength="255"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="tag">Program Tag</label>
                                <input type="text" class="form-control" id="tag" name="tag" maxlength="50"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                          rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>

                            <div class="form-group">
                                <label for="recommended_age">Recommended Age</label>
                                <input type="number" class="form-control" id="recommended_age" name="recommended_age">
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
