<!DOCTYPE html>
<html lang="en" dir="rtl" >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Shaden House</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <?php

  include("includes/translate_ar.php");
    include("includes/header.php");
    
  ?> 

  <!-- <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="" class="logo d-flex align-items-center mx-auto" > 
         Uncomment the line below if you also wish to use an image logo--> 
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!-- <h1 class="sitename">Shaden Porta Cabin</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul> -->
          <!-- </li> 
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav> -->

      <!-- <div class="language-toggle ms-3">
      <button onclick="setLanguage('en')">EN</button>
      <button onclick="setLanguage('ar')">AR</button>
    </div> -->

   <!--  </div>
  </header> --> 

  <main class="main">
    
    <a href="https://wa.me/966554467464" class="whatsapp-float" target="_blank">
      <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
    </a>
      
    <style>
  .whatsapp-float {
    position: fixed;
    bottom: 90px;
    right: 20px;
    z-index: 9999;
    background-color: #25d366;
    border-radius: 50%;
    padding: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .whatsapp-float:hover {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
  }

  .whatsapp-float img {
    width: 36px;
    height: 36px;
    display: block;
  }

  /* Optional Bounce Animation on Load */
  @keyframes floatIn {
    0% {
      transform: translateY(100px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .whatsapp-float {
    animation: floatIn 0.8s ease-out;
  }
</style>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpeg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100"><?=$translateArr['Built to Serve. Ready to Move.']?></h2>
        <p data-aos="fade-up" data-aos-delay="200"><?=$translateArr['Smart cabins for bold spaces.']?></p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
           <a href="#contact" class="btn-get-started"><?=$translateArr['Request Quote']?></a>
          <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </div>
      </div> 

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3><?= $translateArr['AboutTitle'] ?></h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p><?= $translateArr['AboutPara1'] ?></p>
            <p><?= $translateArr['AboutPara2'] ?></p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <?= $translateArr['AboutPara3'] ?>
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span><?= $translateArr['AboutPara4'] ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><?= $translateArr['AboutPara5'] ?></span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span><?= $translateArr['AboutPara6'] ?></span></li>
              </ul>
              

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0 me-3 ms-3"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><?=$translateArr['Happy Clients']?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0 me-3 ms-3"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><?=$translateArr['Projects']?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0 me-3 ms-3"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p><?=$translateArr['Hours Of Support']?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0 me-3 ms-3"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p><?=$translateArr['Hard Workers']?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?=$translateArr['services']?></h2>
        <p><?=$translateArr['Featured Services']?><br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <a href="assets/img/services-1.jpg" class="glightbox preview-link">
                    <i class="bi bi-zoom-in"></i>
                  </a>
                </div>
                  <h3><?=$translateArr['securityportacabins']?></h3>
                <p><?=$translateArr['securityportacabins1']?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <a href="assets/img/services-2.jpg" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                </a>
                </div>
                  <h3><?=$translateArr['Mobile Offices']?></h3>
                <p><?=$translateArr['Mobile Offices1']?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <a href="../assets/img/services-3.jpg" class="glightbox preview-link">
                    <i class="bi bi-zoom-in"></i>
                  </a>
                </div>
                
                  <h3><?=$translateArr['Portable Restrooms']?></h3>
                <p><?=$translateArr['Portable Restrooms1']?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <!-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div> End Client Item 

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div> End Client Item 

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div> End Client Item 

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div> End Client Item 

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div> End Client Item 

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div> End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link d-flex flex-row align-items-center gap-2 active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-house-gear"></i>
              <h4 class="d-none d-lg-block"><?=$translateArr['Portable Houses']?></h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link d-flex flex-row align-items-center gap-2" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi bi-box"></i>
              <h4 class="d-none d-lg-block"><?=$translateArr['Kitchen Cabinets']?></h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link d-flex flex-row align-items-center gap-2" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-brightness-high"></i>
              <h4 class="d-none d-lg-block"><?=$translateArr['Work Space']?></h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link d-flex flex-row align-items-center gap-2" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block"><?=$translateArr['Cabin']?></h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3><?=$translateArr['Portable Houses1']?></h3>
                
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab><?=$translateArr['Portable Houses2']?></spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Portable Houses3']?></span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Portable Houses4']?></span></li>
                </ul>
               
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3><?=$translateArr['Kitchen Cabinets1']?></h3>
                
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Kitchen Cabinets2']?></span></li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Kitchen Cabinets3']?></span></li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Kitchen Cabinets4']?></span></li>
                  
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3><?=$translateArr['Work Space1']?></h3>
                
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Work Space2']?></span></li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Work Space3']?></span></li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Work Space4']?></span></li>
                </ul>
                
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3><?=$translateArr['Cabin1']?></h3>
                
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Cabin2']?></span></li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Cabin3']?></span></li>
                  <li><i class="bi bi-check2-all"></i> <span><?=$translateArr['Cabin4']?></span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?=$translateArr['Services']?></h2>
        <p><?=$translateArr['CHECK OUR SERVICES']?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <a href="assets/img/service-1.jpg" class="glightbox preview-link d-block w-100 h-100">
                <img src="assets/img/service-1.jpg" alt="Service Image" class="img-fluid w-100 h-100 object-fit-cover">
                <i class="bi bi-zoom-in position-absolute top-50 start-50 translate-middle text-white fs-4"></i>
              </a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <a href="assets/img/service-2.jpg" class="glightbox preview-link d-block w-100 h-100">
                <img src="assets/img/service-2.jpg" alt="Service Image" class="img-fluid w-100 h-100 object-fit-cover">
                <i class="bi bi-zoom-in position-absolute top-50 start-50 translate-middle text-white fs-4"></i>
              </a>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <a href="assets/img/service-3.jpg" class="glightbox preview-link d-block w-100 h-100">
                <img src="assets/img/service-3.jpg" alt="Service Image" class="img-fluid w-100 h-100 object-fit-cover">
                <i class="bi bi-zoom-in position-absolute top-50 start-50 translate-middle text-white fs-4"></i>
              </a>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <a href="assets/img/service-4.jpg" class="glightbox preview-link d-block w-100 h-100">
                <img src="assets/img/service-4.jpg" alt="Service Image" class="img-fluid w-100 h-100 object-fit-cover">
                <i class="bi bi-zoom-in position-absolute top-50 start-50 translate-middle text-white fs-4"></i>
              </a>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex position-relative h-100">
              <a href="assets/img/service-5.jpg" class="glightbox preview-link d-block w-100 h-100">
                <img src="assets/img/service-5.jpg" alt="Service Image" class="img-fluid w-100 h-100 object-fit-cover">
                <i class="bi bi-zoom-in position-absolute top-50 start-50 translate-middle text-white fs-4"></i>
              </a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex position-relative h-100">
             <a href="assets/img/service-6.jpg" class="glightbox preview-link d-block w-100 h-100">
                <img src="assets/img/service-6.jpg" alt="Service Image" class="img-fluid w-100 h-100 object-fit-cover">
                <i class="bi bi-zoom-in position-absolute top-50 start-50 translate-middle text-white fs-4"></i>
              </a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title text-center mb-4">
          <p class="text-light"><?=$translateArr['Our Clients']?></p>
        </div>

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                <h3>Moshin Abid</h3>
                <h4>Client</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span> Shaden House provides top-quality porta cabins that are functional, durable, and visually appealing. Their team delivered exactly what we needed, on time, with great professionalism. Highly recommended!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                <h3>Farid</h3>
                <h4>Client</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Excellent service and high-quality cabins. Delivered on time with full professionalism.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> --><!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> --><!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div> --><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?=$translateArr['Gallery']?></h2>
        <p><?=$translateArr['CHECK OUR PORTFOLIO']?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul> --><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Modular Toilet']?></h4>
                  <p><?=$translateArr['Modular Toilet1']?></p>
                  <a href="assets/img/portfolio/app-1.jpg" title="Modular Toilet" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Work Nest']?></h4>
                  <p><?=$translateArr['Work Nest1']?></p>
                  <a href="assets/img/portfolio/product-1.jpg" title="WorkNest" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Site Core']?></h4>
                  <p><?=$translateArr['Site Core1']?></p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="SiteCore" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Easy Habitat']?></h4>
                  <p><?=$translateArr['Easy Habitat1']?></p>
                  <a href="assets/img/portfolio/books-1.jpg" title="EasyHabitat" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Modular Toilet']?></h4>
                  <p><?=$translateArr['Modular Toilet2']?></p>
                  <a href="assets/img/portfolio/app-2.jpg" title="Modular Toilet" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Structa Cabin']?></h4>
                  <p><?=$translateArr['Structa Cabin1']?></p>
                  <a href="assets/img/portfolio/product-2.jpg" title="StructaCabin" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Smart Space']?></h4>
                  <p><?=$translateArr['Smart Space1']?></p>
                  <a href="assets/img/portfolio/branding-2.jpg" title="SmartSpace" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Modular Home']?></h4>
                  <p><?=$translateArr['Modular Home1']?></p>
                  <a href="assets/img/portfolio/books-2.jpg" title="ModuHome" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Flexi Office']?></h4>
                  <p><?=$translateArr['Flexi Office1']?></p>
                  <a href="assets/img/portfolio/app-3.jpg" title="FlexiOffice" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Core Cabin']?></h4>
                  <p><?=$translateArr['Core Cabin1']?></p>
                  <a href="assets/img/portfolio/product-3.jpg" title="CoreCabin" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Base Pod']?></h4>
                  <p><?=$translateArr['Base Pod1']?></p>
                  <a href="assets/img/portfolio/branding-3.jpg" title="BasePod" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$translateArr['Pro Cabin']?></h4>
                  <p><?=$translateArr['Pro Cabin1']?></p>
                  <a href="assets/img/portfolio/books-3.jpg" title="ProCabin" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section 
     <section id="team" class="team section light-background">

       Section Title 
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div> End Section Title 

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> End Team Member 

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> End Team Member

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> End Team Member 

        </div>

      </div>

    </section> /Team Section  -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?=$translateArr['Contact']?></h2>
        <p><?=$translateArr['Shaden Khaled Amash Al Otaibi Est.']?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="map-container" data-aos="fade-up" data-aos-delay="500" style="height: 100%;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7238.632167128685!2d46.8969579238426!3d24.645246627434236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f046fccc35b25%3A0x2c091de5a79eb2d7!2sFXPG%2B293%2C%20Hyt%2C%20Riyadh%2014368%2C%20Saudi%20Arabia!5e0!3m2!1sen!2ssa!4v1713533602641!5m2!1sen!2ssa"
                width="100%"
                height="100%"
                style="border:0; border-radius: 10px; min-height: 450px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>



          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="<?=$translateArr['Your Name']?>" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="<?=$translateArr['Your Email']?>" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="<?=$translateArr['Subject']?>" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="<?=$translateArr['Message']?>" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading"><?=$translateArr['Loading']?></div>
                  <div class="error-message"></div>
                  <div class="sent-message"><?=$translateArr['Your message has been sent. Thank you!']?></div>

                  <button type="submit"><?=$translateArr['Send Message']?></button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4 justify-content-between align-items-start">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="logo d-flex align-items-center mb-3">
            <img src="assets/img/logo.png" class="img-fluid" alt="Logo" style="max-width: 150px; height: auto;">
            <span class="sitename"><?=$translateArr['Shaden House']?></span>
          </a>
          <div class="footer-contact">
            <p><?=$translateArr['Kingdom of Saudi Arabia - Riyad']?></p>
            <p><?=$translateArr['Al Kharj Road Exit 11 - Al Heet']?></p>
            <p class="mt-3"><strong><?=$translateArr['Phone']?>:</strong> <span>+966 55 446 7464</span></p>
            <p><strong><?=$translateArr['Email']?>:</strong> <span>shadenportacabin@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

       <!--  <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div> -->

        <div class="col-lg-4 col-md-6 footer-links">
          <h4><?=$translateArr['Our Services']?></h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?=$translateArr['Modular Buildings']?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?=$translateArr['Guard House']?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?=$translateArr['Site Storage Containers']?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?=$translateArr['Modular Cabins']?></a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"><?=$translateArr['Pre-fabricated units']?></a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter d-flex justify-content-center align-items-start">
          <img src="assets/img/clients/client-7.png" class="img-fluid" alt="Client Logo" style="max-width: 150px; height: auto; margin-bottom: 20px;">
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">SKA</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a>Javed </a> 
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>