 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
     <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0"> -->
     <div class="d-lg-block d-none" id="sticky-header">
         <nav class="navbar navbar-expand-lg bg-light px-4 px-lg-5 py-3 py-lg-0">

             <a href="/" class="navbar-brand p-0">
                 <!-- <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1> -->
                 <img src="{{ asset('frontend') }}/img/logo.png" alt="Elite" class="logo">
             </a>

             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <div class="navbar-nav ms-auto py-0">
                     <a href="/" class="nav-item nav-link active">Home</a>
                     <!-- <a href="whyeph.html" class="nav-item nav-link">Why EPH</a> -->
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                         <div class="dropdown-menu m-0">
                             <a href="web-design.html" class="dropdown-item">- Website Design & Development</a>
                             <a href="property.html" class="dropdown-item">- Property Preservation Processing</a>
                             <a href="cloud.html" class="dropdown-item">- Cloud Web Hosting</a>
                             <a href="#" class="dropdown-item">- Software Solutions</a>
                         </div>
                     </div>
                     <a href="portfolio.html" class="nav-item nav-link">Portfolio</a>
                     <a href="faq.html" class="nav-item nav-link">FAQ</a>
                     <a href="blog.html" class="nav-item nav-link">Blog</a>
                     <div class="nav-item dropdown me-4">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Get In Touch</a>
                         <div class="dropdown-menu m-0">
                             <a href="about.html" class="dropdown-item">- About Us</a>
                             <!-- <a href="ceo.html" class="dropdown-item">- Messege From CEO</a> -->
                             <a href="carrer.html" class="dropdown-item">- Career</a>
                             <a href="contact.html" class="dropdown-item">- Contact Us</a>
                         </div>
                     </div>
                 </div>
             </div>
             <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Chat
                 With
                 Us</a>
         </nav>
     </div>

     <nav class="navbar navbar-expand-lg bg-light px-3 py-2 d-lg-none">
         <div class="container-fluid d-flex justify-content-between align-items-center">
             <!-- Left: Hamburger Icon -->
             <button class="btn p-0 border-0" type="button" data-bs-toggle="offcanvas"
                 data-bs-target="#offcanvasMenu">
                 <i class="fa fa-bars fa-lg"></i>
             </button>

             <!-- Center: Logo -->
             <a href="/" class="navbar-brand mx-auto p-0">
                 <img src="{{ asset('frontend') }}/img/logo.png" alt="Elite" class="logo" style="height: 40px;">
             </a>

             <!-- Right: Chat Button -->
             <a href="#" class="btn btn-primary rounded-pill text-white py-1 px-3">Chat With Us</a>
         </div>
     </nav>

     <!-- Offcanvas Menu Start -->
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
         <div class="offcanvas-header border-bottom">
             <h5 class="offcanvas-title">Menu</h5>
             <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body p-0">
             <ul class="list-unstyled m-0">
                 <li class="border-bottom">
                     <a href="/" class="d-block px-3 py-2 text-dark text-decoration-none">Home</a>
                 </li>
                 <li class="border-bottom">
                     <a href="whyeph.html" class="d-block px-3 py-2 text-dark text-decoration-none">Why EPH</a>
                 </li>
                 <li class="border-bottom">
                     <button
                         class="w-100 d-flex justify-content-between align-items-center px-3 py-2 border-0 bg-transparent toggle-submenu">
                         <span>Services</span>
                         <i class="fa fa-chevron-down"></i>
                     </button>
                     <ul class="submenu list-unstyled ps-4" style="display: none;">
                         <li><a href="#" class="d-block py-2 text-dark text-decoration-none">Website Design &
                                 Development</a></li>
                         <li><a href="#" class="d-block py-2 text-dark text-decoration-none">Property Preservation
                                 Processing</a></li>
                         <li><a href="#" class="d-block py-2 text-dark text-decoration-none">Cloud Web Hosting</a>
                         </li>
                         <li><a href="#" class="d-block py-2 text-dark text-decoration-none">Software Solutions</a>
                         </li>
                     </ul>
                 </li>
                 <li class="border-bottom">
                     <a href="portfolio.html" class="d-block px-3 py-2 text-dark text-decoration-none">Portfolio</a>
                 </li>
                 <li class="border-bottom">
                     <a href="faq.html" class="d-block px-3 py-2 text-dark text-decoration-none">FAQ</a>
                 </li>
                 <li class="border-bottom">
                     <button
                         class="w-100 d-flex justify-content-between align-items-center px-3 py-2 border-0 bg-transparent toggle-submenu">
                         <span>Get In Touch</span>
                         <i class="fa fa-chevron-down"></i>
                     </button>
                     <ul class="submenu list-unstyled ps-4" style="display: none;">
                         <li><a href="about.html" class="d-block py-2 text-dark text-decoration-none">About Us</a>
                         </li>
                         <li><a href="carrer.html" class="d-block py-2 text-dark text-decoration-none">Career</a>
                         </li>
                         <li><a href="contact.html" class="d-block py-2 text-dark text-decoration-none">Contact
                                 Us</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
     <!-- Offcanvas Menu End -->
 </div>
 <!-- Navbar & Hero End -->