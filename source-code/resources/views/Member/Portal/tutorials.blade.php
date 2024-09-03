@extends('layouts.Member.master')

@section('content')
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">How-To Guides for Our Products</h4>
            </div>
            <h1 class="display-3 mb-4">Video Tutorials</h1>
        </div>
        <div class="container">
            @forelse($produks as $produk)
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 style="font-size: 1.5rem;" class="mb-4 text-start">{{ $produk->nama }} Tutorials</h4>
                            <div class="accordion" id="accordion{{ $produk->id }}">
                                @forelse($produk->videos as $video)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $video->id }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $video->id }}" aria-expanded="false" aria-controls="collapse{{ $video->id }}">
                                                Tutorial {{ $loop->iteration }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $video->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $video->id }}" data-bs-parent="#accordion{{ $produk->id }}">
                                            <div class="accordion-body">
                                                <video class="w-100" controls>
                                                    <source src="{{ asset($video->video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted">No tutorials available for this product.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            @empty
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="text-center">You don't have any products with video tutorials.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
