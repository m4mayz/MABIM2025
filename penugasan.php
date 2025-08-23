<?php
$home = "";
$pedoman = "";
$atribut = "";
$kegiatan = "";
$penugasan = "active"; // Set halaman ini sebagai yang aktif
$absensi = "";
$info = "";
include 'header.php';

// =================================================================
// PUSAT KONTROL HALAMAN PENUGASAN - UBAH SEMUA DATA DI SINI
// =================================================================
$assignments = [
  'id' => [
    'page_title' => 'Misi Penugasan',
    'page_subtitle' => 'Selesaikan setiap misi untuk membuktikan kelayakanmu sebagai penjelajah waktu sejati.',
    'individual_title' => 'Tugas Individu',
    'group_title' => 'Tugas Kelompok',
    'submission_title' => 'Pusat Pengumpulan Misi',
    'submission_button_ind' => 'Kumpulkan Tugas Individu',
    'submission_button_grp' => 'Kumpulkan Tugas Kelompok',
    'copy_button' => 'Salin Caption',
    'copied_message' => 'Tersalin!',
    // --- Daftar Tugas Individu ---
    'tasks_individual' => [
      [
        'title' => 'Foto Twibbon',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Mengunggah foto pribadi menggunakan bingkai yang telah disediakan oleh panitia</li>
          <li>Bingkai dapat diunduh di <a href="https://www.twibbonize.com/mabimnsp2024" target="_blank">https://www.twibbonize.com/mabimnsp2024</a></li>
          <li>Foto twibbon diupload di akun sosial media pribadi dengan caption yang telah disediakan oleh panitia.</li>
        </ul>',
        'type' => 'twibbon',
        'image_placeholder' => 'assets/img/twibbon.jpg',
        'caption_id' => 'caption-twibbon',
        'caption' => "Hello Genusian!\nIntoduce myself!\nMy name is (nama), i'm from the group (nama kelompok), my major is (jurusan)\n\n(CAPTION MENARIK TENTANG NAMA KELOMPOK MASING-MASING, Nb: Menggunakan bahasa nasional)\n\nI'M READY FOR MABIM 2024!\nMabim 2024 \" Generasi terdepan, mengukir jejak emas, menggapai impian \"\nTag IG : @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimnsp"
      ],
      [
        'title' => 'Foto Identik',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Menggunakan atribut atau dress code khas daerah asal masing-masing sekreatif mungkin</li>
          <li>Foto diupload di akun media sosial dengan caption yand ditentukan panitia (AKUN INSTAGRAM TIDAK PRIVATE)</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-identik',
        'caption' => "Hello Genusian!\nIntroduction myself!\nMy name is (nama), I'm from the group (nama kelompok), my major is (jurusan)\n\n(CAPTION MENARIK TENTANG NAMA KELOMPOK MASING-MASING, Nb: menggunakan bahasa nasional)\n\nI'M READY FOR MABIM!\nMabim 2024 \" Generasi terdepan , mengukir jejak emas, menggapai impian \"\n\nTag IG : @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimnsp"
      ],
      [
        'title' => 'Tugas Video',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Membuat video perkenalan menggunakan Bahasa daerah asal masing-masing</li>
          <li>Dalam video tercantum "Nama_kelompok_jurusan_asal daerah"</li>
          <li>Video harus berisi penjelasan tentang nama kelompok masing-masing (semenarik mungkin)</li>
          <li>Durasi video minimal 5 menit</li>
          <li>Video harus sekreatif mungkin</li>
          <li>Video diupload di akun TIKTOK (no private)</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-video',
        'caption' => "Hello Genusian!\nIntroduction myself!\nMy name is (nama), I'm from the group (nama kelompok), my major is (jurusan)\n\n(CAPTION MENARIK TENTANG NAMA KELOMPOK MASING-MASING, Nb: menggunakan bahasa nasional)\n\nI'M READY FOR MABIM!\nMabim 2024 \" Generasi terdepan , mengukir jejak emas, menggapai impian \"\n\nTag IG : @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimnsp"
      ],
      [
        'title' => 'Membuat Blog atau Artikel',
        'deadline' => 'Batas Waktu: 13 September 2024',
        'description' => '<ul>
          <li>Isi artikel atau blog menceritakan tentang kesan, pesan, menjadi MABA dan harapan setelah masuk universitas nusa putra.</li>
          <li>Jumlah kata, 250 kata.</li>
          <li>Pembuatan artikel atau blog dapat dilakukan di Lab Komputer kampus atau menggunakan gadget masing-masing.</li>
          <li>Penugasan di kumpulkan di G_DRIVE</li>
          <li>Cantumkan nama lengkap</li>
        </ul>',
        'type' => 'post'
      ],
      [
        'title' => 'Follow akun Universitas Nusa Putra & Ormawa',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Nusaputrauniversity (Instagram, Facebook, Youtube, X, Tiktok)</li>
          <li>Ormawa:<br>@Msanusaputrauniversity @Himapgsdunsp @Accountingnsp @Hmmuniversitasnusaputra @Himakum_nsp @Hmti_unsp @Hme_nusaputra @Dkvnusaputra @Hms_nusaputra @Hmsi.nsp @BEM_npu @Dpm.unp @kpum_npu @Jurnalisnuansa @ganas_nusaputra @Vtb_nsp @Menwa_univnsp</li>
          <li>Bukti follow berupa screenshoot.</li>
        </ul>',
        'type' => 'follow'
      ]
    ],
    // --- Daftar Tugas Kelompok ---
    'tasks_group' => [
      [
        'title' => 'Membuat Akun Instagram Kelompok',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Feed harus menarik.</li>
          <li>Akun IG berisi foto mentor, anggota kelompok dan penjelasan tentang nama kelompok.</li>
          <li>Dokumentasi setiap kegiatan diupload di IG</li>
        </ul>',
        'type' => 'ig_account'
      ],
      [
        'title' => 'Video Yel-Yel dan Jargon Kelompok',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Dress code bebas sekreatif mungkin (disarankan ada satu hal yang menunjukkan identitas nama kelompok)</li>
          <li>Durasi video yel-yel & jargon minimal 3 menit.</li>
          <li>Upload vidio di akun Instagram kelompok.</li>
          <li>Menggunakan caption yang sudah ditentukan:</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-yel',
        'caption' => "Hello genusian !\nKami dari (kelompok ke_ nama kelompok)\nCaption ( menggunakan penjelasan singkat tentang nama kelompok)\n\nI'M READY FOR MABIM 2024!\nMabim 2024 \" Generasi terdepan ,mengukir jejak emas, menggapai impian \"\n\nTag akun @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimunsp"
      ],
      [
        'title' => 'Pentas Seni',
        'deadline' => 'Batas Waktu: 07 September 2024',
        'description' => '<ul>
          <li>Video pentas seni berisi penampilan sekreatif mungkin, tidak mengandung unsur sara, kekerasa, penistaan agama.</li>
          <li>Durasi vidio pensi minimal 5 menit.</li>
          <li>Upload vidio di akun Youtube mentor.</li>
          <li>Menggunakan caption yang sudah ditentukan:</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-pensi',
        'caption' => "Hello genusian !\nKami dari (kelompok ke_ nama kelompok)\nCaption ( menggunakan penjelasan singkat tentang nama kelompok)\n\nI'M READY FOR MABIM 2024!\nMabim 2024 \" Generasi terdepan ,mengukir jejak emas, menggapai impian \"\n\nTag akun @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimunsp"
      ]
    ],
    'submission_notes' => [
      'individual' => 'Pengumpulan Tugas Individu MABIM 1, 2, 3, dan 5 paling lambat 07 September 2024',
      'group' => 'Pengumpulan Tugas Kelompok MABIM 1-3 paling lambat 07 September 2024'
    ],
    'submission_links' => [
      'individual' => '#',
      'group' => '#'
    ]
  ],
  'en' => [
    'page_title' => 'Assignment Missions',
    'page_subtitle' => 'Complete each mission to prove your worth as a true time traveler.',
    'individual_title' => 'Individual Tasks',
    'group_title' => 'Group Tasks',
    'submission_title' => 'Mission Submission Center',
    'submission_button_ind' => 'Submit Individual Tasks',
    'submission_button_grp' => 'Submit Group Tasks',
    'copy_button' => 'Copy Caption',
    'copied_message' => 'Copied!',
    // --- Daftar Tugas Individu dalam Bahasa Inggris ---
    'tasks_individual' => [
      [
        'title' => 'Twibbon Photo',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>Upload a personal photo using the frame provided by the committee</li>
          <li>The frame can be downloaded at <a href="https://www.twibbonize.com/mabimnsp2024" target="_blank">https://www.twibbonize.com/mabimnsp2024</a></li>
          <li>Upload the twibbon photo to your personal social media account with the caption provided by the committee.</li>
        </ul>',
        'type' => 'twibbon',
        'image_placeholder' => 'assets/img/twibbon.jpg',
        'caption_id' => 'caption-twibbon',
        'caption' => "Hello Genusian!\nIntoduce myself!\nMy name is (name), i'm from the group (group name), my major is (major)\n\n(INTERESTING CAPTION ABOUT YOUR GROUP NAME, Note: Use the national language)\n\nI'M READY FOR MABIM 2024!\nMabim 2024 \"Leading generation, carving golden footprints, reaching dreams\"\nTag IG : @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimnsp"
      ],
      [
        'title' => 'Identical Photo',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>Use attributes or dress code that is typical of your hometown, as creatively as possible</li>
          <li>Upload the photo to your social media account with the caption specified by the committee (INSTAGRAM ACCOUNT MUST NOT BE PRIVATE)</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-identik',
        'caption' => "Hello Genusian!\nIntroduction myself!\nMy name is (name), I'm from the group (group name), my major is (major)\n\n(INTERESTING CAPTION ABOUT YOUR GROUP NAME, Note: Use the national language)\n\nI'M READY FOR MABIM!\nMabim 2024 \"Leading generation, carving golden footprints, reaching dreams\"\n\nTag IG : @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimnsp"
      ],
      [
        'title' => 'Video Task',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>Create an introduction video using your regional language</li>
          <li>The video must include "Name_group_major_home region"</li>
          <li>The video must contain an explanation about your group name (as interesting as possible)</li>
          <li>Minimum video duration is 5 minutes</li>
          <li>The video must be as creative as possible</li>
          <li>Upload the video to TIKTOK account (not private)</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-video',
        'caption' => "Hello Genusian!\nIntroduction myself!\nMy name is (name), I'm from the group (group name), my major is (major)\n\n(INTERESTING CAPTION ABOUT YOUR GROUP NAME, Note: Use the national language)\n\nI'M READY FOR MABIM!\nMabim 2024 \"Leading generation, carving golden footprints, reaching dreams\"\n\nTag IG : @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimnsp"
      ],
      [
        'title' => 'Create a Blog or Article',
        'deadline' => 'Deadline: September 13, 2024',
        'description' => '<ul>
          <li>The content of the article or blog should be about your impressions, messages, being a new student, and hopes after entering Nusa Putra University.</li>
          <li>Word count: 250 words.</li>
          <li>Creation of the article or blog can be done at the campus Computer Lab or using your own gadget.</li>
          <li>Assignment to be submitted in G_DRIVE</li>
          <li>Include your full name</li>
        </ul>',
        'type' => 'post'
      ],
      [
        'title' => 'Follow Nusa Putra University & Student Organization Accounts',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>Nusaputrauniversity (Instagram, Facebook, Youtube, X, Tiktok)</li>
          <li>Student Organizations:<br>@Msanusaputrauniversity @Himapgsdunsp @Accountingnsp @Hmmuniversitasnusaputra @Himakum_nsp @Hmti_unsp @Hme_nusaputra @Dkvnusaputra @Hms_nusaputra @Hmsi.nsp @BEM_npu @Dpm.unp @kpum_npu @Jurnalisnuansa @ganas_nusaputra @Vtb_nsp @Menwa_univnsp</li>
          <li>Proof of following is in the form of screenshots.</li>
        </ul>',
        'type' => 'follow'
      ]
    ],
    // --- Daftar Tugas Kelompok dalam Bahasa Inggris ---
    'tasks_group' => [
      [
        'title' => 'Create a Group Instagram Account',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>Feed must be attractive.</li>
          <li>IG account should contain photos of mentor, group members, and explanation about the group name.</li>
          <li>Documentation of each activity uploaded to IG</li>
        </ul>',
        'type' => 'ig_account'
      ],
      [
        'title' => 'Group Yell and Jargon Video',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>Dress code is free and as creative as possible (it is recommended to have one thing that shows the identity of the group name)</li>
          <li>Minimum duration of yell & jargon video is 3 minutes.</li>
          <li>Upload the video to the group Instagram account.</li>
          <li>Use the specified caption:</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-yel',
        'caption' => "Hello genusian !\nWe are from (group no_ group name)\nCaption (using a brief explanation about the group name)\n\nI'M READY FOR MABIM 2024!\nMabim 2024 \"Leading generation, carving golden footprints, reaching dreams\"\n\nTag accounts @mentor @revalizzaaa @khaikalujo @mabim_unsp @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimunsp"
      ],
      [
        'title' => 'Art Performance',
        'deadline' => 'Deadline: September 07, 2024',
        'description' => '<ul>
          <li>The art performance video contains a performance as creative as possible, does not contain elements of SARA, violence, religious blasphemy.</li>
          <li>Minimum duration of performance video is 5 minutes.</li>
          <li>Upload the video to the mentor\'s Youtube account.</li>
          <li>Use the specified caption:</li>
        </ul>',
        'type' => 'post',
        'caption_id' => 'caption-pensi',
        'caption' => "Hello genusian !\nWe are from (group no_ group name)\nCaption (using a brief explanation about the group name)\n\nI'M READY FOR MABIM 2024!\nMabim 2024 \"Leading generation, carving golden footprints, reaching dreams\"\n\nTag account @nusaputrauniversity\n\n#mabimunsp2024\n#nusaputrauniversity\n#Tugasmabim2024\n#kreatifmabimunsp"
      ]
    ],
    'submission_notes' => [
      'individual' => 'Submission of Individual Tasks MABIM 1, 2, 3, and 5 no later than September 7, 2024',
      'group' => 'Submission of Group Tasks MABIM 1-3 no later than September 7, 2024'
    ],
    'submission_links' => [
      'individual' => '#',
      'group' => '#'
    ]
  ]
];
$text = $assignments[$lang];
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header-title"><?php echo $text['page_title']; ?></h1>
    <p class="lead text-light"><?php echo $text['page_subtitle']; ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <!-- Tab Navigation -->
    <ul class="nav nav-pills mb-5 justify-content-center" id="taskTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="individual-tab" data-bs-toggle="pill" data-bs-target="#individual"
          type="button" role="tab">
          <?php echo $text['individual_title']; ?>
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="group-tab" data-bs-toggle="pill" data-bs-target="#group" type="button" role="tab">
          <?php echo $text['group_title']; ?>
        </button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="taskTabContent">
      <!-- Individual Tasks Tab -->
      <div class="tab-pane fade show active" id="individual" role="tabpanel">
        <div class="row g-4 justify-content-center">
          <?php foreach ($text['tasks_individual'] as $index => $task): ?>
            <div class="col-lg-10">
              <div class="task-card">
                <div class="task-card-header">
                  <h3>Tugas <?php echo $index + 1; ?>: <?php echo $task['title']; ?></h3>
                  <span class="deadline"><?php echo $task['deadline']; ?></span>
                </div>
                <div class="task-card-body">
                  <?php if (isset($task['type']) && $task['type'] == 'twibbon'): ?>
                    <div class="twibbon-layout">
                      <div class="twibbon-image">
                        <img src="<?php echo $task['image_placeholder']; ?>" alt="Twibbon Preview">
                        <a href="https://www.twibbonize.com/mabimnsp2024" target="_blank"
                          class="btn btn-primary-custom btn-sm">
                          Gunakan Twibbon
                        </a>
                      </div>
                      <div class="twibbon-content">
                        <div class="task-description">
                          <?php echo $task['description']; ?>
                        </div>

                        <?php if (isset($task['caption'])): ?>
                          <div class="caption-area">
                            <div class="caption-header">
                              <label for="<?php echo $task['caption_id']; ?>" class="form-label">Caption:</label>
                              <button class="btn btn-sm btn-secondary-custom btn-copy"
                                data-clipboard-target="#<?php echo $task['caption_id']; ?>">
                                <img src="assets/img/icon/copy.png" alt="Copy" class="copy-icon">
                                <span class="copy-text"><?php echo $text['copy_button']; ?></span>
                              </button>
                            </div>
                            <textarea id="<?php echo $task['caption_id']; ?>" readonly
                              class="form-control"><?php echo $task['caption']; ?></textarea>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php else: ?>
                    <div class="task-description">
                      <?php echo $task['description']; ?>
                    </div>

                    <?php if (isset($task['caption'])): ?>
                      <div class="caption-area">
                        <div class="caption-header">
                          <label for="<?php echo $task['caption_id']; ?>" class="form-label">Caption:</label>
                          <button class="btn btn-sm btn-secondary-custom btn-copy"
                            data-clipboard-target="#<?php echo $task['caption_id']; ?>">
                            <img src="assets/img/icon/copy.png" alt="Copy" class="copy-icon">
                            <span class="copy-text"><?php echo $text['copy_button']; ?></span>
                          </button>
                        </div>
                        <textarea id="<?php echo $task['caption_id']; ?>" readonly
                          class="form-control"><?php echo $task['caption']; ?></textarea>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Group Tasks Tab -->
      <div class="tab-pane fade" id="group" role="tabpanel">
        <div class="row g-4 justify-content-center">
          <?php foreach ($text['tasks_group'] as $index => $task): ?>
            <div class="col-lg-10">
              <div class="task-card">
                <div class="task-card-header">
                  <h3>Tugas <?php echo $index + 1; ?>: <?php echo $task['title']; ?></h3>
                  <span class="deadline"><?php echo $task['deadline']; ?></span>
                </div>
                <div class="task-card-body">
                  <div class="task-description">
                    <?php echo $task['description']; ?>
                  </div>

                  <?php if (isset($task['caption'])): ?>
                    <div class="caption-area">
                      <div class="caption-header">
                        <label for="<?php echo $task['caption_id']; ?>" class="form-label">Caption:</label>
                        <button class="btn btn-sm btn-secondary-custom btn-copy"
                          data-clipboard-target="#<?php echo $task['caption_id']; ?>">
                          <img src="assets/img/icon/copy.png" alt="Copy" class="copy-icon"> <span
                            class="d-none d-sm-inline"><?php echo $text['copy_button']; ?></span>
                        </button>
                      </div>
                      <textarea id="<?php echo $task['caption_id']; ?>" readonly
                        class="form-control"><?php echo $task['caption']; ?></textarea>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section cta-section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['submission_title']; ?></h2>

    <div class="row justify-content-center g-4 mb-4">
      <div class="col-lg-5 col-md-6">
        <div class="submission-card">
          <h4><?php echo $text['individual_title']; ?></h4>
          <p><?php echo $text['submission_notes']['individual']; ?></p>
          <a class="btn btn-primary-custom w-100" href="<?php echo $text['submission_links']['individual']; ?>"
            target="_blank">
            <?php echo $text['submission_button_ind']; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="submission-card">
          <h4><?php echo $text['group_title']; ?></h4>
          <p><?php echo $text['submission_notes']['group']; ?></p>
          <a class="btn btn-primary-custom w-100" href="<?php echo $text['submission_links']['group']; ?>"
            target="_blank">
            <?php echo $text['submission_button_grp']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var clipboard = new ClipboardJS('.btn-copy');
    var originalText = '<?php echo $text['copy_button']; ?>';
    var copiedText = '<?php echo $text['copied_message']; ?>';

    clipboard.on('success', function (e) {
      var button = e.trigger;
      var buttonSpan = button.querySelector('span');

      buttonSpan.textContent = copiedText;
      button.classList.add('btn-success');

      setTimeout(function () {
        buttonSpan.textContent = originalText;
        button.classList.remove('btn-success');
      }, 2000);

      e.clearSelection();
    });
  });
</script>

<?php
include 'footer.php';
?>