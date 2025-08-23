<?php
$home = "";
$pedoman = "";
$atribut = "";
$kegiatan = "";
$penugasan = "";
$absensi = "";
$info = "active"; // Set halaman ini sebagai yang aktif
include 'header.php';

// =================================================================
// PUSAT KONTROL HALAMAN INFORMASI - UBAH SEMUA DATA DI SINI
// =================================================================
$info_data = [
  'id' => [
    'page_title' => 'Pusat Informasi',
    'page_subtitle' => 'Butuh bantuan atau informasi lebih lanjut? Hubungi pemandu waktu kami.',
    'contact_title' => 'Narahubung',
    'social_title' => 'Jejak Digital Kami',
    'contact_button' => 'Hubungi via WhatsApp',
    // --- Daftar Narahubung ---
    'contacts' => [
      [
        'name' => 'Nusalogi (Knowledge)',
        'role' => 'Informasi Umum & Akademik',
        'whatsapp_number' => '6281234567890', // Format internasional tanpa '+' atau spasi
        'image' => 'assets/img/mascots/Nusalogi.png'
      ],
      [
        'name' => 'Nusaraga (Support)',
        'role' => 'Perlengkapan & Teknis Lapangan',
        'whatsapp_number' => '6281234567891',
        'image' => 'assets/img/mascots/Nusaraga.png'
      ]
    ],
    // --- Media Sosial ---
    'socials' => [
      ['name' => 'Instagram', 'icon' => 'fab fa-instagram', 'link' => 'https://www.instagram.com/mabim_unsp/'],
      ['name' => 'YouTube', 'icon' => 'fab fa-youtube', 'link' => 'https://www.youtube.com/c/MabimUnsp'],
      ['name' => 'TikTok', 'icon' => 'fab fa-tiktok', 'link' => '#']
    ]
  ],
  'en' => [
    'page_title' => 'Information Center',
    'page_subtitle' => 'Need help or more information? Contact our time guides.',
    'contact_title' => 'Contact Persons',
    'social_title' => 'Our Digital Footprint',
    'contact_button' => 'Contact via WhatsApp',
    'contacts' => [
      [
        'name' => 'Nusalogi (Knowledge)',
        'role' => 'General & Academic Info',
        'whatsapp_number' => '6281234567890',
        'image' => 'assets/img/mascots/Nusalogi.png'
      ],
      [
        'name' => 'Nusaraga (Support)',
        'role' => 'Equipment & Field Technicalities',
        'whatsapp_number' => '6281234567891',
        'image' => 'assets/img/mascots/Nusaraga.png'
      ]
    ],
    'socials' => [
      ['name' => 'Instagram', 'icon' => 'fab fa-instagram', 'link' => 'https://www.instagram.com/mabim_unsp/'],
      ['name' => 'YouTube', 'icon' => 'fab fa-youtube', 'link' => 'https://www.youtube.com/c/MabimUnsp'],
      ['name' => 'TikTok', 'icon' => 'fab fa-tiktok', 'link' => '#']
    ]
  ]
];
$text = $info_data[$lang];
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header-title"><?php echo $text['page_title']; ?></h1>
    <p class="lead text-light"><?php echo $text['page_subtitle']; ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['contact_title']; ?></h2>
    <div class="row justify-content-center g-4">
      <?php foreach ($text['contacts'] as $contact): ?>
        <div class="col-lg-4 col-md-6">
          <div class="contact-card">
            <img src="<?php echo $contact['image']; ?>" alt="<?php echo $contact['name']; ?>" class="contact-image">
            <div class="contact-info">
              <h4 class="contact-name"><?php echo $contact['name']; ?></h4>
              <p class="contact-role"><?php echo $contact['role']; ?></p>
              <a href="https://wa.me/<?php echo $contact['whatsapp_number']; ?>" target="_blank"
                class="btn btn-sm btn-primary-custom">
                <i class="fab fa-whatsapp me-2"></i><?php echo $text['contact_button']; ?>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container">
    <h2 class="section-title"><?php echo $text['social_title']; ?></h2>
    <div class="row justify-content-center g-3">
      <?php foreach ($text['socials'] as $social): ?>
        <div class="col-lg-3 col-md-4">
          <a href="<?php echo $social['link']; ?>" target="_blank" class="social-link-card">
            <i class="<?php echo $social['icon']; ?>"></i>
            <span><?php echo $social['name']; ?></span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>