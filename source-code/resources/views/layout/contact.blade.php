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
                    <a href="#"><small class="me-3"><i
                                class="fa fa-user text-primary me-2"></i>Register</small></a>
                    <a href="#"><small class="me-3"><i
                                class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <img src="{{ asset('assets/img/AGS-logo.png') }}" alt="Logo" style="height: 100px !important;">
            </a>PT Arkamaya Guna Saharsa
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link active">About</a>
                    <a href="/service" class="nav-item nav-link">Product</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">E-Commerce</a>
                        <div class="dropdown-menu m-0">
                            <a href="appointment.html" class="dropdown-item">Labtek</a>
                            <a href="feature.html" class="dropdown-item">Labverse</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="#"
                    class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Get
                    Started</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style mb-4">
                    <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
                </div>
            </div>

            <!-- Contact Details Start -->
            <div class="container-fluid">
                <div class="row text-center justify-content-center">
                    <!-- Phone -->
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-2">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                    style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-phone-alt fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-dark">Phone</h4>
                                <p class="mb-0 text-white">(021) 85850913</p>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                    style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-dark">Address</h4>
                                <p class="mb-0 text-white">Ruko Mitra Matraman A2 No. 3 Jakarta Timur, DKI Jakarta</p>
                            </div>
                        </div>
                    </div>

                    <!-- Work Time -->
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                    style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-clock fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-dark">Work Time</h4>
                                <p class="mb-0 text-white">08.00 am to 17.00 pm</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                    style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-envelope-open fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-dark">Email</h4>
                                <p class="mb-0 text-white">info@labtek.id</p>
                            </div>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3"
                                    style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-globe fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-dark">Website</h4>
                                <p class="mb-0 text-white">www.labtek.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Details End -->

            <!-- Map Start -->
            <div class="container-fluid py-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-10 col-xl-8 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" style="height: 400px; border: none;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.583185041489!2d106.8600596!3d-6.2114159!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f33d51cd6119%3A0x1bc64c80b9328ca6!2sPT.%20Arkamaya%20Guna%20Saharsa!5e0!3m2!1sid!2sid!4v1724830322086!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map End -->
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>Terapia</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem
                            dolores laudantium quia, qui similique
                        </p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Quick Links</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Our Activity</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Terapia Services</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Massage Therapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Rehabilitation</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
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
