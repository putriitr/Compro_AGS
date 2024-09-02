@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Document And Certifications</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/portal')}}">Portal member</a></li>
                <li class="breadcrumb-item active text-primary">Document And Certifications</li>
            </ol>
    </div>
</div>
<!-- Header End --><br><br>

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-2"></div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top">
                    <img src="{{asset('assets/img/portal/sertif.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-content rounded-bottom bg-light p-4">
                    <div class="service-content-inner">
                        <h5 class="mb-4">Document And Certifications</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">View Online</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>

<!-- Services End -->
@endsection
