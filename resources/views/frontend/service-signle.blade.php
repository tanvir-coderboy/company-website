@extends('layouts.app')
@section('title'){{$service->title}} - {{ $setting->company_name ?? ''}} @endsection

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{$service->title}}</h1>
         <p class="my-3 text-light">{{ $service->description }}</p>
    </div>
</div>

@if($service->title=='Web Design & Development Services')
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center pb-5">

            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">🛠 Tools & Technologies</h4>
                </div>
                <p class="my-3">We use modern, reliable, and industry-standard tools to build secure, scalable,
                    and high-performing websites and software solutions.</p>
            </div>

        </div>
        <div class="row g-4">
            @foreach($tools as $item)
            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}" class="w-25">
                    </div>
                    <div class="tool-title">{{ $item->name }}</div>
                    <div class="tool-desc">{{ $item->short_description }}</div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>


<section class="py-5">
    <div class="container">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Process</h4>
            </div>
            <p class="my-3">We specialize in building custom websites tailored to meet the unique needs of
                businesses and individuals.</p>
        </div>
        <div class="row g-4 justify-content-center text-center">
            @foreach($process as $item)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="service-step d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}" class="w-25">
                    <h5 class="mt-2">{{ $item->name }}</h5>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>


<div class="container-fluid about website-types-section  py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center pb-5">

            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Types of Websites We Build</h4>
                </div>
                <p class="my-3">We specialize in building custom websites tailored to meet the unique needs of
                    businesses and individuals.</p>
            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        @foreach($webbuild as $item)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}" class="w-25">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->short_description }}</p>
                    </div>
                </div>
            </div>

            @endforeach

           

           



        </div>

    </div>
</div>

@elseif($service->title=='Property Preservation Work Orders Processing')
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">

        <div class="highlight-card">
            <div class="highlight-title">
                <i class="bi bi-tools"></i> What We Are Doing
            </div>
            <p>
                <strong>Elite Processors House LLC (EPH)</strong> provides a comprehensive range of services
                tailored to the needs of property preservation companies. We give clients the flexibility to choose
                only the services they need—ensuring a custom-fit solution for their business model.
            </p>
            <p>
                Founded to meet the rising demand for high-volume, high-quality work order processing, EPH has
                quickly earned a reputation for reliability, precision, and exceptional turnaround times. We
                specialize in updating Ready-for-Office (RFO) orders with speed and accuracy, without compromising
                quality.
            </p>
            <p>
                Our success lies in a disciplined approach to quality control. Every work order is reviewed
                thoroughly, and our in-house team is routinely evaluated to maintain the industry’s highest
                standards. By investing in efficiency and accountability, we deliver consistent results that support
                your operational success.
            </p>
        </div>


    </div>
</div>


<section class="workflow-section">
    <div class="container">
        <div class="workflow-title">
            <i class="bi bi-arrow-repeat"></i> Our Processing Workflow
        </div>
        <div class="workflow-list">
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Download work order photos from PPW, websites, or FTP</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Reorganize & match photos according to order instructions</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Label photos (e.g. before, during, after, bid, other)</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Create & submit bids based on order notes, PCR, and photos</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Estimate costs using tools like RepairBase, XactPRM, or custom price
                    sheets</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Prepare invoices using approved pricing, client notes, and PCR
                    information</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Upload reports such as dump receipts, damage reports, and cost estimators
                </div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Send daily reports for pending orders with issues and processed orders
                    with invoice details</div>
            </div>
            <div class="workflow-item">
                <i class="bi bi-check-circle-fill workflow-icon"></i>
                <div class="workflow-text">Handle denials promptly and resubmit with corrections</div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid about website-types-section py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Work Type</h4>
                </div>
            </div>
        </div>

        <div class="d-flex gap-3 justify-content-center m-auto row">
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="feature-list pt-3">
                    <div class="feature-item"><span>1. Advanced Designs</span></div>
                    <div class="feature-item"><span>2. Creative Team</span></div>
                    <div class="feature-item"><span>3. Tailor-Made Solutions</span></div>
                    <div class="feature-item"><span>4. Affordable Price</span></div>
                    <div class="feature-item"><span>5. Punctual Delivery</span></div>
                    <div class="feature-item"><span>6. Quality Assurance</span></div>
                    <div class="feature-item"><span>7. Quick Support</span></div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="feature-list pt-3">
                    <div class="feature-item"><span>1. Advanced Designs</span></div>
                    <div class="feature-item"><span>2. Creative Team</span></div>
                    <div class="feature-item"><span>3. Tailor-Made Solutions</span></div>
                    <div class="feature-item"><span>4. Affordable Price</span></div>
                    <div class="feature-item"><span>5. Punctual Delivery</span></div>
                    <div class="feature-item"><span>6. Quality Assurance</span></div>
                    <div class="feature-item"><span>7. Quick Support</span></div>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="container-fluid about website-types-section py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Few details about our working area</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="hero" class="hero section light-background pb-5" style="background: #fff">

    <div class="container">
        <div class="row gy-5">

            <div class="col-12 col-lg-6 hero-img order-2 order-lg-1" data-aos="zoom-out" data-aos-delay="100">
                <img src="https://rdpnbd.com/storage/uploads/a0bd0f61-ff7e-4e28-84bb-5783cb657834.png"
                    class="img-fluid w-100" alt="">
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-1 order-lg-2"
                data-aos="fade-up">
                <h3 class="workflow-title">RDP Enterprise Solutions</h3>
                <p>Stay ahead with RDP’s enterprise-grade internet — engineered for
                    stability, scalability, and secure connectivity across your entire
                    organization. From offices to industrial setups, we’ve got your business
                    covered.</p>
                <ul>
                    <li>Complete Internet & Networking Solutions</li>
                    <li>High-Speed, Secure, and Scalable Connectivity</li>
                    <li>24/7 Priority Business Support</li>
                </ul>
                <div class="d-flex">
                    <a href="https://rdpnbd.com/about"
                        class="btn btn-primary rounded-pill text-white py-3 px-5">Explore More</a>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-lg-1" data-aos="fade-up">
                <h3 class="workflow-title">RDP for Home Users</h3>
                <p>Enjoy premium home internet powered by the nation’s largest fiber
                    broadband network. Whether you’re streaming in 4K, attending virtual
                    meetings, gaming online, or working remotely — RDP ensures high-speed,
                    stable connectivity every time.</p>
                <ul>
                    <li>Speeds up to 100 Mbps – Truly Unlimited</li>
                    <li>Crystal-Clear 4K Streaming (YouTube, Facebook & More)</li>
                    <li>Lag-Free Gaming with Low Latency Network</li>
                </ul>
                <div class="d-flex">
                    <a href="https://rdpnbd.com/about"
                        class="btn btn-primary rounded-pill text-white py-3 px-5">Explore More</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 hero-img order-lg-2" data-aos="zoom-out" data-aos-delay="100">
                <img src="https://rdpnbd.com/storage/uploads/21b0efc3-59cf-4a6e-98bd-4c36ff385aa5.png"
                    class="img-fluid w-100" alt="">
            </div>
        </div>
        <div class="row gy-5">

            <div class="col-12 col-lg-6 hero-img order-2 order-lg-1" data-aos="zoom-out" data-aos-delay="100">
                <img src="https://rdpnbd.com/storage/uploads/a0bd0f61-ff7e-4e28-84bb-5783cb657834.png"
                    class="img-fluid w-100" alt="">
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-1 order-lg-2"
                data-aos="fade-up">
                <h3 class="workflow-title">RDP Enterprise Solutions</h3>
                <p>Stay ahead with RDP’s enterprise-grade internet — engineered for
                    stability, scalability, and secure connectivity across your entire
                    organization. From offices to industrial setups, we’ve got your business
                    covered.</p>
                <ul>
                    <li>Complete Internet & Networking Solutions</li>
                    <li>High-Speed, Secure, and Scalable Connectivity</li>
                    <li>24/7 Priority Business Support</li>
                </ul>
                <div class="d-flex">
                    <a href="https://rdpnbd.com/about"
                        class="btn btn-primary rounded-pill text-white py-3 px-5">Explore More</a>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center order-lg-1" data-aos="fade-up">
                <h3 class="workflow-title">RDP for Home Users</h3>
                <p>Enjoy premium home internet powered by the nation’s largest fiber
                    broadband network. Whether you’re streaming in 4K, attending virtual
                    meetings, gaming online, or working remotely — RDP ensures high-speed,
                    stable connectivity every time.</p>
                <ul>
                    <li>Speeds up to 100 Mbps – Truly Unlimited</li>
                    <li>Crystal-Clear 4K Streaming (YouTube, Facebook & More)</li>
                    <li>Lag-Free Gaming with Low Latency Network</li>
                </ul>
                <div class="d-flex">
                    <a href="https://rdpnbd.com/about"
                        class="btn btn-primary rounded-pill text-white py-3 px-5">Explore More</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 hero-img order-lg-2" data-aos="zoom-out" data-aos-delay="100">
                <img src="https://rdpnbd.com/storage/uploads/21b0efc3-59cf-4a6e-98bd-4c36ff385aa5.png"
                    class="img-fluid w-100" alt="">
            </div>
        </div>


    </div>

</section>

@elseif($service->title=='Cloud Web Hosting')

<section id="features" class="features section price light-background py-5" style="background: #fff">


    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="sub-style">
            <h4 class="sub-title px-3 mb-0 display-3">Package</h4>
        </div>
        <p class="mt-3">Choose the Right Internet Plan – Speed, Stability &amp; Support That Fits Your Needs.</p>
    </div>

    <div class="container">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
                <div class="row g-2 justify-content-center">

                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <div class="price-item shadow-lg rounded text-center">
                            <div class="price-top custom-wave-bg"
                                style="background-image:url(https://rdpnbd.com/assets/img/1.png)">
                                <p class="fs-5 fw-bold text-uppercase mb-2">BRONZE</p>
                                <div class="price d-flex justify-content-center align-items-baseline">
                                    <strong class="fs-5 me-1">৳</strong> 500 <span class="ms-1">5% VAT/MONTH</span>
                                </div>
                            </div>
                            <div class="featuresitem text-start pt-0">
                                <h4 class="text-center mb-0">10 Mbps</h4>
                                <div class="text-center">
                                    <img class="list_item_img" src="https://rdpnbd.com/assets/img/title_line.png">
                                </div>
                                <ul class="mt-3 list_item">
                                    <li>Limited YouTube Access</li>
                                    <li>Fiber Optic Connection</li>
                                    <li>Smooth Gaming Experience</li>
                                    <li>24/7 Customer Support</li>
                                </ul>
                                <div class="text-center py-3">
                                    <button class="btn btn-primary rounded-pill text-white py-3 px-5" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                                        aria-controls="offcanvasScrolling">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <div class="price-item shadow-lg rounded text-center">
                            <div class="price-top custom-wave-bg"
                                style="background-image:url(https://rdpnbd.com/assets/img/2.png)">
                                <p class="fs-5 fw-bold text-uppercase mb-2">SILVER</p>
                                <div class="price d-flex justify-content-center align-items-baseline">
                                    <strong class="fs-5 me-1">৳</strong> 700 <span class="ms-1">5% VAT/MONTH</span>
                                </div>
                            </div>
                            <div class="featuresitem text-start pt-0">
                                <h4 class="text-center mb-0">15 Mbps</h4>
                                <div class="text-center">
                                    <img class="list_item_img" src="https://rdpnbd.com/assets/img/title_line.png">
                                </div>
                                <ul class="mt-3 list_item">
                                    <li>Unlimited YouTube, Facebook BDIX</li>
                                    <li>Optimized for Gaming</li>
                                    <li>Fiber Optic Connectivity</li>
                                    <li>24/7 customer support</li>
                                </ul>
                                <div class="text-center py-3">
                                    <button class="btn btn-primary rounded-pill text-white py-3 px-5" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                                        aria-controls="offcanvasScrolling">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <div class="price-item shadow-lg rounded text-center">
                            <div class="price-top custom-wave-bg"
                                style="background-image:url(https://rdpnbd.com/assets/img/3.png)">
                                <p class="fs-5 fw-bold text-uppercase mb-2">GOLD</p>
                                <div class="price d-flex justify-content-center align-items-baseline">
                                    <strong class="fs-5 me-1">৳</strong> 800 <span class="ms-1">5% VAT/MONTH</span>
                                </div>
                            </div>
                            <div class="featuresitem text-start pt-0">
                                <h4 class="text-center mb-0">20 Mbps</h4>
                                <div class="text-center">
                                    <img class="list_item_img" src="https://rdpnbd.com/assets/img/title_line.png">
                                </div>
                                <ul class="mt-3 list_item">
                                    <li>Unlimited YouTube, Facebook &amp; BDIX</li>
                                    <li>Fiber Optic Connectivity</li>
                                    <li>Optimized for Gaming</li>
                                    <li>24/7 customer support</li>
                                </ul>
                                <div class="text-center py-3">
                                    <button class="btn btn-primary rounded-pill text-white py-3 px-5" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                                        aria-controls="offcanvasScrolling">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <div class="price-item shadow-lg rounded text-center">
                            <div class="price-top custom-wave-bg"
                                style="background-image:url(https://rdpnbd.com/assets/img/4.png)">
                                <p class="fs-5 fw-bold text-uppercase mb-2">PLATINUM</p>
                                <div class="price d-flex justify-content-center align-items-baseline">
                                    <strong class="fs-5 me-1">৳</strong> 1000 <span class="ms-1">5% VAT/MONTH</span>
                                </div>
                            </div>
                            <div class="featuresitem text-start pt-0">
                                <h4 class="text-center mb-0">30 Mbps</h4>
                                <div class="text-center">
                                    <img class="list_item_img" src="https://rdpnbd.com/assets/img/title_line.png">
                                </div>
                                <ul class="mt-3 list_item">
                                    <li>Unlimited YouTube, Facebook &amp; BDIX</li>
                                    <li>Optimized for Gaming</li>
                                    <li>Fiber Optic Connectivity</li>
                                    <li>24/7 customer support</li>
                                </ul>
                                <div class="text-center py-3">
                                    <button class="btn btn-primary rounded-pill text-white py-3 px-5" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                                        aria-controls="offcanvasScrolling">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </div>

</section>

@elseif($service->title=='Software Solutions')

@endif



@endsection