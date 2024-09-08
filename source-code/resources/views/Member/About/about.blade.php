@extends('layouts.member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">About Us</h4>
                        <h4 class="display-3 mb-4" style="font-size: 50px;">
                            {{ $company->nama_perusahaan ?? 'Arkamaya Guna Saharsa' }}</h4>
                        <p class="mb-4" style="text-align: justify;">
                            {{ $company->sejarah_singkat ?? ' ' }}
                        </p>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vision Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Defining Our Purpose</h4>
                </div>
                <h1 class="display-3 mb-4">Vision & Mission</h1>
            </div>
            <div class="row g-12 justify-content-center d-flex">
                <div class="col-md-12 col-lg-6 col-xl-6 d-flex" style="margin-bottom: 0.5rem;">
                    <div class="team-item rounded flex-fill"
                        style="flex-direction: column; height: 100%; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4"
                            style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <h5>VISION</h5>
                            <p class="mb-0" style="font-weight: bold;">{{ $company->visi ?? ' ' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 d-flex" style="margin-bottom: 0.5rem;">
                    <div class="team-item rounded flex-fill"
                        style=" flex-direction: column; height: 100%; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4"
                            style="flex: 1; display: flex; flex-direction: column; justify-content: center;">
                            <h5>MISSION</h5>
                            <p class="mb-0" style="font-weight: bold;">{{ $company->misi ?? ' ' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision End -->


<!-- Partner Section Start -->
<div class="container-fluid service mb-5">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Work Together</h4>
            </div>
            <h1 class="display-3 mb-4">Our Partner</h1>
        </div>
        <div class="container overflow-hidden">
            <div class="row gy-4">
                @foreach ($partners as $key => $p)
                <div class="col-6 col-md-4 col-xl-3 text-center partner-item {{ $key >= 8 ? 'd-none' : '' }}">
                    <div class="bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->name }}" width="100%" height="100" style="object-fit:contain;">
                    </div>
                </div>
                @endforeach
            </div>
            @if($partners->count() > 8)
            <div class="text-center mt-4">
                <button id="show-more-partners" class="btn btn-primary">Selanjutnya</button>
                <button id="show-less-partners" class="btn btn-secondary d-none">Kembali</button>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Partner Section End -->

<!-- Value Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Core Beliefs</h4>
            </div>
            <h1 class="display-3 mb-4">Company Value</h1>
        </div>

        <!-- Responsive Values Section -->
        <div class="row g-4 justify-content-center">
            @php
            // Sample data for the loop, replace with dynamic data if necessary
            $values = [
                ['title' => 'Move Quickly', 'image' => 'value (1).png', 'description' => 'Acting with urgency, we remove obstacles that hinder high-priority initiatives, addressing your needs today instead of waiting until next week.'],
                ['title' => 'Innovation', 'image' => 'value (2).png', 'description' => 'Create value through product innovation and improvement and build relationships with customers to better understand and meet their needs.'],
                ['title' => 'Independence', 'image' => 'value (3).png', 'description' => 'Flexibly meet both short-term and long-term customer needs by making timely decisions, focusing on growth, and pursuing new opportunities.'],
                ['title' => 'Quality', 'image' => 'value (4).png', 'description' => 'We take pride in providing high-value products and services to ensure customer satisfaction and the future growth of our employees and company.'],
                ['title' => 'Customer Satisfaction', 'image' => 'value (5).png', 'description' => 'We deliver exceptional service with flexible scheduling, quality products, and innovative solutions, adding value for both customers and the company.'],
                ['title' => 'Respect', 'image' => 'value (6).png', 'description' => 'We treat everyone with dignity, value diverse perspectives, and create an environment where all ideas and contributions are welcome.'],
            ];
            @endphp

            @foreach($values as $key => $value)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item p-4 h-100" style="height: 400; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="feature-icon mb-4 text-center d-flex align-items-center justify-content-center">
                        <div class="p-3 d-inline-flex bg-white rounded-circle" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                            <img src="{{ asset('assets/img/about/' . $value['image']) }}" alt="Icon" style="width: 100px; height: 100px; object-fit: cover;">
                        </div>
                    </div>                    
                    <div class="feature-content text-center">
                        <h5 class="mb-4 font-weight-bold">{{ $value['title'] }}</h5>
                        <p class="mb-0">{{ $value['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Value End -->

<!-- Custom CSS -->
<style>
    /* Feature item consistent height */
    .feature-item {
        background-color: #fff;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Icon and Image styling */
    .feature-item img {
        max-width: 100%;
        object-fit: cover;
    }

    /* Hover effect on feature items */
    .feature-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* Responsive Behavior */
    @media (max-width: 768px) {
        .feature-item {
            min-height: 300px;
        }
    }
</style>


    <!-- Sales Channel Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Strengthening Partnerships</h4>
                </div>
                <h1 class="display-3 mb-4">Our Sales Channel's</h1>
            </div>
            <div class="row g-12 justify-content-center d-flex">
                <div class="col-md-12 col-lg-6 col-xl-4 d-flex"style="margin-bottom: 0.5rem;">
                    <div class="team-item rounded flex-fill">
                        <a href="{{ $company->ekatalog ?? ' ' }}" target="_blank">
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/img/e-katalog.png') }}" alt="Whatsapp Contact"
                                        style="width: 55%; height: 50px; margin-bottom: 10px;">
                                </div>
                                <p class="mb-0 mt-3" style="margin-top: 15px; font-weight: bold; font-size: 18px;">Goverment E-Commerce</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4 d-flex" style="margin-bottom: 0.5rem;">
                    <div class="team-item rounded flex-fill">
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="fa fa-globe fa-3x text-success text-dark"></i>
                                <h5 style="font-weight: bold; font-size: 28px; margin-left: 15px;">www.labtek.id</h5>
                            </div>
                            <p class="mb-0 mt-2" style="font-size: 14px;">Official Website</p>
                            <p class="mb-0" style="font-weight: bold; font-size: 18px;">Website</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-4 d-flex" style="margin-bottom: 0.5rem;">
                    <a href="{{ $company->no_wa ?? ' ' }}">
                        <div class="team-item rounded flex-fill">
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-whatsapp fa-3x text-success text-dark"></i>
                                    <h5 style="font-weight: bold; font-size: 28px; margin-left: 15px;">
                                        {{ $company->no_wa ?? ' ' }}</h5>
                                </div>
                                <p class="mb-0 mt-2" style="font-size: 13px;">Official Whatsapp
                                    {{ $company->nama_perusahaan ?? ' ' }}</p>
                                <p class="mb-0" style="font-weight: bold; font-size: 18px;">Broadcast Message</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sales Channel End -->

    <!-- Map Start -->
    <div class="container"
        style="
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px;
    background-color: #fff;
    text-align: center; ">

        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Presenting Our Esteemed Customer</h4>
            </div>
            <h1 class="display-3 mb-4">Our Valued Customer</h1>
        </div>
        <hr>

        <div id="umalo" style=" width: 100%; height: 600px; border-radius: 10px; overflow: hidden;"></div>
    </div> <br> <br>
    <!-- Map End -->

    <!-- Include Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        // Inisialisasi peta
        var map = L.map('umalo').setView([-2.548926, 118.0148634], 5); // Pusat Indonesia

        //tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Fungsi untuk menambahkan marker dengan info window
        function addMarker(lat, lng, title, description, address, image) {
            var marker = L.marker([lat, lng]).addTo(map);

            // Popup konten marker
            marker.bindPopup(`
            <div class="info-window">
                <h3 class="popup-title">${title}</h3>
                <img src="${image}" alt="${title}" class="popup-image">
                <p class="popup-description">${description}</p>
                <p class="popup-address">${address}</p>
            </div>
        `);

            // Menambahkan label kecil yang muncul saat hover
            marker.bindTooltip(`<div>${title}</div>`, {
                permanent: false,
                direction: 'top',
                offset: [0, -20],
                className: 'marker-tooltip'
            });
            marker.on('mouseover', function(e) {
                this.openTooltip();
            });
            marker.on('mouseout', function(e) {
                this.closeTooltip();
            });
        }

        // Fetch lokasi dari backend
        fetch("{{ url('/locations') }}")
            .then(response => response.json())
            .then(data => {
                console.log(data); // untuk debugging
                data.forEach(location => {
                    addMarker(location.latitude, location.longitude, location.name, location.description,
                        location.address, location.image);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>

    <style>
        .marker-tooltip {
            background-color: #b3d9ff;
            border: 1px solid #80b3ff;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            font-size: 12px;
            color: #333;
        }

        .info-window img.popup-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 5px;
        }

        .popup-title {
            font-size: 20px;
            color: black;
            font-weight: bold;
        }

        .popup-description,
        .popup-address {
            font-size: 12px;
            color: #333;
            margin-top: 10px;
            text-align: justify;
        }

        /* Media query untuk perangkat dengan lebar maksimal 768px */
        @media (max-width: 768px) {
            .info-window {
                padding: 10px;
            }

            .popup-title {
                font-size: 18px;
            }

            .popup-description,
            .popup-address {
                font-size: 10px;
            }

            .info-window img.popup-image {
                margin-bottom: 5px
            }
        }

        /* Media query untuk perangkat dengan lebar maksimal 480px */
        @media (max-width: 480px) {
            .popup-title {
                font-size: 16px;
            }

            .popup-description,
            .popup-address {
                font-size: 9px;
            }
        }
    </style>
    <!-- Map End -->

    <script>
        document.getElementById('show-more-partners').addEventListener('click', function() {
            document.querySelectorAll('.partner-item.d-none').forEach(function(item) {
                item.classList.remove('d-none');
            });
            this.style.display = 'none';
            document.getElementById('show-less-partners').classList.remove('d-none');
        });
    
        document.getElementById('show-less-partners').addEventListener('click', function() {
            document.querySelectorAll('.partner-item').forEach(function(item, index) {
                if (index >= 8) {
                    item.classList.add('d-none');
                }
            });
            this.classList.add('d-none');
            document.getElementById('show-more-partners').style.display = 'inline-block';
        });
    
        document.getElementById('show-more-principals').addEventListener('click', function() {
            document.querySelectorAll('.principal-item.d-none').forEach(function(item) {
                item.classList.remove('d-none');
            });
            this.style.display = 'none';
            document.getElementById('show-less-principals').classList.remove('d-none');
        });
    
        document.getElementById('show-less-principals').addEventListener('click', function() {
            document.querySelectorAll('.principal-item').forEach(function(item, index) {
                if (index >= 10) {
                    item.classList.add('d-none');
                }
            });
            this.classList.add('d-none');
            document.getElementById('show-more-principals').style.display = 'inline-block';
        });
    </script>
@endsection
