<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AGS Company Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Office Location</a>
                    <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>(021)
                        85850913</a>
                    <a href="#" class="text-light me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>info@labtek.id</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    {{-- <a href="#"><small class="me-3"><i
                                class="fa fa-user text-primary me-2"></i>Register</small></a> --}}
                    <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                    <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-linkedin-in text-white"></i></a>
                    <a href="#"><small class="me-3"><i class="fa fa-sign-in-alt text-primary me-2"></i>Member Login</small></a>
                    {{-- <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <div class="row col-lg-12 justify-content-center">
                <!-- Empty Columns on Left and Right -->
                <div class="col-lg-1"></div>

                <!-- Centered Logo, Menu, and Search (col-lg-10) -->
                <div class="col-lg-10 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="/" class="navbar-brand p-0">
                            <img src="{{ asset('assets/img/AGS-logo.png') }}" alt="Logo" style="height: 150px; width: 100%;">
                        </a>
                        <span class="ms-2" style="font-weight: bold; font-size: 15px;">PT ARKAMAYA <br>GUNA SAHARSA</span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/about" class="nav-item nav-link active">About</a>
                            <a href="/service" class="nav-item nav-link">Product</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown">E-Commerce</a>
                                <div class="dropdown-menu m-0">
                                    <a href="appointment.html" class="dropdown-item">Labtek</a>
                                    <a href="feature.html" class="dropdown-item">Labverse</a>
                                </div>
                            </div>
                            <a href="/contact" class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="input-group" style="width: 200px;">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search"
                            style="background-color: white;">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Empty Column on Right -->
                <div class="col-lg-1"></div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">About Us</h4>
                        <h4 class="display-3 mb-4" style="font-size: 50px;">PT Arkamaya Guna Saharsa</h4>
                        <p class="mb-4" style="text-align: justify;">
                            Arkamaya Guna Saharsa is a technology start-up driven by innovation, dedicated to empowering
                            industries with
                            transformative solutions. We specialize in optimizing industry performance through our
                            brands, Labtek and
                            Labverse. These products are designed to enhance effectiveness, efficiency, and quality,
                            providing added value
                            through cutting-edge technology. Our mission is to deliver superior results by either
                            introducing new
                            technological advancements or reimagining existing solutions to meet evolving industry
                            needs.
                        </p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Innovative
                                Technology Solutions</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Empowering Brands
                            </p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Commitment to
                                Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ asset('assets/img/company-1.jpg') }}" class="img-fluid rounded w-100"
                            style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="{{ asset('assets/img/about.jpeg') }}"
                                class="img-fluid rounded-circle w-100 h-100" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vision Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Company Purpose</h4>
                </div>
                <h1 class="display-3 mb-4">Vision & Mission</h1>
            </div>
            <div class="row g-12 justify-content-center d-flex">
                <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
                    <div class="team-item rounded flex-fill">
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>VISION</h5>
                            <p class="mb-0" style="font-weight: bold;">The technology start-up
                                that provides innovative solutions for
                                growing up and adding value to your
                                industry.</p><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
                    <div class="team-item rounded flex-fill">
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>MISSION</h5>
                            <p class="mb-0" style="font-weight: bold;">By providing the best
                                service through innovation
                                so that you get the right
                                solution in meeting every
                                need in detail orientation
                                and also a reliable
                                guarantee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision End -->

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Values</h4>
                </div>
                <h1 class="display-3 mb-4">Company Value</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img src="{{ asset('assets/img/about/value (1).png') }}" alt="Icon"
                                        class="img-fluid" style="width: 80px; height: 80px; border-radius: 50%;">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Move Quickly</h5>
                                <p class="mb-0">Acting with urgency, we remove obstacles that hinder high-priority
                                    initiatives, addressing your needs today instead of waiting until next week.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img src="{{ asset('assets/img/about/value (2).png') }}" alt="Icon"
                                        class="img-fluid" style="width: 80px; height: 80px; border-radius: 50%;">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Innovation</h5>
                                <p class="mb-0">Create value through product innovation and improvement and build
                                    relationships with customers
                                    to better understand and meet their needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img src="{{ asset('assets/img/about/value (3).png') }}" alt="Icon"
                                        class="img-fluid" style="width: 80px; height: 80px; border-radius: 50%;">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Independence</h5>
                                <p class="mb-0">Remain flexible to meet both immediate and long-term customer needs
                                    by making timely decisions, focusing
                                    on growth, and pursuing new opportunities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img src="{{ asset('assets/img/about/value (1).png') }}" alt="Icon"
                                        class="img-fluid" style="width: 80px; height: 80px; border-radius: 50%;">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Quality</h5>
                                <p class="mb-0">We take pride in providing high-value products and services that
                                    ensure customer satisfaction and the future growth of our employees and company.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img src="{{ asset('assets/img/about/value (2).png') }}" alt="Icon"
                                        class="img-fluid" style="width: 80px; height: 80px; border-radius: 50%;">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Customer Satisfaction</h5>
                                <p class="mb-0">We deliver exceptional service with flexible scheduling, quality
                                    products, and innovative solutions, adding value for both customers and the company.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <img src="{{ asset('assets/img/about/value (3).png') }}" alt="Icon"
                                        class="img-fluid" style="width: 80px; height: 80px; border-radius: 50%;">
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Respect</h5>
                                <p class="mb-0">We treat everyone with dignity, value diverse perspectives, and
                                    create an environment where all ideas and contributions are welcome.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Activities</h4>
                </div>
                <h1 class="display-3 mb-4">Exhibition & Presentation</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/activity-1.jpg') }}" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> August 2022
                                </p>
                            </div>
                            <a href="#" class="h4">Exhibition</a>
                            <p class="my-4">In August 2022, the company brought together industry leaders at the
                                Activities Exhibition held at JCC Senayan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/activity-2.jpg') }}" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 12-14 July
                                    2023</p>
                            </div>
                            <a href="#" class="h4">Exhibition</a>
                            <p class="my-4">From July 12-14, 2023, the company showcased groundbreaking innovations
                                at the Activities Exhibition at the Jogja (DIY) Expo Center.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/activity-3.jpg') }}" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 10-14 Oct
                                    2023</p>
                            </div>
                            <a href="#" class="h4">Exhibition</a>
                            <p class="my-4">The company created unforgettable experiences at the Activities
                                Exhibition in Labuan Bajo from October 10-14, 2023.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item rounded">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/activity-4.jpg') }}" class="img-fluid w-100"
                                alt="Image">
                        </div>
                        <div class="blog-centent p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 12-14 July
                                    2023</p>
                            </div>
                            <a href="#" class="h4">Presentation</a>
                            <p class="my-4">The company engaged customers with insightful presentations during the
                                Activities Presentation event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Work Together</h4>
                </div>
                <h1 class="display-3 mb-4">Our Brand & Partner</h1>
            </div>
            <div class="row">
                <!-- Our Brand Section -->
                <div class="col-lg-3 mb-4">
                    <h4 class="mb-3">Our Brand:</h4>
                    <div class="row g-3">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                                <div class="service-img rounded-top">
                                    <img src="{{ asset('assets/img/about/1.png') }}" class="img-fluid w-100"
                                        alt="" style="border-radius: 40%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded">
                                <div class="service-img rounded-top">
                                    <img src="{{ asset('assets/img/about/2.png') }}" class="img-fluid w-100"
                                        alt="" style="border-radius: 40%; ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <!-- Our Partner Section -->
                <div class="col-lg-8">
                    <h4 class="mb-4">Our Partner:</h4>
                    <div class="row g-4">
                        <!-- First Row -->
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-1.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-2.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-3.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-4.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>

                        <!-- Second Row -->
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-5.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-6.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-7.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/partner-8.jpg') }}"
                                    class="img-fluid w-100"
                                    style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title mb-5">
                <div class="sub-style">
                    <h4 class="sub-title text-white px-3 mb-0">Principal</h4>
                </div>
                <h1 class="display-3 mb-4">Our Principal's</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-inner p-5">
                        <div class="testimonial-inner-img mb-4">
                            <img src="{{ asset('assets/img/logos/p1.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p2.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p3.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p4.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p5.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p6.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-inner p-5">
                        <div class="testimonial-inner-img mb-4">
                            <img src="{{ asset('assets/img/logos/p7.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p8.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p9.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p10.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p11.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p12.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-inner p-5">
                        <div class="testimonial-inner-img mb-4">
                            <img src="{{ asset('assets/img/logos/p13.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p14.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p15.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p16.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p17.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p18.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-inner p-5">
                        <div class="testimonial-inner-img mb-4">
                            <img src="{{ asset('assets/img/logos/p19.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p20.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p21.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p22.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p23.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p24.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-inner p-5">
                        <div class="testimonial-inner-img mb-4">
                            <img src="{{ asset('assets/img/logos/p25.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p26.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/img/logos/p27.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="{{ asset('assets/img/AGS-logo.png') }}" alt="Logo"
                                    class="img-fluid" style="width: 100%; height: 150px; border-radius: 50%;">
                            </div>
                        </div>
                        <h6 class="text-white mb-6">

                            PT Arkamaya Guna Saharsa
                        </h6>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Quick Links</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Our Activity</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Our Product</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> Jl. Matraman Raya No.148,
                            RT.1/RW.4, Kb. Manggis, Kec. Matraman, Kota Jakarta Timur, DKI Jakarta 13150</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@labtek.id</a>
                        <a href=""><i class="fas fa-phone me-2"></i> (021) 85850913</a>
                        <a href="" class="mb-3"><i class="fab fa-whatsapp fa-2x"></i> +62 852-1791-1213</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your
                            Site Name</a>, All right reserved.</span>
                </div>
                {{-- <div class="col-md-6 text-center text-md-end text-white">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div> --}}
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
