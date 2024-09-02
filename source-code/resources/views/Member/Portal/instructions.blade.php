@extends('layouts.Member.master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Instructions</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/portal')}}">Portal member</a></li>
                <li class="breadcrumb-item active text-primary">Instructions</li>
            </ol>
    </div>
</div>
<!-- Header End --><br><br>

<!-- Instructions Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <!-- Baris Pertama -->
            <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                    <img src="{{asset('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                    <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                        <h5 class="mb-4">Product Photos</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" target="_blank">View Online</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                    <img src="{{asset('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                    <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                        <h5 class="mb-4">Product Photos</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" target="_blank">View Online</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                    <img src="{{asset('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                    <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                        <h5 class="mb-4">Product Photos</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" target="_blank">View Online</a>
                    </div>
                </div>
            </div>

            <!-- Baris Kedua -->
            <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                    <img src="{{asset('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                    <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                        <h5 class="mb-4">Product Photos</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" target="_blank">View Online</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                    <img src="{{asset('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                    <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                        <h5 class="mb-4">Product Photos</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" target="_blank">View Online</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                    <img src="{{asset('assets/img/portal/katalog.jpeg')}}" class="img-fluid rounded-top w-100" alt="">
                    <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                        <h5 class="mb-4">Product Photos</h5>
                        <p class="mb-4">11.3 MB</p>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" download="compro.pdf" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Download PDF</a>
                        <a href="{{asset('assets/img/portal/compro.pdf')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2" target="_blank">View Online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instructions End -->
@endsection
