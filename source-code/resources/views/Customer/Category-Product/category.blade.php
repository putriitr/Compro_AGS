@extends('layouts.customer.master')

@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Product</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active text-primary">Product</li>
            </ol>
    </div>
</div>
{{-- <header class="bg-primary text-dark text-center py-3">
    <h1>Our Products</h1>
</header> --}}

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3">
            <h2 class="mb-4">Hydraulics</h2>
            <h5>Brand</h5>
            <ul class="list-group mb-4">
                <li class="list-group-item">Labtek</li>
                <li class="list-group-item">Labverse</li>
            </ul>

            <h5>Price</h5>
            <input type="range" class="form-range mb-4" min="0" max="1000" step="50">

            <h5>Size</h5>
            <select class="form-select mb-4">
                <option selected>Choose size</option>
                <option value="1">Small</option>
                <option value="2">Medium</option>
                <option value="3">Large</option>
            </select>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="d-flex justify-content-end mb-3">
                <select class="form-select w-25">
                    <option selected>Sort by</option>
                    <option value="1">Best Seller</option>
                    <option value="2">Newest</option>
                    <option value="3">Latest</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid" alt="Product 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid" alt="Product 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('assets/img/company-1.jpg')}}" class="img-fluid" alt="Product 3">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
