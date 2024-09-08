@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Create a Feature
                        <a href="{{ route('admin.sections.index', $program->id) }}"
                           class="btn btn-secondary btn-sm float-right">Back to Program Show</a>
                    </div>

                    <div class="card-body">
                        <form
                            action="{{ route('admin.features.store', $program->id) }}"
                            method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content"
                                          rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
