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
        <h5><i class="fas fa-clock"></i> <?php echo $f_text['title']; ?></h5>
        <p><?php echo $f_text['desc']; ?></p>
        <div class="d-flex mb-4">
          <img src="assets/img/Logo_Universitas_Nusa_Putra.png" alt="Logo Universitas Nusa Putra" class="footer-logo">
          <img src="assets/img/logo_diktisaintek.png" alt="Logo Diktisaintek" class="footer-logo">
        </div>
      </div>
      <div class="col-lg-7 col-md-12 mb-4">
        <div class="row footer-nav-columns">
          <div class="col-6">
            <h5><i class="fas fa-sitemap"></i> <?php echo $f_text['nav_title']; ?></h5>
            <ul class="list-unstyled">
              <li><a href="index.php"><i class="fas fa-home"></i> <?php echo $menu['home']; ?></a></li>
              <li><a href="pedoman.php"><i class="fas fa-book"></i> <?php echo $menu['pedoman']; ?></a></li>
              <li><a href="kegiatan.php"><i class="fas fa-calendar-alt"></i> <?php echo $menu['kegiatan']; ?></a></li>
              <li><a href="info.php"><i class="fas fa-info-circle"></i> <?php echo $menu['informasi']; ?></a></li>
            </ul>
          </div>
          <div class="col-6">
            <h5><i class="fas fa-share-alt"></i> <?php echo $f_text['social_title']; ?></h5>
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

<div id="floating-mascot" class="floating-mascot-container">
  <div id="mascot-bubble" class="mascot-chat-bubble"></div>
  <img src="assets/img/mascots/Nusapedi.png" alt="Mascot" class="mascot-image" id="mascot-image">
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="assets/js/theme.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mascotContainer = document.getElementById('floating-mascot');
    const mascotBubble = document.getElementById('mascot-bubble');
    const mascotImage = document.getElementById('mascot-image');
    const currentLang = '<?php echo $lang; ?>';
    let chatInterval;

    // --- Kumpulan Teks untuk Bubble Chat ---
    const chatMessages = {
      id: {
        greeting: "Halo, Penjelajah Waktu! Aku Nusapedi, ahli teknologi masa depan!",
        random: [
          "Siap menjelajahi lintas waktu? Mari kita mulai petualangan!",
          "Jangan lupa cek pedoman untuk persiapan perjalanan waktumu!",
          "Sudah tau kelompokmu? Tim penjelajah menanti!",
          "Semangat untuk MABIM 2025! Masa depan cerah menantimu!",
          "Tahukah kamu? Teknologi bisa menjembatani masa lalu dan masa depan!",
          "Trilogi Nusa Putra adalah kompasmu dalam perjalanan ini!",
          "Penasaran dengan maskot lainnya? Klik tab maskot di atas!",
          "Budaya kita adalah harta karun yang harus dijaga!",
          "Setiap langkah dalam MABIM adalah bagian dari sejarahmu!",
          "Klik aku jika butuh bantuan navigasi waktu!",
          "Ingat, kamu adalah Genusian masa depan!",
          "Kegiatan MABIM sudah menanti, siap bertualang?"
        ]
      },
      en: {
        greeting: "Hello, Time Traveler! I'm Nusapedi, the future technologist!",
        random: [
          "Ready to explore across time? Let's start the adventure!",
          "Don't forget to check the guidelines for your time journey preparation!",
          "Do you know your group? The explorer team awaits!",
          "Spirit for MABIM 2025! A bright future awaits you!",
          "Did you know? Technology can bridge the past and future!",
          "Nusa Putra Trilogy is your compass in this journey!",
          "Curious about other mascots? Click the mascot tab above!",
          "Our culture is a treasure that must be preserved!",
          "Every step in MABIM is part of your history!",
          "Click me if you need time navigation help!",
          "Remember, you are the Genusian of the future!",
          "MABIM activities are waiting, ready for adventure?"
        ]
      }
    };

    const messages = chatMessages[currentLang];

    // Fungsi untuk menampilkan bubble chat
    function showBubble(message) {
      mascotBubble.textContent = message;
      mascotBubble.classList.add('visible');
      // Sembunyikan bubble setelah 5 detik (lebih lama untuk pesan yang lebih panjang)
      setTimeout(() => {
        mascotBubble.classList.remove('visible');
      }, 5000);
    }

    // Fungsi untuk menampilkan pesan acak
    function showRandomMessage() {
      const randomIndex = Math.floor(Math.random() * messages.random.length);
      showBubble(messages.random[randomIndex]);
    }

    // Munculkan maskot setelah 3 detik
    setTimeout(() => {
      mascotContainer.classList.add('visible');
      // Tampilkan sapaan pertama kali
      setTimeout(() => {
        showBubble(messages.greeting);
      }, 500); // Sedikit jeda setelah maskot muncul
    }, 3000);

    // Event listener saat maskot diklik
    mascotImage.addEventListener('click', function () {
      // Hentikan interval sementara agar tidak tumpang tindih
      clearInterval(chatInterval);
      showRandomMessage();
      // Mulai lagi interval setelah di-klik
      startChatInterval();
    });

    // Fungsi untuk memulai interval chat
    function startChatInterval() {
      chatInterval = setInterval(showRandomMessage, 8000); // Munculkan chat setiap 8 detik (lebih jarang)
    }

    // Mulai interval otomatis setelah sapaan pertama selesai
    setTimeout(startChatInterval, 12000); // 3s (muncul) + 0.5s (jeda) + 5s (tampil) + jeda
  });
</script>
</body>

</html>