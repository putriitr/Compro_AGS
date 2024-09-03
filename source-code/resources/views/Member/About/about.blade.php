@extends('layouts.member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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
                        <img src="{{ asset('assets/img/about.jpeg') }}" class="img-fluid rounded-circle w-100 h-100"
                            alt="Image">
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
                <h4 class="sub-title px-3 mb-0">Defining Our Purpose</h4>
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

<!-- Value Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Core Beliefs</h4>
            </div>
            <h1 class="display-3 mb-4">Company Value</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 custom-col-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="{{ asset('assets/img/about/value (1).png') }}" alt="Icon" class="img-fluid"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
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
                                <img src="{{ asset('assets/img/about/value (2).png') }}" alt="Icon" class="img-fluid"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
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
                                <img src="{{ asset('assets/img/about/value (3).png') }}" alt="Icon" class="img-fluid"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Independence</h5>
                            <p class="mb-0">Flexibly meet both short- and long-term customer needs by making
                                timely decisions, focusing on growth, and pursuing new opportunities.</p>
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
                                <img src="{{ asset('assets/img/about/value (1).png') }}" alt="Icon" class="img-fluid"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Quality</h5>
                            <p class="mb-0">We take pride in providing high-value products and services to
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
                                <img src="{{ asset('assets/img/about/value (2).png') }}" alt="Icon" class="img-fluid"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
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
                                <img src="{{ asset('assets/img/about/value (3).png') }}" alt="Icon" class="img-fluid"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
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
<!-- Value End -->

<!-- Brand Start -->
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
                                <img src="{{ asset('assets/img/about/1.png') }}" class="img-fluid w-100" alt=""
                                    style="border-radius: 40%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                            <div class="service-img rounded-top">
                                <img src="{{ asset('assets/img/about/2.png') }}" class="img-fluid w-100" alt=""
                                    style="border-radius: 40%; ">
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
                            <img src="{{ asset('assets/img/about/partner-1.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-2.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-3.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-4.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-5.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-6.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-7.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-img rounded-top">
                            <img src="{{ asset('assets/img/about/partner-8.jpg') }}" class="img-fluid w-100"
                                style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->

<!-- Principal Start -->
<div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title mb-5">
            <div class="sub-style">
                <h4 class="sub-title text-white px-3 mb-0">Trusted Collaborations</h4>
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
<!-- Principal End -->

<!-- Activity Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Showcasing Our Expertise</h4>
            </div>
            <h1 class="display-3 mb-4">Exhibition & Presentation</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item rounded">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/activity-1.jpg') }}" class="img-fluid w-100" alt="Image">
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
                        <img src="{{ asset('assets/img/activity-2.jpg') }}" class="img-fluid w-100" alt="Image">
                    </div>
                    <div class="blog-centent p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 12-14 July
                                2023</p>
                        </div>
                        <a href="#" class="h4">Exhibition</a>
                        <p class="my-4">From July 12-14, 2023, the company showcased groundbreaking innovations
                            at the Jogja (DIY) Expo Center.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item rounded">
                    <div class="blog-img">
                        <img src="{{ asset('assets/img/activity-3.jpg') }}" class="img-fluid w-100" alt="Image">
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
                        <img src="{{ asset('assets/img/activity-4.jpg') }}" class="img-fluid w-100" alt="Image">
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
<!-- Activity End -->

<!-- Graphic Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Tracking Our Progress</h4>
            </div>
            <h1 class="display-3 mb-4">Graphic of Sales Turnover</h1>
        </div>
        <div class="row g-12 justify-content-center d-flex">
            <img src="{{ asset('assets/img/sales.png') }}" class="img-fluid w-100" alt="Image">
        </div>
    </div>
</div>
<!-- Graphic End -->

<!-- Sales Channel Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Strengthening Partnerships</h4>
            </div>
            <h1 class="display-3 mb-4">Our Sales Channel's</h1>
        </div>
        <div class="row g-12 justify-content-center d-flex">
            <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
                <div class="team-item rounded flex-fill">
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <img src="{{ asset('assets/img/e-katalog.png') }}" alt="Whatsapp Contact"
                            style="width: 55%; max-width: 200px;">
                        <p class="mb-0 mt-3" style="font-weight: bold; font-size: 18px;">Goverment E-Commerce</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
                <div class="team-item rounded flex-fill">
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa fa-globe fa-3x text-success text-dark"></i>
                            <h5 style="font-weight: bold; font-size: 28px; margin-left: 15px;">www.labtek.id</h5>
                        </div>
                        <p class="mb-0 mt-2" style="font-size: 14px;">Official Website</p>
                        <p class="mb-0" style="font-weight: bold; font-size: 18px;">Website</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 col-xl-4 d-flex">
                <div class="team-item rounded flex-fill">
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fab fa-whatsapp fa-3x text-success text-dark"></i>
                            <h5 style="font-weight: bold; font-size: 28px; margin-left: 15px;">+62 852-1791-1213</h5>
                        </div>
                        <p class="mb-0 mt-2" style="font-size: 13px;">Official Whatsapp Arkamaya Guna Saharsa</p>
                        <p class="mb-0" style="font-weight: bold; font-size: 18px;">Broadcast Message</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sales Channel End -->

<!-- Map Start -->
<div class="container" style="
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px;
    background-color: #fff;
    text-align: center; ">

    <h5>This is</h5>
    <h1 style="font-weight: bold; color: blue; ">Our Customers</h1>
    <hr>
    <div id="umalo" style=" width: 100%; height: 600px; border-radius: 10px; overflow: hidden;"></div>
</div> <br> <br>
<!-- Map End -->

<!-- Include Leaflet.js -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    // Inisialisasi peta
    var map = L.map('umalo').setView([-2.548926, 118.0148634], 5); // Pusat Indonesia

    //tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Fungsi untuk menambahkan marker dengan info window
    function addMarker(lat, lng, title, description, address, image) {
        var marker = L.marker([lat, lng]).addTo(map);

        // Popup konten marker
        marker.bindPopup(`
            <div class="info-window">
                <h3 class="popup-title">${title}</h3>
                <img src="${image}" alt="${title}" class="popup-image">
                <p class="popup-description">${description}</p>
                <p class="popup-address">${address}</p>
            </div>
        `);

        // Menambahkan label kecil yang muncul saat hover
        marker.bindTooltip(`<div>${title}</div>`, {
            permanent: false,
            direction: 'top',
            offset: [0, -20],
            className: 'marker-tooltip'
        });
        marker.on('mouseover', function (e) {
            this.openTooltip();
        });
        marker.on('mouseout', function (e) {
            this.closeTooltip();
        });
    }

    // Fetch lokasi dari backend
    fetch("{{url('/locations')}}")
        .then(response => response.json())
        .then(data => {
            console.log(data); // untuk debugging
            data.forEach(location => {
                addMarker(location.latitude, location.longitude, location.name, location.description, location.address, location.image);
            });
        })
        .catch(error => console.error('Error:', error));
</script>

<style>
    .marker-tooltip {
        background-color: #b3d9ff;
        border: 1px solid #80b3ff;
        padding: 5px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        font-size: 12px;
        color: #333;
    }

    .info-window img.popup-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    .popup-title {
        font-size: 20px;
        color: black;
        font-weight: bold;
    }

    .popup-description,
    .popup-address {
        font-size: 12px;
        color: #333;
        margin-top: 10px;
        text-align: justify;
    }

    /* Media query untuk perangkat dengan lebar maksimal 768px */
    @media (max-width: 768px) {
        .info-window {
            padding: 10px;
        }

        .popup-title {
            font-size: 18px;
        }

        .popup-description,
        .popup-address {
            font-size: 10px;
        }

        .info-window img.popup-image {
            margin-bottom: 5px
        }
    }

    /* Media query untuk perangkat dengan lebar maksimal 480px */
    @media (max-width: 480px) {
        .popup-title {
            font-size: 16px;
        }

        .popup-description,
        .popup-address {
            font-size: 9px;
        }
    }
</style>
<!-- Map End -->

@endsection
