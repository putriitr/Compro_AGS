<body>
    {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}

    <!-- Topbar Start -->

    @php
        // Fetch the first record from the compro_parameter table
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
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>Office Location
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
                                (021) {{ $compro->no_telepon }}
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
                        {{-- <a href="#"><small class="me-3"><i
                                class="fa fa-user text-primary me-2"></i>Register</small></a> --}}
                        @if (auth()->check())
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="companyDropdown" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <small class=""><i
                                            class="fa fa-user text-primary me-2"></i>{{ auth()->user()->nama_perusahaan }}</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                                    <!-- Show Profile -->
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                                            <i class="fa fa-user me-2"></i>Profile
                                        </a>
                                    </li>

                                    <!-- Logout -->
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out-alt me-2"></i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Logout Form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}"><small
                                    class="btn btn-primary rounded-pill text-white py-1 px-1"><i
                                        class="fa fa-sign-in-alt text-white me-2"></i>Member Login</small></a>
                        @endif
                        {{-- <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><small><i
                                    class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div> --}}
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
    <div class="container-fluid position-relative p-5 shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center p-0">
                <img src="{{ asset('assets/img/AGS-logo.png') }}" alt="Logo" class="me-2"
                    style="height: 50px; width: auto;">
                <span class="fs-5 text-dark">{{ $compro->nama_perusahaan ?? 'PT Arkamaya Guna Saharsa' }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('activity') }}" class="nav-item nav-link">Activity</a>
                    <a href="{{ route('product') }}" class="nav-item nav-link">Product</a>
                    @if ($brand->isNotEmpty())
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">E-Commerce</a>
                            <div class="dropdown-menu m-0">
                                @foreach ($brand as $singleBrand)
                                    <a href="{{ $singleBrand->url }}"
                                        class="dropdown-item">{{ $singleBrand->nama }}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @foreach ($activeMetas as $type => $metas)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown-{{ $type }}"
                                aria-expanded="false" data-bs-toggle="dropdown">{{ ucfirst($type) }}</a>
                            <div class="dropdown-menu m-0 " aria-labelledby="navbarDropdown-{{ $type }}">
                                @foreach ($metas as $meta)
                                    <a href="{{ route('member.meta.show', $meta->slug) }}"
                                        class="dropdown-item">{{ $meta->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    @auth
                        <a href="{{ route('portal') }}" class="nav-item nav-link active">Member Portal</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
