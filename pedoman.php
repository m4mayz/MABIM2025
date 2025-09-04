<?php
$home = "";
$pedoman = "active"; // Set halaman ini sebagai yang aktif
$atribut = "";
$kegiatan = "";
$penugasan = "";
$absensi = "";
$info = "";
include 'header.php';

// Teks untuk Multi-Bahasa
$content = [
  'id' => [
    'page_title' => 'Peta Waktu & Protokol Perjalanan',
    'page_subtitle' => 'Semua arsip dan dekrit penting untuk ekspedisi MABIM 2025 telah tercatat di sini.',

    // Section 1: Download
    'download_title' => 'Buku Saku Panduan Penjelajah Waktu',
    'download_desc' => 'Unduh arsip lengkap berisi peta, jadwal, dan semua protokol perjalanan waktu. Buku saku ini adalah kompas utamamu.',
    'download_button' => 'Unduh Buku Saku (.PDF)',
    'link_buku_saku' => 'https://drive.google.com/file/d/1yEQlf9jJHWKgoSK3RZ-ijJBQE9hQqYnk/view?usp=sharing',

    // Section 2: Peraturan
    'rules_title' => 'Dekrit Lintas Waktu',
    'rules_subtitle' => 'Patuhi setiap dekrit ini untuk menjaga keharmonisan dan kelancaran perjalanan menembus zaman.',
    'rules_general_title' => 'Peraturan Umum',
    'rules_general_list' => [
      'Mahasiswa baru wajib mengikuti seluruh rangkaian kegiatan MABIM sesuai jadwal yang telah ditentukan.',
      'Menggunakan tanda pengenal (ID Card) selama kegiatan berlangsung.',
      'Mematuhi arahan panitia, mentor, dan pihak kampus dengan sopan.',
      'Menggunakan pakaian sesuai ketentuan dress code yang telah ditentukan.',
      'Menjaga ketertiban, kebersihan, dan keamanan lingkungan kegiatan.',
      'Dilarang membawa dan menggunakan barang terlarang seperti senjata tajam, narkoba, minuman keras, dan sejenisnya.',
      'Menggunakan bahasa yang sopan dan menghargai sesama peserta, panitia, maupun pemateri.',
      'Dilarang melakukan tindakan diskriminatif, perundungan (bullying), atau kekerasan dalam bentuk apapun.',
      'Mengikuti seluruh aturan kampus dan ketentuan tambahan dari panitia.',
      'Peserta wajib menjaga kerapian rambut, dengan panjang rambut tidak melebihi alis.'
    ],
    'rules_specific_title' => 'Peraturan Khusus',
    'rules_specific_list' => [
      'Mahasiswa baru wajib hadir tepat waktu pada setiap sesi kegiatan (40 menit sebelum acara dimulai).',
      'Dilarang menggunakan ponsel selama kegiatan, kecuali untuk keperluan yang diizinkan panitia.',
      'Wajib membawa perlengkapan yang telah ditentukan panitia setiap harinya.',
      'Setiap peserta wajib aktif bertanya, berdiskusi, dan berpartisipasi dalam setiap sesi.',
      'Dilarang meninggalkan lokasi kegiatan tanpa izin dari panitia atau mentor.',
      'Mengikuti kode etik berpakaian sesuai tema atau konsep kegiatan di hari tertentu.',
      'Wajib menjaga rahasia dan integritas jalannya kegiatan, termasuk materi internal yang bersifat terbatas.',
      'Tidak diperkenankan makan saat materi berlangsung, kecuali waktu yang ditentukan panitia.',
      'Dilarang membawa barang berharga, aksesoris, atau make-up berlebihan.',
      'Dilarang merokok serta melakukan perbuatan tidak sopan selama kegiatan.',
      'Mengikuti seluruh rangkaian acara MABIM sebagai syarat untuk mendapatkan sertifikat MABIM.',
      'Panitia tidak bertanggung jawab atas kehilangan barang bawaan peserta.',
      'Peraturan tambahan dapat ditetapkan kemudian apabila dianggap perlu.'
    ],

    // Section 3: Perlengkapan (INI AKAN DIHAPUS)
    // 'equipment_title' => 'Artefak Wajib Penjelajah', ...
  ],
  'en' => [
    'page_title' => 'Time Map & Travel Protocols',
    'page_subtitle' => 'All essential archives and decrees for the MABIM 2025 expedition are recorded here.',

    // Section 1: Download
    'download_title' => 'Time Traveler\'s Pocket Guide',
    'download_desc' => 'Download the complete archive containing maps, schedules, and all time travel protocols. This guide is your primary compass.',
    'download_button' => 'Download Guide (.PDF)',
    'link_buku_saku' => 'https://drive.google.com/file/d/1TRfotYlpJkw2LdOCORiPLC3seXHvm2nj/view?usp=sharing',

    // Section 2: Rules
    'rules_title' => 'Temporal Decrees',
    'rules_subtitle' => 'Adhere to these decrees to maintain harmony and the smooth flow of your journey through the ages.',
    'rules_general_title' => 'General Rules',
    'rules_general_list' => [
      'New students are required to participate in all MABIM activities according to the specified schedule.',
      'Wear an ID card during the activity.',
      'Politely comply with the directions of the committee, mentors, and campus officials.',
      'Wear clothing according to the specified dress code.',
      'Maintain order, cleanliness, and security of the activity environment.',
      'It is forbidden to bring and use prohibited items such as sharp weapons, drugs, alcoholic beverages, and the like.',
      'Use polite language and respect fellow participants, committee members, and speakers.',
      'It is forbidden to engage in discriminatory acts, bullying, or violence in any form.',
      'Follow all campus rules and additional provisions from the committee.',
      'Participants must maintain neat hair, with hair length not exceeding the eyebrows.'
    ],
    'rules_specific_title' => 'Specific Rules',
    'rules_specific_list' => [
      'New students must arrive on time for each activity session (40 minutes before the event begins).',
      'Cell phone use is prohibited during the activity, except for purposes permitted by the committee.',
      'Must bring the equipment specified by the committee each day.',
      'Each participant must actively ask questions, discuss, and participate in each session.',
      'Leaving the activity location without permission from the committee or mentor is prohibited.',
      'Follow the dress code according to the theme or concept of the activity on a particular day.',
      'Must maintain the confidentiality and integrity of the activity, including restricted internal materials.',
      'Eating is not permitted during sessions, except at times specified by the committee.',
      'Bringing valuables, accessories, or excessive make-up is prohibited.',
      'Smoking and engaging in impolite behavior during the activity are prohibited.',
      'Attending the entire MABIM series of events is a requirement to obtain the MABIM certificate.',
      'The committee is not responsible for the loss of participants\' belongings.',
      'Additional regulations may be established later if deemed necessary.'
    ],

    // Section 3: Equipment (THIS WILL BE DELETED)
    // 'equipment_title' => 'Mandatory Traveler Artifacts', ...
  ]
];
$text = $content[$lang];
?>

<!-- Page Header -->
<section class="page-header">
  <canvas id="plexus-canvas"></canvas>
  <div class="container text-center">
    <h1 class="page-header-title"><?php echo $text['page_title']; ?></h1>
    <p class="lead text-light"><?php echo $text['page_subtitle']; ?></p>
  </div>
</section>

<!-- Section 1: Download Buku Saku -->
<section class="section animated-bg" id="buku-saku">
  <div class="particle-container"></div>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <h2 class="section-title"><?php echo $text['download_title']; ?></h2>
        <p class="section-subtitle mb-5"><?php echo $text['download_desc']; ?></p>
        <a href="<?php echo $text['link_buku_saku']; ?>" target="_blank" class="btn btn-primary-custom btn-lg">
          <i class="fas fa-download </a>me-2"></i> <?php echo $text['download_button']; ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Peraturan -->
<section class="section peraturan-section animated-bg" id="peraturan">
  <div class="particle-container"></div>
  <div class="container">
    <h2 class="section-title"><?php echo $text['rules_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['rules_subtitle']; ?></p>
    <div class="row mt-5 g-4">
      <!-- Peraturan Umum -->
      <div class="col-lg-6">
        <div class="rules-card">
          <h3><?php echo $text['rules_general_title']; ?></h3>
          <ol>
            <?php foreach ($text['rules_general_list'] as $rule): ?>
              <li><?php echo $rule; ?></li>
            <?php endforeach; ?>
          </ol>
        </div>
      </div>
      <!-- Peraturan Khusus -->
      <div class="col-lg-6">
        <div class="rules-card">
          <h3><?php echo $text['rules_specific_title']; ?></h3>
          <ol>
            <?php foreach ($text['rules_specific_list'] as $rule): ?>
              <li><?php echo $rule; ?></li>
            <?php endforeach; ?>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 3: Perlengkapan (BAGIAN INI DIHAPUS SELURUHNYA) -->
<!-- <section class="section animated-bg" id="perlengkapan"> ... </section> -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const animatedSections = document.querySelectorAll('.animated-bg');
    const numParticles = 15; // Jumlah partikel per seksi

    animatedSections.forEach(section => {
      const container = section.querySelector('.particle-container');
      if (container) {
        for (let i = 0; i < numParticles; i++) {
          const particle = document.createElement('div');
          particle.classList.add('particle');

          const size = Math.random() * 3 + 1; // Ukuran partikel 1px - 4px
          particle.style.width = `${size}px`;
          particle.style.height = `${size}px`;

          particle.style.left = Math.random() * 100 + 'vw'; // Posisi horizontal acak
          particle.style.top = Math.random() * 100 + 'vh'; // Posisi vertikal acak

          const duration = Math.random() * 10 + 10; // Durasi animasi 10-20 detik
          particle.style.animationDuration = `${duration}s`;

          const delay = Math.random() * 15; // Delay animasi acak
          particle.style.animationDelay = `-${delay}s`;

          container.appendChild(particle);
        }
      }
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('plexus-canvas');
    if (canvas) {
      const ctx = canvas.getContext('2d');
      let particles = [];
      const numParticles = window.innerWidth < 768 ? 40 : 80;
      const connectDistance = window.innerWidth < 768 ? 100 : 150;

      // Get colors from CSS variables
      const styles = getComputedStyle(document.documentElement);
      const colors = [
        styles.getPropertyValue('--primary-magenta').trim(),
        styles.getPropertyValue('--secondary-blue').trim(),
        styles.getPropertyValue('--accent-yellow').trim()
      ];

      const resizeCanvas = () => {
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
        createParticles();
      };

      class Particle {
        constructor() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          this.vx = (Math.random() - 0.5) * 0.5; // Slow movement
          this.vy = (Math.random() - 0.5) * 0.5; // Slow movement
          this.radius = Math.random() * 2 + 1;
          this.color = colors[Math.floor(Math.random() * colors.length)];
        }

        update() {
          this.x += this.vx;
          this.y += this.vy;

          if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
          if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
        }

        draw() {
          ctx.beginPath();
          ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
          ctx.fillStyle = this.color;
          ctx.fill();
        }
      }

      const createParticles = () => {
        particles = [];
        for (let i = 0; i < numParticles; i++) {
          particles.push(new Particle());
        }
      };

      const connectParticles = () => {
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < connectDistance) {
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              // Use accent yellow for lines with opacity based on distance
              ctx.strokeStyle = `rgba(251, 204, 27, ${1 - distance / connectDistance})`;
              ctx.lineWidth = 0.5;
              ctx.stroke();
            }
          }
        }
      };

      const animate = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
          p.update();
          p.draw();
        });
        connectParticles();
        requestAnimationFrame(animate);
      };

      window.addEventListener('resize', resizeCanvas);
      resizeCanvas();
      animate();
    }
  });
</script>

<?php
include 'footer.php';
?>