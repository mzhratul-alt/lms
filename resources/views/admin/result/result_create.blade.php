@extends('layouts.admin_master')
@section('page_title', 'Create - Result')
@section('admin_main_content')
<div class="card w-50 mx-auto">
    <div class="card-header">
        <h3>Add Result</h3>
    </div>
    <div class="card-body">
        <form class="row" action="{{ route('admin.result.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="">Course Result</label>
                <input type="file" name="result" id="" class="form-control">
                @error('result')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-12">
                <input type="hidden" name="enrollment_id" value="{{ $enrollment_id }}">
                <button type="submit" class="btn btn-primary w-100">Add Result</button>
            </div>
        </form>
    </div>
</div>
@endsection
