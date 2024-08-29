@extends('layouts.customer.master')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ asset('assets/img/company-1.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3">
                    <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">Simplifying Industries
                    </h5>
                    <h1 class="display-1 text-capitalize text-white mb-4">Empowering Your Business With Excellence</h1>
                    <p class="mb-5 fs-5">We optimize your output by delivering innovative, high-quality, advanced technology
                        and value-added products solutions through new or reimagined technology products and services.</p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ asset('assets/img/company.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3">
                    <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Simplifying Industries
                    </h5>
                    <h1 class="display-1 text-capitalize text-white mb-4">Empowering Your Business With Excellence</h1>
                    <p class="mb-5 fs-5 animated slideInDown">We optimize your output by delivering innovative,
                        high-quality, advanced technology and value-added products solutions through new or reimagined
                        technology products and services.</p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">About Us</h4>
                </div>
                <h1 class="display-3 mb-4">PT Arkamaya Guna Saharsa</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/service-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Our Purpose</h5>
                                <p class="mb-4">We provide any kind solutions for growing up your industry.
                                    We prepare two products that will definitely solve
                                    your problem.</p><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/service-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Our Core Beliefs</h5>
                                <ul class="mb-4">
                                    <li>Move Quickly</li>
                                    <li>Innovation</li>
                                    <li>Independence</li>
                                    <li>Quality</li>
                                    <li>Customer Satisfaction</li>
                                    <li>Respect</li><br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Our Partner's</h5>
                                <p class="mb-4">We build our strong brands and work with trusted partners and principals
                                    to deliver solutions to enhance your business by ensuring highest quality & innovation
                                    in every product we offer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Our Activities</h5>
                                <p class="mb-4">Through exhibitions and presentations, our company has consistently
                                    showcases many innovative products and creates impactful experiences at various events.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Abous Us More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                            style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="{{ asset('assets/img/about.jpeg') }}" class="img-fluid rounded-circle w-100 h-100"
                                alt="Image">
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Product</h4>
                </div>
                <h1 class="display-3 mb-4">Elevate your lifestyle with our top-quality solutions.</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br>
                                <h5 class="mb-4">Hydraulics & Cement</h5>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h5 class="mb-4">Concrete & Asphalt</h5>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h5 class="mb-4">Soil & Aggregate</h5>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h6 class="mb-4">Construction & Engineering</h6>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h5 class="mb-4">Industrial & Maritime</h5>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h5 class="mb-4">Railway Systems</h5>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h5 class="mb-4">Geotechnics</h5>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid rounded w-100"
                                style="object-fit: cover; width: 100%; height: 100px;" alt="Image">
                            <div class="feature-content d-flex flex-column">
                                <br><h6 class="mb-4">Electronics & Machinery</h6>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our E-Commerce</h4>
                </div>
                <h1 class="display-3 mb-4">Explore More About Our Product</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{ asset ('assets/img/about-2.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>Full Name</h5>
                            <p class="mb-0">Message Physio Therapist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <div class="team-img rounded-top h-100">
                            <img src="{{ asset ('assets/img/about-2.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <h5>Full Name</h5>
                            <p class="mb-0">Rehabilitation Therapist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
