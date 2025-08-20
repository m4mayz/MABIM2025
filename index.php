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
    'trilogy' => 'Amor Deus, Parentium, Concervis',
    'philosophy_title' => 'Filosofi Tema',
    'philosophy_desc' => '“Perjalanan menembus waktu untuk menyingkap, memahami, dan menghidupkan kembali nilai budaya, sehingga warisan masa lalu dapat menjadi cahaya bagi masa depan.”',
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
    'mission_item1' => 'Menanamkan Jiwa Kebangsaan',
    'mission_item1_desc' => 'Memperkuat kesadaran berbangsa, bernegara, dan cinta tanah air sesuai dengan 4 pilar kebangsaan.',
    'mission_item2' => 'Memahami Kehidupan Kampus',
    'mission_item2_desc' => 'Memperkenalkan sistem pembelajaran dan dinamika kehidupan kampus melalui Trilogi Nusa Putra.',
    'mission_item3' => 'Hak & Kewajiban Mahasiswa',
    'mission_item3_desc' => 'Memperkenalkan hak dan kewajiban sebagai mahasiswa dan insan intelektual bagi lingkungan sekitar.',
    'mascot_title' => 'Panduan Perjalanan Waktu',
    'mascot_desc' => 'Kenali para penjaga waktu yang akan memandu ekspedisi budaya Anda selama MABIM 2025.',
    'mascot1_name' => 'NUSANESHA (Maskot Utama)',
    'mascot1_desc' => 'Sebagai penjelajah waktu utama, Nusanesha memimpin ekspedisi untuk mengungkap kearifan budaya.',
    'mascot2_name' => 'NUSALOGI (Ahli Strategi)',
    'mascot2_desc' => 'Nusalogi adalah penjaga peta waktu dan arsip pengetahuan.',
    'mascot3_name' => 'NUSARAGA (Pelindung Tangguh)',
    'mascot3_desc' => 'Nusaraga adalah pelindung nilai-nilai luhur budaya.',
    'mascot4_name' => 'NUSAPEDIA (Ahli Teknologi)',
    'mascot4_desc' => 'Nusapedia adalah jembatan antara masa lalu dan masa depan.',
    'cta_title' => 'Tentukan Garis Waktumu!',
    'cta_desc' => 'Kelompokmu adalah tim penjelajah waktumu. Temukan timmu dan bersiaplah untuk memulai petualangan MABIM 2025!',
    'cta_button' => 'Lihat Pembagian Kelompok',
  ],
  'en' => [
    'hero_title' => 'Time Travelling',
    'hero_subtitle' => 'Unlocking The Culture',
    'hero_greeting' => 'Welcome, Genusian Time Travelers of 2025!',
    'hero_button_main' => 'Start the Journey',
    'hero_button_trailer' => 'MABIM 2025 Trailer',
    'trilogy' => 'Amor Deus, Parentium, Concervis',
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
    'mission_item1' => 'Instilling National Spirit',
    'mission_item1_desc' => 'Strengthening national consciousness, statehood, and love for the homeland according to the 4 national pillars.',
    'mission_item2' => 'Understanding Campus Life',
    'mission_item2_desc' => 'Introducing the learning system and dynamics of campus life through the Nusa Putra Trilogy.',
    'mission_item3' => 'Student Rights & Obligations',
    'mission_item3_desc' => 'Introducing the rights and obligations as students and intellectual beings for the surrounding environment.',
    'mascot_title' => 'Time Travel Guides',
    'mascot_desc' => 'Meet the timekeepers who will guide your cultural expedition during MABIM 2025.',
    'mascot1_name' => 'NUSANESHA (Main Mascot)',
    'mascot1_desc' => 'As the main time traveler, Nusanesha leads the expedition to uncover cultural wisdom.',
    'mascot2_name' => 'NUSALOGI (The Strategist)',
    'mascot2_desc' => 'Nusalogi is the keeper of time maps and knowledge archives.',
    'mascot3_name' => 'NUSARAGA (The Protector)',
    'mascot3_desc' => 'Nusaraga is the guardian of noble cultural values.',
    'mascot4_name' => 'NUSAPEDIA (The Technologist)',
    'mascot4_desc' => 'Nusapedia is the bridge between the past and the future.',
    'cta_title' => 'Define Your Timeline!',
    'cta_desc' => 'Your group is your time-traveling team. Find your team and get ready to start the MABIM 2025 adventure!',
    'cta_button' => 'See Group Assignments',
  ]
];
$text = $content[$lang];
?>

<section class="hero-section">
  <div class="bg-animation">
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>
  <div class="hero-content">
    <h1 class="text-uppercase"><?php echo $text['hero_title']; ?></h1>
    <p class="subtitle"><?php echo $text['hero_subtitle']; ?></p>
    <p class="lead text-light mb-4"><?php echo $text['hero_greeting']; ?></p>
    <div class="hero-buttons">
      <a class="btn btn-secondary-custom" href="#"><i class="fab fa-youtube"></i>
        <?php echo $text['hero_button_trailer']; ?></a>
      <a class="btn btn-primary-custom" href="#filosofi-logo"><?php echo $text['hero_button_main']; ?></a>
    </div>
  </div>
</section>

<section class="trilogy-section">
  <div class="container">
    <h3><?php echo $text['trilogy']; ?></h3>
  </div>
</section>

<section class="section logo-philosophy-section" id="filosofi-logo">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 text-center">
        <div class="logo-placeholder">LOGO</div>
      </div>
      <div class="col-lg-7">
        <h2 class="section-title text-start"><?php echo $text['logo_philosophy_title']; ?></h2>
        <p class="section-subtitle text-start ps-0 ms-0"><?php echo $text['logo_philosophy_desc']; ?></p>
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

<section class="section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['mission_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['mission_desc']; ?></p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="misi-card">
          <div class="icon"><i class="fas fa-flag"></i></div>
          <h3><?php echo $text['mission_item1']; ?></h3>
          <p><?php echo $text['mission_item1_desc']; ?></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="misi-card">
          <div class="icon"><i class="fas fa-university"></i></div>
          <h3><?php echo $text['mission_item2']; ?></h3>
          <p><?php echo $text['mission_item2_desc']; ?></p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="misi-card">
          <div class="icon"><i class="fas fa-balance-scale"></i></div>
          <h3><?php echo $text['mission_item3']; ?></h3>
          <p><?php echo $text['mission_item3_desc']; ?></p>
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
            data-bs-target="#nusapedia" type="button" role="tab">NUSAPEDIA</button></li>
      </ul>
    </div>
    <div class="tab-content" id="maskotTabContent">
      <div class="tab-pane fade show active" id="nusanesha" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="maskot-placeholder">Placeholder NUSANESHA</div>
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
            <div class="maskot-placeholder">Placeholder NUSALOGI</div>
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
            <div class="maskot-placeholder">Placeholder NUSARAGA</div>
          </div>
          <div class="col-md-7">
            <h3><?php echo $text['mascot3_name']; ?></h3>
            <p><?php echo $text['mascot3_desc']; ?></p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nusapedia" role="tabpanel">
        <div class="row align-items-center">
          <div class="col-md-5">
            <div class="maskot-placeholder">Placeholder NUSAPEDIA</div>
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

<?php
include 'footer.php';
?>