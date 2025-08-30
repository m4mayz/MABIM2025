<?php
$home = "active";
$pedoman = "";
$atribut = "";
$kegiatan = "";
$penugasan = "";
$absensi = "";
$info = "";
include 'header.php';

$content = [
  'id' => [
    'hero_title' => 'Time Travelling',
    'hero_subtitle' => 'Unlocking The Culture',
    'hero_greeting' => 'Selamat Datang Para Penjelajah Waktu Genusian 2025!',
    'hero_button_main' => 'Mulai Perjalanan',
    'hero_button_trailer' => 'Trailer MABIM 2025',
    'philosophy_title' => 'Filosofi Tema',
    'philosophy_desc' => '"Perjalanan menembus waktu untuk menyingkap, memahami, dan menghidupkan kembali nilai budaya, sehingga warisan masa lalu dapat menjadi cahaya bagi masa depan."',
    'philosophy_item1_title' => 'Time Travelling',
    'philosophy_item1_desc' => 'Menjelajahi masa lalu untuk memahami akar sejarah, tradisi, dan nilai-nilai yang membentuk identitas.',
    'philosophy_item2_title' => 'Unlocking the Culture',
    'philosophy_item2_desc' => 'Mengungkap, membongkar, dan merevitalisasi unsur-unsur budaya yang terlupakan untuk menginspirasi masa depan.',
    'logo_philosophy_title' => 'Filosofi Logo',
    'logo_philosophy_desc' => 'Visualisasi logo mengacu pada simbolik sifat yang relevan dengan kehidupan, waktu, perubahan, dan kemanfaatan.',
    'logo_point1' => '<strong>Tetesan Air & Lubang Kunci:</strong> Melambangkan proses membuka lapisan sejarah dan pengetahuan budaya yang terkubur.',
    'logo_point2' => '<strong>Akar & Riak Air:</strong> Cikal pohon kehidupan, perpaduan budaya, dan kelanjutan generasi dari masa ke masa.',
    'logo_point3' => '<strong>3 Lapisan Objek:</strong> Gambaran pembabakan 3 masa: klasik, kebangkitan, dan kekinian.',
    'mission_title' => 'Misi Perjalanan Waktu',
    'mission_desc' => 'Tujuan ekspedisi MABIM 2025 adalah membentuk Genusian yang berkarakter, intelektual, dan peduli terhadap warisan budaya bangsa.',
    'mission_item1' => 'Kesadaran Kebangsaan dan Kepedulian Sosial',
    'mission_item1_desc' => '<ul><li>Menanamkan kesadaran berbangsa, bernegara, bela negara, serta kepedulian terhadap lingkungan dan masyarakat sesuai dengan 4 (empat) pilar kebangsaan (Pancasila, UUD 1945, NKRI, dan Bhinneka Tunggal Ika).</li><li>Memperkenalkan hak dan kewajiban sebagai mahasiswa, sebagai insan intelektual, bagi diri dan lingkungan sekitar.</li><li>Mewujudkan kampus yang humanis, ramah (inklusif), toleran, aman dan sehat.</li></ul>',
    'mission_item2' => 'Pengenalan Sistem Pembelajaran dan Kehidupan Kampus',
    'mission_item2_desc' => '<ul><li>Memperkenalkan sistem pembelajaran dan dinamika kehidupan kampus melalui Trilogi Nusa Putra dan tri dharma perguruan tinggi.</li><li>Memperkenalkan kiat sukses belajar dan mengembangkan diri di perguruan tinggi melalui konsepsi dan praktik Merdeka Belajar - Kampus Merdeka.</li></ul>',
    'mission_item3' => 'Pembentukan Karakter dan Pengembangan Diri',
    'mission_item3_desc' => '<ul><li>Membentuk karakter Genusian yaitu Generasi Nusa Putra Brilian Berilmu dan Beriman melalui pengamalan trilogi nusa putra yaitu cinta kasih terhadap tuhan, cinta kasih terhadap orang tua dan cinta kasih terhadap sesama.</li><li>Terciptanya generasi nusa putra brilian berilmu dan ber iman atau Genusian.</li></ul>',
    'mascot_title' => 'Panduan Perjalanan Waktu',
    'mascot_desc' => 'Kenali para penjaga waktu yang akan memandu ekspedisi budaya Anda selama MABIM 2025.',
    'mascot1_name' => 'NUSANESHA (Maskot Utama)',
    'mascot1_desc' => 'Sebagai penjelajah waktu utama, Nusanesha memimpin ekspedisi untuk mengungkap kearifan budaya.',
    'mascot2_name' => 'NUSALOGI (Ahli Strategi)',
    'mascot2_desc' => 'Nusalogi adalah penjaga peta waktu dan arsip pengetahuan.',
    'mascot3_name' => 'NUSARAGA (Pelindung Tangguh)',
    'mascot3_desc' => 'Nusaraga adalah pelindung nilai-nilai luhur budaya.',
    'mascot4_name' => 'NUSAPEDI (Ahli Teknologi)',
    'mascot4_desc' => 'Nusapedi adalah jembatan antara masa lalu dan masa depan.',
    'cta_title' => 'Tentukan Garis Waktumu!',
    'cta_desc' => 'Kelompokmu adalah tim penjelajah waktumu. Temukan timmu dan bersiaplah untuk memulai petualangan MABIM 2025!',
    'cta_button' => 'Lihat Pembagian Kelompok',
    // Tambahkan konten trilogi
    'trilogi_title' => 'Mengenal Trilogi Nusa Putra',
    'trilogi_desc' => 'Nilai-nilai luhur yang menjadi fondasi setiap Genusian di sepanjang perjalanan waktu.',
    'amor_deus_title' => 'Amor Deus',
    'amor_deus_subtitle' => 'Cinta Kasih Tuhan',
    'amor_deus_desc' => 'Sebagai anugerah cahaya insan Nusa Putra untuk tetap menjalankan syariat agama, beragama merupakan kebutuhan dan cinta kita kepada Tuhan, bukan lagi sebagai kewajiban.',
    'amor_parentium_title' => 'Amor Parentium',
    'amor_parentium_subtitle' => 'Cinta Kasih Orang Tua',
    'amor_parentium_desc' => 'Sebagai kekuatan insan Nusa Putra untuk menjaga ajaran dan nilai-nilai luhur rasul, leluhur, kedua orang tua dan guru-guru kita serta orang orang soleh sebelum kita.',
    'amor_concervis_title' => 'Amor Concervis',
    'amor_concervis_subtitle' => 'Cinta Kasih Sesama',
    'amor_concervis_desc' => 'Sebagai pengikat insan Nusa Putra untuk menjalani hidup berdampingan secara damai dalam menyikapi setiap perbedaan, karena Tuhan berkehendak atas adanya perbedaan itu sendiri.',
  ],
  'en' => [
    'hero_title' => 'Time Travelling',
    'hero_subtitle' => 'Unlocking The Culture',
    'hero_greeting' => 'Welcome, Genusian Time Travelers of 2025!',
    'hero_button_main' => 'Start the Journey',
    'hero_button_trailer' => 'MABIM 2025 Trailer',
    'philosophy_title' => 'Theme Philosophy',
    'philosophy_desc' => '"A journey through time to uncover, understand, and revive cultural values, so that the heritage of the past can become a light for the future."',
    'philosophy_item1_title' => 'Time Travelling',
    'philosophy_item1_desc' => 'Exploring the past to understand the historical roots, traditions, and values that shape identity.',
    'philosophy_item2_title' => 'Unlocking the Culture',
    'philosophy_item2_desc' => 'Uncovering, dismantling, and revitalizing forgotten cultural elements to inspire the future.',
    'logo_philosophy_title' => 'Logo Philosophy',
    'logo_philosophy_desc' => 'The logo visualization refers to symbolic properties relevant to life, time, change, and usefulness.',
    'logo_point1' => '<strong>Water Drop & Keyhole:</strong> Symbolizes the process of unlocking buried layers of history and cultural knowledge.',
    'logo_point2' => '<strong>Roots & Water Ripples:</strong> The seed of the tree of life, a blend of culture, and the continuation of generations.',
    'logo_point3' => '<strong>3 Object Layers:</strong> Represents the three eras: classic, revival, and contemporary.',
    'mission_title' => 'Time Travel Mission',
    'mission_desc' => 'The objective of the MABIM 2025 expedition is to shape Genusians who are characterized, intellectual, and care about the nation\'s cultural heritage.',
    'mission_item1' => 'National Awareness and Social Care',
    'mission_item1_desc' => '<ul><li>Instilling national consciousness, statehood, national defense, and care for the environment and society according to the 4 national pillars (Pancasila, UUD 1945, NKRI, and Bhinneka Tunggal Ika).</li><li>Introducing rights and obligations as students, as intellectual beings, for themselves and the surrounding environment.</li><li>Creating a humanistic, friendly (inclusive), tolerant, safe and healthy campus.</li></ul>',
    'mission_item2' => 'Introduction to Learning Systems and Campus Life',
    'mission_item2_desc' => '<ul><li>Introducing the learning system and dynamics of campus life through the Nusa Putra Trilogy and tri dharma of higher education.</li><li>Introducing tips for successful learning and self-development in higher education through the conception and practice of Merdeka Belajar - Kampus Merdeka.</li></ul>',
    'mission_item3' => 'Character Building and Self Development',
    'mission_item3_desc' => '<ul><li>Forming the character of Genusian, namely the Brilliant, Knowledgeable and Faithful Nusa Putra Generation through the practice of the nusa putra trilogy: love for God, love for parents and love for fellow beings.</li><li>The creation of a brilliant, knowledgeable and faithful nusa putra generation or Genusian.</li></ul>',
    'mascot_title' => 'Time Travel Guides',
    'mascot_desc' => 'Meet the timekeepers who will guide your cultural expedition during MABIM 2025.',
    'mascot1_name' => 'NUSANESHA (Main Mascot)',
    'mascot1_desc' => 'As the main time traveler, Nusanesha leads the expedition to uncover cultural wisdom.',
    'mascot2_name' => 'NUSALOGI (The Strategist)',
    'mascot2_desc' => 'Nusalogi is the keeper of time maps and knowledge archives.',
    'mascot3_name' => 'NUSARAGA (The Protector)',
    'mascot3_desc' => 'Nusaraga is the guardian of noble cultural values.',
    'mascot4_name' => 'NUSAPEDI (The Technologist)',
    'mascot4_desc' => 'Nusapedi is the bridge between the past and the future.',
    'cta_title' => 'Define Your Timeline!',
    'cta_desc' => 'Your group is your time-traveling team. Find your team and get ready to start the MABIM 2025 adventure!',
    'cta_button' => 'See Group Assignments',
    // Tambahkan konten trilogi dalam bahasa Inggris
    'trilogi_title' => 'Understanding Nusa Putra Trilogy',
    'trilogi_desc' => 'Noble values that form the foundation of every Genusian throughout the journey of time.',
    'amor_deus_title' => 'Amor Deus',
    'amor_deus_subtitle' => 'Love of God',
    'amor_deus_desc' => 'As a gift of light for Nusa Putra people to continue practicing religious law, religion is our need and love for God, no longer just an obligation.',
    'amor_parentium_title' => 'Amor Parentium',
    'amor_parentium_subtitle' => 'Love of Parents',
    'amor_parentium_desc' => 'As the strength of Nusa Putra people to maintain the teachings and noble values of the apostle, ancestors, both parents and our teachers, and righteous people before us.',
    'amor_concervis_title' => 'Amor Concervis',
    'amor_concervis_subtitle' => 'Love of Others',
    'amor_concervis_desc' => 'As a binder for Nusa Putra people to live peacefully side by side in addressing every difference, because God wills the existence of these differences themselves.',
  ]
];
$text = $content[$lang];
?>

<section class="hero-section">
  <div class="time-portal">
    <div class="portal-ring"></div>
    <div class="portal-ring"></div>
    <div class="portal-ring"></div>
  </div>

  <div class="time-particles">
    <!-- Particles akan ditambahkan via JavaScript -->
  </div>

  <div class="hero-content">
    <h1><?php echo $text['hero_title']; ?></h1>
    <p class="hero-subtitle"><?php echo $text['hero_subtitle']; ?></p>
    <p class="hero-description"><?php echo $text['hero_greeting']; ?></p>
    <div class="hero-buttons">
      <a class="btn btn-primary-custom" href="#trilogi-nusa-putra">
        <i class="fas fa-rocket me-2"></i><?php echo $text['hero_button_main']; ?>
      </a>
      <a class="btn btn-secondary-custom" href="#" target="_blank">
        <i class="fab fa-youtube me-2"></i><?php echo $text['hero_button_trailer']; ?>
      </a>
    </div>
  </div>
</section>

<section class="section trilogi-section" id="trilogi-nusa-putra">
  <div class="container">
    <h2 class="section-title"><?php echo $text['trilogi_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['trilogi_desc']; ?></p>

    <div class="d-flex justify-content-center mb-5">
      <ul class="nav nav-pills" id="trilogiTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#amor-deus" type="button" role="tab">
            Amor Deus
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#amor-parentium" type="button" role="tab">
            Amor Parentium
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#amor-concervis" type="button" role="tab">
            Amor Concervis
          </button>
        </li>
      </ul>
    </div>

    <div class="tab-content" id="trilogiTabContent">
      <div class="tab-pane fade show active" id="amor-deus" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5 text-center">
            <div class="trilogi-image-container">
              <img src="assets/img/trilogy/amor_deus.png" alt="Amor Deus" class="trilogi-image img-fluid">
            </div>
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['amor_deus_title']; ?></h3>
            <h4 class="trilogi-subtitle"><?php echo $text['amor_deus_subtitle']; ?></h4>
            <p><?php echo $text['amor_deus_desc']; ?></p>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="amor-parentium" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5 text-center">
            <div class="trilogi-image-container">
              <img src="assets/img/trilogy/amor_parentium.png" alt="Amor Parentium" class="trilogi-image img-fluid">
            </div>
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['amor_parentium_title']; ?></h3>
            <h4 class="trilogi-subtitle"><?php echo $text['amor_parentium_subtitle']; ?></h4>
            <p><?php echo $text['amor_parentium_desc']; ?></p>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="amor-concervis" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5 text-center">
            <div class="trilogi-image-container">
              <img src="assets/img/trilogy/amor_concervis.png" alt="Amor Concervis" class="trilogi-image img-fluid">
            </div>
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['amor_concervis_title']; ?></h3>
            <h4 class="trilogi-subtitle"><?php echo $text['amor_concervis_subtitle']; ?></h4>
            <p><?php echo $text['amor_concervis_desc']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section logo-philosophy-section" id="filosofi-logo">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 text-center">
        <img src="assets/img/tp-logo-notext.png" alt="MABIM 2025 Logo" class="logo-image">
      </div>
      <div class="col-lg-7">
        <h2 class="section-title"><?php echo $text['logo_philosophy_title']; ?></h2>
        <p class="section-subtitle">
          <?php echo $text['logo_philosophy_desc']; ?>
        </p>
        <div class="logo-philosophy-list">
          <ul>
            <li>
              <div class="icon"><i class="fas fa-tint"></i></div>
              <div><?php echo $text['logo_point1']; ?></div>
            </li>
            <li>
              <div class="icon"><i class="fas fa-leaf"></i></div>
              <div><?php echo $text['logo_point2']; ?></div>
            </li>
            <li>
              <div class="icon"><i class="fas fa-layer-group"></i></div>
              <div><?php echo $text['logo_point3']; ?></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section filosofi-section" id="filosofi-tema">
  <div class="container">
    <h2 class="section-title"><?php echo $text['philosophy_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['philosophy_desc']; ?></p>
    <div class="row">
      <div class="col-lg-6">
        <div class="filosofi-item">
          <h3><?php echo $text['philosophy_item1_title']; ?></h3>
          <p><?php echo $text['philosophy_item1_desc']; ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="filosofi-item">
          <h3><?php echo $text['philosophy_item2_title']; ?></h3>
          <p><?php echo $text['philosophy_item2_desc']; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section mission-section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['mission_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['mission_desc']; ?></p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="misi-card">
          <div class="icon"><i class="fas fa-flag"></i></div>
          <h3><?php echo $text['mission_item1']; ?></h3>
          <div><?php echo $text['mission_item1_desc']; ?></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="misi-card">
          <div class="icon"><i class="fas fa-university"></i></div>
          <h3><?php echo $text['mission_item2']; ?></h3>
          <div><?php echo $text['mission_item2_desc']; ?></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="misi-card">
          <div class="icon"><i class="fas fa-balance-scale"></i></div>
          <h3><?php echo $text['mission_item3']; ?></h3>
          <div><?php echo $text['mission_item3_desc']; ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section maskot-section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['mascot_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['mascot_desc']; ?></p>
    <div class="d-flex justify-content-center mb-4">
      <ul class="nav nav-pills" id="maskotTab" role="tablist">
        <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill"
            data-bs-target="#nusanesha" type="button" role="tab">NUSANESHA</button></li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
            data-bs-target="#nusalogi" type="button" role="tab">NUSALOGI</button></li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
            data-bs-target="#nusaraga" type="button" role="tab">NUSARAGA</button></li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
            data-bs-target="#nusapedi" type="button" role="tab">NUSAPEDI</button></li>
      </ul>
    </div>
    <div class="tab-content" id="maskotTabContent">
      <div class="tab-pane fade show active" id="nusanesha" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="maskot-placeholder">Coming Soon - NUSANESHA</div>
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['mascot1_name']; ?></h3>
            <p><?php echo $text['mascot1_desc']; ?></p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nusalogi" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5">
            <img src="assets/img/mascots/nusalogi.png" alt="NUSALOGI" class="maskot-image">
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['mascot2_name']; ?></h3>
            <p><?php echo $text['mascot2_desc']; ?></p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nusaraga" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5">
            <img src="assets/img/mascots/nusaraga.png" alt="NUSARAGA" class="maskot-image">
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['mascot3_name']; ?></h3>
            <p><?php echo $text['mascot3_desc']; ?></p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nusapedi" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5">
            <img src="assets/img/mascots/nusapedi.png" alt="NUSAPEDI" class="maskot-image">
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['mascot4_name']; ?></h3>
            <p><?php echo $text['mascot4_desc']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section cta-section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['cta_title']; ?></h2>
    <p class="section-subtitle text-light"><?php echo $text['cta_desc']; ?></p>
    <a class="btn btn-primary-custom" href="#" target="_blank"><?php echo $text['cta_button']; ?></a>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Generate floating particles
    const particleContainer = document.querySelector('.time-particles');
    const particleCount = 50;

    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.className = 'particle';
      particle.style.left = Math.random() * 100 + '%';
      particle.style.animationDelay = Math.random() * 20 + 's';
      particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
      particleContainer.appendChild(particle);
    }

    const heroSection = document.querySelector('.hero-section');

    // Add time dust particles
    for (let i = 0; i < 25; i++) {
      const dust = document.createElement('div');
      dust.classList.add('time-dust');
      dust.style.left = Math.random() * 100 + 'vw';
      dust.style.animationDuration = 10 + Math.random() * 15 + 's';
      dust.style.animationDelay = Math.random() * 5 + 's';
      heroSection.appendChild(dust);
    }

    // Add energy sparks
    for (let i = 0; i < 15; i++) {
      const spark = document.createElement('div');
      spark.classList.add('energy-spark');
      spark.style.left = Math.random() * 100 + 'vw';
      spark.style.animationDuration = 5 + Math.random() * 10 + 's';
      spark.style.animationDelay = Math.random() * 8 + 's';
      heroSection.appendChild(spark);
    }
  });
</script>


<?php
include 'footer.php';
?>