@extends('layouts.member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Product</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Product</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

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
                @foreach($kategori as $kategoris)
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded">
                        <a href="{{ route('product.by_category', $kategoris->id) }}" class="text-decoration-none">
                            <div class="blog-img" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                                <img src="{{ asset($kategoris->gambar) }}"
                                     class="img-fluid w-100"
                                     style="transition: transform 0.3s ease;"
                                     alt="{{ $kategoris->nama }}"
                                     onmouseover="this.style.transform='scale(1.1)'"
                                     onmouseout="this.style.transform='scale(1)'">
                            </div>
                            <h5 class="text-dark">{{ $kategoris->nama }}
                                <span class="arrow"
                                      style="display: inline-block; transition: transform 0.3s ease;"
                                      onmouseover="this.textContent='—>'"
                                      onmouseout="this.textContent='→'">→</span>
                            </h5>
                        </a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <!-- Product End -->
@endsection
