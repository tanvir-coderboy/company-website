@extends('layouts.app')
@section('title')Blogs - {{ $setting->company_name ?? ''}} @endsection

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blogs</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active">Blogs</li>
            </ol>
    </div>
</div>



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
            


           <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('contact') }}">Contact Chat With Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->



@endsection
