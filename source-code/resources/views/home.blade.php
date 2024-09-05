@extends('layouts.member.master')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        @foreach ($sliders as $slider)
            <div class="header-carousel-item">
                <img src="{{ asset('storage/' . $slider->image_url) }}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">
                            {{ $slider->subtitle }}
                        </h5>
                        <h1 class="display-1 text-capitalize text-white mb-4">
                            {{ $slider->title }}
                        </h1>
                        <p class="mb-5 fs-5">{{ $slider->description }}</p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ $slider->button_url }}">
                            {{ $slider->button_text }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

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
                        <div class="col-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/about">Abous Us More</a>
                        </div>
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
                @foreach ($kategori as $kategoris)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img"
                                style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                                <img src="{{ asset($kategoris->gambar) }}" class="img-fluid w-100"
                                    style="transition: transform 0.3s ease;" alt="{{ $kategoris->nama }}"
                                    onmouseover="this.style.transform='scale(1.1)'"
                                    onmouseout="this.style.transform='scale(1)'">
                            </div>
                            <h5>{{ $kategoris->nama }}
                                <span class="arrow" style="display: inline-block; transition: transform 0.3s ease;"
                                    onmouseover="this.textContent='—>'" onmouseout="this.textContent='→'">→</span>
                            </h5>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/about">All Product</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

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
