<?php
// Ambil variabel bahasa dari scope global
global $lang;

// Teks Footer
$footer_text = [
  'id' => [
    'title' => 'MABIM 2025',
    'desc' => 'Time Travelling: Unlocking the Culture. Perjalanan menembus waktu untuk menyingkap, memahami, dan menghidupkan kembali nilai budaya.',
    'nav_title' => 'Navigasi',
    'social_title' => 'Media Sosial'
  ],
  'en' => [
    'title' => 'MABIM 2025',
    'desc' => 'Time Travelling: Unlocking the Culture. A journey through time to uncover, understand, and revive cultural values.',
    'nav_title' => 'Navigation',
    'social_title' => 'Social Media'
  ]
];
$f_text = $footer_text[$lang];

// Ambil menu dari header.php untuk konsistensi
global $menu;
?>
</main>
<footer class="footer-custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 mb-4">
        <h5><?php echo $f_text['title']; ?></h5>
        <p><?php echo $f_text['desc']; ?></p>
        <div class="d-flex mb-4">
          <div class="footer-logo-placeholder">Logo Kampus</div>
          <div class="footer-logo-placeholder">Logo Lain</div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 mb-4">
        <div class="row footer-nav-columns">
          <div class="col-6">
            <h5><?php echo $f_text['nav_title']; ?></h5>
            <ul class="list-unstyled">
              <li><a href="index.php"><i class="fas fa-home"></i> <?php echo $menu['home']; ?></a></li>
              <li><a href="pedoman.php"><i class="fas fa-book"></i> <?php echo $menu['pedoman']; ?></a></li>
              <li><a href="kegiatan.php"><i class="fas fa-calendar-alt"></i> <?php echo $menu['kegiatan']; ?></a></li>
              <li><a href="info.php"><i class="fas fa-info-circle"></i> <?php echo $menu['informasi']; ?></a></li>
            </ul>
          </div>
          <div class="col-6">
            <h5><?php echo $f_text['social_title']; ?></h5>
            <ul class="list-unstyled">
              <li><a href="https://www.instagram.com/mabim_unsp/" target="_blank"><i class="fab fa-instagram"></i>
                  Instagram</a></li>
              <li><a href="https://www.youtube.com/c/MabimUnsp" target="_blank"><i class="fab fa-youtube"></i>
                  YouTube</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      &copy; <?php echo date("Y"); ?> Panitia MABIM 2025 Universitas Nusa Putra. All Rights Reserved.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>