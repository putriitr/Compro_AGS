<body>
    {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="container">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="https://maps.app.goo.gl/SHHrMvswyXJwMa3F6" class="text-light me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Office Location</a>
                    <a href="tel:+62185850913" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>(021)
                        85850913</a>
                    <a href="mailto:info@labtek.id" class="text-light me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>info@labtek.id</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    {{-- <a href="#"><small class="me-3"><i
                                class="fa fa-user text-primary me-2"></i>Register</small></a> --}}
                    <a href="https://www.instagram.com/lifeatags/" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                    <a href="https://www.linkedin.com/company/arkamaya-guna-saharsa/" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-linkedin-in text-white"></i></a>
                    @if(auth()->check())
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" id="companyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <small class=""><i class="fa fa-user text-primary me-2"></i>{{ auth()->user()->nama_perusahaan }}</small>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   <i class="fa fa-sign-out-alt me-2"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"><small class="me-3"><i class="fa fa-sign-in-alt text-primary me-2"></i>Member Login</small></a>
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

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <div class="row col-lg-12 justify-content-center">
                <!-- Empty Columns on Left and Right -->
                <div class="col-lg-1"></div>

                <!-- Centered Logo, Menu, and Search (col-lg-10) -->
                <div class="col-lg-10 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="/" class="navbar-brand p-0">
                            <img src="{{ asset('assets/img/AGS-logo.png') }}" alt="Logo" style="height: 150px; width: 100%;">
                        </a>
                        <span class="ms-2" style="font-weight: bold; font-size: 15px;">PT ARKAMAYA <br>GUNA SAHARSA</span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                            <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                            <a href="{{url('/product')}}" class="nav-item nav-link">Product</a>
                            <div class="{{url('nav-item dropdown')}}">
                                <a href="{{url('/ecommerce')}}" class="nav-link dropdown-toggle"
                                    data-bs-toggle="dropdown">E-Commerce</a>
                                <div class="dropdown-menu m-0">
                                    <a href="appointment.html" class="dropdown-item">Labtek</a>
                                    <a href="feature.html" class="dropdown-item">Labverse</a>
                                </div>
                            </div>
                            <a href="{{url('/contact')}}" class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="input-group" style="width: 200px;">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search"
                            style="background-color: white;">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Empty Column on Right -->
                <div class="col-lg-1"></div>
            </div>
        </nav>
    </div>
    </div>
    <!-- Navbar End -->
