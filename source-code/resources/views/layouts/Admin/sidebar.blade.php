<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="navbar brand" class="navbar-brand" width="120" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Member -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Member</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Member</p>
                        <span class="badge badge-success">3</span>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('members.index') }}">
                                    <span class="sub-item">Member</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- produk Manage -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Produk</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#produk">
                        <i class="fas fa-user"></i> <!-- Ikon pengguna (user) -->
                        <p>produk</p>
                        <span class="badge badge-success">2</span>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="produk">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.produk.index') }}">
                                    <span class="sub-item">Produk</span>
                                </a>
                        </ul>
                    </div>
                </li>

                <!-- Pantau -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Pantau</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#monitoring">
                        <i class="fas fa-box"></i>
                        <p>Monitoring</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="monitoring">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.monitoring.index') }}">
                                    <span class="sub-item">Monitoring</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Section -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Section</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sliders-section">
                        <i class="fas fa-sliders-h"></i> <!-- Ikon slider -->
                        <p>Slider</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sliders-section">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.slider.index') }}">
                                    <span class="sub-item">Slider</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#activity-section">
                        <i class="fas fa-calendar-alt"></i> <!-- Ikon aktivitas -->
                        <p>Activity</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="activity-section">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.activity.index') }}">
                                    <span class="sub-item">Activity</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#brand-section">
                        <i class="fas fa-calendar-alt"></i> <!-- Ikon aktivitas -->
                        <p>brand</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="brand-section">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.brand.index') }}">
                                    <span class="sub-item">brand</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Information -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Information</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#contact">
                        <i class="fas fa-phone"></i> <!-- Ikon telepon -->
                        <p>Contact</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="contact">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Contact</span>
                                </a>
                        </ul>
                    </div>
                </li>

                <!-- FAQ -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">FAQ</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#faq">
                        <i class="fas fa-question-circle"></i>
                        <p>FAQ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="faq">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.faq.index') }}">
                                    <span class="sub-item">FAQ</span>
                                </a>
                        </ul>
                    </div>
                </li>

                <!-- Master Data -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-database"></i> <!-- Ikon database -->
                        <p>Master Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('bidangperusahaan.index') }}">
                                    <span class="sub-item">Bidang Perusahaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.kategori.index') }}">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('parameter.index') }}">
                                    <span class="sub-item">Parameter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">PPN</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Materai</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
