@extends('layouts.student_master')
@section('page_title', 'Student - Dashboard')
@section('student_main_content')
<div class="row mb-5">
    <div class="col-12">
        <h2>My Courses</h2>
    </div>
    @foreach ($courses as $course)
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
            <img class="card-img-top"
                src="{{$course->thumbnail == 'dummy.png'?env('PLACEHOLDER').$course->title: asset('storage/courses/'.$course->thumbnail) }}"
                alt="{{ $course->title }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $course->title }}</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <p>Mentor: <span class="badge bg-gray">{{ $course->teacher->name }}</span></p>
                @if ($course->enrollments->first()->result !== null)
                <a href="{{ asset('storage/results/'.$course->enrollments->first()->result) }}"
                    class="btn btn-outline-primary" target="_blank">View Result</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
