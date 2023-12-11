@extends('layouts.frontend_master')
@section('page_title', 'Teacher')
@section('frontend_main_content')
<main>

    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Instructors</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row">
                @foreach ($teachers as $teacher)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ $teacher->profile == 'dummy.png'?env('PLACEHOLDER').$teacher->name:asset('storage/teachers/'.$teacher->profile) }}"
                                alt>

                            <ul class="team-social">
                                <li><a target="_blank" href="https://www.facebook.com"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">{{ $teacher->name }}</a></h3>
                            <p>{{ $teacher->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection