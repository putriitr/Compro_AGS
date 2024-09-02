@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Portal Member</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active text-primary">My Portal Member</li>
            </ol>
    </div>
</div>
<!-- Header End --><br><br>

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Portal Member</h4>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{asset ('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Product Catalog</h5>
                            <a href="{{url('/catalog')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{ asset ('assets/img/portal/photos.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Product Photos</h5>
                            <a href="{{url('/photos')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{asset ('assets/img/portal/instructions.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Instructions</h5>
                            <a href="{{url('/instructions')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{ asset('assets/img/portal/tutorial.png')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Video Tutorials</h5>
                            <a href="{{url('/video')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{ asset ('assets/img/portal/CG.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Controller Generations</h5>
                            <a href="{{url('/cg')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{ asset ('assets/img/portal/sertif.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Document And Certifications</h5>
                            <a href="{{url('/doc')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded">
                   <div class="service-img rounded-top">
                        <img src="{{ asset ('assets/img/portal/qna.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                   </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">Questions And Answer</h5>
                            <a href="{{url('/qna')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
@endsection
