@extends('layouts.app')
@section('title')Faq -{{ $setting->company_name ?? ''}}@endsection

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">FAQ</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
    </div>
</div>


<section class="faq-section">
    <div class="container">
        <div class="row g-4">

        @foreach($data as $item)
            <!-- First FAQ Box -->
            <div class="col-lg-6">
                <div class="faq-box">
                    <div class="row align-items-center">

                        <!-- FAQ Left Side -->
                        <div class="col-lg-9">
                            <h2 class="faq-title mb-4">{{ $item->title }}</h2>

                            <div class="accordion" id="faqAccordion-{{ $item->id }}">
                                @foreach($item->category as $faq)
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-{{ $faq->id }}">
                                            {{ $faq->title }}
                                        </button>
                                    </h2>
                                    <div id="faq-{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion-{{ $faq->id }}">
                                        <div class="accordion-body">
                                           {{ $faq->description }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                               
                            </div>

                            <!-- Button -->
                            <button class="faq-btn">Check if You Qualify</button>
                        </div>

                        <!-- Right Side Image -->
                        <div class="col-lg-3 faq-image mt-5 mt-lg-0">
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}">
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</section>


@endsection