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
    'title' => 'Perlengkapan Perjalanan Waktu',
    'subtitle' => 'Setiap penjelajah waktu wajib mengenakan seragam dan atribut yang telah ditentukan untuk menjaga identitas dan keseragaman.',

    'tab_pakaian' => 'Pakaian',
    'tab_kerapihan' => 'Kerapihan',

    'pakaian_title' => 'Pakaian Selama Mabim',
    'pakaian_schedule' => [
      'Senin – Selasa = Hitam Putih',
      'Rabu = Casual (kerudung Hitam bagi perempuan yang mengenakan hijab)',
      'Sabtu = Polo Nusa Putra + Celana Training + Sepatu Olahraga'
    ],

    'putra_title' => 'Putra',
    'putri_title' => 'Putri',

    'pakaian_putra' => [
      'Baju putih lengan Panjang, tidak bermotif, dasi hitam (wajib)',
      'Celana hitam Panjang non jeans dan tidak ketat',
      'Sepatu dan kaos kaki bebas',
      'Ikat pinggang hitam (opsional)'
    ],

    'pakaian_putri' => [
      'Kemeja putih Lengan Panjang tidak ketat, Panjang baju dari pinggang kebawah minimal 10 cm',
      'Rok hitam Tidak ada belahan dan Panjang Rok Tidak diatas mata kaki, atau Celana Panjang bahan hitam',
      'Sepatu dan kaos kaki bebas',
      'Jibab hitam polos, Segi empat tidak menerawang',
      'Yang tidak berjilbab, rambut di kepang atau di ikat',
      'Memakai kaos dalam warna putih'
    ],

    'kerapihan_title' => 'Kerapihan Peserta Mabim',

    'kerapihan_putra' => [
      '<strong>Pakaian bersih, rapi, dan sopan.</strong><ul><li>Baju dimasukan</li><li>Lengan tidak digulung</li><li>Tidak ketat</li></ul>',
      '<strong>Rambut tidak di cat dan rapi</strong><ul><li>Tidak menutupi dahi</li><li>Tidak menyentuh kerah</li><li>Tidak menyentuh telinga</li></ul>',
      'Dilarang memakai aksesoris secara berlebihan',
      'Pada saat acara MABIM dimulai peserta dilarang menggunakan jaket dan sejenisnya'
    ],

    'kerapihan_putri' => [
      'Bagi yang tidak memakai jilbab, rambut ditata rapi, di ikat dibelakang tali rambut',
      '<strong>Pakaian bersih, rapi dan sopan.</strong><br>Indikator rapi dan sopan:<ul><li>Pakaian tidak ketat</li><li>Bagi yang memakai jilbab hendaknya memakai inner jilbab (ciput), poni atau rambut tidak terlihat</li></ul>',
      'Pakaian tidak ketat dan terawang',
      'Selama MABIM dilarang mengenakan aksesoris dan make up secara berlebihan',
      'Pada saat acara MABIM sedang berlangsung, peserta dilarang mengenakan jaket dan sejenisnya'
    ]
  ],
  'en' => [
    'title' => 'Time Travel Gear',
    'subtitle' => 'Every time traveler is required to wear the prescribed uniform and attributes to maintain identity and uniformity.',

    'tab_pakaian' => 'Clothing',
    'tab_kerapihan' => 'Grooming',

    'pakaian_title' => 'Clothing During Mabim',
    'pakaian_schedule' => [
      'Monday – Tuesday = Black and White',
      'Wednesday = Casual (Black hijab for women who wear hijab)',
      'Saturday = Nusa Putra Polo + Training Pants + Sports Shoes'
    ],

    'putra_title' => 'Male',
    'putri_title' => 'Female',

    'pakaian_putra' => [
      'White long-sleeved shirt, no patterns, black tie (mandatory)',
      'Black long pants, non-jeans and not tight',
      'Free choice of shoes and socks',
      'Black belt (optional)'
    ],

    'pakaian_putri' => [
      'White long-sleeved blouse, not tight, shirt length from waist down at least 10 cm',
      'Black skirt without slit and length not above the ankle, or black long pants',
      'Free choice of shoes and socks',
      'Plain black hijab, square shape, not transparent',
      'For those not wearing hijab, hair should be braided or tied',
      'Wear white undershirt'
    ],

    'kerapihan_title' => 'Grooming Guidelines for Mabim Participants',

    'kerapihan_putra' => [
      '<strong>Clean, neat, and proper clothing.</strong><ul><li>Shirt tucked in</li><li>Sleeves not rolled up</li><li>Not tight</li></ul>',
      '<strong>Hair not dyed and neat</strong><ul><li>Not covering the forehead</li><li>Not touching the collar</li><li>Not touching the ears</li></ul>',
      'Prohibited from wearing excessive accessories',
      'During MABIM activities, participants are prohibited from wearing jackets and similar items'
    ],

    'kerapihan_putri' => [
      'For those not wearing hijab, hair should be neatly arranged, tied back with a hair tie',
      '<strong>Clean, neat, and proper clothing.</strong><br>Indicators of neat and proper:<ul><li>Clothing not tight</li><li>For those wearing hijab, should wear inner hijab (ciput), bangs or hair should not be visible</li></ul>',
      'Clothing not tight and not transparent',
      'During MABIM, wearing excessive accessories and makeup is prohibited',
      'During MABIM activities, participants are prohibited from wearing jackets and similar items'
    ]
  ]
];
$text = $content[$lang];
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header-title"><?php echo $text['title']; ?></h1>
    <p class="lead text-light"><?php echo $text['subtitle']; ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <ul class="nav nav-pills mb-5 justify-content-center" id="attributeTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pakaian-tab" data-bs-toggle="pill" data-bs-target="#pakaian" type="button"
          role="tab"><?php echo $text['tab_pakaian']; ?></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="kerapihan-tab" data-bs-toggle="pill" data-bs-target="#kerapihan" type="button"
          role="tab"><?php echo $text['tab_kerapihan']; ?></button>
      </li>
    </ul>

    <div class="tab-content" id="attributeTabContent">
      <!-- Tab Pakaian -->
      <div class="tab-pane fade show active" id="pakaian" role="tabpanel">
        <div class="attribute-section-header text-center mb-5">
          <h2 class="attribute-section-title"><?php echo $text['pakaian_title']; ?></h2>
          <div class="schedule-box">
            <ul class="schedule-list">
              <?php foreach ($text['pakaian_schedule'] as $schedule): ?>
                <li><?php echo $schedule; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="attribute-card">
              <div class="attribute-card-header">
                <h3><?php echo $text['putra_title']; ?></h3>
              </div>
              <div class="attribute-card-body">
                <ul class="attribute-list">
                  <?php foreach ($text['pakaian_putra'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="attribute-card">
              <div class="attribute-card-header">
                <h3><?php echo $text['putri_title']; ?></h3>
              </div>
              <div class="attribute-card-body">
                <ul class="attribute-list">
                  <?php foreach ($text['pakaian_putri'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab Kerapihan -->
      <div class="tab-pane fade" id="kerapihan" role="tabpanel">
        <div class="attribute-section-header text-center mb-5">
          <h2 class="attribute-section-title"><?php echo $text['kerapihan_title']; ?></h2>
        </div>

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="attribute-card">
              <div class="attribute-card-header">
                <h3><?php echo $text['putra_title']; ?></h3>
              </div>
              <div class="attribute-card-body">
                <ul class="attribute-list-grooming">
                  <?php foreach ($text['kerapihan_putra'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="attribute-card">
              <div class="attribute-card-header">
                <h3><?php echo $text['putri_title']; ?></h3>
              </div>
              <div class="attribute-card-body">
                <ul class="attribute-list-grooming">
                  <?php foreach ($text['kerapihan_putri'] as $item): ?>
                    <li><?php echo $item; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>