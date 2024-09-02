@extends('layouts.Member.master')

@section('content')
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">How-To Guides for Our Products</h4>
            </div>
            <h1 class="display-3 mb-4">Video Tutorials</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 style="font-size: 1.5rem;" class="mb-4 text-start">Hydraulics Product Tutorial</h4>
                        <div class="accordion" id="hydraulicsAccordion">
                            <!-- Pertanyaan 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Advance Flume Test Open Channel 12.5 M
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#hydraulicsAccordion">
                                    <div class="accordion-body">
                                        <video class="w-100" controls>
                                            <source src="{{asset('assets/videos/register.mp4')}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <!-- Pertanyaan 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Basic Hydraulic Bench with Hydrostatic Pressure and Bernoulli's Theorem
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#hydraulicsAccordion">
                                    <div class="accordion-body">
                                        <video class="w-100" controls>
                                            <source src="{{asset('assets/videos/reset-password.mp4')}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <!-- Pertanyaan 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Drainage and Seepage Tank
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#hydraulicsAccordion">
                                    <div class="accordion-body">
                                        <video class="w-100" controls>
                                            <source src="{{asset('assets/videos/update-profile.mp4')}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 style="font-size: 1.5rem;" class="mb-4 text-start">Concrete Product Tutorial</h4>
                        <div class="accordion" id="concreteAccordion">
                            <!-- Pertanyaan 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Concrete Water Impermeability Apparatus 3 Place
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#concreteAccordion">
                                    <div class="accordion-body">
                                        <video class="w-100" controls>
                                            <source src="{{asset('assets/videos/register.mp4')}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <!-- Pertanyaan 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Concrete Water Impermeability Apparatus 6 Place
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#concreteAccordion">
                                    <div class="accordion-body">
                                        <video class="w-100" controls>
                                            <source src="{{asset('assets/videos/reset-password.mp4')}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <!-- Pertanyaan 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Concrete Water Permeability Apparatus 4 Place
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#concreteAccordion">
                                    <div class="accordion-body">
                                        <video class="w-100" controls>
                                            <source src="{{asset('assets/videos/update-profile.mp4')}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection
