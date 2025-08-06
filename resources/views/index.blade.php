<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Code By Abdullah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Abdulla Al Faruqi - Personal Portfolio">
    <meta name="keywords" content="Laravel Developer, Web Developer, Portfolio, Personal Website">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('logo/favicon_code_by_abdullah.png') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Lightbox -->
    <link href="{{ asset('frontend/css/tobii.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icon -->
    <link href="{{ asset('frontend/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- SLIDER -->
    <link rel="stylesheet" href="{{ asset('frontend/css/tiny-slider.css') }}" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt">
    <link href="{{ asset('frontend/css/colors/default.css') }}" rel="stylesheet" id="color-opt">

    <style>
        .bg-home {
            display: flex;
            align-items: center;
            min-height: 100vh;
            /* or whatever height you prefer */
        }

        .bg-home .bg-blur {
            /* background-image: url('frontend/images/home/02.jpeg'); */
            background-color: #0b1120;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 75%;
            /* filter: blur(6px); */
            /* opacity: 0.3; */
            z-index: 1;
        }

        /* Default navbar styles */
        .navbar-custom {
            transition: all 0.3s ease;
        }

        .navbar-custom .nav-link {
            color: white !important;
            /* Default text color */
        }

        /* Sticky navbar styles */
        .navbar-custom.sticky {
            background-color: white !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom.sticky .nav-link {
            color: #495057 !important;
            /* Text color when sticky */
        }

        .navbar-custom.sticky .navbar-brand h6 {
            color: #495057 !important;
        }

        .navbar-custom.sticky .social-icon a {
            color: #495057 !important;
        }

        #about, #resume, #home p {
            text-align: justify !important;
        }

        .contact-card-hover {
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .contact-card-hover:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18), 0 1.5px 6px rgba(0, 0, 0, 0.10);
            transform: translateY(-6px) scale(1.03);
            z-index: 2;
        }

        .timeline-page .timeline-item .event .timeline-subtitle {
            text-align: justify !important;
         }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar Start -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h6 class="text-primary">Code By Abdullah</h6>
                <!-- <img src="images/logo.png" class="logo-light-mode" alt="">
                    <img src="images/logo-light.png" class="logo-dark-mode" alt=""> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="menu" class="fea icon-md"></span>
            </button><!--end button-->

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul id="navbar-navlist" class="navbar-nav navbar-nav-link mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#home">Home</a>
                    </li><!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#services">Services</a>
                    </li><!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#resume">Resume</a>
                    </li><!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Projects</a>
                    </li><!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Blog</a>
                    </li><!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#contact">Contact</a>
                    </li><!--end nav item-->

                </ul>

                <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon">
                    <li class="list-inline-item text-light"><a href="https://www.facebook.com/abdullacse" target="_blank"><i
                                class="mdi mdi-facebook"></i></a></li>
                    <li class="list-inline-item text-light"><a href="https://x.com/AbdullaFar65480" target="_blank"><i
                                class="mdi mdi-twitter"></i></a></li>
                    <li class="list-inline-item text-light"><a href="https://www.instagram.com/abdullaalfaruq103694" target="_blank"><i
                                class="mdi mdi-instagram"></i></a></li>
                    <li class="list-inline-item text-light">
                        <a href="https://www.linkedin.com/in/abdullacse/" target="_blank"><i class="mdi mdi-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item text-light">
                        <a href="https://github.com/abdullaweb" target="_blank"><i class="mdi mdi-github"></i></a>
                    </li>
                </ul>
            </div>
        </div><!--end container-->
    </nav><!--end navbar-->
    <!-- Navbar End -->

    <!-- HOME START-->
    <section class="bg-home d-table w-100 h-50 position-relative" id="home">
        <!-- Background Image with Blur -->
        <div class="bg-blur"></div>
        <div class="container position-relative content-layer" style="z-index:2;">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="title-heading">
                        <h6 class="sub-title text-light">Looking for a Software Developer!</h6>
                        <h1 class="heading text-light mb-3">I'm Abdulla Al Faruq</h1>
                        <p class="para-desc text-light">
                            I'm a Software and Web Developer with over 3 years of experience, skilled in managing all phases of the development lifecycle for dynamic web applications. I specialize in building responsive, user-friendly, and scalable web solutions using modern technologies.

                        </p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary rounded mb-2 me-2">Hire me</a>
                            <a href="javascript:void(0)"
                                class="btn btn-outline-primary rounded mb-2 text-primary">Download CV <i
                                    data-feather="download" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('frontend/images/Abdullah.png') }}" class="img-fluid d-none d-lg-block" alt="Abdulla Al Faruq">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- HOME END-->

    <!-- About Start -->
    <section class="pb-3" id="about" style="margin-top: -200px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5" data-aos="fade-right">
                    <div class="about-hero">
                        <img src="{{ asset('frontend/images/Abdullah-hero.png') }}"
                            class="img-fluid mx-auto d-block about-tween position-relative" alt="">
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0" data-aos="fade-left">
                    <div class="section-title mb-0 ms-lg-5 ms-md-3">
                        <h4 class="title text-primary mb-3">Abdulla Al Faruq</h4>
                        <h6 class="designation mb-3">I'm a Passionate <span class="text-primary">Software
                                Developer</span></h6>
                        <p class="text-dark">Obviously, I’m a dedicated Software Developer and Web Developer with over 3 years of hands-on experience. Skilled in every phase of the web development cycle, I specialize in creating dynamic, responsive, and performance-driven web applications using Laravel and PHP
                        </p>
                        <p class="text-dark"> My focus is on writing clean, maintainable code and delivering user-centric solutions that are both functional and intuitive—built to meet real-world needs with clarity and purpose.</p>
                        <img src="images/sign.png" height="22" alt="">
                        <!-- <div class="mt-4">
                            <a href="#projects" class="btn btn-primary mouse-down">View Portfolio</a>
                        </div> -->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <div class="position-relative">
                            <h4 class="title text-uppercase mb-4">Skills & Technologies</h4>

                            <div>
                                <div class="title-box"></div>
                                <div class="title-line"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row mt-5">
                @php
                    $skills = [
                        ['name' => 'Laravel', 'icon' => 'code'],
                        ['name' => 'PHP', 'icon' => 'terminal'],
                        ['name' => 'MySQL', 'icon' => 'database'],
                        ['name' => 'HTML5', 'icon' => 'layout'],
                        ['name' => 'CSS3', 'icon' => 'feather'],
                        ['name' => 'JavaScript', 'icon' => 'cpu'],
                        ['name' => 'jQuery', 'icon' => 'refresh-cw'],
                        ['name' => 'AJAX', 'icon' => 'zap'],
                        ['name' => 'Bootstrap', 'icon' => 'layers'],
                        ['name' => 'Blade Template', 'icon' => 'file'],
                        ['name' => 'API (REST/JSON)', 'icon' => 'share-2'],
                        ['name' => 'Git / GitHub', 'icon' => 'git-branch'],
                        ['name' => 'VS Code', 'icon' => 'monitor'],
                        ['name' => 'Postman', 'icon' => 'send'],
                        ['name' => 'Composer', 'icon' => 'package'],
                        ['name' => 'Authentication', 'icon' => 'shield'],
                        ['name' => 'Debugging', 'icon' => 'alert-octagon'],
                        ['name' => 'Deployment', 'icon' => 'upload-cloud'],
                        ['name' => 'Security', 'icon' => 'shield'],
                        ['name' => 'Payment Integration', 'icon' => 'credit-card'],
                        ['name' => 'Livewire', 'icon' => 'activity'],
                        ['name' => 'Tailwind CSS', 'icon' => 'wind'],
                        ['name' => 'Docker', 'icon' => 'box'],
                        ['name' => 'Figma', 'icon' => 'image'],
                    ];
                @endphp


                @foreach ($skills as $skill)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 shadow" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                        <div class="skill-item text-center p-3 rounded border bg-white h-100 shadow">
                            <div class="icon-wrapper mb-2">
                                <span
                                    class="d-inline-flex align-items-center justify-content-center rounded-circle bg-grey bg-opacity-25"
                                    style="width:48px;height:48px;">
                                    <i data-feather="{{ $skill['icon'] }}" class="icon fea icon-lg text-dark"></i>
                                </span>
                            </div>
                            <div class="skill-name mt-2">
                                <span class="fw-semibold text-dark">{{ $skill['name'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div><!--end container-->
    </section>
    <!-- About end -->

    <!-- Services Start -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <div class="position-relative">
                            <h4 class="title text-uppercase mb-4">What Do I Offer ?</h4>
                            <div>
                                <div class="title-box"></div>
                                <div class="title-line"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            @php
                $services = [
                    [
                        'icon' => 'code',
                        'title' => 'Company Portfolio Development',
                        'desc' => 'Professional portfolio websites for businesses, agencies, and individuals using Laravel.'
                    ],
                    [
                        'icon' => 'shopping-cart',
                        'title' => 'E-commerce Solutions',
                        'desc' => 'Custom online stores, product catalogs, and secure payment integration.'
                    ],
                    [
                        'icon' => 'users',
                        'title' => 'Membership & User Management',
                        'desc' => 'User registration, authentication, roles, and permissions for web applications.'
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Database Design & Optimization',
                        'desc' => 'Efficient MySQL database architecture, migrations, and Eloquent ORM.'
                    ],
                    [
                        'icon' => 'cloud',
                        'title' => 'Deployment & Hosting',
                        'desc' => 'Deploy Laravel projects to shared hosting, VPS, or cloud platforms.'
                    ],
                    [
                        'icon' => 'git-branch',
                        'title' => 'Version Control & Collaboration',
                        'desc' => 'Git/GitHub workflow for collaborative and reliable code management.'
                    ],
                    [
                        'icon' => 'layers',
                        'title' => 'POS & Inventory Solutions',
                        'desc' => 'Custom Point of Sale (POS) and inventory management systems for retail and business operations.'
                    ],
                    [
                        'icon' => 'package',
                        'title' => 'Software Solutions',
                        'desc' => 'Tailored software applications including ERP, CRM, and business automation tools.'
                    ],
                    [
                        'icon' => 'activity',
                        'title' => 'Maintenance & Support',
                        'desc' => 'Ongoing website maintenance, bug fixes, updates, and technical support for Laravel projects.'
                    ],
                ];
            @endphp
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="service-wrapper rounded position-relative text-center border border-footer p-4 pt-5 pb-5 shadow">
                            <div class="icon text-primary">
                                <i data-feather="{{ $service['icon'] }}" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">{{ $service['title'] }}</h5>
                                <p class="text-dark mt-3 mb-0">{{ $service['desc'] }}</p>
                            </div>
                            <div class="big-icon">
                                <i data-feather="{{ $service['icon'] }}" class="fea icons"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- Services End -->

    <!-- Resume Start -->
    <section class="section" id="resume">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <div class="position-relative">
                            <h4 class="title text-uppercase mb-4">Work Participation</h4>
                            <div>
                                <div class="title-box"></div>
                                <div class="title-line"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div class="main-icon rounded-pill text-center mt-4 pt-2">
                        <i data-feather="star" class="fea icon-md-sm"></i>
                    </div>
                    <div class="timeline-page pt-2 position-relative">
                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div
                                        class="duration date-label-left border rounded p-2 ps-4 pe-4 position-relative shadow text-start">
                                        2022 - Present</div>
                                </div><!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="event event-description-right rounded p-4 border float-left text-start">
                                        <h5 class="title mb-0 text-capitalize">Software Developer</h5>
                                        <small class="company">Nebula IT Bangladesh</small>
                                        <p class="timeline-subtitle mt-3 mb-0 text-dark">
                                            Led development of multiple Laravel-based software projects, including custom ERP and CRM systems. Designed RESTful APIs, implemented authentication, and integrated third-party services. Delivered scalable solutions for business automation, inventory management, and payment processing.
                                        </p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                    <div class="event event-description-left rounded p-4 border float-left text-end">
                                        <h5 class="title mb-0 text-capitalize">Web Developer</h5>
                                        <small class="company">Nebulas IT Limited</small>
                                        <p class="timeline-subtitle mt-3 mb-0 text-dark">
                                            Developed and maintained dynamic web applications using Laravel and PHP. Implemented RESTful APIs, user authentication, and database management with MySQL. Collaborated with cross-functional teams to deliver scalable solutions and optimized code for performance and security.
                                        </p>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                    <div
                                        class="duration duration-right rounded border p-2 ps-4 pe-4 position-relative shadow text-start">
                                        2021 - 2022</div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end timeline item-->

                        <div class="timeline-item mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div
                                        class="duration date-label-left border rounded p-2 ps-4 pe-4 position-relative shadow text-start">
                                        2019 - 2020</div>
                                </div><!--end col-->
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="event event-description-right rounded p-4 border float-left text-start">
                                        <h5 class="title mb-0 text-capitalize">Lecturer</h5>
                                        <small class="company">Rajshahi Engineering College</small>
                                        <p class="timeline-subtitle mt-3 mb-0 text-dark">
                                            Taught core programming courses including Data Structures, Algorithms, and Web Development. Guided students in hands-on projects using PHP, Laravel, and modern web technologies. Focused on practical coding skills, problem-solving, and best practices for software engineering.
                                        </p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end timeline item-->
                    </div><!--end timeline page-->
                    <!-- TIMELINE END -->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Skill End -->

    <!-- Contact Start -->
    <section class="section pb-0 bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <div class="position-relative">
                            <h4 class="title text-uppercase mb-4">Contact Me</h4>
                            <div>
                                <div class="title-box"></div>
                                <div class="title-line"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="card p-3 shadow contact-card-hover">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Phone</h5>
                                <p class="text-dark">Feel free to call me for any web development or Laravel project
                                    inquiries.</p>
                                <a href="tel:+8801745740814" class="text-primary">+8801745740814</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="card p-3 shadow contact-card-hover">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Email</h5>
                                <p class="text-dark">Feel free to email me for any web development or Laravel project
                                    inquiries.</p>
                                <a href="mailto:contact@example.com" class="text-primary">faruqnitbd@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="card p-3 shadow contact-card-hover">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Location</h5>
                                <p class="text-dark">1288 B/2, Senpara Parbata, Mirpur-10,<br> Dhaka-1216, Bangladesh
                                </p>
                                <a href="#" class="text-primary">View on Google map</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section pt-5 mt-3 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="custom-form mb-sm-30">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text"
                                                    class="form-control border rounded" placeholder="First Name :">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email"
                                                    class="form-control border rounded" placeholder="Your email :">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input name="subject" id="subject" class="form-control border rounded"
                                                    placeholder="Your subject :">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <textarea name="comments" id="comments" rows="4"
                                            class="form-control border rounded" placeholder="Your Message :"></textarea>
                                    </div>
                                </div><!--end col-->

                                <div class="col-sm-12 text-end">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!--end custom-form-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Contact End -->

    <!-- Footer Start -->
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <a href="#">
                        <h3 class="text-light">Code By Abdullah</h3>
                    </a>
                    <p class="para-desc mx-auto mt-5">Obviously I'm a Software Developer. Experienced with all stages of
                        the development cycle for dynamic web projects.</p>
                    <ul class="list-unstyled mb-0 mt-4 social-icon">
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i
                                    class="mdi mdi-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <footer class="footer footer-bar bg-dark">
        <div class="container text-foot text-center">
            <p class="mb-0">©
                <script>
                    document.write(new Date().getFullYear())
                </script> Code <i class="mdi mdi-heart text-danger"></i> by <a href="https://abdullaalfaruq.com"
                    target="_blank" class="text-reset">Abdullah</a>.
            </p>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/gumshoe.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('frontend/js/tiny-slider.js') }}"></script>
    <!-- Lightbox -->
    <script src="{{ asset('frontend/js/tobii.min.js') }}"></script>
    <script src="{{ asset('frontend/js/shuffle.min.js') }}"></script>
    <!-- Feather icon -->
    <script src="{{ asset('frontend/js/feather.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('frontend/js/plugins.init.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>

    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) { // Adjust this value as needed
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        });

        // Initialize Feather icons after DOM is loaded
        document.addEventListener('DOMContentLoaded', function () {
            if (window.feather) {
                feather.replace();
            }
        });
    </script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,       // Animation duration
            easing: 'ease-in-out', // Easing type
            once: true,          // Animate only once
        });
    </script>

    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>

</html>
