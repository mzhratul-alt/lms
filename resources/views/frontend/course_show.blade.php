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
                            <h2>{{ $course->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="all-course section-padding30">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-course mb-40 ">
                        <div class="course-img">
                            <img src="{{$course->thumbnail == 'dummy.png'?env('PLACEHOLDER').$course->title: asset('storage/courses/'.$course->thumbnail) }}"
                                alt="{{ $course->title }}" style="width: 100%">
                        </div>
                        <div class="course-caption">
                            <div class="course-cap-top">
                                <h4><a href="{{ route('student.register') }}">{{ $course->title }}</a></h4>
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
                <div class="col-lg-6 col-md-12">
                    <p class="text-black">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas sapiente voluptates labore
                        laboriosam delectus consequatur quia adipisci. Eaque at quisquam repellendus dolores, ipsum
                        magnam distinctio sapiente esse vitae inventore fuga, nobis atque doloribus! Necessitatibus
                        aperiam maxime, officia, quae esse nihil eaque cupiditate architecto magnam quisquam totam nisi
                        dolores itaque autem sit dicta veniam alias nesciunt minus dolor cumque tenetur. Impedit
                        similique, officia debitis architecto necessitatibus voluptates repellat sint delectus soluta,
                        cum dolor praesentium, quae voluptatum tempore ex amet? Ad vel sunt consequuntur, pariatur autem
                        obcaecati ea officia doloremque aperiam cum adipisci laudantium nostrum laborum quisquam nihil
                        eum, qui a molestias.
                    </p>
                </div>
                <div class="col-md-6">
                    @guest('student')
                    <h3>Please login as a student to enroll the course</h3>
                    <a class="btn btn-primary" href="{{ route('student.login') }}">Login</a>
                    <a class="btn btn-primary" href="{{ route('student.register') }}">Register</a>
                    @endguest
                    @auth('student')
                    <form class="row" action="{{ route('frontend.courseEnrollment', $course->id) }}"
                        method="POST">
                        @csrf
                        <div class="col-12">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment_method" id="bkash"
                                    value="bkash">
                                <label class="form-check-label" for="bkash">
                                    Bkash
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment_method" id="nagad"
                                    value="nagad">
                                <label class="form-check-label" for="nagad">
                                    Nagad
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment_method" id="rocket"
                                    value="rocket">
                                <label class="form-check-label" for="rocket">
                                    Rocket
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control valid" name="phone_number" id="phone_number" type="text"
                                    placeholder="Enter your TXN Phone" value="{{ old('phone_number') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control valid" name="txn_id" id="txn_id" type="text"
                                    placeholder="Enter your TXN ID" value="{{ old('txn_id') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Enroll</button>
                        </div>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
