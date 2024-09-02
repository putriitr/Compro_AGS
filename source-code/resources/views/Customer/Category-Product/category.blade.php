@extends('layouts.customer.master')

@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Product</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/product">Product</a></li>
                <li class="breadcrumb-item active text-primary" style="font-weight: bold;">Hydraulics</li>
            </ol>
    </div>
</div>
{{-- <header class="bg-primary text-dark text-center py-3">
    <h1>Our Products</h1>
</header> --}}

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="mb-4">Hydraulics</h1>
            <h5>Brand</h5>
            <ul class="list-group mb-4">
                <li class="list-group-item border rounded text-center py-2 mb-3">
                    <button class="btn btn-primary w-100" style="cursor: pointer;">
                        Labtek
                    </button>
                </li>
                <li class="list-group-item border rounded text-center py-2 mb-3">
                    <button class="btn btn-primary w-100" style="cursor: pointer;">
                        Labverse
                    </button>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9" style="font-weight: bold"> <br>
            <div class="d-flex justify-content-end mb-3">
                <select class="form-select w-25">
                    <option selected>Sort by</option>
                    <option value="1">Best Seller</option>
                    <option value="2">Newest</option>
                    <option value="3">Latest</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="{{url('/detail')}}" target="">
                        <img src="{{ asset('assets/img/product/product-1.jpeg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
                <div class="col-md-4 mb-4" style="overflow: hidden; transition: transform 0.3s ease; margin-bottom: 10px;">
                    <a href="https://www.example.com" target="_blank">
                        <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid w-100" alt="Product 1" style="transition: transform 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.1)'"
                        onmouseout="this.style.transform='scale(1)'">
                    </a>
                </div>
            </div>
        </div>
    </div><br>
</div>
@endsection
