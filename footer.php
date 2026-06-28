<?php
// footer.php
?>

<footer style="background:#2f8f00;color:#ffffff;padding:60px 0 20px 0; margin-bottom: -70px;">
  <style>
    @media (max-width: 768px) {
      .ayu-footer-row {
        flex-direction: column !important;
      }

      .ayu-footer-col {
        flex: 1 1 100% !important;
      }

      .ayu-footer-brand {
        text-align: left !important;
      }

      .ayu-footer-brand p {
        margin-left: 0 !important;
        margin-right: 0 !important;
        text-align: left !important;
      }
    }
  </style>

  <div style="max-width:1200px;margin:auto;padding:0 15px;">
    <div class="ayu-footer-row" style="display:flex;flex-wrap:wrap;gap:30px;">

      <!-- Brand -->
      <div class="ayu-footer-col ayu-footer-brand" style="flex:1 1 40%;">
        <div style="margin-bottom:15px;">
          <img src="assets/img/footer_white_logo.png" alt="Ayu Ventures"
            style="max-width:180px;width:100%;height:auto;">
        </div>
        <p style="font-size:14px;line-height:1.7;max-width:420px;">
          AYU Ventures is the driving force behind the modernization and growth of
          pharmaceutical production. As a well-disciplined group of companies with
          extensive global partnerships, our primary mission is to empower
          Pharmaceutical Manufacturers with the critical resources they need to succeed.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="ayu-footer-col" style="flex:1 1 20%;">
        <h4 style="margin-bottom:15px;font-size:18px;color:#ffffff;"><b>Quick Links</b></h4>
        <ul style="list-style:none;padding:0;margin:0;font-size:14px;">
          <li style="margin-bottom:8px;"><a href="index.php" style="color:#ffffff;text-decoration:none;">Home</a></li>
          <li style="margin-bottom:8px;"><a href="what_we_do.php" style="color:#ffffff;text-decoration:none;">What We
              Do</a></li>
          <li style="margin-bottom:8px;"><a href="our_partners.php" style="color:#ffffff;text-decoration:none;">Our
              Partners</a></li>
          <li style="margin-bottom:8px;"><a href="management.php"
              style="color:#ffffff;text-decoration:none;">Management</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="ayu-footer-col" style="flex:1 1 30%;">
        <h4 style="margin-bottom:15px;font-size:18px;color:#ffffff;">
          <b>Connect with Us</b>
        </h4>

        <p style="font-size:14px;line-height:1.6;margin-bottom:10px;">
          <i class="bi bi-geo-alt-fill" style="color:#fff;margin-right:8px;"></i>
          Corporate Office 9/2, Dudley Senanayake Mawatha, Colombo 08, Sri Lanka
        </p>

        <p style="font-size:14px;margin-bottom:10px;">
          <i class="bi bi-telephone-fill" style="color:#fff;margin-right:8px;"></i>
          +94 711 300 888 | +94 114 294 002
        </p>

        <p style="font-size:14px;margin-bottom:15px;">
          <i class="bi bi-envelope-fill" style="color:#fff;margin-right:8px;"></i>
          info@ayuventures.com
        </p>

      </div>


    </div>

    <!-- Bottom -->
    <div style="border-top:1px solid rgba(255,255,255,0.3);margin-top:40px;padding-top:15px;text-align:center;">
      <p style="font-size:13px;margin:0;">
        © <?php echo date("Y"); ?> Ayu Ventures. All rights reserved | Designed and Developed by IOTA Digitals
      </p>
    </div>
  </div>
</footer>