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
    'submission_links' => [
      'individual' => '#',
      'group' => '#'
    ],
    'caption_twibon' => "Hello Genusian‼️🤩\nIntroduction myself,\nMy name is [.....] I'm from the group [....] my major is [.....]\n\n✨DI ISI FAKTA MENARIK TENTANG NAMA KELOMPOK ✨\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Melangkah Bersama, Membuka Portal Baru, Siap Berkelana Dalam Menopang Ilmu\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow",
    'caption_video' => "Hello Genusian👋🏻🤩\nIntroduction myself‼️\nMy name is [nama] I'm from the group [nama kelompok] my major is [jurusan]\n\n(Caption menarik tentang kelompok masing-masing, menggunakan bahasa nasional)\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Melangkah Bersama, Membuka Portal Baru, Siap Berkelana Dalam Menopang Ilmu\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow"
  ],
  'en' => [
    'page_title' => 'Mission Assignments',
    'page_subtitle' => 'Complete each mission to prove your worth as a true time traveler.',
    'individual_title' => 'Individual Tasks',
    'group_title' => 'Group Tasks',
    'consequences_title' => 'Consequences',
    'submission_title' => 'Submission Methods',
    'evaluation_title' => 'Evaluation Criteria',
    'follow_accounts' => 'Organization & Campus Accounts',
    'submission_links' => [
      'individual' => '#',
      'group' => '#'
    ],
    'caption_twibon' => "Hello Genusian‼️🤩\nIntroduction myself,\nMy name is [.....] I'm from the group [....] my major is [.....]\n\n✨ADD INTERESTING FACTS ABOUT YOUR GROUP NAME ✨\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Stepping Together, Opening New Portals, Ready to Journey in Supporting Knowledge\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow",
    'caption_video' => "Hello Genusian👋🏻🤩\nIntroduction myself‼️\nMy name is [name] I'm from the group [group name] my major is [major]\n\n(Interesting caption about your group, using national language)\n\nI'M READY FOR MABIM 2025‼️🤩\nMabim 2025 \"Stepping Together, Opening New Portals, Ready to Journey in Supporting Knowledge\"\n@mentor @abdurahman_pais @syifaiaa @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2025 #nusaputrauniversity #Tugasmabim2025 #acaramabimunsp #TimeTravelers #Genusian2025 #TimeToTravelTimeToGrow"
  ]
];
$text = $assignments[$lang];

// Load content from tugas.html
$html_content = file_get_contents(__DIR__ . '/doc/tugas.html');

// Function to extract sections from HTML content
function extractSection($content, $title)
{
  // Simple HTML parsing to get sections
  if (preg_match('/<section>[\s\n]*<h2>' . preg_quote($title, '/') . '<\/h2>(.*?)<\/section>/s', $content, $matches)) {
    return $matches[1];
  }
  return '';
}

// Extract each section
$individual_tasks = extractSection($html_content, 'A. Penugasan Individu');
$group_tasks = extractSection($html_content, 'B. Penugasan Kelompok');
$consequences = extractSection($html_content, 'KONSEKUENSI');
$submission = extractSection($html_content, 'PENGUMPULAN');
$evaluation = extractSection($html_content, 'PENILAIAN');

// Add organization accounts button
$individual_tasks = str_replace(
  '<h3>Memfollow Akun Organisasi Mahasiswa dan Kampus</h3>',
  '<h3>Memfollow Akun Organisasi Mahasiswa dan Kampus <br/><a href="#ormawaModal" data-bs-toggle="modal"><i class="fas fa-list me-1"></i> -> Lihat Daftar Akun</a></h3>',
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

  /* Organization Modal Styling */
  .modal-content.bg-dark {
    background: rgba(13, 13, 26, 0.95) !important;
    backdrop-filter: blur(10px);
    border: 1px solid var(--secondary-blue);
  }

  .org-card {
    background: rgba(23, 149, 188, 0.1);
    border: 1px solid var(--secondary-blue);
    border-radius: 8px;
    padding: 1rem;
    height: 100%;
    transition: all 0.3s ease;
  }

  .org-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(23, 149, 188, 0.3);
    border-color: var(--accent-yellow);
  }

  .org-title {
    color: var(--accent-yellow);
    font-family: var(--font-heading);
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
    border-bottom: 1px solid rgba(23, 149, 188, 0.3);
    padding-bottom: 0.5rem;
  }

  .org-links {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .org-link {
    color: var(--pure-white);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.25rem 0;
    transition: all 0.3s ease;
  }

  .org-link:hover {
    color: var(--accent-yellow);
    transform: translateX(5px);
  }

  .org-link i {
    font-size: 1.1rem;
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
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="submission-tab" data-bs-toggle="pill" data-bs-target="#submission" type="button"
          role="tab">
          <i class="fas fa-upload me-2"></i><?php echo $text['submission_title']; ?>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="evaluation-tab" data-bs-toggle="pill" data-bs-target="#evaluation" type="button"
          role="tab">
          <i class="fas fa-award me-2"></i><?php echo $text['evaluation_title']; ?>
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
    </div>
  </div>
</section>

<!-- Modal for Organization Links -->
<div class="modal fade" id="ormawaModal" tabindex="-1" aria-labelledby="ormawaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title" id="ormawaModalLabel">Daftar Akun Organisasi Mahasiswa & Kampus</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3 ormawa-list">
          <!-- Campus Official Accounts -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">UNIVERSITAS NUSA PUTRA</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/nusaputrauniversity" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://youtube.com/@nusaputrauniversity" target="_blank" class="org-link">
                  <i class="fab fa-youtube"></i> YouTube
                </a>
                <a href="https://x.com/NUSAPUTRA_UNIV" target="_blank" class="org-link">
                  <i class="fab fa-twitter"></i> Twitter
                </a>
                <a href="https://www.tiktok.com/@nusaputrauniversity" target="_blank" class="org-link">
                  <i class="fab fa-tiktok"></i> TikTok
                </a>
              </div>
            </div>
          </div>

          <!-- Main Organizations -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">MABIM</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/mabim_unsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @mabim_unsp
                </a>
              </div>
            </div>
          </div>

          <!-- BEM -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">BEM</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/bem_nsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @bem_nsp
                </a>
              </div>
            </div>
          </div>

          <!-- DPM -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">DPM</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/dpm.unp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @dpm.unp
                </a>
              </div>
            </div>
          </div>

          <!-- KPUM -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">KPUM</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/kpum.unp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @kpum.unp
                </a>
              </div>
            </div>
          </div>

          <!-- GANAS -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">GANAS</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/ganas_nusaputra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @ganas_nusaputra
                </a>
              </div>
            </div>
          </div>

          <!-- VTB -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">VTB</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/vtb_nsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @vtb_nsp
                </a>
              </div>
            </div>
          </div>

          <!-- JURNALIS -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">JURNALIS</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/jurnalisnuansa" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @jurnalisnuansa
                </a>
              </div>
            </div>
          </div>

          <!-- MENWA -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">MENWA</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/menwa_univnsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @menwa_univnsp
                </a>
              </div>
            </div>
          </div>

          <!-- NUSAPALA -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">NUSAPALA</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/ukmnusapala" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @ukmnusapala
                </a>
              </div>
            </div>
          </div>

          <!-- Add all remaining organizations -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">RUDAL</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/rudal.unsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @rudal.unsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">VOLI</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/nusaputra.volleyball" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @nusaputra.volleyball
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">BASKET</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/nusaputra.basketball" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @nusaputra.basketball
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">BADMINTON</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/officialbadminton_nsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @officialbadminton_nsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">ENGLISH CLUB</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/englishclubnsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @englishclubnsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">LISENSI</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/lisensi_npu" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @lisensi_npu
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">GHC (Padus)</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/padus_unsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @padus_unsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">PRAMUKA</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/pramuka_nsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @pramuka_nsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">PENCAKSILAT</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/pencaksilat_unsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @pencaksilat_unsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">PMKK</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/pmkk_nusaputra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @pmkk_nusaputra
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">LDK</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/ldk_ar_rasyid_nusa_putra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @ldk_ar_rasyid_nusa_putra
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">KARATE</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/karate.team_nusaputra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @karate.team_nusaputra
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">IEEE</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/ieee_sb_npu" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @ieee_sb_npu
                </a>
              </div>
            </div>
          </div>

          <!-- Himpunan -->
          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN HUKUM</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/himakum__nsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @himakum__nsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN MANAJEMEN</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/msanusaputrauniversity" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @msanusaputrauniversity
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN AKUNTANSI</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/accountingnsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @accountingnsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN PGSD</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/himapgsdunsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @himapgsdunsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN TEKNIK MESIN</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/hmmuniversitasnusaputra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @hmmuniversitasnusaputra
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN TEKNIK ELEKTRO</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/hme_nusaputra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @hme_nusaputra
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN TEKNIK INFORMATIKA</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/hmti_unsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @hmti_unsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN SISTEM INFORMASI</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/hmsi.nsp" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @hmsi.nsp
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN TEKNIK SIPIL</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/hmsnusaputra_" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @hmsnusaputra_
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="org-card">
              <h5 class="org-title">HIMPUNAN DKV</h5>
              <div class="org-links">
                <a href="https://www.instagram.com/dkvnusaputra" target="_blank" class="org-link">
                  <i class="fab fa-instagram"></i> @dkvnusaputra
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-secondary">
        <button type="button" class="btn btn-secondary-custom" data-bs-dismiss="modal">Tutup</button>
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