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
                        <img src="{{ $company && $company->about_gambar ? asset('storage/' . $company->about_gambar) : asset('assets/img/about.jpeg') }}"
                            class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="{{ $company && $company->logo ? asset('storage/' . $company->logo) : asset('assets/img/about.jpeg') }}"
                                class="img-fluid rounded-circle w-100 h-100" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="display-3 mb-4" style="font-size: 50px;">
                            {{ $company->nama_perusahaan ?? 'Arkamaya Guna Saharsa' }}</h4>
                        <p class="mb-4" style="text-align: justify;">
                            {{ $company->sejarah_singkat ?? ' ' }}
                        </p>
                        <div class="col-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('about') }}">Abous
                                Us More</a>
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
                    <h4 class="sub-title px-3 mb-0" style="font-weight: bold;">Our Product</h4>
                </div>
                <h1 class="display-3 mb-4" style="font-size: 2.5rem; font-weight: 700;">Elevate your lifestyle with our
                    top-quality solutions.</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($kategori as $kategoris)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded"
                            style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); padding: 20px; height: 400px; border-radius: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="blog-img"
                                style="overflow: hidden; border-radius: 15px; position: relative; flex: 1;">
                                <img src="{{ asset($kategoris->gambar) }}" class="img-fluid w-100"
                                    style="border-radius: 15px; width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                                    alt="{{ $kategoris->nama }}"
                                    onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0px 4px 15px rgba(0, 0, 0, 0.2)';"
                                    onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                            </div>
                            <h5
                                style="font-weight: bold; color: #343a40; font-size: 1rem; margin: 0; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                {{ $kategoris->nama }}
                                <span class="arrow"
                                    style="display: inline-block; font-size: 1.5rem; color: #007BFF; transition: transform 0.3s ease;"
                                    onmouseover="this.textContent='—>'" onmouseout="this.textContent='→'">→</span>
                            </h5>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('product') }}">See More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Product End -->

    <!-- Brand Start -->
    <!-- Partner Section Start -->
    <div class="container-fluid service">
        <div class="container">
            <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Work Together</h4>
                </div>
                <h1 class="display-3 mb-4">Our Partner</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-container">
                        <div class="logo-scroller partner-scroller">
                            @foreach ($partners as $pa)
                                <img src="{{ asset('storage/' . $pa->gambar) }}" alt="Google" class="logo">
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Section End -->

    <!-- Principal Section Start -->
    <div class="container-fluid wow zoomInDown" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Trusted Collaborations</h4>
                </div>
                <h1 class="display-3 mb-4">Our Principal's</h1>
            </div>
            <div class="logo-container">
                <div class="logo-scroller principal-scroller">
                    @foreach ($principals as $p)
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="Tesla" class="logo">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Principal Section End -->

    <!-- E-commerce Section Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our E-commerce</h4>
                </div>
                <h1 class="display-3 mb-4">Explore more our product</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="col-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                        <div class="logo-container text-center">
                            <div class="logo-static text-center"
                                style="display: flex; justify-content: center; flex-wrap: wrap;">
                                @foreach ($brand as $b)
                                    <a href="{{ $b->url }}"
                                        style="display: inline-block; margin: 15px; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                                        onmouseover="this.firstElementChild.style.transform='scale(1.2)'; this.firstElementChild.style.boxShadow='0px 4px 15px rgba(0, 0, 0, 0.2)';"
                                        onmouseout="this.firstElementChild.style.transform='scale(1)'; this.firstElementChild.style.boxShadow='none';">
                                        <img src="{{ asset('storage/' . $b->gambar) }}" alt="{{ $b->type }}"
                                            class="logo"
                                            style="width: 400px; height: auto; object-fit: contain; padding: 10px; border-radius: 8px; transition: transform 0.3s ease;">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- E-commerce Section End -->

    <style>
        .logo-container {
            width: 100%;
            overflow: hidden;
            background-color: #ffffff;
            padding: 10px 0;
        }

        .logo-scroller {
            display: flex;
            width: max-content;
        }

        /* Partner Section Animation */
        .partner-scroller {
            animation: scroll-right 10s linear infinite;
        }

        /* Principal Section Animation */
        .principal-scroller {
            animation: scroll-left 10s linear infinite;
        }

        /* Static section for E-commerce, no animation */
        .logo-static {
            display: flex;
            justify-content: center;
            /* Center the logos horizontally */
            align-items: center;
            /* Vertically align the logos */
            flex-wrap: wrap;
            /* Allow logos to wrap in mobile view */
        }

        .logo {
            width: 300px;
            margin-right: 20px;
            height: 120px;
            object-fit: contain;
        }

        @keyframes scroll-right {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(100%);
            }
        }

        @keyframes scroll-left {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* Media query for mobile view */
        @media (max-width: 768px) {
            .logo-static {
                flex-direction: column;
                /* Stack logos vertically in mobile view */
            }

            .logo {
                margin: 10px 0;
                /* Add vertical spacing between logos in mobile view */
            }
        }
    </style>

    <!-- Ecommerce End -->
@endsection
