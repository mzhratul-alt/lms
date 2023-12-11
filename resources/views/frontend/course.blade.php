@extends('layouts.frontend_master')
@section('page_title', 'Course')
@section('frontend_main_content')
<main>

    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>All Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="all-course section-padding30">
        <div class="container">

            <div class="row">
                @foreach ($courses as $course)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-course mb-40 ">
                        <div class="course-img">
                            <img src="{{$course->thumbnail == 'dummy.png'?env('PLACEHOLDER').$course->title: asset('storage/courses/'.$course->thumbnail) }}"
                                alt="{{ $course->title }}" style="width: 100%">
                        </div>
                        <div class="course-caption">
                            <div class="course-cap-top">
                                <h4><a href="{{ route('frontend.courseShow', $course->id) }}">{{ $course->title }}</a></h4>
                            </div>
                            <div class="course-cap-bottom d-flex justify-content-between">
                                <ul>
                                    <li><i class="ti-user"></i> {{ $course->teacher->name }} </li>
                                </ul>
                                <span>BDT {{ $course->price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>
@endsection
