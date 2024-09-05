@extends('layouts.member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Company Activity</h3>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Activity</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Activity Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <!-- Navigation Section -->
            <div class="row mb-4">
                <!-- Showing X-Y of Z -->
                <div class="col-md-4 d-flex align-items-center">
                    <p class="mb-0">Showing 1 - 8 of 100</p>
                </div>
                <!-- Show per Page and Sort By -->
                <div class="col-md-8 d-flex justify-content-end align-items-center">
                    <div style="display: flex; align-items: center;">
                        <label for="sort-by" style="margin-bottom: 0; margin-right: 0.5rem; white-space: nowrap;">Sort by:</label>
                        <select id="sort-by" class="form-select form-select-sm" style="margin-bottom: 0;">
                            <option value="newest">Newest</option>
                            <option value="latest">Latest</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Activity Content -->
            <div class="row g-4 justify-content-center">
                @foreach ($activity as $item) <!-- Ganti $activity menjadi $item untuk menghindari konflik nama -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{ asset('images/' . $item->image) }}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> {{ $item->date }}</p>
                                </div>
                                <a href="#" class="h4">{{ $item->title }}</a>
                                <p class="my-4">{{ Str::limit($item->description, 100) }}</p>
                                <a href="{{ route('activity.show', $item->id) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-4">
                <div class="col-12">
                    {{ $activity->links() }} <!-- Menampilkan pagination -->
                </div>
            </div>
        </div>
    </div>
    <!-- Activity End -->
@endsection
