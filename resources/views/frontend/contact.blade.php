@extends('layouts.app')
@section('title')Contact - {{ $setting->company_name ?? ''}} @endsection

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
    </div>
</div>


<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style mb-4">
                <h4 class="sub-title text-white px-3 mb-0">{{$title->contact_title}}</h4>
            </div>
            <p class="mb-0">{{$title->contact_description}}</p>
        </div>
        <div class="row g-4 align-items-center">

            <div class="col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="p-4 rounded-3 service-box shadow-lg text-center"
                            style="background-color: #1f1f1f;">
                            <h3><i class="fas fa-phone-alt text-danger"></i></h3>
                            <p class="text-light">Call Us</p>

                            <h5 class="text-light mt-3 mb-0">{{$setting->phone_one}}</h5>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="p-4 rounded-3 service-box shadow-lg text-center"
                            style="background-color: #1f1f1f;">
                            <h3><i class="fas fa-envelope text-danger"></i></h3>
                            <p class="text-light">Email</p>
                            <h5 class="text-light mt-3 mb-0">{{$setting->email_one}}</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="p-4 rounded-3 service-box shadow-lg text-center"
                            style="background-color: #1f1f1f;">
                            <h3><i class="fas fa-map-marker-alt text-danger"></i></h3>
                            <p class="text-light">Address</p>
                            <h5 class="text-light mt-3 mb-0">{{$setting->address}}</h5>


                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-xl-12 wow fadeInRight pt-5" data-wow-delay="0.3s">
                <!-- <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div> -->
                <div class="rounded h-100">
                    <iframe class="rounded w-100" style="height: 500px;"
                        src="{{$setting->google_maps}}"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


            <div class="col-lg-10 col-xl-10 m-auto pt-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                <p class="mb-4 text-white">The contact form is currently inactive. Get a functional and working
                    contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                    and you're done.</p>
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <select name="reaching" class="form-select bg-transparent border border-white"
                                    style="background-color: #1f1f1f !important;">
                                    <option value="Email">Email</option>
                                    <option value="Phone">Phone</option>
                                    <option value="Address">Address</option>
                                    <option value="Message">Message</option>
                                </select>
                                <label for="reaching">Reaching Out For</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control bg-transparent border border-white"
                                    id="email" placeholder="Your Email"
                                    style="background-color: #1f1f1f !important;">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="phone" class="form-control bg-transparent border border-white"
                                    id="phone" placeholder="Phone" style="background-color: #1f1f1f !important;">
                                <label for="phone">Phone</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="address" class="form-control bg-transparent border border-white"
                                    id="address" placeholder="Address"
                                    style="background-color: #1f1f1f !important;">
                                <label for="address">Address</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control bg-transparent border border-white"
                                    placeholder="Leave a message here" id="message"
                                    style="height: 160px;background-color: #1f1f1f !important;"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>

                        <div class="col-2 ms-auto">
                            <button type="submit" class="btn btn-light text-primary w-100 py-3">Send</button>
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>
<!-- Contact End -->




@endsection