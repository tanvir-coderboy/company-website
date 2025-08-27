@extends('layouts.app')
@section('title')About Us - {{ $setting->company_name ?? ''}} @endsection

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
    </div>
</div>


<div class="container-fluid about bg-light py-5">
    <div class="container py-5">



        <div class="row g-5 align-items-center pb-5">

            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">{{$about->title}}</h4>
                </div>
            </div>


            <div class="col-lg-12 col-12 mt-0">
                <p>
                    {{$about->description}}
                </p>
            </div>

        </div>

        <div class="row g-5 align-items-center pb-5 mt-4">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">{{$about->mission_title}}</h4>
                </div>
            </div>

            <div class="col-lg-12 col-12 mt-0">
                <p>
                    {{$about->mission_description}}
                </p>
            </div>

        </div>

        <div class="row g-5 align-items-center pb-5 mt-4">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">{{$about->vision_title}}</h4>
                </div>
            </div>

            <div class="col-lg-12 col-12 mt-0">
                <p>
                    {{$about->mission_description}}
                </p>
            </div>

        </div>

        <div class="row g-5 align-items-center pb-5 mt-4">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Core Values</h4>
                </div>
            </div>

            <div class="col-lg-12 col-12 mt-0">
                <section class="features-section">
                    <div class="container-fluid p-0">
                        <div class="row g-4">
                            @foreach($core as $item)
                            <div class="col-md-4 col-lg-4">
                                <div class="feature-card">
                                    <div class="feature-icon">
                                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" style="max-width:80px;">
                                    </div>
                                    <div class="feature-title">{{$item->title}}</div>
                                    <div class="feature-text">
                                        {{$item->description}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>



            </div>

        </div>

    </div>
</div>

@endsection