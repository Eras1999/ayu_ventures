<?php
// contact.php
include 'header.php';
?>

  <main class="main">

    <!-- FULL WIDTH COVER -->
<section class="cover-section">
  <img src="assets/img/cover/Ayu B4.png" alt="Cover Image">
  <div class="cover-overlay">
    <h1>CONTACT US</h1>
    <p>Driving vision, governance, and sustainable growth</p>
  </div>
</section>

    <section class="contact-page">
  <div class="container">

    <div class="contact-grid">

      <!-- LEFT: Contact Info -->
      <div class="contact-info-box">
        <h3>Contact Details</h3>

        <div class="info-item">
          <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="info-text">
            <h5>Our Address</h5>
            <p>
              Corporate Office 9/2, Dudley Senanayake Mawatha,<br>
              Colombo 08, Sri Lanka
            </p>
            <p class="mt">
              Registered Office 235/35A, Polhena Road, Kelaniya, Sri Lanka
            </p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
          <div class="info-text">
            <h5>Hotline</h5>
            <p>
              <a href="tel:+94711300888">+94 711 300 888</a><br>
              <a href="tel:+94114294002">+94 114 294 002</a>
            </p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
          <div class="info-text">
            <h5>Email</h5>
            <p><a href="mailto:info@ayuventures.com">info@ayuventures.com</a></p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="bi bi-globe2"></i></div>
          <div class="info-text">
            <h5>Web</h5>
            <p><a href="https://ayuventures.com" target="_blank">www.ayuventures.com</a></p>
          </div>
        </div>
      </div>

      <!-- RIGHT: Contact Form -->
      <div class="contact-form-box">
        <h3>Send Us a Message</h3>
        <p class="contact-subtext">
          Have questions or want to learn more? Reach out to us and our team will get back to you shortly.
        </p>

        <form action="contact-submit.php" method="post" class="contact-form">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="email" name="email" placeholder="Your Email" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <textarea name="message" placeholder="Your Message" rows="5" required></textarea>

          <button type="submit" class="contact-btn">Send Message</button>
        </form>
      </div>

    </div>

    <!-- MAP -->
    <div class="contact-map">
      <iframe
        src="https://www.google.com/maps?q=Colombo%2008%20Sri%20Lanka&output=embed"
        width="100%"
        height="320"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </div>
</section>


  </main>

<?php
include 'footer.php';
?>