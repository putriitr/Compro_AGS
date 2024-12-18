<body>
    <!-- Topbar Start -->
    @php
        $compro = \App\Models\CompanyParameter::first();
    @endphp


    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <!-- Maps / Office Location -->
                        @if (!empty($compro->maps))
                            <a href="{{ $compro->maps }}" class="text-light me-4" target="_blank">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>{{ __('messages.lokasi') }}
                            </a>
                        @else
                            <p class="text-light me-4">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>Office Location Not Available
                            </p>
                        @endif

                        <!-- Phone Number -->
                        @if (!empty($compro->no_telepon))
                            <a href="tel:+62{{ $compro->no_telepon }}" class="text-light me-4">
                                <i class="fas fa-phone-alt text-primary me-2"></i>
                                {{ $compro->no_telepon }}
                            </a>
                        @else
                            <p class="text-light me-4">
                                <i class="fas fa-phone-alt text-primary me-2"></i>Phone Number Not Available
                            </p>
                        @endif

                        <!-- Email -->
                        @if (!empty($compro->email))
                            <a href="mailto:{{ $compro->email }}" class="text-light me-0">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                {{ $compro->email }}
                            </a>
                        @else
                            <p class="text-light me-0">
                                <i class="fas fa-envelope text-primary me-2"></i>Email Not Available
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        @if (auth()->check())
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="companyDropdown" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <small><i
                                            class="fa fa-user text-primary me-2"></i>{{ auth()->user()->nama_perusahaan }}</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                                    <!-- Show Profile -->
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ auth()->user()->type === 'member' ? route('profile.show') : route('distributor.profile.show') }}">
                                            <i class="fa fa-user me-2"></i>{{ __('messages.profil') }}
                                        </a>


                                    </li>

                                    <!-- Logout -->
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out-alt me-2"></i>{{ __('messages.keluar') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Shopping Cart Icon -->
                            @auth
                                @if (Auth::user()->type === 'distributor')
                                    <div class="nav-item">
                                        <a href="{{ route('quotations.cart') }}" class="nav-link">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span id="cart-count" class="badge bg-primary rounded-pill">
                                                {{ session('quotation_cart') ? count(session('quotation_cart')) : 0 }}
                                            </span>
                                        </a>

                                    </div>
                                @endif
                            @endauth

                            <!-- Logout Form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}">
                                <small class="btn btn-primary rounded-pill text-white py-1 px-1" style="width: 120px;">
                                    <i class="fa fa-sign-in-alt text-white me-2"></i>{{ __('messages.masuk') }}
                                </small>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    @php
        $activeMetas = \App\Models\Meta::where('start_date', '<=', today())
            ->where('end_date', '>=', today())
            ->get()
            ->groupBy('type');

        $brand = \App\Models\BrandPartner::where('type', 'brand', 'nama')->get();
    @endphp

    <!-- Navbar & Hero Start -->
    <nav id="navbar1" class="navbar1">
        <div class="container-fluid position-relative p-5 shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center p-0">
                    <img src="{{ asset('assets/img/AGS-logo.png') }}" alt="Logo" class="me-2"
                        style="height: auto; width: 90px;">
                    <img src="{{ asset('images/catalogue.png') }}" alt="Logo" class="me-2"
                        style="height: auto; width: 150px; padding-left: 10px;">
                    {{-- <h6 class="fs-6 text-dark mb-9" style="font-weight: bold;">{{ $company->nama_perusahaan ?? 'Arkamaya Guna Saharsa' }}</h6> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link">{{ __('messages.home') }}</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">{{ __('messages.about') }}</a>
                        <a href="{{ route('activity') }}" class="nav-item nav-link">{{ __('messages.activity') }}</a>
                        <a href="{{ route('product.index') }}"
                            class="nav-item nav-link">{{ __('messages.products') }}</a>

                        <!-- E-commerce Dropdown -->
                        @if ($brand->isNotEmpty())
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="ecommerceDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('messages.ecommerce') }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ecommerceDropdown">
                                    @foreach ($brand as $singleBrand)
                                        <li>
                                            <a href="{{ strpos($singleBrand->url, 'http://') === 0 || strpos($singleBrand->url, 'https://') === 0 ? $singleBrand->url : 'http://' . $singleBrand->url }}"
                                                target="_blank" class="dropdown-item">{{ $singleBrand->nama }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @foreach ($activeMetas as $type => $metas)
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle"
                                    id="navbarDropdown-{{ $type }}" aria-expanded="false"
                                    data-bs-toggle="dropdown">{{ ucfirst($type) }}</a>
                                <div class="dropdown-menu m-0" aria-labelledby="navbarDropdown-{{ $type }}">
                                    @foreach ($metas as $meta)
                                        <a href="{{ route('member.meta.show', $meta->slug) }}"
                                            class="dropdown-item">{{ $meta->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        @auth
                            @if (session('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Peringatan:</strong> {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="memberDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('Portal') }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="memberDropdown">
                                    <li>
                                        <a href="{{ route('portal') }}"
                                            class="dropdown-item">{{ __('messages.portal_member') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('distribution') }}"
                                            class="dropdown-item">{{ __('messages.portal_distribution') }}</a>
                                    </li>
                                </ul>
                            </div>
                        @endauth

                        <a href="#footer-section" id="contact-link"
                            class="nav-item nav-link">{{ __('messages.contact_us') }}</a>

                        <!-- Dropdown for language selection -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                @if (LaravelLocalization::getCurrentLocale() == 'id')
                                    <img src="{{ asset('assets/kai/assets/img/flags/id.png') }}"
                                        alt="Bahasa Indonesia">
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                    <img src="{{ asset('assets/kai/assets/img/flags/us.png') }}" alt="English">
                                @else
                                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="{{ LaravelLocalization::getLocalizedURL('id') }}" class="dropdown-item">
                                    <img src="{{ asset('assets/kai/assets/img/flags/id.png') }}"
                                        alt="Bahasa Indonesia">
                                    {{ __('messages.bahasa') }}
                                </a>
                                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="dropdown-item">
                                    <img src="{{ asset('assets/kai/assets/img/flags/us.png') }}" alt="English">
                                    {{ __('messages.english') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!-- Navbar End -->

    <style>
        @media (min-width: 992px) {
            .navbar1 {
                position: sticky;
                top: 0;
                z-index: 100;
                width: 100%;
                transition: all 0.3s ease;
                z-index: 999;
            }

            .navbar1.fixed {
                position: fixed;
                top: 0;
                left: 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
        }

        /* For smaller screens (mobile), navbar is not sticky */
        @media (max-width: 991px) {
            .navbar1 {
                position: sticky;
                top: 0;
                z-index: 100;
                width: 100%;
                transition: all 0.3s ease;
                z-index: 999;
                background: white;
            }

            .navbar1.fixed {
                position: fixed;
                top: 0;
                left: 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
        }

        .navbar-nav .nav-link.active {
            color: #6196FF !important;
            border-bottom: 2px solid #6196FF;
            /* Underline */
            padding-bottom: 5px;
            /* Space for the underline */
        }
    </style>

    <script>
        // Activate the current nav item based on the URL
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const currentPath = window.location.pathname;

            navLinks.forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add('active');
                }
            });

            window.addEventListener('scroll', function() {
                const navbar = document.getElementById('navbar1');

                if (window.scrollY > 50) {
                    navbar.classList.add('fixed');
                } else {
                    navbar.classList.remove('fixed');
                }
            });
        });
    </script>
</body>
