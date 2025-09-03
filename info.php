<?php
$home = "";
$pedoman = "";
$atribut = "";
$kegiatan = "";
$penugasan = "";
$absensi = "";
$info = "active"; // Set halaman ini sebagai yang aktif
include 'header.php';

// Multi-language content
$info_content = [
  'id' => [
    'page_title' => 'Pusat Informasi',
    'page_subtitle' => 'Butuh bantuan atau informasi lebih lanjut? Akses sumber daya penting di bawah ini.',

    'group_title' => 'Pembagian Kelompok',
    'group_author' => 'Di-post oleh: Panitia MABIM',
    'group_button' => 'Lihat Kelompok',

    'campus_map_title' => 'Denah Kampus',
    'campus_map_author' => 'Di-post oleh: Panitia MABIM',
    'campus_map_button' => 'Lihat Denah',
    'campus_map_modal_title' => 'Denah Kampus Universitas Nusa Putra',

    'bmc_map_title' => 'Denah BMC',
    'bmc_map_author' => 'Di-post oleh: Panitia MABIM',
    'bmc_map_button' => 'Lihat Denah',
    'bmc_map_modal_title' => 'Denah BMC',

    'close_button' => 'Tutup',
    'image_placeholder' => 'Gambar akan segera tersedia'
  ],
  'en' => [
    'page_title' => 'Information Center',
    'page_subtitle' => 'Need help or more information? Access important resources below.',

    'group_title' => 'Group Assignments',
    'group_author' => 'Posted by: MABIM Committee',
    'group_button' => 'View Groups',

    'campus_map_title' => 'Campus Map',
    'campus_map_author' => 'Posted by: MABIM Committee',
    'campus_map_button' => 'View Map',
    'campus_map_modal_title' => 'Nusa Putra University Campus Map',

    'bmc_map_title' => 'BMC Map',
    'bmc_map_author' => 'Posted by: MABIM Committee',
    'bmc_map_button' => 'View Map',
    'bmc_map_modal_title' => 'BMC Map',

    'close_button' => 'Close',
    'image_placeholder' => 'Image coming soon'
  ]
];

// Get text based on current language
$text = $info_content[$lang];
?>

<section class="page-header">
  <canvas id="plexus-canvas"></canvas>
  <div class="container text-center">
    <h1 class="page-header-title"><?php echo $text['page_title']; ?></h1>
    <p class="lead text-light"><?php echo $text['page_subtitle']; ?></p>
  </div>
</section>

<section class="section animated-bg">
  <div class="particle-container"></div>
  <div class="container">
    <div class="row g-4">

      <!-- Buku Saku MABIM 2025 -->
      <div class="col-lg-4 col-md-6">
        <div class="info-card">
          <div class="info-card-img">
            <img src="assets/img/bukusaku.png" alt="Buku Saku MABIM 2025" class="img-fluid">
          </div>
          <div class="info-card-body">
            <h3 class="info-card-title">Buku Saku MABIM 2025</h3>
            <p class="info-card-author">Posted by: IT Division MABIM 2025</p>
            <a href="https://drive.google.com/file/d/1yEQlf9jJHWKgoSK3RZ-ijJBQE9hQqYnk/view?usp=sharing" target="_blank"
              class="btn btn-primary-custom w-100">
              <i class="fas fa-users me-2"></i>Lihat Buku Saku
            </a>
          </div>
        </div>
      </div>

      <!-- Link Twibbon -->
      <div class="col-lg-4 col-md-6">
        <div class="info-card">
          <div class="info-card-img">
            <img src="assets/img/contoh-twibbon.png" alt="Link Twibbon MABIM 2025" class="img-fluid">
          </div>
          <div class="info-card-body">
            <h3 class="info-card-title">Link Twibbon MABIM 2025</h3>
            <p class="info-card-author">Posted by: IT Division MABIM 2025</p>
            <a href="https://twibbo.nz/mabimunsp2025" target="_blank" class="btn btn-primary-custom w-100">
              <i class="fas fa-users me-2"></i>Lihat Twibbon
            </a>
          </div>
        </div>
      </div>

      <!-- Link Pembagian Kelompok -->
      <div class="col-lg-4 col-md-6">
        <div class="info-card">
          <div class="info-card-img">
            <img src="assets/img/pics/3475780.jpg" alt="<?php echo $text['group_title']; ?>" class="img-fluid">
          </div>
          <div class="info-card-body">
            <h3 class="info-card-title"><?php echo $text['group_title']; ?></h3>
            <p class="info-card-author">Posted by: IT Division MABIM 2025</p>
            <a href="https://docs.google.com/spreadsheets/d/1FXAdRNxKhRVnteOrbnoJ5OJP12KkkTeV/edit?gid=166098861#gid=166098861"
              target="_blank" class="btn btn-primary-custom w-100">
              <i class="fas fa-users me-2"></i><?php echo $text['group_button']; ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Denah Kampus -->
      <div class="col-lg-4 col-md-6">
        <div class="info-card">
          <div class="info-card-img">
            <img src="/assets/img/denah_nusput.jpg" alt="<?php echo $text['campus_map_title']; ?>" class="img-fluid">
          </div>
          <div class="info-card-body">
            <h3 class="info-card-title"><?php echo $text['campus_map_title']; ?></h3>
            <p class="info-card-author">Posted by: IT Division MABIM 2025</p>
            <button type="button" class="btn btn-primary-custom w-100" data-bs-toggle="modal"
              data-bs-target="#campusMapModal">
              <i class="fas fa-map me-2"></i><?php echo $text['campus_map_button']; ?>
            </button>
          </div>
        </div>
      </div>

      <!-- Denah BMC -->
      <div class="col-lg-4 col-md-6">
        <div class="info-card">
          <div class="info-card-img">
            <img src="/assets/img/denah_puncak.jpg" alt="<?php echo $text['bmc_map_title']; ?>" class="img-fluid">
          </div>
          <div class="info-card-body">
            <h3 class="info-card-title"><?php echo $text['bmc_map_title']; ?></h3>
            <p class="info-card-author">Posted by: IT Division MABIM 2025</p>
            <button type="button" class="btn btn-primary-custom w-100" data-bs-toggle="modal"
              data-bs-target="#bmcMapModal">
              <i class="fas fa-map-marked-alt me-2"></i><?php echo $text['bmc_map_button']; ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal for Campus Map -->
<div class="modal fade" id="campusMapModal" tabindex="-1" aria-labelledby="campusMapModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="campusMapModalLabel"><?php echo $text['campus_map_modal_title']; ?></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="/assets/img/denah_nusput.jpg" alt="<?php echo $text['campus_map_title']; ?>" class="img-fluid"
          style="max-height: 200vh;">
      </div>
      <div class="modal-footer border-secondary">
        <button type="button" class="btn btn-secondary-custom"
          data-bs-dismiss="modal"><?php echo $text['close_button']; ?></button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for BMC Map -->
<div class="modal fade" id="bmcMapModal" tabindex="-1" aria-labelledby="bmcMapModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="bmcMapModalLabel"><?php echo $text['bmc_map_modal_title']; ?></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="/assets/img/denah_puncak.jpg" alt="<?php echo $text['bmc_map_title']; ?>" class="img-fluid"
          style="max-height: 200vh;">
      </div>
      <div class="modal-footer border-secondary">
        <button type="button" class="btn btn-secondary-custom"
          data-bs-dismiss="modal"><?php echo $text['close_button']; ?></button>
      </div>
    </div>
  </div>
</div>

<style>
  /* Info Card Styling */
  .info-card {
    background: rgba(13, 13, 26, 0.7);
    border: 2px solid var(--secondary-blue);
    border-radius: 15px;
    overflow: hidden;
    height: 100%;
    transition: all 0.3s ease;
    backdrop-filter: blur(5px);
    display: flex;
    flex-direction: column;
  }

  .info-card:hover {
    transform: translateY(-5px);
    border-color: var(--accent-yellow);
    box-shadow: 0 0 25px rgba(251, 204, 27, 0.3);
  }

  .info-card-img {
    height: 180px;
    background: linear-gradient(135deg, rgba(23, 149, 188, 0.2), rgba(13, 13, 26, 0.5));
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
  }

  .info-card-img::before {
    /* content: '<?php echo $text['image_placeholder']; ?>'; */
    color: rgba(255, 255, 255, 0.5);
    font-style: italic;
    position: absolute;
  }

  .info-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .info-card-body {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }

  .info-card-title {
    color: var(--accent-yellow);
    font-family: var(--font-heading);
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    border-bottom: 1px solid rgba(23, 149, 188, 0.3);
    padding-bottom: 0.5rem;
  }

  .info-card-author {
    color: var(--pure-white);
    font-size: 0.9rem;
    margin-bottom: 1.5rem;
    font-style: italic;
  }

  .info-card .btn {
    margin-top: auto;
  }

  /* Modal styling */
  .modal-content.bg-dark {
    background: rgba(13, 13, 26, 0.95) !important;
    backdrop-filter: blur(10px);
    border: 1px solid var(--secondary-blue);
  }

  .modal-title {
    color: var(--accent-yellow);
    font-family: var(--font-heading);
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Particle animation
    const animatedSections = document.querySelectorAll('.animated-bg');
    const numParticles = 15;

    animatedSections.forEach(section => {
      const container = section.querySelector('.particle-container');
      if (container) {
        for (let i = 0; i < numParticles; i++) {
          const particle = document.createElement('div');
          particle.classList.add('particle');

          // Random position, size and animation duration
          const size = Math.random() * 5 + 2;
          particle.style.width = `${size}px`;
          particle.style.height = `${size}px`;
          particle.style.left = `${Math.random() * 100}%`;
          particle.style.top = `${Math.random() * 100}%`;
          particle.style.animationDuration = `${Math.random() * 10 + 10}s`;
          particle.style.animationDelay = `${Math.random() * 5}s`;

          container.appendChild(particle);
        }
      }
    });

    // Plexus background
    const canvas = document.getElementById('plexus-canvas');
    if (canvas) {
      const ctx = canvas.getContext('2d');
      let width = canvas.width = canvas.offsetWidth;
      let height = canvas.height = canvas.offsetHeight;

      // Resize handler
      function handleResize() {
        width = canvas.width = canvas.offsetWidth;
        height = canvas.height = canvas.offsetHeight;
      }

      window.addEventListener('resize', handleResize);
      handleResize();

      // Points
      const points = [];
      const maxPoints = 70;
      const maxDistance = 120;

      // Create points
      for (let i = 0; i < maxPoints; i++) {
        points.push({
          x: Math.random() * width,
          y: Math.random() * height,
          vx: Math.random() * 1 - 0.5,
          vy: Math.random() * 1 - 0.5
        });
      }

      function animate() {
        ctx.clearRect(0, 0, width, height);

        // Draw connections
        ctx.beginPath();
        for (let i = 0; i < points.length; i++) {
          const p1 = points[i];

          for (let j = i + 1; j < points.length; j++) {
            const p2 = points[j];
            const dx = p1.x - p2.x;
            const dy = p1.y - p2.y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < maxDistance) {
              ctx.strokeStyle = `rgba(23, 149, 188, ${1 - distance / maxDistance})`;
              ctx.lineWidth = 1;
              ctx.beginPath();
              ctx.moveTo(p1.x, p1.y);
              ctx.lineTo(p2.x, p2.y);
              ctx.stroke();
            }
          }
        }

        // Update and draw points
        for (let i = 0; i < points.length; i++) {
          const p = points[i];

          p.x += p.vx;
          p.y += p.vy;

          if (p.x < 0 || p.x > width) p.vx = -p.vx;
          if (p.y < 0 || p.y > height) p.vy = -p.vy;

          ctx.beginPath();
          ctx.arc(p.x, p.y, 1.5, 0, Math.PI * 2);
          ctx.fillStyle = 'rgba(251, 204, 27, 0.8)';
          ctx.fill();
        }

        requestAnimationFrame(animate);
      }

      animate();
    }
  });
</script>

<?php
include 'footer.php';
?>