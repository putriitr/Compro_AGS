@extends('layouts.member.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar Start -->
            <div class="col-lg-3">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="text-dark font-weight-bold">{{ __('messages.category') }}<i
                            class="fas fa-chevron-down ms-2"></i></h4>
                </div>

                <div class="mb-4 shadow-sm mt-n2">
                    <!-- Menampilkan 10 kategori pertama -->
                    <ul class="list-group">
                        @foreach ($kategori->take(10) as $kat)
                            <li class="list-group-item category-item text-center py-3 mb-2"
                                style="background-color: {{ $selectedCategory && $selectedCategory->id == $kat->id ? '#6196FF' : '#f8f9fa' }};
                                    color: {{ $selectedCategory && $selectedCategory->id == $kat->id ? '#fff' : '#000' }};"
                                onclick="window.location.href='{{ route('filterByCategory', $kat->id) }}'">
                                <strong>{{ $kat->nama }}</strong>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Tombol untuk melihat kategori selebihnya -->
                    @if ($kategori->count() > 10)
                        <button class="btn btn-link w-100 text-center mt-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#moreCategories" aria-expanded="false" aria-controls="moreCategories"
                            onclick="toggleButtonText(this)">
                            {{ __('messages.show_all_categories') }}
                        </button>

                        <!-- Dropdown kategori selebihnya -->
                        <div class="collapse" id="moreCategories">
                            <ul class="list-group mt-2">
                                @foreach ($kategori->slice(10) as $kat)
                                    <li class="list-group-item category-item text-center py-3 mb-2"
                                        style="background-color: {{ $selectedCategory && $selectedCategory->id == $kat->id ? '#6196FF' : '#f8f9fa' }};
                                               color: {{ $selectedCategory && $selectedCategory->id == $kat->id ? '#fff' : '#000' }};"
                                        onclick="window.location.href='{{ route('filterByCategory', $kat->id) }}'">
                                        <strong>{{ $kat->nama }}</strong>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Sidebar End -->

            <!-- Main Content Start -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between mb-4">
                    <div class="col-lg-6">
                        <form method="POST" action="{{ url('products/search') }}" class="d-flex align-items-center">
                            @csrf
                            <input type="text" name="keyword" id="find" placeholder="{{ __('messages.search') }}"
                                class="form-control bg-light shadow-sm" style="border-radius: 10px; padding: 12px;" />
                            <button type="submit" class="btn btn-primary ms-2 px-4"
                                style="padding: 12px; border: none; border-radius: 10px; background-color: #6196FF; color: white;">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 mt-n2">
                        <select class="form-select border-0 bg-light shadow-sm" style="border-radius: 10px; padding: 12px">
                            <option selected>{{ __('messages.sort_by') }}</option>
                            <option value="1">{{ __('messages.newest') }}</option>
                            <option value="2">{{ __('messages.latest') }}</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    @foreach ($produks as $produk)
                        <div class="col-md-4 mb-4">
                            <div class="card product-card shadow-sm"
                                style="overflow: hidden; transition: transform 0.3s ease; border-radius: 10px; height: 400px;">
                                <a href="{{ route('product.show', $produk->id) }}">
                                    <img src="{{ asset($produk->images->first()->gambar ?? 'assets/img/default.jpg') }}"
                                        class="card-img-top" alt="{{ $produk->nama }}"
                                        style="object-fit: cover; height: 250px; transition: transform 0.3s ease;">
                                </a>
                                <div class="card-body text-center">
                                    @php
                                        $name = $produk->nama;
                                        $limitedName = strlen($name) > 22 ? substr($name, 0, 22) . '..' : $name;
                                    @endphp
                                    <h5 class="card-title text-dark font-weight-bold">{{ $limitedName }}</h5>
                                    <a href="{{ route('product.show', $produk->id) }}"
                                        class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3"
                                        style="transition: background-color 0.3s ease; border-color: #6196FF; color:#6196FF;">
                                        View Product →
                                    </a>
                                    <!-- Ajukan Quotation Button for Distributor Users Only -->
                                    @if (auth()->user() && auth()->user()->type === 'distributor')
                                        <form action="{{ route('quotations.add_to_cart') }}" method="POST"
                                            class="d-flex justify-content-center align-items-center">
                                            @csrf
                                            <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                            <input type="number" name="quantity" min="1" value="1"
                                                class="form-control form-control-sm me-2" style="width: 70px;">
                                            <button type="submit" class="btn btn-primary btn-sm px-3">Tambah</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $produks->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection


<script>
    function toggleButtonText(button) {
        const showText = '{{ __('messages.show_all_categories') }}';
        const hideText = '{{ __('messages.show_less_categories') }}';

        if (button.textContent.trim() === showText) {
            button.textContent = hideText;
            button.classList.add('btn-danger');
            button.classList.remove('btn-link');
        } else {
            button.textContent = showText;
            button.classList.add('btn-link');
            button.classList.remove('btn-danger');
        }
    }
</script>

<!-- Additional Custom CSS -->
<style>
    .product-card {
        border-radius: 10px;
        background-color: #fff;
        transition: all 0.3s ease-in-out;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        object-fit: cover;
        height: 250px;
        transition: transform 0.3s ease;
    }

    .product-card:hover img {
        transform: scale(1.05);
    }

    .btn-outline-primary {
        border: 2px solid #007bff;
        color: #007bff;
        font-weight: bold;
        transition: 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .pagination {
        justify-content: center;
        margin-top: 20px;
    }

    .pagination .page-item.active .page-link {
        background-color: #6196FF;
        border-color: #6196FF;
        color: #fff;
    }

    .pagination .page-item .page-link {
        color: #007bff;
        border-radius: 50px;
    }
</style>
