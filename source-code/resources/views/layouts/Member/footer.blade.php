@php
// Fetch the first record from compro_parameter table
$compro = \App\Models\CompanyParameter::first();
@endphp

<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item d-flex flex-column">
                    <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded">
                            <img src="{{ $compro && $compro->logo ? asset('storage/' . $compro->logo) : asset('assets/img/about.jpeg') }}" alt="Logo"
                                class="img-fluid" style="width: 100%; height: 150px; border-radius: 50%;">
                        </div>
                    </div>
                    <h6 class="text-white mb-6">{{ $compro->nama_perusahaan??  "PT Arkamaya Guna Saharsa" }}</h6>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="{{ $compro->instagram??  "#" }}"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="{{ $compro->linkedin??  "#" }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Akses Cepat</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Tentang Kami</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Merek & Mitra</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Aktivitas Kami</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Temukan Produk</h4>
                    <a href="/category"><i class="fas fa-angle-right me-2"></i> Produk Kami</a>
                    <a href="{{url('/portal')}}"><i class="fas fa-angle-right me-2"></i> Masuk Member</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Labtek</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Labverse</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Informasi Kontak</h4>
                    <!-- Alamat -->
                    @if(!empty($compro->alamat))
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i> {{ $compro->alamat }}</a>
                    @else
                        <p><i class="fa fa-map-marker-alt me-2"></i> Address not available</p>
                    @endif

                    <!-- Email -->
                    @if(!empty($compro->email))
                        <a href="mailto:{{ $compro->email }}"><i class="fas fa-envelope me-2"></i> {{ $compro->email }}</a>
                    @else
                        <p><i class="fas fa-envelope me-2"></i> Email not available</p>
                    @endif

                    <!-- No Telepon -->
                    @if(!empty($compro->no_telepon))
                        <a href="tel:{{ $compro->no_telepon }}"><i class="fas fa-phone me-2"></i> {{ $compro->no_telepon }}</a>
                    @else
                        <p><i class="fas fa-phone me-2"></i> Phone not available</p>
                    @endif

                    <!-- WhatsApp -->
                    @if(!empty($compro->no_wa))
                        <a href="https://wa.me/{{ $compro->no_wa }}" class="mb-3">
                            <i class="fab fa-whatsapp fa-2x"></i> +{{ $compro->no_wa }}
                        </a>
                    @else
                        <p><i class="fab fa-whatsapp fa-2x"></i> WhatsApp not available</p>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>2024</a>, PT Arkamaya Guna Saharsa</span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top" style="display: none;"><i class="fa fa-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
