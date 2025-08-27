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

@if($service->title=='Website Design & Development')
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
            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-wordpress"></i></div>
                    <div class="tool-title">WordPress</div>
                    <div class="tool-desc">CMS for custom, responsive websites</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-php"></i></div>
                    <div class="tool-title">PHP</div>
                    <div class="tool-desc">Backend scripting for dynamic apps</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-database"></i></div>
                    <div class="tool-title">MySQL</div>
                    <div class="tool-desc">Reliable database management</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-html5"></i> <i class="fab fa-css3-alt"></i></div>
                    <div class="tool-title">HTML5 / CSS3</div>
                    <div class="tool-desc">Structure and styling for layouts</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-js-square"></i></div>
                    <div class="tool-title">JavaScript / jQuery</div>
                    <div class="tool-desc">Interactive and real-time features</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-bootstrap"></i></div>
                    <div class="tool-title">Bootstrap</div>
                    <div class="tool-desc">Mobile-first front-end framework</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="tool-title">WooCommerce</div>
                    <div class="tool-desc">E-commerce solution for WordPress</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-object-group"></i></div>
                    <div class="tool-title">Elementor / WPBakery</div>
                    <div class="tool-desc">Drag-and-drop page builders</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-server"></i></div>
                    <div class="tool-title">cPanel / WHM</div>
                    <div class="tool-desc">Hosting and server management</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-git-alt"></i></div>
                    <div class="tool-title">Git / GitHub</div>
                    <div class="tool-desc">Version control & collaboration</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="tool-title">XAMPP / LocalWP</div>
                    <div class="tool-desc">Local development tools</div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fab fa-google"></i></div>
                    <div class="tool-title">Google Analytics</div>
                    <div class="tool-desc">Performance & SEO tracking</div>
                </div>
            </div>
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
            <div class="col-6 col-md-4 col-lg-2">
                <div class="service-step d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-image"></i>
                    <h5>Planning</h5>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="service-step d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-pencil-ruler"></i>
                    <h5>Design</h5>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="service-step d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-tasks"></i>
                    <h5>Development</h5>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="service-step d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-code"></i>
                    <h5>Optimization</h5>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="service-step d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-rocket"></i>
                    <h5>Launch</h5>
                </div>
            </div>
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
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-cart4 card-icon"></i>
                        <h5 class="card-title">E-commerce Websites</h5>
                        <p class="card-text">Fully functional online stores with shopping carts, payment gateways,
                            product filters, inventory control, and customer management.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-briefcase card-icon"></i>
                        <h5 class="card-title">Business Websites</h5>
                        <p class="card-text">Professional websites for companies to showcase services, team, contact
                            info, and company profile.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-newspaper card-icon"></i>
                        <h5 class="card-title">Blog & News Websites</h5>
                        <p class="card-text">Custom blog platforms or news portals with category filters, social
                            sharing, and engaging content layout.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-house-door card-icon"></i>
                        <h5 class="card-title">Educational Websites</h5>
                        <p class="card-text">Websites for schools, coaching centers, or online courses (LMS
                            integration), with class schedules, student portals, and video content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-house-door-fill card-icon"></i>
                        <h5 class="card-title">Real Estate Websites</h5>
                        <p class="card-text">Property listing websites with map integration, property filters, agent
                            profiles, and inquiry forms.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-calendar-check card-icon"></i>
                        <h5 class="card-title">Booking & Appointment Websites</h5>
                        <p class="card-text">For clinics, salons, consultants, or event planners—with calendar
                            integration and online booking.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-person-badge card-icon"></i>
                        <h5 class="card-title">Portfolio Websites</h5>
                        <p class="card-text">Designed for creatives, professionals, or agencies to showcase their
                            work in an elegant, structured layout.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-puzzle card-icon"></i>
                        <h5 class="card-title">Custom Web Portals</h5>
                        <p class="card-text">Tailored solutions like job portals, service dashboards,
                            membership-based websites, or internal tools.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="bi bi-puzzle card-icon"></i>
                        <h5 class="card-title">Landing Page Websites</h5>
                        <p class="card-text"> Single-page sites focused on conversions, with call-to-action buttons,
                            lead forms, fast loading, and mobile-friendly design.</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

@elseif($service->title=='Property Preservation Processing')
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