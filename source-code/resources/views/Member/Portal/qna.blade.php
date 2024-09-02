@extends('layouts.Member.master')

@section('content')
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Have any problem?</h4>
                </div>
                <h1 class="display-3 mb-4">Questions and answer</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="accordion" id="qnaAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What is the purpose of the portal?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#qnaAccordion">
                                    <div class="accordion-body">
                                        The portal is designed to provide exclusive access to resources, tools, and support
                                        tailored for our members.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I access my account?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#qnaAccordion">
                                    <div class="accordion-body">
                                        You can access your account by clicking the login button at the top right of the
                                        portal and entering your credentials.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How can I contact support?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#qnaAccordion">
                                    <div class="accordion-body">
                                        You can contact support by visiting the 'Contact Us' page and filling out the form
                                        or by calling our customer service number.
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
