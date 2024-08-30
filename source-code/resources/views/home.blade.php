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
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Place an order</a>
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
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Place an order</a>
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
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/about">Abous Us More</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Product Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Product</h4>
                </div>
                <h1 class="display-3 mb-4">Elevate your lifestyle with our top-quality solutions.</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                            <img src="{{ asset('assets/img/activity-1.jpg') }}"
                                 class="img-fluid w-100"
                                 style="transition: transform 0.3s ease;"
                                 alt=""
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h5>Hydraulics
                            <span class="arrow"
                                  style="display: inline-block; transition: transform 0.3s ease;"
                                  onmouseover="this.textContent='—>'"
                                  onmouseout="this.textContent='→'">→</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                            <img src="{{ asset('assets/img/activity-1.jpg') }}"
                                 class="img-fluid w-100"
                                 style="transition: transform 0.3s ease;"
                                 alt=""
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h5>Concrete
                            <span class="arrow"
                                  style="display: inline-block; transition: transform 0.3s ease;"
                                  onmouseover="this.textContent='—>'"
                                  onmouseout="this.textContent='→'">→</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                            <img src="{{ asset('assets/img/activity-1.jpg') }}"
                                 class="img-fluid w-100"
                                 style="transition: transform 0.3s ease;"
                                 alt=""
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h5>Soil
                            <span class="arrow"
                                  style="display: inline-block; transition: transform 0.3s ease;"
                                  onmouseover="this.textContent='—>'"
                                  onmouseout="this.textContent='→'">→</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <div class="blog-img" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                            <img src="{{ asset('assets/img/activity-1.jpg') }}"
                                 class="img-fluid w-100"
                                 style="transition: transform 0.3s ease;"
                                 alt=""
                                 onmouseover="this.style.transform='scale(1.1)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <h5>Asphalt
                            <span class="arrow"
                                  style="display: inline-block; transition: transform 0.3s ease;"
                                  onmouseover="this.textContent='—>'"
                                  onmouseout="this.textContent='→'">→</span>
                        </h5>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/about">All Product</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Ecommerce Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our E-commerce</h4>
                </div>
                <h1 class="display-3 mb-4">Explore more our product</h1>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <h4 class="mb-3">E-commerce Labtek :</h4>
                    <div class="row g-3">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                                <div class="service-img rounded-top">
                                    <img src="{{ asset('assets/img/about/brand-1.png') }}" class="img-fluid w-100"
                                        style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mb-4">
                    <h4 class="mb-3">E-commerce Labverse :</h4>
                    <div class="row g-3">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                                <div class="service-img rounded-top">
                                    <img src="{{ asset('assets/img/about/brand-2.png') }}" class="img-fluid w-100"
                                        style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ecommerce End -->
@endsection
