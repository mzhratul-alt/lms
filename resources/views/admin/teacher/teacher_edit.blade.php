@extends('layouts.admin_master')
@section('page_title', 'Edit - Teacher')
@section('admin_main_content')
<div class="card">
    <div class="card-header">
        <h3>Update Teacher</h3>
    </div>
    <div class="card-body">
        <form class="row" action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-lg-6 mb-3">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" value="{{ $teacher->name }}">
                @error('name')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Designation</label>
                <input type="text" name="designation" id="" class="form-control" value="{{ $teacher->designation }}">
                @error('designation')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Facebook URL</label>
                <input type="text" name="facebook" id="" class="form-control" value="{{ $teacher->facebook }}">
                @error('facebook')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Twitter URL</label>
                <input type="text" name="twitter" id="" class="form-control" value="{{ $teacher->twitter }}">
                @error('twitter')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-lg-12 mb-3">
                <label for="">Profile</label>
                <input type="file" name="profile" id="" class="form-control">
                <input type="hidden" name="previous_profile" value="{{ $teacher->profile }}">
                @error('profile')
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
