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
    'putra_title' => 'Atribut Putra',
    'putra_items' => [
      'Kemeja putih lengan panjang',
      'Celana bahan hitam',
      'Dasi hitam',
      'Ikat pinggang hitam',
      'Sepatu pantofel hitam',
      'Kaos kaki putih',
      'Name tag sesuai ketentuan'
    ],
    'putri_title' => 'Atribut Putri',
    'putri_items' => [
      'Kemeja putih lengan panjang',
      'Rok bahan hitam (di bawah lutut)',
      'Bagi yang berhijab, gunakan hijab hitam',
      'Ikat pinggang hitam',
      'Sepatu pantofel hitam (hak maks. 3 cm)',
      'Kaos kaki putih',
      'Name tag sesuai ketentuan'
    ]
  ],
  'en' => [
    'title' => 'Time Travel Gear',
    'subtitle' => 'Every time traveler is required to wear the prescribed uniform and attributes to maintain identity and uniformity.',
    'putra_title' => 'Male Attributes',
    'putra_items' => [
      'Long-sleeved white shirt',
      'Black formal trousers',
      'Black tie',
      'Black belt',
      'Black formal shoes (pantofel)',
      'White socks',
      'Name tag as specified'
    ],
    'putri_title' => 'Female Attributes',
    'putri_items' => [
      'Long-sleeved white shirt',
      'Black formal skirt (below the knee)',
      'For those who wear hijab, use a black hijab',
      'Black belt',
      'Black formal shoes (max. 3 cm heel)',
      'White socks',
      'Name tag as specified'
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
    <div class="row g-5">

      <div class="col-lg-6">
        <div class="attribute-card">
          <div class="attribute-card-header">
            <h3><?php echo $text['putra_title']; ?></h3>
          </div>
          <div class="attribute-card-body">
            <div class="attribute-image-placeholder">
              <i class="fas fa-male"></i>
            </div>
            <ul class="attribute-list">
              <?php foreach ($text['putra_items'] as $item): ?>
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
            <div class="attribute-image-placeholder">
              <i class="fas fa-female"></i>
            </div>
            <ul class="attribute-list">
              <?php foreach ($text['putri_items'] as $item): ?>
                <li><?php echo $item; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include 'footer.php';
?>