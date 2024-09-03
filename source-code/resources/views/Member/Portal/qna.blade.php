@extends('layouts.Member.master')

@section('content')
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Have any problem?</h4>
                </div>
                <h1 class="display-3 mb-4">Questions and Answers</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        @forelse($produks as $produk)
                            <div class="mb-5">
                                @if($produk->images->isNotEmpty())
                                <img src="{{ asset($produk->images->first()->gambar) }}" alt="{{ $produk->nama }}" class="img-fluid me-3" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                                <h2 class="mb-4">{{ $produk->nama }}</h2>
                                @if($produk->faqs->isEmpty())
                                    <p>No FAQs available for this product.</p>
                                @else
                                    <div class="accordion" id="qnaAccordion-{{ $produk->id }}">
                                        @foreach($produk->faqs as $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                                        {{ $faq->pertanyaan }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}"
                                                    data-bs-parent="#qnaAccordion-{{ $produk->id }}">
                                                    <div class="accordion-body">
                                                        <p>{{ $faq->jawaban }}</p>
                                                        @if($faq->image) <!-- Check if there is an associated image -->
                                                            <img src="{{ asset($faq->image) }}" alt="Image related to FAQ" class="img-fluid mt-3">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @empty
                            <p>You don't have any products associated with your account.</p>
                        @endforelse
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
