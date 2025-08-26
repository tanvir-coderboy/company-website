@extends('layouts.app')
@section('title')Home - {{ $setting->company_name ?? ''}}@endsection
@section('description'){{ $setting->meta_description ?? '' }}@endsection
@section('keyword'){{ $setting->meta_keyword ?? '' }}@endsection


@section('css')
<style></style>
@endsection



@section('content')

<!-- Hero Section -->
@if($banner)
<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="overlay"></div>
    <div id="particles-js"></div>

    <div class="container">
        <div class="hero-content text-white">
            <h1 class="display-1 text-capitalize text-white mb-4">{{ $banner->title }}</h1>
            <h4 style="font-size:30px;" class="display-5 mb-2 text-light">We have <span id="element1"></span></h4>
            <p class="mb-5 fs-5">{{ $banner->description }}</p>
            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ $banner->button_link }}"
                @if($banner->button_type==1) target="_blank" @endif>
                {{ $banner->button_name }}
            </a>
        </div>
    </div>
</section>
@endif

<!-- About Start -->

@if($welcome)
<div class="container-fluid about bg-light py-5 px-0">
    <div class="container py-5">
        <div class="row g-5">
            <div class="row g-5 align-items-center">


                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="{{ Storage::url($welcome->image) }}" class="img-fluid h-100" alt="{{ $welcome->title }}">
                        <div class="bg-white experience1" style="border: 3px solid #FFBD59">
                            <h1 class="display-5">{{ $welcome->exprience_one_year }}</h1>
                            <h6 class="fw-bold">{{ $welcome->exprience_one_text }}</h6>
                        </div>
                        <div class="bg-white experience" style="border: 3px solid #FFBD59">
                            <h1 class="display-5">{{ $welcome->exprience_two_year }}</h1>
                            <h6 class="fw-bold">{{ $welcome->exprience_two_text }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">

                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <div class="sub-style">
                                <h4 class="sub-title px-3 mb-0">{{ $welcome->title }}C</h4>
                            </div>
                        </div>

                        <h4 style="font-size:30px;" class="display-5 mb-2">We have <span id="element"></span></h4>
                        <p class="fs-5" style="text-align: justify;font-size:16px !important;">
                            {{ $welcome->description }}
                        </p>
                        <div class="row atn-items-list">


                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <a @if($welcome->button_type==1) target="_blank" @endif href="{{ $welcome->button_link }}" class="btn btn-primary mt-5 w-100">
                                        <span>
                                            {{ $welcome->button_name }}
                                        </span></a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</div>
<!-- About End -->
@endif


<!-- Service Start -->
<div class="container-fluid about  py-5 services px-0">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h2 class="sub-title display-3 px-3 mb-0 fw-bold">{{ $title->service_title }}</h2>
            </div>
            <p class="my-3">{{ $title->service_description }}</p>
        </div>

        @foreach($services as $item)
        <div class="row g-3 align-items-center mt-5 pt-5">
            <div class="col-lg-12 col-12 d-lg-flex d-block mb-5">
                <h3 class="border-dark border-end service-title fw-bold" style="color: #4169e1;">{{ $item->title}}</h3>
                <p class="ps-2">{{ $item->description}}</p>
            </div>

            <!-- Full-width container with right-aligned button -->
            <div class="d-flex justify-content-end mb-4">
                <button class="btn btn-primary">
                    <a href="#" class="text-light service_see_more">See More <span
                            style="font-size: 1.2em;">&#x2B07;</span></a>
                </button>
            </div>


            @foreach($item->serviceItems as $service)
            <div class="col-lg-2 col-6">
                <!-- Service box -->
                <a href="">
                    <div class="service-box p-3 rounded-3 shadow-lg text-center">
                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="img-fluid w-50">
                        <p class="fw-bold pt-3 text-light">{{ $service->title }}</p>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
        @endforeach



    </div>
</div>

<!-- Service End -->



<!-- Why EPH Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">{{ $title->chosse_title }}</h4>
            </div>
            <p class="my-3">{{ $title->chosse_description }}</p>
        </div>
        <div class="row align-items-center">

            <div class="col-lg-6 col-12">
                <img src="{{ Storage::url($title->chosse_image) }}" alt="{{ $title->chosse_title }}" style="width: 100%;">
            </div>
            <div class="col-lg-6 col-12">

                <div class="row">
                    @foreach($whychooses as $item)
                    <div class="col-lg-4 col-6 mb-3 p-0">
                        <div style="min-height: 177px;background: linear-gradient(45deg, #3857b5, #232e4f);color: white;"
                            class="ps-1 pe-1 card-body me-2 service-box shadow text-center rounded">
                            <h3 class="fw-bold text-light">{{ $item->experience }}</h3>
                            <p class="pt-3">{{ $item->title }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>


        </div>

    </div>
</div>

<!-- Why EPH  End -->



<!-- Blog Start -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title display-3 px-3 mb-0">{{ $title->blog_title }}</h4>
            </div>
        </div>


        <div class="row g-4 justify-content-center">

            @foreach($blogs as $item)
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded">
                    <div class="service-img rounded-top">
                        <img src="{{ Storage::url($item->featured_image) }}" class="img-fluid rounded-top w-100" alt="">
                    </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h6 class="mb-4">{{ $item->title }}</h6>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            


            <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Services More</a>
                </div> -->
        </div>
    </div>
</div>
<!-- Services End -->



<!-- Testiminial Start -->
<div class="container-fluid bg-light service pb-5 testimonial ">
    <div class="container py-5">

        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 display-3 mb-0">{{ $title->testimonial_title }}</h4>
            </div>
            <h1 class="display-6 mb-4">{{ $title->testimonial_description }}</h1>
        </div>


        <!--<div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">-->
        <div class="row">
            @foreach($testimonials as $item)
            <div class="col-lg-4 col-12">
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-2 px-4">
                        <p class="fs-5 m-0">{{ $item->review_text }}</p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="{{ Storage::url($item->image) }}"
                                class="img-fluid rounded-circle py-2" alt="{{ $item->name }}">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0">{{ $item->name }}</h4>
                            <p class="mb-1">{{ $item->designation }}</p>
                            <div class="d-flex">
                                @if($item->review==1)
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                @elseif($item->review==2)
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                @elseif($item->review==3)
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                @elseif($item->review==4)
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-dark me-1"></small>
                                @elseif($item->review==5)
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                @else
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                <small class="fas fa-star text-warning me-1"></small>
                                @endif
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           



        </div>
    </div>
</div>
<!-- Testiminial End -->
@endsection


@section('js')

@if($banner)
<script>
    var typed = new Typed('#element1', {
        strings: [
            "- {{ $banner->service_1 }}",
            "- {{ $banner->service_2 }}",
            "- {{ $banner->service_3 }}",
            "- {{ $banner->service_4 }}",
            "- {{ $banner->service_5 }}",
            "- {{ $banner->service_6 }}",
        ],
        typeSpeed: 50,
        loop: true,
    });
</script>
@endif

@if($welcome)
<script>
    var typed = new Typed('#element', {
        strings: [
            "{{ $welcome->item1 }}",
            "{{ $welcome->item2 }}",
            "{{ $welcome->item3 }}",
            "{{ $welcome->item4 }}",
            "{{ $welcome->item5 }}",
        ],
        typeSpeed: 50,
        loop: true,
    });
</script>
@endif



@endsection