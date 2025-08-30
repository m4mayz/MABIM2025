<?php
$home = "";
$pedoman = "";
$atribut = "active"; // Set halaman ini sebagai yang aktif
$kegiatan = "";
$penugasan = "";
$absensi = "";
$info = "";
include 'header.php';

// Teks untuk Multi-Bahasa
$content = [
  'id' => [
    'title' => 'Perlengkapan & Atribut Perjalanan',
    'subtitle' => 'Setiap penjelajah waktu wajib mengenakan seragam dan membawa artefak yang telah ditentukan.',

    'clothing_title' => 'Kode Pakaian Lintas Waktu',
    'putra_title' => 'Putra',
    'putri_title' => 'Putri',

    'dress_code' => [
      'day1' => [
        'tab_title' => 'Hari Pertama',
        'tab_date' => 'Senin, 08 Sep 2025',
        'putra' => [
          'Kemeja Putih Lengan Panjang',
          'Celana Cream Panjang (Non Jeans & Tidak Ketat)',
          'Sepatu Dan Kaos Kaki Bebas',
          'Ikat Pinggang Hitam'
        ],
        'putri' => [
          'Kemeja Putih Lengan Panjang Tidak Ketat (Panjang Baju Dibawah Pinggang)',
          'Celana Atau Rok Berwarna Cream (Tanpa Belahan, Tidak Di Atas Mata Kaki)',
          'Sepatu Dan Kaos Kaki Bebas',
          'Jilbab Cream Polos (Tidak Menerawang)',
          'Yang Tidak Berjilbab Rambut Dikepang Satu (Pita Berwarna Cream)',
          'Memakai Kaos Dalam Putih'
        ]
      ],
      'day2' => [
        'tab_title' => 'Hari Kedua',
        'tab_date' => 'Selasa, 09 Sep 2025',
        'putra' => [
          'Baju Kaos (Warna: Burgundy, Biru, atau Kuning)',
          'Celana Panjang Berwarna Hitam (Non Jeans & Tidak Ketat)',
          'Sepatu Dan Kaos Kaki Bebas',
          'Ikat Pinggang Hitam (Opsional)'
        ],
        'putri' => [
          'Baju Kaos Lengan Panjang Tidak Ketat (Warna: Burgundy, Biru, atau Kuning)',
          'Celana Atau Rok Berwarna Hitam (Tanpa Belahan, Tidak Di Atas Mata Kaki)',
          'Sepatu Dan Kaos Kaki Bebas',
          'Jilbab Menyesuaikan (Tidak Menerawang)',
          'Yang Tidak Berjilbab Rambut Dikepang Satu (Pita Menyesuaikan Baju)'
        ]
      ],
      'day3' => [
        'tab_title' => 'Hari Ketiga',
        'tab_date' => 'Rabu, 10 Sep 2025',
        'putra' => [
          'Baju Kaos (Warna Sesuai Program Studi)',
          'Celana Berwarna Hitam Panjang (Non Jeans & Tidak Ketat)',
          'Sepatu Dan Kaos Kaki Bebas',
          'Ikat Pinggang Hitam (Opsional)'
        ],
        'putri' => [
          'Baju Kaos Lengan Panjang Tidak Ketat (Warna Sesuai Program Studi)',
          'Celana Atau Rok Berwarna Hitam (Tanpa Belahan, Tidak Di Atas Mata Kaki)',
          'Sepatu Dan Kaos Kaki Bebas',
          'Jilbab Hitam (Tidak Menerawang)',
          'Yang Tidak Berjilbab Rambut Dikepang Satu (Pita Menyesuaikan Baju)'
        ]
      ],
      'day4' => [
        'tab_title' => 'Hari Keempat',
        'tab_date' => 'Sabtu, 13 Sep 2025',
        'putra' => [
          'Baju Polo Nusa Putra',
          'Celana Training',
          'Sepatu Dan Kaos Kaki Bebas'
        ],
        'putri' => [
          'Baju Polo Nusa Putra (Memakai Manset)',
          'Celana Training',
          'Sepatu Dan Kaos Kaki Bebas',
          'Jilbab Berwarna Hitam (Tidak Menerawang)',
          'Yang Tidak Berjilbab Rambut Dikepang Satu (Pita Berwarna Hitam)'
        ]
      ]
    ],

    'equipment_title' => 'Artefak Wajib Penjelajah',
    'equipment_subtitle' => 'Selama rangkaian ekspedisi MABIM (8, 9, 10 dan 13 September 2025), setiap penjelajah diwajibkan membawa artefak berikut:',
    'equipment_list' => [
      'Id Card + Lanyard',
      'Alat Tulis',
      'Botol Minum Pribadi',
      'Perlengkapan Ibadah',
      'Alas Duduk',
      'Obat Pribadi',
      'Makan Berat (Ishoma)',
      'Jas Hujan/Ponco (Puncak)',
      'Pakaian Ganti (Puncak)',
      'Topi (Puncak)'
    ]
  ],
  'en' => [
    'title' => 'Travel Gear & Attributes',
    'subtitle' => 'Every time traveler is required to wear the prescribed uniform and carry the specified artifacts.',

    'clothing_title' => 'Temporal Dress Code',
    'putra_title' => 'Male',
    'putri_title' => 'Female',

    'dress_code' => [
      'day1' => [
        'tab_title' => 'First Day',
        'tab_date' => 'Mon, Sep 08, 2025',
        'putra' => [
          'White Long-Sleeved Shirt',
          'Cream Long Pants (Non-Jeans & Not Tight)',
          'Free Choice of Shoes and Socks',
          'Black Belt'
        ],
        'putri' => [
          'White Long-Sleeved Blouse, Not Tight (Shirt length below the waist)',
          'Cream Pants or Skirt (No Slit, Not Above Ankle)',
          'Free Choice of Shoes and Socks',
          'Plain Cream Hijab (Not Transparent)',
          'For non-hijab wearers, hair braided once (Cream Ribbon)',
          'Wear White Undershirt'
        ]
      ],
      'day2' => [
        'tab_title' => 'Second Day',
        'tab_date' => 'Tue, Sep 09, 2025',
        'putra' => [
          'T-Shirt (Colors: Burgundy, Blue, or Yellow)',
          'Black Long Pants (Non-Jeans & Not Tight)',
          'Free Choice of Shoes and Socks',
          'Black Belt (Optional)'
        ],
        'putri' => [
          'Long-Sleeved T-Shirt, Not Tight (Colors: Burgundy, Blue, or Yellow)',
          'Black Pants or Skirt (No Slit, Not Above Ankle)',
          'Free Choice of Shoes and Socks',
          'Matching Hijab (Not Transparent)',
          'For non-hijab wearers, hair braided once (Ribbon matching shirt color)'
        ]
      ],
      'day3' => [
        'tab_title' => 'Third Day',
        'tab_date' => 'Wed, Sep 10, 2025',
        'putra' => [
          'T-Shirt (Color according to Study Program)',
          'Black Long Pants (Non-Jeans & Not Tight)',
          'Free Choice of Shoes and Socks',
          'Black Belt (Optional)'
        ],
        'putri' => [
          'Long-Sleeved T-Shirt, Not Tight (Color according to Study Program)',
          'Black Pants or Skirt (No Slit, Not Above Ankle)',
          'Free Choice of Shoes and Socks',
          'Black Hijab (Not Transparent)',
          'For non-hijab wearers, hair braided once (Ribbon matching shirt color)'
        ]
      ],
      'day4' => [
        'tab_title' => 'Fourth Day',
        'tab_date' => 'Sat, Sep 13, 2025',
        'putra' => [
          'Nusa Putra Polo Shirt',
          'Training Pants',
          'Free Choice of Shoes and Socks'
        ],
        'putri' => [
          'Nusa Putra Polo Shirt (with inner sleeves/manset)',
          'Training Pants',
          'Free Choice of Shoes and Socks',
          'Black Hijab (Not Transparent)',
          'For non-hijab wearers, hair braided once (Black Ribbon)'
        ]
      ]
    ],

    'equipment_title' => 'Mandatory Traveler Artifacts',
    'equipment_subtitle' => 'During the MABIM expedition (Sep 8, 9, 10, & 13, 2025), all travelers must bring:',
    'equipment_list' => [
      'Id Card + Lanyard',
      'Writing Tools',
      'Personal Water Bottle',
      'Worship Equipment',
      'Sitting Mat',
      'Personal Medicine',
      'Heavy Meal (for break time)',
      'Raincoat/Poncho (Peak Event)',
      'Change of Clothes (Peak Event)',
      'Hat (Peak Event)'
    ]
  ]
];
$text = $content[$lang];
?>

<!-- Page Header -->
<section class="page-header">
  <canvas id="plexus-canvas"></canvas>
  <div class="container text-center">
    <h1 class="page-header-title"><?php echo $text['title']; ?></h1>
    <p class="lead text-light"><?php echo $text['subtitle']; ?></p>
  </div>
</section>

<!-- Section 2: Perlengkapan -->
<section class="section animated-bg" id="perlengkapan">
  <div class="particle-container"></div>
  <div class="container">
    <h2 class="section-title"><?php echo $text['equipment_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['equipment_subtitle']; ?></p>
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8">
        <ul class="equipment-list">
          <?php foreach ($text['equipment_list'] as $item): ?>
            <li>
              <i class="fas fa-check-circle me-3"></i>
              <span><?php echo $item; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Section 1: Pakaian -->
<section class="section pakaian-section animated-bg" id="pakaian">
  <div class="particle-container"></div>
  <div class="container">
    <h2 class="section-title"><?php echo $text['clothing_title']; ?></h2>

    <!-- Navigasi Tab Hari -->
    <ul class="nav nav-pills justify-content-center my-5" id="clothingTab" role="tablist">
      <?php $first = true;
      foreach ($text['dress_code'] as $day => $details): ?>
        <li class="nav-item" role="presentation">
          <button class="nav-link <?php if ($first)
            echo 'active'; ?>" id="<?php echo $day; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $day; ?>"
            type="button" role="tab">
            <?php echo $details['tab_title']; ?>
            <small><?php echo $details['tab_date']; ?></small>
          </button>
        </li>
        <?php $first = false; endforeach; ?>
    </ul>

    <!-- Konten Tab -->
    <div class="tab-content" id="clothingTabContent">
      <?php $first = true;
      foreach ($text['dress_code'] as $day => $details): ?>
        <div class="tab-pane fade <?php if ($first)
          echo 'show active'; ?>" id="<?php echo $day; ?>" role="tabpanel">
          <div class="row g-4 justify-content-center">
            <!-- Kartu Putra -->
            <div class="col-lg-6">
              <div class="attribute-card">
                <h3><?php echo $text['putra_title']; ?></h3>
                <ul>
                  <?php foreach ($details['putra'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <!-- Kartu Putri -->
            <div class="col-lg-6">
              <div class="attribute-card">
                <h3><?php echo $text['putri_title']; ?></h3>
                <ul>
                  <?php foreach ($details['putri'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php $first = false; endforeach; ?>
    </div>
  </div>
</section>
<!-- Skrip untuk animasi partikel dan plexus -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const animatedSections = document.querySelectorAll('.animated-bg');
    const numParticles = 15;
    animatedSections.forEach(section => {
      const container = section.querySelector('.particle-container');
      if (container) {
        for (let i = 0; i < numParticles; i++) {
          const particle = document.createElement('div');
          particle.classList.add('particle');
          const size = Math.random() * 3 + 1;
          particle.style.width = `${size}px`;
          particle.style.height = `${size}px`;
          particle.style.left = Math.random() * 100 + 'vw';
          particle.style.top = Math.random() * 100 + 'vh';
          const duration = Math.random() * 10 + 10;
          particle.style.animationDuration = `${duration}s`;
          const delay = Math.random() * 15;
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
      const styles = getComputedStyle(document.documentElement);
      const colors = [
        styles.getPropertyValue('--primary-magenta').trim(),
        styles.getPropertyValue('--secondary-blue').trim(),
        styles.getPropertyValue('--accent-yellow').trim()
      ];
      const resizeCanvas = () => {
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
        particles = [];
        for (let i = 0; i < numParticles; i++) { particles.push(new Particle()); }
      };
      class Particle {
        constructor() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          this.vx = (Math.random() - 0.5) * 0.5;
          this.vy = (Math.random() - 0.5) * 0.5;
          this.radius = Math.random() * 2 + 1;
          this.color = colors[Math.floor(Math.random() * colors.length)];
        }
        update() {
          this.x += this.vx; this.y += this.vy;
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
              ctx.strokeStyle = `rgba(251, 204, 27, ${1 - distance / connectDistance})`;
              ctx.lineWidth = 0.5;
              ctx.stroke();
            }
          }
        }
      };
      const animate = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => { p.update(); p.draw(); });
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