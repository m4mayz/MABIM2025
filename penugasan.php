<?php
$home = "";
$pedoman = "";
$atribut = "";
$kegiatan = "";
$penugasan = "active"; // Set halaman ini sebagai yang aktif
$absensi = "";
$info = "";
include 'header.php';

// Multi-language text
$assignments = [
  'id' => [
    'page_title' => 'Misi Penugasan',
    'page_subtitle' => 'Selesaikan setiap misi untuk membuktikan kelayakanmu sebagai penjelajah waktu sejati.',
    'individual_title' => 'Tugas Individu',
    'group_title' => 'Tugas Kelompok',
    'consequences_title' => 'Konsekuensi',
    'submission_title' => 'Metode Pengumpulan',
    'evaluation_title' => 'Kriteria Penilaian',
    'follow_accounts' => 'Akun Ormawa & Kampus',
    'modal_title' => 'Daftar Akun Sosial Media Organisasi Kampus',
    'daily_title' => 'Penugasan Harian & Presensi',
    'visit_profile' => 'Kunjungi Profil',
    'close_button' => 'Tutup',
    'search_placeholder' => 'Cari organisasi...',
    'submission_links' => [
      'individual' => '#',
      'group' => '#'
    ],
    'caption_twibon' => "Hello Genusian‼️🤩\nLet me Introduce myself,\nMy name is [.....] I'm from the group [....] my major is [.....]\n\n✨DI ISI FAKTA MENARIK TENTANG NAMA KELOMPOK ✨\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Melangkah Bersama, Membuka Portal Baru, Siap Berkelana Dalam Menopang Ilmu\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow",
    'caption_video' => "Hello Genusian👋🏻🤩\nLet me Introduce myself‼️\nMy name is [nama] I'm from the group [nama kelompok] my major is [jurusan]\n\n(Caption menarik tentang kelompok masing-masing, menggunakan bahasa nasional)\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Melangkah Bersama, Membuka Portal Baru, Siap Berkelana Dalam Menopang Ilmu\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow"
  ],
  'en' => [
    'page_title' => 'Mission Assignments',
    'page_subtitle' => 'Complete each mission to prove your worth as a true time traveler.',
    'individual_title' => 'Individual Tasks',
    'group_title' => 'Group Tasks',
    'consequences_title' => 'Consequences',
    'submission_title' => 'Submission Methods',
    'evaluation_title' => 'Evaluation Criteria',
    'daily_title' => 'Daily Tasks & Attendance',
    'follow_accounts' => 'Organization & Campus Accounts',
    'modal_title' => 'Campus Organization Social Media Accounts',
    'visit_profile' => 'Visit Profile',
    'close_button' => 'Close',
    'search_placeholder' => 'Search organizations...',
    'submission_links' => [
      'individual' => '#',
      'group' => '#'
    ],
    'caption_twibon' => "Hello Genusian‼️🤩\nLet me introduce myself,\nMy name is [.....] I'm from the group [....] my major is [.....]\n\n✨ADD INTERESTING FACTS ABOUT YOUR GROUP NAME ✨\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Stepping Together, Opening New Portals, Ready to Journey in Supporting Knowledge\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow",
    'caption_video' => "Hello Genusian👋🏻🤩\nLet me introduce myself‼️\nMy name is [name] I'm from the group [group name] my major is [major]\n\n(Interesting caption about your group, using national language)\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Stepping Together, Opening New Portals, Ready to Journey in Supporting Knowledge\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow"
  ]
];
$text = $assignments[$lang];

// Load content from tugas-id.html or tugas-en.html based on language
if ($lang === 'en') {
  $html_content = file_get_contents(__DIR__ . '/doc/tugas-en.html');
} else {
  $html_content = file_get_contents(__DIR__ . '/doc/tugas-id.html');
}

// Function to extract sections from HTML content
function extractSection($content, $title)
{
  // Simple HTML parsing to get sections
  if (preg_match('/<section>[\s\n]*<h2>' . preg_quote($title, '/') . '<\/h2>(.*?)<\/section>/s', $content, $matches)) {
    return $matches[1];
  }
  return '';
}

// Section titles for both languages
if ($lang === 'en') {
  $individual_title = 'A. Individual Assignments';
  $group_title = 'B. Group Assignments';
  $consequences_title = 'CONSEQUENCES';
  $submission_title = 'SUBMISSION';
  $evaluation_title = 'EVALUATION';
  $harian_dan_presensi_title = 'C. Daily Assignments & Attendance';
  $org_follow_title = 'Follow Organization & Campus Accounts';
  $org_button = '<h3>Follow Organization & Campus Accounts <br/><a href="#ormawaModal" class="org-accounts-button" data-bs-toggle="modal"><i class="fas fa-list me-1"></i> View Account List</a></h3>';
} else {
  $individual_title = 'A. Penugasan Individu';
  $group_title = 'B. Penugasan Kelompok';
  $consequences_title = 'KONSEKUENSI';
  $submission_title = 'PENGUMPULAN';
  $evaluation_title = 'PENILAIAN';
  $harian_dan_presensi_title = 'C. Penugasan Harian & Presensi';
  $org_follow_title = 'Memfollow Akun Organisasi Mahasiswa dan Kampus';
  $org_button = '<h3>Memfollow Akun Organisasi Mahasiswa dan Kampus</h3>';
}

// Extract each section
$individual_tasks = extractSection($html_content, $individual_title);
$group_tasks = extractSection($html_content, $group_title);
$consequences = extractSection($html_content, $consequences_title);
$submission = extractSection($html_content, $submission_title);
$evaluation = extractSection($html_content, $evaluation_title);
$harian_dan_presensi = extractSection($html_content, $harian_dan_presensi_title);

// Add organization accounts button (for both languages)
$individual_tasks = str_replace(
  '<h3>' . $org_follow_title . '</h3>',
  $org_button,
  $individual_tasks
);
?>

<!-- Add Modern Task Styles -->
<style>
  /* Modern Task Section Styling */
  .task-section-modern {
    background: rgba(13, 13, 26, 0.6);
    border-radius: 15px;
    margin-bottom: 3rem;
    padding: 2rem;
    position: relative;
    border: 1px solid var(--secondary-blue);
    box-shadow: 0 0 30px rgba(23, 149, 188, 0.15);
    backdrop-filter: blur(10px);
  }

  .task-section-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(23, 149, 188, 0.05), transparent);
    pointer-events: none;
    border-radius: 15px;
  }

  .task-section-modern h3 {
    color: var(--accent-yellow);
    font-family: var(--font-heading);
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
    font-size: 1.6rem;
  }

  .task-section-modern h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 100px;
    background: linear-gradient(90deg, var(--accent-yellow), transparent);
  }

  .task-section-modern ol,
  .task-section-modern ul {
    padding-left: 1.25rem;
    margin-bottom: 1.5rem;
  }

  .task-section-modern li {
    margin-bottom: 0.75rem;
    color: var(--pure-white);
    position: relative;
  }

  .task-section-modern ol>li {
    padding-left: 0.5rem;
  }

  .task-section-modern li h3 {
    font-size: 1.3rem;
    margin: 1rem 0 0.75rem;
    color: var(--secondary-blue);
  }

  .task-section-modern strong {
    color: var(--accent-yellow);
    font-weight: 600;
  }

  .task-section-modern a {
    color: var(--accent-yellow);
    text-decoration: none;
    transition: all 0.3s ease;
    border-bottom: 1px dashed var(--accent-yellow);
  }

  .task-section-modern a:hover {
    color: var(--pure-white);
    border-bottom: 1px solid var(--pure-white);
  }

  /* Enhanced Tab Button Styling */
  .task-tabs-futuristic {
    display: flex;
    overflow-x: auto;
    scrollbar-width: thin;
    padding-bottom: 5px;
    margin-bottom: 2rem;
    -webkit-overflow-scrolling: touch;
    scroll-behavior: smooth;
    position: relative;
    border-bottom: 1px solid rgba(23, 149, 188, 0.3);
  }

  .task-tabs-futuristic::-webkit-scrollbar {
    height: 4px;
  }

  .task-tabs-futuristic::-webkit-scrollbar-thumb {
    background-color: rgba(251, 204, 27, 0.5);
    border-radius: 4px;
  }

  .task-tabs-futuristic .nav-item {
    flex: 0 0 auto;
    margin-right: 5px;
  }

  .task-tabs-futuristic .nav-link {
    color: var(--pure-white);
    background: rgba(13, 13, 26, 0.5);
    border: 1px solid var(--secondary-blue);
    border-radius: 8px;
    padding: 0.75rem 1.5rem;
    font-family: var(--font-heading);
    font-size: 0.9rem;
    transition: all 0.3s ease;
    position: relative;
    white-space: nowrap;
    overflow: hidden;
  }

  .task-tabs-futuristic .nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(23, 149, 188, 0.2), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
  }

  .task-tabs-futuristic .nav-link:hover {
    color: var(--accent-yellow);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(23, 149, 188, 0.3);
  }

  .task-tabs-futuristic .nav-link:hover::before {
    transform: translateX(100%);
  }

  .task-tabs-futuristic .nav-link.active {
    color: var(--pure-white);
    background: linear-gradient(135deg, rgba(23, 149, 188, 0.8), rgba(23, 149, 188, 0.4));
    border-color: var(--accent-yellow);
    box-shadow: 0 0 15px rgba(251, 204, 27, 0.3);
  }

  /* Organization Link Button */
  .org-accounts-button {
    display: inline-block;
    background: linear-gradient(135deg, rgba(23, 149, 188, 0.7), rgba(23, 149, 188, 0.3));
    color: var(--pure-white) !important;
    border: 1px solid var(--accent-yellow) !important;
    border-radius: 8px;
    padding: 0.5rem 1.5rem;
    margin-top: 10px;
    font-size: 0.9rem;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 0 10px rgba(23, 149, 188, 0.3);
    text-decoration: none !important;
  }

  .org-accounts-button:hover {
    background: linear-gradient(135deg, rgba(251, 204, 27, 0.7), rgba(251, 204, 27, 0.3));
    color: var(--dark-bg) !important;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(251, 204, 27, 0.4);
  }

  /* Organization Modal Styling */
  .modal-content.bg-dark {
    background: rgba(13, 13, 26, 0.95) !important;
    backdrop-filter: blur(10px);
    border: 1px solid var(--secondary-blue);
  }

  .modal-title {
    color: var(--accent-yellow);
    font-family: var(--font-heading);
    font-weight: 600;
    text-align: center;
    width: 100%;
  }

  .modal-header {
    border-bottom: 1px solid var(--secondary-blue) !important;
  }

  .modal-search-container {
    margin-bottom: 1.5rem;
  }

  .modal-search {
    background: rgba(13, 13, 26, 0.7);
    border: 1px solid var(--secondary-blue);
    color: var(--pure-white);
    border-radius: 25px;
    padding: 0.5rem 1.5rem;
    width: 100%;
    transition: all 0.3s ease;
  }

  .modal-search:focus {
    border-color: var(--accent-yellow);
    box-shadow: 0 0 10px rgba(251, 204, 27, 0.3);
    outline: none;
  }

  .modal-category-title {
    color: var(--accent-yellow);
    font-family: var(--font-heading);
    font-size: 1.3rem;
    margin: 1.5rem 0 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid rgba(23, 149, 188, 0.3);
  }

  .org-card {
    background: rgba(23, 149, 188, 0.1);
    border: 1px solid var(--secondary-blue);
    border-radius: 8px;
    padding: 1.25rem;
    height: 100%;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .org-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(23, 149, 188, 0.3);
    border-color: var(--accent-yellow);
  }

  .org-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, transparent, rgba(23, 149, 188, 0.1), transparent);
    pointer-events: none;
  }

  .org-title {
    color: var(--pure-white);
    font-family: var(--font-heading);
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
    border-bottom: 1px solid rgba(23, 149, 188, 0.3);
    padding-bottom: 0.5rem;
    text-align: center;
  }

  .org-links {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .org-link {
    color: var(--pure-white);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.5rem 0.75rem;
    transition: all 0.3s ease;
    border-radius: 6px;
    border: 1px dashed rgba(23, 149, 188, 0.5);
    background: rgba(23, 149, 188, 0.1);
    position: relative;
  }

  .org-link:hover {
    color: var(--accent-yellow);
    transform: translateX(5px);
    background: rgba(23, 149, 188, 0.2);
    border: 1px solid var(--accent-yellow);
  }

  .org-link i {
    font-size: 1.1rem;
    width: 24px;
    text-align: center;
  }

  .org-link-label {
    flex-grow: 1;
  }

  .visit-badge {
    background-color: var(--accent-yellow);
    color: var(--pure-white);
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
    font-size: 0.7rem;
    font-weight: 600;
    margin-left: auto;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .org-link:hover .visit-badge {
    opacity: 1;
  }

  /* Instagram style */
  .org-link.instagram {
    border-color: rgba(225, 48, 108, 0.5);
    background: rgba(225, 48, 108, 0.1);
  }

  .org-link.instagram:hover {
    border-color: rgba(225, 48, 108, 0.8);
    background: rgba(225, 48, 108, 0.2);
  }

  /* YouTube style */
  .org-link.youtube {
    border-color: rgba(255, 0, 0, 0.5);
    background: rgba(255, 0, 0, 0.1);
  }

  .org-link.youtube:hover {
    border-color: rgba(255, 0, 0, 0.8);
    background: rgba(255, 0, 0, 0.2);
  }

  /* Twitter style */
  .org-link.twitter {
    border-color: rgba(29, 161, 242, 0.5);
    background: rgba(29, 161, 242, 0.1);
  }

  .org-link.twitter:hover {
    border-color: rgba(29, 161, 242, 0.8);
    background: rgba(29, 161, 242, 0.2);
  }

  /* TikTok style */
  .org-link.tiktok {
    border-color: rgba(0, 0, 0, 0.5);
    background: rgba(0, 0, 0, 0.1);
  }

  .org-link.tiktok:hover {
    border-color: rgba(0, 0, 0, 0.8);
    background: rgba(0, 0, 0, 0.2);
  }

  /* Button styling */
  .btn-secondary-custom {
    background: linear-gradient(135deg, rgba(23, 149, 188, 0.7), rgba(23, 149, 188, 0.3));
    border: 1px solid var(--secondary-blue);
    color: var(--pure-white);
    padding: 0.5rem 2rem;
    border-radius: 8px;
    font-family: var(--font-heading);
    transition: all 0.3s ease;
  }

  .btn-secondary-custom:hover {
    background: linear-gradient(135deg, rgba(251, 204, 27, 0.7), rgba(251, 204, 27, 0.3));
    border-color: var(--accent-yellow);
    color: var(--dark-bg);
    transform: translateY(-3px);
  }

  /* Checkbox styling */
  .org-checkbox {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    margin-right: 10px;
    border-radius: 50%;
    border: 2px solid rgba(23, 149, 188, 0.5);
    color: transparent;
    transition: all 0.3s ease;
  }

  .org-checkbox i {
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .org-link {
    display: flex;
    align-items: center;
    /* Update padding to accommodate checkbox */
    padding: 0.5rem 0.75rem;
  }

  .org-link.checked .org-checkbox {
    background-color: var(--accent-yellow);
    border-color: var(--accent-yellow);
    color: var(--dark-bg);
  }

  .org-link.checked .org-checkbox i {
    opacity: 1;
  }

  /* Example Image Containers */
  .contoh-twibbon,
  .alas-duduk-example {
    background: rgba(23, 149, 188, 0.1);
    border: 1px dashed var(--secondary-blue);
    border-radius: 10px;
    padding: 1rem;
    margin-top: 1.5rem;
    transition: all 0.3s ease;
  }

  .contoh-twibbon:hover,
  .alas-duduk-example:hover {
    background: rgba(23, 149, 188, 0.2);
    border-color: var(--accent-yellow);
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .contoh-twibbon h4,
  .alas-duduk-example h4 {
    color: var(--accent-yellow);
    font-size: 1.1rem;
    margin-bottom: 1rem;
  }

  .twibbon-example-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .twibbon-example-container img,
  .alas-duduk-example img {
    max-width: 100%;
    max-height: 350px;
    object-fit: contain;
    border: 3px solid var(--secondary-blue);
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .twibbon-example-container img:hover,
  .alas-duduk-example img:hover {
    border-color: var(--accent-yellow);
    transform: scale(1.02);
  }
</style>

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
    <!-- Tab Navigation -->
    <ul class="nav nav-pills task-tabs-futuristic justify-content-center" id="taskTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="individual-tab" data-bs-toggle="pill" data-bs-target="#individual"
          type="button" role="tab">
          <i class="fas fa-user me-2"></i><?php echo $text['individual_title']; ?>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="group-tab" data-bs-toggle="pill" data-bs-target="#group" type="button" role="tab">
          <i class="fas fa-users me-2"></i><?php echo $text['group_title']; ?>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="consequences-tab" data-bs-toggle="pill" data-bs-target="#consequences"
          type="button" role="tab">
          <i class="fas fa-exclamation-triangle me-2"></i><?php echo $text['consequences_title']; ?>
        </button>
      </li>
      <!-- <li class="nav-item" role="presentation">
        <button class="nav-link" id="submission-tab" data-bs-toggle="pill" data-bs-target="#submission" type="button"
          role="tab">
          <i class="fas fa-upload me-2"></i><?php echo $text['submission_title']; ?>
        </button>
      </li> -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="evaluation-tab" data-bs-toggle="pill" data-bs-target="#evaluation" type="button"
          role="tab">
          <i class="fas fa-award me-2"></i><?php echo $text['evaluation_title']; ?>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="harian-tab" data-bs-toggle="pill" data-bs-target="#harian" type="button"
          role="tab">
          <i class="fas fa-calendar-alt me-2"></i><?php echo $text['daily_title']; ?>
        </button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="taskTabContent">
      <!-- Individual Tasks Tab -->
      <div class="tab-pane fade show active" id="individual" role="tabpanel">
        <div class="task-section-modern">
          <?php echo $individual_tasks; ?>
        </div>
      </div>

      <!-- Group Tasks Tab -->
      <div class="tab-pane fade" id="group" role="tabpanel">
        <div class="task-section-modern">
          <?php echo $group_tasks; ?>
        </div>
      </div>

      <!-- Consequences Tab -->
      <div class="tab-pane fade" id="consequences" role="tabpanel">
        <div class="task-section-modern">
          <?php echo $consequences; ?>
        </div>
      </div>

      <!-- Submission Tab -->
      <div class="tab-pane fade" id="submission" role="tabpanel">
        <div class="task-section-modern">
          <?php echo $submission; ?>
        </div>
      </div>

      <!-- Evaluation Tab -->
      <div class="tab-pane fade" id="evaluation" role="tabpanel">
        <div class="task-section-modern">
          <?php echo $evaluation; ?>
        </div>
      </div>
      <!-- Harian & Presensi Tab -->
      <div class="tab-pane fade" id="harian" role="tabpanel">
        <div class="task-section-modern">
          <?php echo $harian_dan_presensi; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Improved Modal for Organization Links -->
<div class="modal fade" id="ormawaModal" tabindex="-1" aria-labelledby="ormawaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header">
        <h5 class="modal-title" id="ormawaModalLabel"><?php echo $text['modal_title']; ?></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Search box removed -->

        <!-- University & Main Accounts -->
        <h4 class="modal-category-title">Universitas & Akun Utama</h4>
        <div class="row g-3 ormawa-list" data-category="main">
          <!-- Campus Official Accounts -->
          <div class="col-md-6 org-item" data-name="universitas nusa putra">
            <div class="org-card">
              <h5 class="org-title">UNIVERSITAS NUSA PUTRA</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/nusaputrauniversity" target="_blank" class="org-link instagram"
                  data-org-id="univ_instagram">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-instagram"></i>
                  <span class="org-link-label">Instagram</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
                <a href="https://youtube.com/@nusaputrauniversity" target="_blank" class="org-link youtube"
                  data-org-id="univ_youtube">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-youtube"></i>
                  <span class="org-link-label">YouTube</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
                <a href="https://x.com/NUSAPUTRA_UNIV" target="_blank" class="org-link twitter"
                  data-org-id="univ_twitter">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-twitter"></i>
                  <span class="org-link-label">Twitter</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
                <a href="https://www.tiktok.com/@nusaputrauniversity" target="_blank" class="org-link tiktok"
                  data-org-id="univ_tiktok">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-tiktok"></i>
                  <span class="org-link-label">TikTok</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
              </div>
            </div>
          </div>
          <!-- GENUSIAN TV -->
          <div class="col-md-6 org-item" data-name="genusian tv">
            <div class="org-card">
              <h5 class="org-title">GENUSIAN TV</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/genusian_tv?igsh=MWU3dmYyb3Vtbmc3ZA==" target="_blank"
                  class="org-link instagram" data-org-id="genusian_tv">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-instagram"></i>
                  <span class="org-link-label">@genusian_tv</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
              </div>
            </div>
          </div>

          <!-- MABIM -->
          <div class="col-md-6 org-item" data-name="mabim">
            <div class="org-card">
              <h5 class="org-title">MABIM</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/mabim_unsp" target="_blank" class="org-link instagram"
                  data-org-id="mabim_instagram">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-instagram"></i>
                  <span class="org-link-label">Instagram</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
                <a href="https://youtube.com/@mabimunsp?si=oE3GretRItr9BeWt" target="_blank" class="org-link youtube"
                  data-org-id="mabim_youtube">
                  <div class="org-checkbox">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <i class="fab fa-youtube"></i>
                  <span class="org-link-label">YouTube</span>
                  <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Student Organization Bodies -->
          <h4 class="modal-category-title">Lembaga Kemahasiswaan</h4>
          <div class="row g-3 ormawa-list" data-category="student-bodies">
            <!-- BEM -->
            <div class="col-md-6 org-item" data-name="bem">
              <div class="org-card">
                <h5 class="org-title">BEM</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/bem_nsp" target="_blank" class="org-link instagram"
                    data-org-id="bem_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@bem_nsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- DPM -->
            <div class="col-md-6 org-item" data-name="dpm">
              <div class="org-card">
                <h5 class="org-title">DPM</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/dpm.unp" target="_blank" class="org-link instagram"
                    data-org-id="dpm_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@dpm.unp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- KPUM -->
            <div class="col-md-6 org-item" data-name="kpum">
              <div class="org-card">
                <h5 class="org-title">KPUM</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/kpum.unp" target="_blank" class="org-link instagram"
                    data-org-id="kpum_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@kpum.unp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Student Activity Units -->
          <h4 class="modal-category-title">Unit Kegiatan Mahasiswa</h4>
          <div class="row g-3 ormawa-list" data-category="activity-units">
            <!-- GANAS -->
            <div class="col-md-6 org-item" data-name="ganas">
              <div class="org-card">
                <h5 class="org-title">GANAS</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/ganas_nusaputra" target="_blank" class="org-link instagram"
                    data-org-id="ganas_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@ganas_nusaputra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- VTB -->
            <div class="col-md-6 org-item" data-name="vtb">
              <div class="org-card">
                <h5 class="org-title">VTB</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/vtb_nsp" target="_blank" class="org-link instagram"
                    data-org-id="vtb_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@vtb_nsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- JURNALIS -->
            <div class="col-md-6 org-item" data-name="jurnalis">
              <div class="org-card">
                <h5 class="org-title">JURNALIS</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/jurnalisnuansa" target="_blank" class="org-link instagram"
                    data-org-id="jurnalis_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@jurnalisnuansa</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- MENWA -->
            <div class="col-md-6 org-item" data-name="menwa">
              <div class="org-card">
                <h5 class="org-title">MENWA</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/menwa_univnsp" target="_blank" class="org-link instagram"
                    data-org-id="menwa_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@menwa_univnsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- NUSAPALA -->
            <div class="col-md-6 org-item" data-name="nusapala">
              <div class="org-card">
                <h5 class="org-title">NUSAPALA</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/ukmnusapala" target="_blank" class="org-link instagram"
                    data-org-id="nusapala_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@ukmnusapala</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- RUDAL -->
            <div class="col-md-6 org-item" data-name="rudal">
              <div class="org-card">
                <h5 class="org-title">RUDAL</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/rudal.unsp" target="_blank" class="org-link instagram"
                    data-org-id="rudal_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@rudal.unsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- VOLI -->
            <div class="col-md-6 org-item" data-name="voli">
              <div class="org-card">
                <h5 class="org-title">VOLI</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/nusaputra.volleyball" target="_blank" class="org-link instagram"
                    data-org-id="voli_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@nusaputra.volleyball</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- BASKET -->
            <div class="col-md-6 org-item" data-name="basket">
              <div class="org-card">
                <h5 class="org-title">BASKET</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/nusaputra.basketball" target="_blank" class="org-link instagram"
                    data-org-id="basket_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@nusaputra.basketball</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- BADMINTON -->
            <div class="col-md-6 org-item" data-name="badminton">
              <div class="org-card">
                <h5 class="org-title">BADMINTON</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/officialbadminton_nsp" target="_blank" class="org-link instagram"
                    data-org-id="badminton_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@officialbadminton_nsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- ENGLISH CLUB -->
            <div class="col-md-6 org-item" data-name="english club">
              <div class="org-card">
                <h5 class="org-title">ENGLISH CLUB</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/englishclubnsp" target="_blank" class="org-link instagram"
                    data-org-id="english_club_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@englishclubnsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- LISENSI -->
            <div class="col-md-6 org-item" data-name="lisensi">
              <div class="org-card">
                <h5 class="org-title">LISENSI</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/lisensi_npu" target="_blank" class="org-link instagram"
                    data-org-id="lisensi_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@lisensi_npu</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- GHC (Padus) -->
            <div class="col-md-6 org-item" data-name="ghc padus">
              <div class="org-card">
                <h5 class="org-title">GHC (Padus)</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/padus_unsp" target="_blank" class="org-link instagram"
                    data-org-id="ghc_padus_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@padus_unsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- PRAMUKA -->
            <div class="col-md-6 org-item" data-name="pramuka">
              <div class="org-card">
                <h5 class="org-title">PRAMUKA</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/pramuka_nsp" target="_blank" class="org-link instagram"
                    data-org-id="pramuka_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@pramuka_nsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- PENCAKSILAT -->
            <div class="col-md-6 org-item" data-name="pencaksilat">
              <div class="org-card">
                <h5 class="org-title">PENCAKSILAT</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/pencaksilat_unsp" target="_blank" class="org-link instagram"
                    data-org-id="pencaksilat_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@pencaksilat_unsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- PMKK -->
            <div class="col-md-6 org-item" data-name="pmkk">
              <div class="org-card">
                <h5 class="org-title">PMKK</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/pmkk_nusaputra" target="_blank" class="org-link instagram"
                    data-org-id="pmkk_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@pmkk_nusaputra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- LDK -->
            <div class="col-md-6 org-item" data-name="ldk">
              <div class="org-card">
                <h5 class="org-title">LDK</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/ldk_ar_rasyid_nusa_putra" target="_blank"
                    class="org-link instagram" data-org-id="ldk_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@ldk_ar_rasyid_nusa_putra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- KARATE -->
            <div class="col-md-6 org-item" data-name="karate">
              <div class="org-card">
                <h5 class="org-title">KARATE</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/karate.team_nusaputra" target="_blank" class="org-link instagram"
                    data-org-id="karate_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@karate.team_nusaputra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- IEEE -->
            <div class="col-md-6 org-item" data-name="ieee">
              <div class="org-card">
                <h5 class="org-title">IEEE</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/ieee_sb_npu" target="_blank" class="org-link instagram"
                    data-org-id="ieee_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@ieee_sb_npu</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Student Associations -->
          <h4 class="modal-category-title">Himpunan Mahasiswa</h4>
          <div class="row g-3 ormawa-list" data-category="student-associations">
            <!-- HIMPUNAN HUKUM -->
            <div class="col-md-6 org-item" data-name="himpunan hukum">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN HUKUM</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/himakum__nsp" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_hukum_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@himakum__nsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN MANAJEMEN -->
            <div class="col-md-6 org-item" data-name="himpunan manajemen">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN MANAJEMEN</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/msanusaputrauniversity" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_manaajemen_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@msanusaputrauniversity</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN AKUNTANSI -->
            <div class="col-md-6 org-item" data-name="himpunan akuntansi">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN AKUNTANSI</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/accountingnsp" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_akuntansi_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@accountingnsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN PGSD -->
            <div class="col-md-6 org-item" data-name="himpunan pgsd">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN PGSD</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/himapgsdunsp" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_pgsd_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@himapgsdunsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN TEKNIK MESIN -->
            <div class="col-md-6 org-item" data-name="himpunan teknik mesin">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN TEKNIK MESIN</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/hmmuniversitasnusaputra" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_teknik_mesin_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@hmmuniversitasnusaputra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN TEKNIK ELEKTRO -->
            <div class="col-md-6 org-item" data-name="himpunan teknik elektro">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN TEKNIK ELEKTRO</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/hme_nusaputra" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_teknik_elektronika_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@hme_nusaputra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN TEKNIK INFORMATIKA -->
            <div class="col-md-6 org-item" data-name="himpunan teknik informatika">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN TEKNIK INFORMATIKA</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/hmti_unsp" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_teknik_informatika_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@hmti_unsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN SISTEM INFORMASI -->
            <div class="col-md-6 org-item" data-name="himpunan sistem informasi">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN SISTEM INFORMASI</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/hmsi.nsp" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_sistem_informasi_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@hmsi.nsp</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN TEKNIK SIPIL -->
            <div class="col-md-6 org-item" data-name="himpunan teknik sipil">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN TEKNIK SIPIL</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/hmsnusaputra_" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_teknik_sipil_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@hmsnusaputra_</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>

            <!-- HIMPUNAN DKV -->
            <div class="col-md-6 org-item" data-name="himpunan dkv">
              <div class="org-card">
                <h5 class="org-title">HIMPUNAN DKV</h5>
                <div class="org-links">
                  <a href="https://www.instagram.com/dkvnusaputra" target="_blank" class="org-link instagram"
                    data-org-id="himpunan_dkv_instagram">
                    <div class="org-checkbox">
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <span class="org-link-label">@dkvnusaputra</span>
                    <span class="visit-badge"><?php echo $text['visit_profile']; ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer border-secondary">
          <button type="button" class="btn btn-secondary-custom"
            data-bs-dismiss="modal"><?php echo $text['close_button']; ?></button>
        </div>
      </div>
    </div>
  </div>

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

      // Organization link checkbox functionality
      const orgLinks = document.querySelectorAll('.org-link');

      // Load saved states from localStorage
      function loadSavedStates() {
        const savedStates = JSON.parse(localStorage.getItem('orgLinkStates') || '{}');

        orgLinks.forEach(link => {
          const orgId = link.getAttribute('data-org-id');
          if (savedStates[orgId]) {
            link.classList.add('checked');
          }
        });
      }

      // Save states to localStorage
      function saveState(orgId, checked) {
        const savedStates = JSON.parse(localStorage.getItem('orgLinkStates') || '{}');
        savedStates[orgId] = checked;
        localStorage.setItem('orgLinkStates', JSON.stringify(savedStates));
      }

      // Add click handler to links
      orgLinks.forEach(link => {
        link.addEventListener('click', function () {
          const orgId = this.getAttribute('data-org-id');

          // Add checked class (will happen on link click before navigating away)
          this.classList.add('checked');

          // Save state to localStorage
          saveState(orgId, true);

          // Let the link open normally in a new tab
          return true;
        });
      });

      // Load saved states when the modal opens
      document.getElementById('ormawaModal').addEventListener('shown.bs.modal', function () {
        loadSavedStates();
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