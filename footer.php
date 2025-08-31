<?php
// Ambil variabel bahasa dari scope global
global $lang;

// Teks Footer
$footer_text = [
  'id' => [
    'title' => 'MABIM 2025',
    'desc' => 'Time Travelling: Unlocking the Culture. Perjalanan menembus waktu untuk menyingkap, memahami, dan menghidupkan kembali nilai budaya.',
    'nav_title' => 'Navigasi',
    'social_title' => 'Media Sosial',
    'whatsapp_text' => 'Ada pertanyaan? Chat kami!',
    'univ_website' => 'nusaputra.ac.id',
  ],
  'en' => [
    'title' => 'MABIM 2025',
    'desc' => 'Time Travelling: Unlocking the Culture. A journey through time to uncover, understand, and revive cultural values.',
    'nav_title' => 'Navigation',
    'social_title' => 'Social Media',
    'whatsapp_text' => 'Questions? Chat with us!',
    'univ_website' => 'nusaputra.ac.id',
  ]
];
$f_text = $footer_text[$lang];

// Ambil menu dari header.php untuk konsistensi
global $menu;

// Definisikan text untuk WhatsApp
$whatsapp_default_text = [
  'id' => 'Halo, saya ingin bertanya tentang MABIM 2025 Universitas Nusa Putra.',
  'en' => 'Hello, I would like to ask about MABIM 2025 at Nusa Putra University.'
];
$whatsapp_number = "6282311239142"; // Ganti dengan nomor WhatsApp yang sebenarnya
$whatsapp_message = urlencode($whatsapp_default_text[$lang]);
?>
</main>
<footer class="footer-custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 mb-4">
        <h5><img src="assets/img/logo_white.png" alt="Logo Mabim 2025"
            style="height: 40px; width: auto; vertical-align: middle;" />
          <?php echo $f_text['title']; ?>
        </h5>
        <p><?php echo $f_text['desc']; ?></p>
        <div class="d-flex mb-4">
          <img src="assets/img/Logo_Universitas_Nusa_Putra.png" alt="Logo Universitas Nusa Putra" class="footer-logo">
          <img src="assets/img/logo_diktisaintek.png" alt="Logo Diktisaintek" class="footer-logo">
        </div>
      </div>
      <div class="col-lg-7 col-md-12 mb-4">
        <div class="row footer-nav-columns">
          <div class="col-6">
            <h5><img src="assets/img/icon/sitemap.png" alt="Sitemap"
                style="width: 20px; height: 20px; margin-right: 10px; vertical-align: middle;" />
              <?php echo $f_text['nav_title']; ?></h5>
            <ul class="list-unstyled">
              <li><a href="index.php"><img src="assets/img/icon/home.png" alt="Home"
                    style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" />
                  <?php echo $menu['home']; ?></a></li>
              <li><a href="pedoman.php"><img src="assets/img/icon/book.png" alt="Guideline"
                    style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" />
                  <?php echo $menu['pedoman']; ?></a></li>
              <li><a href="kegiatan.php"><img src="assets/img/icon/calendar.png" alt="Activities"
                    style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" />
                  <?php echo $menu['kegiatan']; ?></a></li>
              <li><a href="info.php"><img src="assets/img/icon/info.png" alt="Information"
                    style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" />
                  <?php echo $menu['informasi']; ?></a></li>
              <li><a href="https://nusaputra.ac.id/" target="_blank"><img src="assets/img/icon/link.png" alt="Website"
                    style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" />
                  <?php echo $f_text['univ_website']; ?></a></li>
            </ul>
          </div>
          <div class="col-6">
            <h5><img src="assets/img/icon/share.png" alt="Social Media"
                style="width: 20px; height: 20px; margin-right: 10px; vertical-align: middle;" />
              <?php echo $f_text['social_title']; ?></h5>
            <ul class="list-unstyled">
              <li><a href="https://www.instagram.com/mabim_unsp/" target="_blank"><img
                    src="assets/img/icon/instagram.png" alt="Instagram"
                    style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" /> Instagram</a></li>
              <li><a href="https://www.youtube.com/c/MabimUnsp" target="_blank"><img src="assets/img/icon/youtube.png"
                    alt="YouTube" style="width: 16px; height: 16px; margin-right: 8px; vertical-align: middle;" />
                  YouTube</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      &copy; <?php echo date("Y"); ?> Divisi Media IT MABIM 2025 Universitas Nusa Putra.
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/<?php echo $whatsapp_number; ?>?text=<?php echo $whatsapp_message; ?>" style="position: fixed; bottom: 30px; right: 30px; width: 60px; height: 60px; background-color: #25d366; color: white; 
   border-radius: 50%; text-align: center; display: flex; align-items: center; justify-content: center; 
   box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); z-index: 1000; transition: all 0.3s;" class="floating-whatsapp-btn"
  target="_blank">
  <div class="whatsapp-tooltip"><?php echo $f_text['whatsapp_text']; ?></div>
  <img src="assets/img/icon/whatsapp.png" alt="WhatsApp" style="width: 30px; height: 30px; object-fit: contain;">
</a>

<div id="floating-mascot" class="floating-mascot-container">
  <div id="mascot-bubble" class="mascot-chat-bubble"></div>
  <img src="assets/img/mascots/nusapedi2.png" alt="Mascot" class="mascot-image" id="mascot-image">
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