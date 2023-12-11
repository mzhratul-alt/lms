@extends('layouts.admin_master')
@section('page_title', 'Create - Course')
@section('admin_main_content')
<div class="card">
    <div class="card-header">
        <h3>Add new course</h3>
    </div>
    <div class="card-body">
        <form class="row" action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6 mb-3">
                <label for="">Course Title</label>
                <input type="text" name="title" id="" class="form-control">
                @error('title')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Course Price</label>
                <input type="number" name="price" id="" class="form-control">
                @error('price')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Course Thumbnail</label>
                <input type="file" name="thumbnail" id="" class="form-control">
                @error('thumbnail')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Select Teacher</label>
                <select name="teacher_id" id="" class="form-select">
                    <option selected disabled>Select Teacher</option>
                    @foreach ($teachers as $teacher )
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
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
