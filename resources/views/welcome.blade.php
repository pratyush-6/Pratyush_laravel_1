<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>W3care Technology Pvt Ltd</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Favicons -->
    <link href="assets/img/pratyush.png" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
     <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Laura
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
         .error{
            color:red;
        }
        .about .image {

            @foreach ($about as $value)
                background: url("{{ asset('about/' . $value->image) }}") center center no-repeat;
            @endforeach
            background-size: cover;
            min-height: 500px;
        }

        #hero {
            width: 100%;
            height: 100vh;

            /* background: url("../img/hero-bg.jpg") top right; */
            @foreach ($banner as $value)
                background: url("{{ asset('banner/' . $value->image) }}") top right;
            @endforeach
            background-size: cover;
            position: relative;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

        <nav id="navbar" class="navbar justify-content-end ">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Courses</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block d-flex">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Admin-Log in</a>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle "></i>
        </nav><!-- .navbar -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            @foreach ($banner as $value)
                <h1>{{ $value->title }}</h1>
                <h2>{{ $value->description }}</h2>
            @endforeach
            <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Me Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <span>About Me</span>
                    <h2>About Me</h2>
                    <p>W3care Technologies Pvt. Ltd. is an emerging and top software development company since 2010.</p>
                </div>

                <div class="row">
                    <div
                        class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    </div>
                    <div class="col-lg-8 d-flex flex-column align-items-stretch">
                        <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Pratyush
                                                kumar</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                            <span>www.w3care.com</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                            <span>+91-9717095618</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                            <span>Rajasthan,jaipur</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>25</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                            <span>Bachelors</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span>pratyush@w3care.com</span>
                                        </li>
                                        {{-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                            <span>Available</span>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-n4">
                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="2500"
                                            data-purecounter-duration="3" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext" style="color: #8a1ac2;"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="3200"
                                            data-purecounter-duration="3" class="purecounter"></span>
                                        <p><strong>Projects completed</strong></p>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock" style="color: #2cbdee;"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="10"
                                            data-purecounter-duration="3" class="purecounter"></span>
                                        <p><strong>Years of experience</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award" style="color: #ffb459;"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="300"
                                            data-purecounter-duration="3" class="purecounter"></span>
                                        <p><strong>Active Clients</strong> </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                 

                    </div>
                </div>

            </div>
        </section><!-- End About Me Section -->

      
      

        <!-- ======= My Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <span>Courses</span>
                    <h2>Courses</h2>
                    <p>There are so many technologies available but only some of them are popular and compatible
                        according to your requirements. We work on those major technologies.We develop SEO optimized
                        websites and mobile apps with the best UI & UX experience.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-web">web</li>
                    <li data-filter=".filter-ios">IOS</li>
                </ul>

                <div class="row portfolio-container">
                    @foreach ($course as $value)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $value->coursetype }}">
                            <div class="portfolio-img"><img src="{{ asset('uploads/' . $value->image) }}"
                                    class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <h4>{{ $value->coursetype }} 1</h4>
                                <p>App</p>
                                <a href="{{ asset('uploads/' . $value->image) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                            </div>
                        </div>

                        
                    @endforeach
                </div>

            </div>
        </section><!-- End My Portfolio Section -->

  

        <!-- ======= Contact Me Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact Me</span>
                    <h2>Contact Me</h2>
                    <p>W3care Technologies Pvt. Ltd. is an emerging and top software development company since 2010.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-share-alt"></i>
                                    <h3>Social Profiles</h3>
                                    <div class="social-links">
                                        @foreach ($social as $value)
                                            <a href="{{ $value->link }}" class="twitter"><i
                                                    class="{{ $value->class }}"></i></a>
                                        @endforeach
                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Me</h3>
                                    <p>hr@w3care.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Me</h3>
                                    <p>+91 80943-24555</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form id="myform" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group error-msg">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0 error-msg">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group mt-3 error-msg">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject">
                            </div>
                            <div class="form-group mt-3 error-msg">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                           
                            <div class="text-center"><button type="submit" style="margin-top:18px;">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Me Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            @foreach ($banner as $value)
                <h3>{{ $value->title }}</h3>
                {{-- <h2>{{ $value->description }}</h2> --}}
            @endforeach

           
            <div class="social-links">
                @foreach ($social as $value)
                    <a href="{{ $value->link }}" class="twitter"><i class="{{ $value->class }}"></i></a>
                @endforeach

            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>w3-care</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://w3care.com">Pratyush</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <Script>
        $(document).ready(function() {
            $("#myform").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    subject: {
                        required: true,
                    },
                    message: {
                        required: true,
                    },

                },
                messages: {
                    name: {
                        required: "Please enter your name",
                    },
                    email: {
                        required: "Please enter your Email",
                    },
                    subject: {
                        required: "Please enter your Subject",
                    },
                    message: {
                        required: "Please enter your Messages",
                    },
                },
                errorElement: 'label',
                errorPlacement: function (error, element) {
                    error.addClass(' ');
                    element.closest('.error-msg').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },

            });

            $('#myform').on('submit', function(e) {
                if($('#myform').valid())
        {
                    e.preventDefault();
                    $.ajax({
                        url: '{{ route('addcontact') }}',
                        type: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your mail has been sent to Pratyush kumar',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#myform').trigger('reset');

                            console.log(response);
                        }
                    });
                }
            });
        });
    </Script>
</body>

</html>
