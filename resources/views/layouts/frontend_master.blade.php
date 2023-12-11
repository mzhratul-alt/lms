<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Education | Template </title>
        <meta name="description" content>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="https://preview.colorlib.com/theme/onlineedu/site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>

    <body>

        {{-- <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loder.png" alt>
                    </div>
                </div>
            </div>
        </div> --}}

        <header>

            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-none d-lg-block">

                        <div class="header-left-social">
                            <ul class="header-social">
                                <li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="index.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li> <a href="index.html#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left">
                                        <ul>
                                            <li><a href="../../cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="2f414a4a4b474a435f6f48424e4643014c4042">[email&#160;protected]</a>
                                            </li>
                                            <li>666 7475 25252</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right">
                                        <ul>
                                            <li><a href="{{ route('student.login') }}"><i class="ti-user"></i>Login</a></li>
                                            <li><a href="{{ route('student.register') }}"><i class="ti-lock"></i>Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom header-sticky">

                        <div class="logo d-none d-lg-block">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt></a>
                        </div>
                        <div class="container">
                            <div class="menu-wrapper justify-content-center">

                                <div class="logo logo2 d-block d-lg-none">
                                    <a href="{{ route('home') }}"><img src="assets/img/logo/logo.png" alt></a>
                                </div>

                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a
                                                    href="{{ route('courses') }}">Courses</a></li>
                                            <li><a href="{{ route('teachers') }}">Instructors</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        @yield('frontend_main_content')
        <footer>

            <div class="footer-area footer-bg">
                <div class="container">
                    <div class="footer-top footer-padding">

                        <div class="footer-heading">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-7 col-md-10">
                                    <div class="footer-tittle2">
                                        <h4>Stay Updated</h4>
                                    </div>

                                    <div class="footer-form mb-50">
                                        <div id="mc_embed_signup">
                                            <form target="_blank"
                                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                                method="get" class="subscribe_form relative mail_part"
                                                novalidate="true">
                                                <input type="email" name="EMAIL" id="newsletter-form-email"
                                                    placeholder=" Email Address " class="placeholder hide-on-focus"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Your email address'">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit"
                                                        class="email_icon newsletter-submit button-contactForm">
                                                        Subscribe Now
                                                    </button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5">
                                    <div class="footer-tittle2">
                                        <h4>Let’s Get Social</h4>
                                    </div>

                                    <div class="footer-social">
                                        <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="index.html#"><i class="fab fa-twitter"></i></a>
                                        <a href="index.html#"><i class="fab fa-google"></i></a>
                                        <a href="index.html#"><i class="fab fa-instagram"></i></a>
                                        <a href="index.html#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>About Us</h4>
                                        <ul>
                                            <li><a href="index.html#">Online Learning</a></li>
                                            <li><a href="index.html#">About Us</a></li>
                                            <li><a href="index.html#">Careers</a></li>
                                            <li><a href="index.html#">Press Center</a></li>
                                            <li><a href="index.html#">Become an Instructor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Campus</h4>
                                        <ul>
                                            <li><a href="index.html#">Our Plans</a></li>
                                            <li><a href="index.html#">Free Trial</a></li>
                                            <li><a href="index.html#">Academic Solutions</a></li>
                                            <li><a href="index.html#">Business Solutions</a></li>
                                            <li><a href="index.html#"> Government Solutions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Study</h4>
                                        <ul>
                                            <li><a href="index.html#">Admissions Policy</a></li>
                                            <li><a href="index.html#">Getting Started</a></li>
                                            <li><a href="index.html#">Online Application</a></li>
                                            <li><a href="index.html#">Visa Information</a></li>
                                            <li><a href="index.html#">Tuition Calculator</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Spport</h4>
                                        <ul>
                                            <li><a href="index.html#">Support</a></li>
                                            <li><a href="index.html#">Contact Us</a></li>
                                            <li><a href="index.html#">System Requirements</a></li>
                                            <li><a href="index.html#">Register Activation Key</a></li>
                                            <li><a href="index.html#">Site feedback</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;<script data-cfasync="false"
                                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                                        </script>
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <div id="back-top">
            <a title="Go to Top" href="index.html#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
        </script>
        <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
            integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
            data-cf-beacon='{"rayId":"81902c158a2278c7","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
            crossorigin="anonymous"></script>
    </body>

</html>
