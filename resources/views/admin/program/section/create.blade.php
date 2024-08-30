@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Edit a Section
                        <a href="{{ route('admin.sections.index', $program) }}"
                           class="btn btn-secondary btn-sm float-right">Back to Program Show</a>
                    </div>

                    <div class="card-body">
                        <form
                            action="{{ route('admin.sections.store', $program) }}"
                            method="POST">
                            @csrf

                            <input name="program_id" value="{{ $program }}" class="d-none">

                            <div class="form-group">
                                <label for="name">Section Type</label>
                                <select id="name" name="name" class="form-control" required>
                                    <option value="" disabled selected>Select type section</option>
                                    <option value="heading">Heading</option>
                                    <option value="paragraph">Paragraph</option>
                                </select>
                            </div>

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
