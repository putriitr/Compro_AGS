@extends('layouts.member.master')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        @foreach ($sliders as $slider)
            <div class="header-carousel-item">
                <img src="{{ asset($slider->image_url) }}" class="img-fluid w-100" alt="Image">
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
</div>

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ $company && $company->about_gambar ? asset('storage/' . $company->about_gambar) : asset('assets/img/about.jpeg') }}" class="img-fluid rounded w-100"
                            style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="{{ $company && $company->logo ? asset('storage/' . $company->logo) : asset('assets/img/about.jpeg') }}" class="img-fluid rounded-circle w-100 h-100"
                                alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="display-3 mb-4" style="font-size: 50px;">{{ $company->nama_perusahaan }}</h4>
                        <p class="mb-4" style="text-align: justify;">
                            {{ $company->sejarah_singkat }}
                        </p>
                        <div class="col-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('about') }}">Abous Us More</a>
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
                        @foreach ($brand as $item)
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item rounded">
                                    <div class="service-img rounded-top">
                                        <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('assets/img/about.jpeg') }}" 
                                            class="img-fluid w-100" alt="Brand Image" style="border-radius: 40%;">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-1"></div>
                <!-- Our Partner Section -->
                <div class="col-lg-8">
                    <h4 class="mb-4">Our Partner:</h4>
                    <div class="row g-4">
                        <!-- First Row -->
                        @foreach ($partners as $partner)
                            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-img rounded-top">
                                    <img src="{{ $partner->gambar ? asset('storage/' . $partner->gambar) : asset('assets/img/about/partner-1.jpg') }}" 
                                        class="img-fluid w-100"
                                        style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF;" 
                                        alt="Partner Image">
                                </div>
                            </div>
                        @endforeach

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
                @foreach($principals->chunk(6) as $principalChunk) <!-- Membagi dalam grup berisi 6 item -->
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                @foreach($principalChunk as $principal)
                                    <img src="{{ asset('storage/' . $principal->gambar) }}" class="img-fluid" alt="{{ $principal->nama }}" style="width: 200px; height: auto;">
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
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
                @foreach ($brand as $brands)
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-3">E-commerce Labtek :</h4>
                    <div class="row g-3">
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="{{ $brands->url ?? '#' }}" target="_blank">
                            <div class="service-item rounded" >
                                <div class="service-img rounded-top">
                                        <img src="{{ $brands->gambar ? asset('storage/' . $brands->gambar) : asset('assets/img/about/brands-1.png') }}" 
                                             class="img-fluid w-100"
                                             style="border-top-left-radius: 30px; border-top-right-radius: 30px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; border: 2px solid #416BBF; " 
                                             alt="Brand Image">
                                </div>
                            </div>
                        </a>

                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>            
        </div>
    </div>
    <!-- Ecommerce End -->
@endsection
