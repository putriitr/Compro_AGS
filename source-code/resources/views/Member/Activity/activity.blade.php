@extends('layouts.member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Company Activity</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Activity</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

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
                                <a href="{{ route('activity') }}#act-1" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
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
                                <a href="{{ route('activity') }}#act-2" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
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
                                <a href="{{ route('activity') }}#act-3" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
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
                                <a href="{{ route('activity') }}#act-4" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Activity End -->

    <!-- Activity 2 Start -->
    <div id="act-1" class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Exhibition Activities</h4>
                        <h1 class="display-4 mb-4">JCC Senayan Exhibition</h1>
                        <p class="mb-4">In August 2022, our company organized an exhibition titled Activities Exhibition at JCC Senayan. The event aims to bring together industry leaders and facilitate the exchange of ideas and innovations in related fields. The exhibition featured a variety of exciting activities and valuable opportunities for networking.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Industry Leader Presentations</h5>
                                        <p class="mb-0">Prominent industry leaders provide insights into the latest trends and innovations, offering valuable perspectives to attendees.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Latest Tech Exhibition</h5>
                                        <p class="mb-0">The exhibition features cutting-edge technologies and products, allowing visitors to engage with experts and explore solutions to enhance industry efficiency.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="{{ asset('assets/img/activity-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="act-2" class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Exhibition Activities</h4>
                        <h1 class="display-4 mb-4">Jogja Expo Center</h1>
                        <p class="mb-4">On July 12-14, 2023, our company showcased breakthrough innovations at the Jogja (DIY) Expo Center. The event aims to introduce the latest technology and interact directly with customers and industry partners.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Latest Technology</h5>
                                        <p class="mb-0">Showcasing cutting-edge technologies designed to improve efficiency and productivity in various industrial sectors.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Interactive Presentation</h5>
                                        <p class="mb-0">Organize presentation sessions that actively engage the audience, providing in-depth insights into the latest trends and solutions in technology.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="{{ asset('assets/img/activity-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="act-3" class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Exhibition Activities</h4>
                        <h1 class="display-4 mb-4">Creating Unforgettable Experiences</h1>
                        <p class="mb-4">In October 2023, the company hosted an exceptional Activities Exhibition in Labuan Bajo, held from the 10th to the 14th. This event was designed to leave a lasting impression by showcasing innovative solutions and fostering meaningful connections within the industry.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Cutting-Edge Technologies</h5>
                                        <p class="mb-0">Our exhibition featured the latest advancements in technology, providing visitors with hands-on experiences and insights into future trends.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Networking Opportunities</h5>
                                        <p class="mb-0">Attendees had the chance to network with industry leaders and peers, facilitating valuable exchanges and building potential collaborations.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Immersive Demonstrations</h5>
                                        <p class="mb-0">Interactive demonstrations allowed visitors to engage directly with new products, enhancing their understanding and appreciation of our innovations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="{{ asset('assets/img/activity-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="act-4" class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Presentation Activities</h4>
                        <h1 class="display-4 mb-4">Company Presentation</h1>
                        <p class="mb-4">During the Activities Presentation event from July 12-14, 2023, our company presented various interesting and informative presentations, providing valuable insights to our customers.</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Innovative Solutions</h5>
                                        <p class="mb-0">Presentations on the latest innovative solutions that can change the way the industry operates, providing an in-depth understanding of cutting-edge technologies.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Expert Insights</h5>
                                        <p class="mb-0">Special sessions with industry experts who share their insights and in-depth analysis of the latest trends, helping attendees stay at the forefront of technological developments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="{{ asset('assets/img/activity-4.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Activity 2 End -->
@endsection
