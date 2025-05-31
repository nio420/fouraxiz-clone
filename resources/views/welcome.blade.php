<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>4axiz Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="css/style.css"> --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
  <!-- navbar content -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"><img src="{{ asset('assets/image/logoo.png.webp') }}" alt="no logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link me-3 fw-semibold" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-3 fw-semibold" href="#">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-3 fw-semibold" href="#">Portfolio</a>
          </li>

          <li class="nav-item dropdown  hover-dropdown">
            <a class="nav-link me-3 dropdown-toggle fw-semibold" href="#" id="servicesDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="#">Web Development</a></li>
              <li><a class="dropdown-item" href="#">App Development</a></li>
              <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
              <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
              <li><a class="dropdown-item" href="#">Cloud Solutions</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link me-3 fw-semibold" href="#">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-3 fw-semibold" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Hero Section -->
  <section class="hero-section py-5 d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h5 class="hero-title fw-bold mb-3"
            style="font-family: 'Poppins', sans-serif; font-size: 3rem; color: #0041c4;">
            Top-Notch Software
          </h5>
          <h1  style="font-family: 'Poppins', sans-serif; font-size: 3rem; color: #a03d5b;">
            Development
          </h1>
          <p class="hero-subtitle mb-4"
            style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 1.125rem; color: #333; letter-spacing: inherit; word-spacing: inherit;">
            Innovative Software Development, Engineered to Perfection.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="#" class="btn btn-primary me-3 px-4 py-2" style="border-radius: 25px; font-weight: 600;">
              Request A Quote
            </a>
            <a href="#" class="btn bg-transparent text-dark btn-outline-primary px-4 py-2 custom-service-btn" style="border-radius: 25px; font-weight: 600;">
              Our Services
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- State Section -->
<section class="stats-section">
  <div class="container py-5">
    <div class="row justify-content-center text-center">

      <!-- Block 1 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex align-items-center justify-content-center stat-item">
        <img src="{{ asset('assets/image/certificate.png.webp') }}" alt="Countries" class="me-2" style="width: 30px; height: 30px;">
        <div>
          <strong>13+</strong><br>Years in Business
        </div>
      </div>

      <!-- Block 2 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex align-items-center justify-content-center stat-item">
        <img src="{{ asset('assets/image/world.png.webp') }}" alt="Countries" class="me-2" style="width: 30px; height: 30px;">
        <div>
          <strong>25+</strong><br>Countries Served
        </div>
      </div>

      <!-- Block 3 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex align-items-center justify-content-center stat-item">
        <img src="{{ asset('assets/image/deal.png.webp') }}" alt="Clients" class="me-2" style="width: 30px; height: 30px;">
        <div>
          <strong>800+</strong><br>Clients Worldwide
        </div>
      </div>

      <!-- Block 4 (FIXED STRUCTURE) -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex align-items-center justify-content-center stat-item">
        <img src="{{ asset('assets/image/deadline.png.webp') }}" alt="Projects" class="me-2" style="width: 30px; height: 30px;">
        <div>
          <strong>2000+</strong><br>Projects Delivered
        </div>
      </div>

      <!-- Block 5 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex align-items-center justify-content-center stat-item">
        <img src="{{ asset('assets/image/24-hours-support.png.webp') }}" alt="Support" class="me-2" style="width: 30px; height: 30px;">
        <div>
          <strong>24/7</strong><br>Support Available
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- About Section -->
  <section class="about-section py-5 bg-white">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left content -->
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="about-title mb-3" style="color: #0041c4; font-weight: 700; font-size: 2rem;">About <span style="color: #F95133;">Fouraxiz Group</span>
          </h2>
          <p style="font-size: 1rem; color: #555; font-weight: 500;">
            Fouraxiz Group is a leading IT solutions provider, offering world-class digital transformation, consulting,
            and technology services. Our goal is to empower businesses through innovation, strategy, and cutting-edge
            tools.
          </p>

          <!-- Feature List -->
          <div class="row mt-4">
            <div class="col-6 mb-3 d-flex align-items-start">
              <span class="me-3 text-primary fs-4"><i class="bi bi-award-fill"></i></span>
              <div>
                <h6 class="mb-1 fw-semibold"><span class="fw-bold font-monospace">14+</span> Years Experience</h6>
                <small>Proven success in global IT projects</small>
              </div>
            </div>
            <div class="col-6 mb-3 d-flex align-items-start">
              <span class="me-3 text-primary fs-4"><i class="bi bi-people-fill"></i></span>
              <div>
                <h6 class="mb-1 fw-semibold">Expert Team</h6>
                <small>Certified professionals & consultants</small>
              </div>
            </div>
            <div class="col-6 d-flex align-items-start">
              <span class="me-3 text-primary fs-4"><i class="bi bi-lightbulb-fill"></i></span>
              <div>
                <h6 class="mb-1 fw-semibold">Smart Solutions</h6>
                <small>Innovative digital strategies</small>
              </div>
            </div>
            <div class="col-6 d-flex align-items-start">
              <span class="me-3 text-primary fs-4"><i class="bi bi-shield-check"></i></span>
              <div>
                <h6 class="mb-1 fw-semibold">Trusted by Clients</h6>
                <small>Strong client satisfaction record</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Right image -->
        <div class="col-md-6 text-center">
          <img src="{{ asset('assets/image/APP.jpg.webp') }}" alt="About Fouraxiz" class="img-fluid rounded" />
        </div>
      </div>
    </div>
  </section>



  <!-- Our Services Section -->
  <section class="services-section py-5" style="background-color: #f9f9f9;">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #0041c4; font-family: 'Poppins', sans-serif;">Our <span class="span_text">Services</span></h2>
        <p class="text-muted" style="max-width: 600px; margin: 0 auto;">
          Empowering businesses with a complete suite of web services, we specialized in web design, development, web security, app development, and round-the-clock support.
        </p>
      </div>
      <!-- Service Cards -->
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <div class="mb-3 text-primary fs-1"><i class="bi bi-globe"></i></div>
              <img src="{{ asset('assets/image/Web-Development-1.webp') }}" alt="">
              <h5 class="card-title fw-semibold">Web Development</h5>
              <p class="card-text text-muted">Expert web development services for your website - professional, reliable, and tailored to you.</p>
              <a href="#" class=" fw-semibold">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service Card -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <div class="mb-3 text-primary fs-1"><i class="bi bi-phone"></i></div>
              <img src="{{ asset('assets/image/app dev.webp') }}" alt="">
              <h5 class="card-title fw-semibold">Mobile App Development</h5>
              <p class="card-text text-muted">Custom app development for your website - innovative, seamless, and user-friendly.</p>
              <a href="#" class=" fw-semibold">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service Card -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <div class="mb-3 text-primary fs-1"><i class="bi bi-server"></i></div>
              <img src="{{ asset('assets/image/AI-Machine-Learning.webp') }}" alt="">
              <h5 class="card-title fw-semibold">AI Machine Learning</h5>
              <p class="card-text text-muted">Cutting-edge AI and machine learning solutions - unlocking the power of data.</p>
              <a href="#" class=" fw-semibold">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Service Card -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <div class="mb-3 text-primary fs-1"><i class="bi bi-server"></i></div>
              <img src="{{ asset('assets/image/Software-Testing.png.webp') }}" alt="">
              <h5 class="card-title fw-semibold">Software Testing</h5>
              <p class="card-text text-muted">Quality-driven software testing services for flawless performance and reliable functionality.</p>
              <a href="#" class="fw-semibold">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Service Card -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <div class="mb-3 text-primary fs-1"><i class="bi bi-server"></i></div>
              <img src="{{ asset('assets/image/Security-Solutions.png.webp') }}" alt="">
              <h5 class="card-title fw-semibold">Security Solutions</h5>
              <p class="card-text text-muted">Robust security solutions safeguarding your digital assets - protect your data with confidence..</p>
              <a href="#" class=" fw-semibold">Learn More</a>
            </div>
          </div>
        </div>
        <!-- Service Card -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body">
              <div class="mb-3 text-primary fs-1"><i class="bi bi-server"></i></div>
              <img src="{{ asset('assets/image/Domain-Hosting.webp') }}" alt="">
              <h5 class="card-title fw-semibold">Domain & Hosting</h5>
              <p class="card-text text-muted">Reliable web hosting and domain solutions - empower your online presence effortlessly.</p>
              <a href="#" class=" fw-semibold">Learn More </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <section class="py-5 bg-white">
    <div class="container text-center">
      <!-- Section Heading -->
      <h2 class="fw-bold mb-3" style="color: #0041c4; font-family: 'Poppins', sans-serif;">
        Our <span class="span_text"> Clients </span>
      </h2>
      <p class="text-muted mb-4" style="max-width: 600px; margin: 0 auto;">
        Our clients choose us for our expertise, reliability, and exceptional service. Discover why they put their trust in us.
      </p>
      <!-- Client Logos -->
        <div class="row justify-content-center align-items-center g-4 text-center">

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/logo/e-gp.png.webp') }}" class="img-fluid logo-img" alt="Client 1">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/aci-godrej.png.webp') }}" class="img-fluid logo-img" alt="Client 2">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/bazarnao.png.webp') }}" class="img-fluid logo-img" alt="Client 3">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/msh.png.webp') }}" class="img-fluid logo-img" alt="Client 4">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/cvfr.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/dgfp.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/dhaka-medical.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/dsk.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/great-eastern.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/hospice.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/karim-group.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
    </div>

    <div class="col-6 col-sm-4 col-md-2">
      <img src="{{ asset('assets/image/mohfw.png.webp') }}" class="img-fluid logo-img" alt="Client 5">
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Projects Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: #0041c4; font-family: 'Poppins', sans-serif;">Featured <span style="color: #F95133;">Projects</span></h2>
        <p class="text-muted">Explore some of our top-performing projects for our valued clients.</p>
      </div>
      <!-- Carousel -->
        <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                  <img src="{{ asset('assets/image/unikart APP.jpg.webp') }}" class="card-img-top" alt="Project 1">
                  <a href=""> <strong class="mb-4">Unikart App</strong><br><span class="text-uppercase">software development</span></a>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block">
                <div class="card border-0 shadow-sm">
                  <img src="{{ asset('assets/image/4axiz-Pos.png.webp') }}" class="card-img-top" alt="Project 2">
                  <a class="mb-5" href=""> <strong>4axios Pos</strong><br><span class="text-uppercase">Custom app development, E-commerce</span></a>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block">
                <div class="card border-0 shadow-sm">
                  <img src="{{ asset('assets/image/DGFP-Digital-Archive.jpg.webp') }}" class="card-img-top" alt="Project 3">
                  <a href=""> <strong>DGFP Digital Archive</strong><br><span class="text-uppercase">custom wev development, software development</span></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                  <img src="{{ asset('assets/image/unikart APP.jpg.webp') }}" class="card-img-top" alt="Project 4">
                  <a href=""> <strong>Dsk e-loan</strong><br><span class="text-uppercase">custom wev development, software development</span></a>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block">
                <div class="card border-0 shadow-sm">
                  <img src="{{ asset('assets/image/Bazarnao-Ecommerce-Website.jpg.webp') }}" class="card-img-top" alt="Project 5">
                  <a href=""> <strong>Bazarnao</strong><br><span class="text-uppercase">Custom web development, E-commerce</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <button class="custom_btn">See all Projects</button>
  </section>


  <!-- Single Client Testimonial -->
  <section class="py-5 bg-white d-flex justify-content-center align-items-center" style="min-height: 300px;">
    <div class="text-center" style="max-width: 600px;">
      <h1 class="mb-5">Client <span >Testimonial</span></h1>
      <img src="{{ asset('assets/image/3-1.jpeg.webp') }}" alt="Client 1"
        class="rounded-circle mb-3" style="width: 90px; height: 90px; object-fit: cover;">
      <h5 class="fw-semibold">John Doe</h5>
      <p class="text-muted fst-italic mb-3">CEO, Example Corp</p>
      <p style="font-size: 1.1rem; color: #555;">
        "Fouraxiz delivered our project on time with exceptional quality. Highly recommended!"
      </p>
    </div>
  </section>

  <!-- Call To Action Section -->
  <section class="py-5" style="background-color: #0dcaf0; margin-top: 50px; ">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center m-5">
      <!-- Left Text -->
      <h3  class="fw-bold mb-3 mb-md-0" style="font-family: 'Poppins', sans-serif; color: #F95133;">
        Want to Build Something Great Together?
      </h3>
      <!-- Right Buttons -->
      <div class="d-flex flex-wrap gap-3">
        <a href="#" class="btn btn-light me-3 px-4 py-2 fw-semibold">Contact Us</a>
        <a href="#" class="btn btn-outline-light px-4 py-2 fw-semibold">Request A Quote</a>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="card-footer text-light pt-5">
    <div class="container">
      <div class="row">

        <!-- Column 1: Logo & About -->
        <div class="col-md-3 mb-4">
          <img src="{{ asset('assets/image/logoo.png.webp') }}"Fouraxiz Logo" style="width: 150px;"
            class="mb-3">
          <p style="font-size: 0.9rem; color: #ccc;">
            Fouraxiz is a leading IT company delivering innovative digital solutions worldwide.
          </p>
          <div class="d-flex gap-3 mt-3">
            <a href="#" class="text-light fs-5"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-light fs-5"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-light fs-5"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="text-light fs-5"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <!-- Column 2: Services / Quick Links -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3 text-white">Services</h5>
          <ul class="list-unstyled" style="font-size: 0.95rem;">
            <li><a href="#" class="text-light text-decoration-none">Web Development</a></li>
            <li><a href="#" class="text-light text-decoration-none">App Development</a></li>
            <li><a href="#" class="text-light text-decoration-none">UI/UX Design</a></li>
            <li><a href="#" class="text-light text-decoration-none">Digital Marketing</a></li>
            <li><a href="#" class="text-light text-decoration-none">Cloud Solutions</a></li>
          </ul>
        </div>

        <!-- Column 3: Company -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3 text-white">Company</h5>
          <ul class="list-unstyled" style="font-size: 0.95rem;">
            <li><a href="#" class="text-light text-decoration-none">About Us</a></li>
            <li><a href="#" class="text-light text-decoration-none">Careers</a></li>
            <li><a href="#" class="text-light text-decoration-none">Blog</a></li>
            <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
            <li><a href="#" class="text-light text-decoration-none">Privacy Policy</a></li>
            <li><a href="#" class="text-light text-decoration-none">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact Info -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3 text-white">Contact Us</h5>
          <p style="font-size: 0.95rem; color: #ccc; line-height: 1.5;">
            123 Main Street, Dhaka, Bangladesh<br>
            Phone: (+880) 1718 837 689<br>
            Email: info@fouraxiz.com
          </p>
        </div>
      </div>
    </div>

    <!-- Bottom copyright bar -->
    <div class="bg-dark text-center text-light py-3" style="font-size: 0.85rem;">
      &copy; 2025 Fouraxiz. All rights reserved.
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="js/script.js"></script> --}}
  <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>