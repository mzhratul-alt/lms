@extends('layouts.admin_master')
@section('page_title', 'Edit - Course')
@section('admin_main_content')
<div class="card">
    <div class="card-header">
        <h3>Update course</h3>
    </div>
    <div class="card-body">
        <form class="row" action="{{ route('admin.course.update', $course->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-lg-6 mb-3">
                <label for="">Course Title</label>
                <input type="text" name="title" id="" class="form-control" value="{{ $course->title }}">
                @error('title')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Course Price</label>
                <input type="number" name="price" id="" class="form-control" value="{{ $course->price }}">
                @error('price')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Course Thumbnail</label>
                <input type="file" name="thumbnail" id="" class="form-control">
                <input type="hidden" name="previous_thumbnail" value=" {{ $course->thumbnail}}">
                @error('thumbnail')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Select Teacher</label>
                <select name="teacher_id" id="" class="form-select">
                    <option selected disabled>Select Teacher</option>
                    @foreach ($teachers as $teacher )
                    <option {{ $course->teacher->id === $teacher->id ? 'selected':''}} value="{{ $teacher->id }}">{{
                        $teacher->name }}</option>
                    @endforeach
                </select>
                @error('teacher')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
