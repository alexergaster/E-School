@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Edit a Section
                        <a href="{{ route('admin.sections.index', $section) }}"
                           class="btn btn-secondary btn-sm float-right">Back to Program Show</a>
                    </div>

                    <div class="card-body">
                        <form
                            action="{{ route('admin.sections.update', ['program' => $program, 'section' => $section->id]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')

                            <input name="program_id" value="{{ $program }}" class="d-none">

                            <div class="form-group">
                                <label for="name">Section Type</label>
                                <select id="name" name="name" class="form-control" required>
                                    @if($section->name === 'paragraph')
                                        <option value="paragraph" selected>Paragraph</option>
                                    @else
                                        <option value="paragraph">Paragraph</option>
                                    @endif

                                    @if($section->name === 'heading')
                                        <option value="heading" selected>Heading</option>
                                    @else
                                        <option value="heading">Heading</option>
                                    @endif

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" required
                                          rows="3">{{ old('content', $section->content) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
