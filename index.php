<?php
  $home ="active";
  $pedoman="";
  $atribut="";
  $kegiatan="";
  $penugasan="";
  $absensi="";
  $info="";

  include 'header.php';
?>

      <section class="hero-section">
        <div class="hero-content">
          <h1 class="text-uppercase">Time Travelling</h1>
          <p class="subtitle">Unlocking The Culture</p>
          <p class="lead text-light mb-5">Selamat Datang Para Penjelajah Waktu Genusian 2025!</p>
          <a class="btn btn-primary-custom" href="#filosofi">Mulai Perjalanan</a>
        </div>
      </section>

      <section class="section filosofi-section" id="filosofi">
        <div class="container">
          <h2 class="section-title">Filosofi Tema</h2>
          <p class="section-subtitle">“Perjalanan menembus waktu untuk menyingkap, memahami, dan menghidupkan kembali nilai budaya, sehingga warisan masa lalu dapat menjadi cahaya bagi masa depan.”</p>
          <div class="row">
            <div class="col-lg-6">
              <div class="filosofi-item">
                <h3>Time Travelling</h3>
                <p>Menjelajahi masa lalu untuk memahami akar sejarah, tradisi, dan nilai-nilai yang membentuk identitas. Dengan menjelajahi jejak waktu, kita memetik pelajaran dari sejarah untuk menuntun langkah ke depan.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="filosofi-item">
                <h3>Unlocking the Culture</h3>
                <p>Mengungkap, membongkar, dan merevitalisasi unsur-unsur budaya yang terlupakan. Membuka kunci budaya adalah mengalirkan kembali nilai-nilai luhur agar hidup, beradaptasi, dan menginspirasi masa depan.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <h2 class="section-title">Misi Perjalanan Waktu</h2>
          <p class="section-subtitle">Tujuan dari ekspedisi MABIM 2025 adalah untuk membentuk Genusian yang berkarakter, intelektual, dan peduli terhadap warisan budaya bangsa.</p>
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="misi-card">
                <div class="icon"><i class="fas fa-flag"></i></div>
                <h3>Menanamkan Jiwa Kebangsaan</h3>
                <p>Memperkuat kesadaran berbangsa, bernegara, dan cinta tanah air sesuai dengan 4 pilar kebangsaan.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="misi-card">
                <div class="icon"><i class="fas fa-university"></i></div>
                <h3>Memahami Kehidupan Kampus</h3>
                <p>Memperkenalkan sistem pembelajaran dan dinamika kehidupan kampus melalui Trilogi Nusa Putra.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="misi-card">
                <div class="icon"><i class="fas fa-balance-scale"></i></div>
                <h3>Hak & Kewajiban Mahasiswa</h3>
                <p>Memperkenalkan hak dan kewajiban sebagai mahasiswa dan insan intelektual bagi lingkungan sekitar.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="misi-card">
                <div class="icon"><i class="fas fa-users"></i></div>
                <h3>Mewujudkan Kampus Humanis</h3>
                <p>Menciptakan lingkungan kampus yang ramah, inklusif, toleran, aman, dan sehat bagi semua.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="misi-card">
                <div class="icon"><i class="fas fa-lightbulb"></i></div>
                <h3>Kiat Sukses Belajar</h3>
                <p>Memperkenalkan strategi sukses belajar dan pengembangan diri melalui konsep Merdeka Belajar - Kampus Merdeka.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="misi-card">
                <div class="icon"><i class="fas fa-gem"></i></div>
                <h3>Membentuk Karakter Genusian</h3>
                <p>Membentuk Generasi Nusa Putra Brilian (Berilmu dan Beriman) melalui pengamalan trilogi nusa putra.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="section maskot-section">
        <div class="container">
          <h2 class="section-title">Panduan Perjalanan Waktu</h2>
          <p class="section-subtitle">Kenali para penjaga waktu yang akan memandu ekspedisi budaya Anda selama MABIM 2025.</p>

          <div class="d-flex justify-content-center mb-4">
            <ul class="nav nav-pills" id="maskotTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="nusanesha-tab" data-bs-toggle="pill" data-bs-target="#nusanesha" type="button" role="tab">NUSANESHA</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nusalogi-tab" data-bs-toggle="pill" data-bs-target="#nusalogi" type="button" role="tab">NUSALOGI</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nusaraga-tab" data-bs-toggle="pill" data-bs-target="#nusaraga" type="button" role="tab">NUSARAGA</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nusapedia-tab" data-bs-toggle="pill" data-bs-target="#nusapedia" type="button" role="tab">NUSAPEDIA</button>
              </li>
            </ul>
          </div>

          <div class="tab-content" id="maskotTabContent">
            <div class="tab-pane fade show active" id="nusanesha" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-md-5">
                  <div class="maskot-placeholder">Placeholder NUSANESHA</div>
                </div>
                <div class="col-md-7">
                  <h3>NUSANESHA (Maskot Utama)</h3>
                  <p>Sebagai penjelajah waktu utama, Nusanesha memimpin ekspedisi untuk mengungkap kearifan budaya. Ia melambangkan semangat ingin tahu, keberanian menjelajahi masa lalu, dan visi untuk masa depan yang lebih baik.</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nusalogi" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-md-5">
                  <div class="maskot-placeholder">Placeholder NUSALOGI</div>
                </div>
                <div class="col-md-7">
                  <h3>NUSALOGI (Ahli Strategi & Pengetahuan)</h3>
                  <p>Nusalogi adalah penjaga peta waktu dan arsip pengetahuan. Dengan kebijaksanaannya, ia membantu menafsirkan hikmah dari masa lalu dan merancang strategi untuk menghadapi tantangan masa depan.</p>
                </div>
              </div>
            </div>
             <div class="tab-pane fade" id="nusaraga" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-md-5">
                  <div class="maskot-placeholder">Placeholder NUSARAGA</div>
                </div>
                <div class="col-md-7">
                  <h3>NUSARAGA (Pelindung yang Tangguh)</h3>
                  <p>Nusaraga adalah pelindung nilai-nilai luhur budaya. Dengan ketangguhannya, ia memastikan bahwa warisan budaya tetap terjaga dan tidak lekang oleh waktu, siap menjadi benteng identitas generasi baru.</p>
                </div>
              </div>
            </div>
             <div class="tab-pane fade" id="nusapedia" role="tabpanel">
              <div class="row align-items-center">
                <div class="col-md-5">
                  <div class="maskot-placeholder">Placeholder NUSAPEDIA</div>
                </div>
                <div class="col-md-7">
                  <h3>NUSAPEDIA (Ahli Teknologi & Informasi)</h3>
                  <p>Nusapedia adalah jembatan antara masa lalu dan masa depan. Ia menggunakan teknologi untuk membuka akses terhadap informasi budaya, membuatnya relevan dan mudah diakses oleh Genusian di era digital.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section cta-section">
        <div class="container">
          <h2 class="section-title">Tentukan Garis Waktumu!</h2>
          <p class="section-subtitle text-light">Kelompokmu adalah tim penjelajah waktumu. Temukan timmu dan bersiaplah untuk memulai petualangan MABIM 2025!</p>
          <a class="btn btn-primary-custom" href="#" target="_blank">Lihat Pembagian Kelompok</a>
        </div>
      </section>

<?php
  include 'footer.php';
?>