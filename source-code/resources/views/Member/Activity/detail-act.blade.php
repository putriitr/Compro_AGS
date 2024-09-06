@extends('layouts.member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Company Activity</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/activity') }}">Activity</a></li>
                    <li class="breadcrumb-item active text-primary">Detail Activity</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Activity 2 Start -->
    <div id="act-1" class="container-fluid appointment py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h1 class="display-4 mb-4">{{$activity->title}}</h1>
                        <p class="mb-4">{{$activity->description}}</p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="video h-100">
                                    <img src="{{ asset('images/' . $activity->image) }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection