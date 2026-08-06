<?php
// index.php
include 'header.php';
?>

<!-- New styles for the redesigned Hero / Ticker / Objective / Vision & Mission sections -->
<!-- NOTE: ideally move this <link> inside the <head> in header.php — placed here only because header.php wasn't provided -->
<link rel="stylesheet" href="assets/css/home-redesign.css">

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero-v2 section">

    <div class="hero-v2-bg"></div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-v2-content">

            <h1 data-aos="fade-right" data-aos-delay="300">
              Building the <span class="hl">Future</span> of
              Pharmaceutical Manufacturing
            </h1>

            <p class="hero-v2-desc" data-aos="fade-right" data-aos-delay="400">
              We are the premier catalyst for production capabilities,
              bridging global innovation with operational excellence to
              build self-sufficient healthcare industries across the region.
            </p>

            <div class="hero-v2-stats" data-aos="fade-right" data-aos-delay="500">
              <div class="stat">
                <h3><span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="2"
                    class="purecounter"></span><span class="plus">+</span></h3>
                <p>Years Experience</p>
              </div>
              <div class="stat">
                <h3><span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="2"
                    class="purecounter"></span><span class="plus">+</span></h3>
                <p>Global Partners</p>
              </div>
              <div class="stat">
                <h3><span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="2"
                    class="purecounter"></span><span class="plus">+</span></h3>
                <p>Products Supplied</p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="hero-v2-visual" data-aos="fade-left" data-aos-delay="400">
            <div class="hero-v2-slider slider">
              <div class="slides">
                <img src="assets/img/home/slider/1.png" class="slide active">
                <img src="assets/img/home/slider/2.png" class="slide">
                <img src="assets/img/home/slider/3.png" class="slide">
                <img src="assets/img/home/slider/4.png" class="slide">
                <img src="assets/img/home/slider/5.png" class="slide">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- Services Ticker (scrolling strip) -->
  <section class="services-ticker">
    <div class="ticker-track">
      <span class="ticker-item">Raw Materials</span>
      <span class="ticker-item">Packaging &amp; Consumables</span>
      <span class="ticker-item">Lab &amp; Testing</span>
      <span class="ticker-item">Automation &amp; Support</span>
      <span class="ticker-item">Regulatory Support</span>
      <span class="ticker-item">Consulting</span>
      <!-- duplicated for a seamless loop -->
      <span class="ticker-item">Raw Materials</span>
      <span class="ticker-item">Packaging &amp; Consumables</span>
      <span class="ticker-item">Lab &amp; Testing</span>
      <span class="ticker-item">Automation &amp; Support</span>
      <span class="ticker-item">Regulatory Support</span>
      <span class="ticker-item">Consulting</span>
    </div>
  </section><!-- /Services Ticker -->

  <!-- Objective Section -->
  <section id="objective" class="objective-section section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center g-5">

        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
          <span class="objective-eyebrow">— Objective</span>
          <h2>We Don't Just Trade.<br>We Build The Industry.</h2>

          <p>
            AYU Ventures is the driving force behind the modernization and growth of pharmaceutical production.
            As a well-disciplined group with extensive global partnerships, our mission is to empower
            pharmaceutical manufacturers with the critical resources they need to succeed.
          </p>

          <p>
            We do not just trade; we build the industry. From sourcing high-purity raw materials to integrating
            AI-assisted factory automation, we provide essential solutions for manufacturers worldwide.
          </p>

          <a href="what_we_do.php" class="objective-btn">Read More</a>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
          <div class="objective-visual">
            <div class="objective-blob"></div>
            <div class="objective-circle">
              <img src="assets/img/home/who_we_are/1.png" alt="Lab / Medical">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- /Objective Section -->

  <!-- Vision & Mission Section -->
  <section id="vision-mission" class="vm-v2-section section">
    <div class="container">
      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="vm-v2-block">
            <h2>Our Vision</h2>
            <p>
              To become a trusted leader in pharmaceutical and healthcare solutions by driving innovation,
              quality, and sustainable growth—empowering communities and industries with advanced,
              reliable, and future-ready products.
            </p>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="vm-v2-block">
            <h2>Our Mission</h2>
            <p>
              To deliver high-quality pharmaceutical resources and healthcare support through strong global
              partnerships, ethical practices, and continuous improvement—ensuring safety, efficiency, and
              measurable value for manufacturers, institutions, and people.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- /Vision & Mission Section -->


  <section class="whatwedo-grid-section">
    <div class="container">
      <h2 class="whatwedo-grid-title">What We Do</h2>

      <!-- Swiper -->
      <div class="swiper whatwedoSwiper">
        <div class="swiper-wrapper">

          <!-- Card 1 -->
          <div class="swiper-slide">
            <a class="wwd-grid-card">
              <img src="assets/img/home/1.png">
              <div class="wwd-overlay">
                <h3>Pharmaceutical Raw Materials</h3>
                <p>High-purity ingredients and trusted sourcing.</p>
              </div>
            </a>
          </div>

          <!-- Card 2 -->
          <div class="swiper-slide">
            <a class="wwd-grid-card">
              <img src="assets/img/home/2.png">
              <div class="wwd-overlay">
                <h3>Packaging & Consumables</h3>
                <p>Safe, compliant, durable packaging solutions.</p>
              </div>
            </a>
          </div>

          <!-- Card 3 -->
          <div class="swiper-slide">
            <a class="wwd-grid-card">
              <img src="assets/img/home/3.png">
              <div class="wwd-overlay">
                <h3>Lab & Testing Solutions</h3>
                <p>Quality control equipment & support.</p>
              </div>
            </a>
          </div>

          <!-- Card 4 -->
          <div class="swiper-slide">
            <a class="wwd-grid-card">
              <img src="assets/img/home/4.png">
              <div class="wwd-overlay">
                <h3>Automation & Support</h3>
                <p>Smart automation for efficiency.</p>
              </div>
            </a>
          </div>

          <!-- Card 5 -->
          <div class="swiper-slide">
            <a class="wwd-grid-card">
              <img src="assets/img/home/lab.png">
              <div class="wwd-overlay">
                <h3>Regulatory Support</h3>
                <p>Compliance & documentation assistance.</p>
              </div>
            </a>
          </div>

          <!-- Card 6 -->
          <div class="swiper-slide">
            <a class="wwd-grid-card">
              <img src="assets/img/home/medicine.jpg">
              <div class="wwd-overlay">
                <h3>Consulting Services</h3>
                <p>Expert guidance for pharma growth.</p>
              </div>
            </a>
          </div>

        </div>
      </div>

    </div>
  </section>


  <!-- partner Section -->
   <section class="partners-section">
  <div class="container">
    <div class="partners-wrap">

      <!-- Left Content -->
      <div class="partners-content">
        <h3 class="partners-kicker">Our Partners</h3>
        <h2 class="partners-title">We Work With the Best<br>Partners</h2>

        <p class="partners-text">
          We collaborate with trusted partners to deliver consistent quality, reliability, and innovation.
          Our global network helps us provide the best solutions for your needs.
        </p>

        <a href="our_partners.php" class="partners-btn">Read More</a>
      </div>

      <!-- Right Logos -->
      <div class="partners-logos">
        <div class="partner-logo-card">
          <img src="assets/img/home/1.webp" alt="Partner 1">
        </div>
        <div class="partner-logo-card">
          <img src="assets/img/home/2.webp" alt="Partner 2">
        </div>
        <div class="partner-logo-card">
          <img src="assets/img/home/21.webp" alt="Partner 3">
        </div>
        <div class="partner-logo-card">
          <img src="assets/img/home/26.webp" alt="Partner 4">
        </div>
      </div>

    </div>
  </div>
</section>
  <!-- end partner Section -->



</main>

<?php

include 'footer.php';
?>

<!-- Scroll Top -->
<a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script>
  let slides = document.querySelectorAll('.slide');
  let index = 0;

  function showSlide() {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
    });

    slides[index].classList.add('active');

    index++;
    if (index >= slides.length) {
      index = 0;
    }
  }

  setInterval(showSlide, 3000); // change every 3 seconds
</script>

</body>

</html>