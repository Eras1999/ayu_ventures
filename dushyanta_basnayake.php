<?php
include 'header.php';
?>

<main class="main">

  <section class="profile-section">
  <div class="container">

    <!-- TOP PROFILE -->
    <div class="profile-top">
      <div class="profile-photo">
        <img src="assets/img/management/av2.png" alt="Mr. Dushyanta Basnayake">
      </div>

      <div class="profile-info">
        <h2 class="profile-name">Mr. Dushyanta Basnayake</h2>
        <p class="profile-bio">
          Mr. Dushyanta Basnayake is a distinguished corporate leader and financial strategist with a dual
          track record of success in high-level public sector governance and private sector entrepreneurship.
          He currently serves as Chairman of Sri Lanka Savings Bank and a Director of the National Savings Bank (NSB),
          playing a pivotal role in the stability and growth of the banking sector.
        </p>

        <div class="profile-social">
          <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>

    <!-- Divider -->
    <div class="profile-divider">...</div>

    <!-- BOTTOM TABS -->
    <div class="profile-tabs-wrap">

      <!-- Left Tab Buttons -->
      <div class="profile-tabs" role="tablist" aria-label="Profile tabs">
        <button class="tab-btn active" type="button" data-tab="tab-1">
          Corporate & Entrepreneurial<br>Trajectory
        </button>

        <button class="tab-btn" type="button" data-tab="tab-2">
          Governance Leadership
        </button>

        <button class="tab-btn" type="button" data-tab="tab-3">
          Professional Qualifications
        </button>
      </div>

      <!-- Right Tab Content -->
      <div class="profile-tab-content">

        <!-- Tab 1 -->
        <div class="tab-panel active" id="tab-1" role="tabpanel">
          <h3>Corporate & Entrepreneurial Trajectory</h3>
          <p>
            Mr. Basnayake’s career began at Ernst & Young as a Trainee Audit Assistant. He rapidly ascended the corporate
            ladder within the CBE Group of Companies, rising from Accountant to Executive Director. Leveraging this deep
            operational expertise, he architected his own diversified business ventures.
          </p>
        </div>

        <!-- Tab 2 -->
        <div class="tab-panel" id="tab-2" role="tabpanel">
          <h3>Governance Leadership</h3>
          <p>
            He has contributed to national-level financial stability through strategic governance roles, policy-level
            decision-making, and oversight functions across multiple institutions — ensuring transparency,
            accountability, and long-term institutional resilience.
          </p>
        </div>

        <!-- Tab 3 -->
        <div class="tab-panel" id="tab-3" role="tabpanel">
          <h3>Professional Qualifications</h3>
          <ul class="qual-list">
            <li>Fellow Member – Chartered Institute of Management Accountants (CIMA)</li>
            <li>Certified Professional – Strategic Finance & Governance</li>
            <li>Executive Leadership Training – Corporate & Public Sector</li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</section>



</main>

<?php
include 'footer.php';
?>

<!-- Scroll Top -->
<a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<script>
  document.querySelectorAll(".tab-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      // active button
      document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      // active panel
      const target = btn.getAttribute("data-tab");
      document.querySelectorAll(".tab-panel").forEach(p => p.classList.remove("active"));
      document.getElementById(target).classList.add("active");
    });
  });
</script>


<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>