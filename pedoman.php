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
    'title' => 'Peta Waktu & Aturan Perjalanan',
    'subtitle' => 'Semua yang perlu Anda ketahui untuk memulai ekspedisi MABIM 2025 ada di sini. Unduh dan pelajari buku panduan resmi.',
    'download_title' => 'Buku Panduan MABIM 2025',
    'download_desc' => 'Buku panduan ini adalah kompas Anda. Di dalamnya terdapat informasi lengkap mengenai peraturan, tata tertib, jadwal kegiatan, dan semua detail penting lainnya untuk menuntun perjalanan Anda.',
    'download_button' => 'Unduh Peta Waktu (.PDF)',
    'preview_title' => 'Pratinjau Dokumen',
    'rules_title' => 'Aturan Perjalanan Waktu'
  ],
  'en' => [
    'title' => 'Time Map & Rules of Travel',
    'subtitle' => 'Everything you need to know to start your MABIM 2025 expedition is here. Download and study the official guide.',
    'download_title' => 'MABIM 2025 Guidebook',
    'download_desc' => 'This guidebook is your compass. It contains complete information on regulations, rules of conduct, activity schedules, and all other important details to guide your journey.',
    'download_button' => 'Download Time Map (.PDF)',
    'preview_title' => 'Document Preview',
    'rules_title' => 'Rules of Time Travel'
  ]
];
$text = $content[$lang];

// Fungsi untuk membaca dan mem-parsing file tata tertib
function getRules($lang)
{
  $filePath = "tata-tertib-{$lang}.txt";
  if (file_exists($filePath)) {
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $title = array_shift($lines); // Ambil baris pertama sebagai judul
    $content = '<ul>';
    foreach ($lines as $line) {
      // Hilangkan tanda strip dan trim spasi
      $clean_line = ltrim(trim($line), '- ');
      $content .= '<li>' . htmlspecialchars($clean_line) . '</li>';
    }
    $content .= '</ul>';
    return ['title' => htmlspecialchars($title), 'content' => $content];
  }
  return ['title' => 'Error', 'content' => '<p>File tata tertib tidak ditemukan.</p>'];
}

$rules = getRules($lang);

?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header-title"><?php echo $text['title']; ?></h1>
    <p class="lead text-light"><?php echo $text['subtitle']; ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="document-preview-placeholder">
          <i class="fas fa-file-pdf"></i>
          <span><?php echo $text['preview_title']; ?></span>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="section-title text-start ps-0 ms-0"><?php echo $text['download_title']; ?></h2>
        <p class="text-light"><?php echo $text['download_desc']; ?></p>
        <a href="pendoman_mabim_nusaputra_2023.pdf" target="_blank" class="btn btn-primary-custom mt-3">
          <i class="fas fa-download me-2"></i> <?php echo $text['download_button']; ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container">
    <h2 class="section-title"><?php echo $text['rules_title']; ?></h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="rules-card">
          <div class="rules-card-header">
            <i class="fas fa-scroll me-2"></i> <?php echo $rules['title']; ?>
          </div>
          <div class="rules-card-body">
            <?php echo $rules['content']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>