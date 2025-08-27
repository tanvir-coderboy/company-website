@extends('layouts.app')
@section('title'){{ $page->title}} - {{ $setting->company_name ?? ''}} @endsection
@section('description'){{ $page->meta_description ?? '' }}@endsection
@section('keyword'){{ $page->meta_keyword ?? '' }}@endsection


@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $page->title}}</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active">{{ $page->title}}</li>
            </ol>
    </div>
</div>



<div class="container-fluid about bg-light py-5 services">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0 display-3">{{ $page->title }}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    {!! $page->description !!}
                </div>
            </div>
            

        </div>
    </div>

@endsection