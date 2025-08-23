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
    'rules_title' => 'Aturan Perjalanan Waktu',
    'timeline_title' => 'Garis Waktu Perjalanan',
    'timeline_subtitle' => 'Persiapkan dirimu dalam ekspedisi lintas waktu ini dengan mengikuti tahapan berikut',
    'timeline_steps' => [
      [
        'date' => '09-10 September 2024',
        'title' => 'Orientasi Waktu',
        'desc' => 'Pengenalan konsep perjalanan waktu dan filosofi budaya yang akan dieksplorasi.'
      ],
      [
        'date' => '11-12 September 2024',
        'title' => 'Pembukaan Portal',
        'desc' => 'Pembukaan gerbang waktu dan pengenalan dengan tim penjelajah waktu lainnya.'
      ],
      [
        'date' => '13 September 2024',
        'title' => 'Eksplorasi Artefak',
        'desc' => 'Mengidentifikasi dan mempelajari artefak budaya dari berbagai masa.'
      ],
      [
        'date' => '14 September 2024',
        'title' => 'Puncak Sinkronisasi',
        'desc' => 'Puncak kegiatan dimana semua lintas waktu terhubung dalam satu momen kebersamaan.'
      ]
    ],
    'faq_title' => 'Pertanyaan Umum',
    'faq_items' => [
      [
        'question' => 'Apa yang harus dibawa pada hari pertama?',
        'answer' => 'Perlengkapan standar yang harus dibawa adalah kartu identitas, alat tulis, dan perlengkapan ibadah sesuai keyakinan masing-masing. Pastikan juga membawa atribut sesuai ketentuan.'
      ],
      [
        'question' => 'Bagaimana jika tidak bisa hadir secara offline?',
        'answer' => 'Kehadiran offline sangat direkomendasikan untuk pengalaman optimal. Namun, jika berhalangan karena alasan yang dapat dipertanggungjawabkan, hubungi panitia untuk informasi akses daring.'
      ],
      [
        'question' => 'Apakah boleh membawa perangkat elektronik?',
        'answer' => 'Perangkat elektronik seperti ponsel diperbolehkan, namun penggunaannya dibatasi pada waktu-waktu tertentu sesuai arahan panitia.'
      ]
    ]
  ],
  'en' => [
    'title' => 'Time Map & Rules of Travel',
    'subtitle' => 'Everything you need to know to start your MABIM 2025 expedition is here. Download and study the official guide.',
    'download_title' => 'MABIM 2025 Guidebook',
    'download_desc' => 'This guidebook is your compass. It contains complete information on regulations, rules of conduct, activity schedules, and all other important details to guide your journey.',
    'download_button' => 'Download Time Map (.PDF)',
    'preview_title' => 'Document Preview',
    'rules_title' => 'Rules of Time Travel',
    'timeline_title' => 'Journey Timeline',
    'timeline_subtitle' => 'Prepare yourself for this cross-time expedition by following these stages',
    'timeline_steps' => [
      [
        'date' => 'September 09-10, 2024',
        'title' => 'Time Orientation',
        'desc' => 'Introduction to the concept of time travel and the cultural philosophy to be explored.'
      ],
      [
        'date' => 'September 11-12, 2024',
        'title' => 'Portal Opening',
        'desc' => 'Opening of the time gate and introduction to other time explorer teams.'
      ],
      [
        'date' => 'September 13, 2024',
        'title' => 'Artifact Exploration',
        'desc' => 'Identifying and studying cultural artifacts from various periods.'
      ],
      [
        'date' => 'September 14, 2024',
        'title' => 'Synchronization Peak',
        'desc' => 'Peak of activities where all timelines connect in one moment of togetherness.'
      ]
    ],
    'faq_title' => 'Frequently Asked Questions',
    'faq_items' => [
      [
        'question' => 'What should I bring on the first day?',
        'answer' => 'Standard equipment to bring includes an identity card, stationery, and worship equipment according to your respective beliefs. Also make sure to bring attributes according to the provisions.'
      ],
      [
        'question' => 'What if I cannot attend offline?',
        'answer' => 'Offline attendance is highly recommended for optimal experience. However, if you are unable to attend due to justifiable reasons, contact the committee for online access information.'
      ],
      [
        'question' => 'Are electronic devices allowed?',
        'answer' => 'Electronic devices such as mobile phones are allowed, but their use is limited to certain times as directed by the committee.'
      ]
    ]
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
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8">
        <div class="pedoman-content text-center">
          <h2 class="section-title"><?php echo $text['download_title']; ?></h2>
          <p class="mb-5"><?php echo $text['download_desc']; ?></p>

          <a href="pendoman_mabim_nusaputra_2023.pdf" target="_blank" class="btn btn-primary-custom btn-lg">
            <i class="fas fa-download me-2"></i> <?php echo $text['download_button']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section timeline-section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['timeline_title']; ?></h2>
    <p class="section-subtitle"><?php echo $text['timeline_subtitle']; ?></p>

    <div class="time-journey">
      <?php foreach ($text['timeline_steps'] as $index => $step): ?>
        <div class="time-point <?php echo $index % 2 == 0 ? 'left' : 'right'; ?>">
          <div class="time-point-content">
            <div class="time-date"><?php echo $step['date']; ?></div>
            <h3 class="time-title"><?php echo $step['title']; ?></h3>
            <p class="time-desc"><?php echo $step['desc']; ?></p>
          </div>
          <div class="time-connector">
            <div class="time-dot"></div>
            <div class="time-line"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section rules-section">
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

<section class="section faq-section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['faq_title']; ?></h2>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="accordion" id="faqAccordion">
          <?php foreach ($text['faq_items'] as $index => $faq): ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                <button class="accordion-button <?php echo $index > 0 ? 'collapsed' : ''; ?>" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>"
                  aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                  aria-controls="collapse<?php echo $index; ?>">
                  <?php echo $faq['question']; ?>
                </button>
              </h2>
              <div id="collapse<?php echo $index; ?>"
                class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>"
                aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <?php echo $faq['answer']; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>