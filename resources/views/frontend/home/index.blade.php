<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Insurance &amp; Medical</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health Care Medical Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Novena HTML Template v1.0">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- toastify --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- theme meta -->
    <meta name="theme-name" content="novena" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png') }}" />
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- jquery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--
  Essential stylesheets
  =====================================-->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick-theme.css') }}">

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body id="top">
    {{-- social media icon --}}
    <div class="social-media-whatsapp">
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i
                                        class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New
                                York, USA </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890">
                                <span>Call Now : </span>
                                <span class="h4">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('frontend/images/logo.jpeg') }}" alt="" class="img-fluid"
                        style="height: 50px">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="department.html">Departments</a></li>
                                <li><a class="dropdown-item" href="department-single.html">Department Single</a></li>

                                <li class="dropdown dropdown-submenu dropright">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Sub Menu</a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
                                <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
                                <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>

                                <li class="dropdown dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Sub Menu</a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i
                                    class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                            aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container ">
                            <a href="appoinment.html" target="_blank"
                                class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i
                                    class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal-one --}}
        <!-- Modal -->
        <div class="modal fade" id="btn1" tabindex="-1" aria-labelledby="btn1Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="btn1Label">Modal title 1</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of modal-one --}}

        {{-- modal-two --}}
        <!-- Modal -->
        <div class="modal fade" id="btn2" tabindex="-1" aria-labelledby="btn2Label" aria-hidden="true"
            data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="btn2Label">Modal title 2</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of modal-two --}}
        <div class="banner-info">
            <!-- Button trigger modal -->
            <button type="button" class="btn  text-capitalize" data-bs-toggle="modal" data-bs-target="#btn1">
                Button-1
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn  text-capitalize" data-bs-toggle="modal" data-bs-target="#btn2">
                Button-2
            </button>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Hours Service</span>
                            <h4 class="mb-3">Online Appoinment</h4>
                            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                                family medicine.</p>
                            <a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Emegency Cases</span>
                            <h4 class="mb-3">1-800-700-6200</h4>
                            <p>Get ALl time support for emergency.We have introduced the principle of family
                                medicine.Get Conneted with us for any urgency .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/images/about/img-1.jpg') }}" alt="" class="img-fluid">
                        <img src="{{ asset('frontend/images/about/img-2.jpg') }}" alt=""
                            class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('frontend/images/about/img-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Personal care <br>& healthy living</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti
                            ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3 counter" data-count="58">0</span>k
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3 counter" data-count="700">0</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3 counter" data-count="40">0</span>+
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3 counter" data-count="20">0</span>
                            <p>Worldwide Branch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Award winning patient care</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-laboratory text-lg"></i>
                            <h4 class="mt-3 mb-3">Laboratory services</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-heart-beat-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Heart Disease</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-tooth text-lg"></i>
                            <h4 class="mt-3 mb-3">Dental Care</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-crutch text-lg"></i>
                            <h4 class="mt-3 mb-3">Body Surgery</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-brain-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-dna-alt-1 text-lg"></i>
                            <h4 class="mt-3 mb-3">Gynecology</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="{{ asset('frontend/images/about/img-3.jpg') }}" alt="" class="img-fluid">
                        <div class="emergency">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 ">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Contact Us</h2>
                        <form class="appoinment-form form" id="contactForm">
                            <div class="form-group mb-2">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name"
                                    name="name" value="{{ old('name') }}">
                                <span id="nameError" class="text-danger"></span>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email"
                                    name="email" value="{{ old('email') }}">
                                <span id="emailError" class="text-danger"></span>

                            </div>
                            <div class="form-group mb-2">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone"
                                    name="phone" value="{{ old('phone') }}">
                                <span id="phoneError" class="text-danger"></span>

                            </div>
                            <div class="form-group mb-2">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="subject"
                                    name="subject" value="{{ old('subject') }}">
                                <span id="subjectError" class="text-danger"></span>

                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" for="message" rows="5" name="message">{{ old('message') }}</textarea>
                                <span id="messageError" class="text-danger"></span>
                            </div>
                            <button type="button" class="btn btn-primary text-capitalize"
                                id="submitForm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>We served over 5000+ Patients</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 testimonial-wrap-2">
                    <div class="testimonial-block style-2  gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb1.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info ">
                            <h4>Amazing service!</h4>
                            <span>John Partho</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb2.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Expert doctors!</h4>
                            <span>Mullar Sarth</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb3.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Good Support!</h4>
                            <span>Kolis Mullar</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>

                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb4.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Nice Environment!</h4>
                            <span>Partho Sarothi</span>
                            <p class="mt-4">
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>

                    <div class="testimonial-block style-2  gray-bg">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('frontend/images/team/test-thumb1.jpg') }}" alt=""
                                class="img-fluid">
                        </div>

                        <div class="client-info">
                            <h4>Modern Service!</h4>
                            <span>Kolis Mullar</span>
                            <p>
                                They provide great service facilty consectetur adipisicing elit. Itaque rem,
                                praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                            </p>
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Partners who support us</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clients-logo">
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/5.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/6.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/6.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/5.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('frontend/images/about/6.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                            veritatis eveniet distinctio possimus.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Surgery </a></li>
                            <li><a href="#!">Wome's Health</a></li>
                            <li><a href="#!">Radiology</a></li>
                            <li><a href="#!">Cardioc</a></li>
                            <li><a href="#!">Medicine</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#!">Terms & Conditions</a></li>
                            <li><a href="#!">Privacy Policy</a></li>
                            <li><a href="#!">Company Support </a></li>
                            <li><a href="#!">FAQuestions</a></li>
                            <li><a href="#!">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="mailto:support@email.com">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            Copyright &copy; 2021, Designed &amp; Developed by <a
                                href="https://themefisher.com/">Themefisher</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Your Email address" required>
                                <button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop scroll-top-to" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--
    Essential Scripts
    =====================================-->
    <script src="{{ asset('frontend/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/shuffle/shuffle.min.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- toastify --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <script src="{{ asset('frontend/js/script.js') }}"></script>


    <script>
        $(document).ready(function() {
            // =====setup csrf token======
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            // ========ADDING DATA TO DB(POST)=============//
            var createFormData = $('#contactForm')[0];
            $('#submitForm').click(function() {

                // setting empty text on error message
                $('#nameError').html('');
                $('#emailError').html('');
                $('#phoneError').html('');
                $('#messageError').html('');
                $('#subjectError').html('');
                // getting form data
                var formData = new FormData(createFormData);
                // console.log(formData);
                $.ajax({
                    url: "{{ route('store.contact') }}",
                    method: 'POST',
                    processData: false,
                    contentType: false,
                    data: formData,

                    success: function(response) {
                        // clear form after successfully submitting
                        $('#contactForm')[0].reset();
                        // success message
                        Toastify({
                            text: 'Form submitted successfully!',
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            color: "white",
                            gravity: "bottom",
                            position: 'right',
                            backgroundColor: "green",
                            stopOnFocus: true,
                        }).showToast();
                    },
                    error: function(error) {
                        let errorMessage = error.responseJSON.errors;
                        // displaying error message below input field
                        if (errorMessage.name) {
                            $('#nameError').html(errorMessage.name[0]);
                        }
                        if (errorMessage.email) {
                            $('#emailError').html(errorMessage.email[0]);
                        }
                        if (errorMessage.phone) {
                            $('#phoneError').html(errorMessage.phone[0]);
                        }
                        if (errorMessage.message) {
                            $('#messageError').html(errorMessage.message[0]);
                        }
                        if (errorMessage.subject) {
                            $('#subjectError').html(errorMessage.subject[0]);
                        }
                    }
                });
            });
            // ======================================================//
        });
    </script>

</body>

</html>
