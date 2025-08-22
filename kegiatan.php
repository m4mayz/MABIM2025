<?php
$home = "";
$pedoman = "";
$atribut = "";
$kegiatan = "active"; // Set halaman ini sebagai yang aktif
$penugasan = "";
$absensi = "";
$info = "";
include 'header.php';

// =================================================================
// PUSAT KONTROL HALAMAN KEGIATAN - UBAH SEMUA DATA DI SINI
// =================================================================

$kegiatan_data = [
  'id' => [
    'page_title' => 'Linimasa Ekspedisi',
    'page_subtitle' => 'Jadwal, absensi, dan semua informasi teknis kegiatan MABIM 2025.',
    'location_title' => 'Tempat dan Waktu Kegiatan',
    'attendance_title' => 'Gerbang Absensi',
    'rundown_title' => 'Rundown Harian',
    'attendance_button' => 'Isi Absensi',
    'location_button' => 'Lihat Lokasi',
    'labels' => ['date' => 'Hari/Tanggal', 'time' => 'Waktu', 'place' => 'Tempat'],
    // --- Daftar Absensi (Bisa ditambah atau dikurangi) ---
    'attendance_list' => [
      ['title' => 'Absensi Hari ke-1', 'link' => '#link-gform-1'],
      ['title' => 'Absensi Hari ke-2', 'link' => '#link-gform-2'],
      ['title' => 'Absensi Hari ke-3', 'link' => '#link-gform-3'],
    ],
    // --- Informasi Tempat & Waktu per Sesi ---
    'location_sessions' => [
      [
        'title' => 'PRA MABIM',
        'date' => 'Senin-Rabu / 09-11 September 2024',
        'time' => 'Pukul 07:00 - 16:00 WIB',
        'place' => 'Universitas Nusa Putra',
        'gmaps_link' => 'https://maps.app.goo.gl/yourlink1'
      ],
      [
        'title' => 'PUNCAK MABIM',
        'date' => 'Sabtu / 14 September 2024',
        'time' => 'Pukul 07:00 - 17:00 WIB',
        'place' => 'Bumi Mandiri Center (BMC)',
        'gmaps_link' => 'https://maps.app.goo.gl/yourlink2'
      ]
    ],
    // --- Jadwal Rundown Harian ---
    'rundown_days' => [
      [
        'title' => 'Hari 1: Lompatan Pertama',
        'date' => 'Senin, 09 September 2024',
        'schedule' => [
          ['time' => '07.00 - 08.00', 'activity' => 'Registrasi Peserta', 'facilitator' => 'Panitia', 'action' => ''],
          ['time' => '08.00 - 09.00', 'activity' => 'Upacara Pembukaan', 'facilitator' => 'Rektorat', 'action' => ''],
          ['time' => '09.00 - 12.00', 'activity' => 'Materi: Wawasan Kebangsaan', 'facilitator' => 'TNI/Polri', 'action' => '#'],
        ]
      ],
    ]
  ],
  'en' => [
    'page_title' => 'Expedition Timeline',
    'page_subtitle' => 'Schedule, attendance, and all technical information for MABIM 2025 activities.',
    'location_title' => 'Time and Place of Activities',
    'attendance_title' => 'Attendance Gate',
    'rundown_title' => 'Daily Rundown',
    'attendance_button' => 'Fill Attendance',
    'location_button' => 'See Location',
    'labels' => ['date' => 'Day/Date', 'time' => 'Time', 'place' => 'Place'],
    'attendance_list' => [
      ['title' => 'Attendance Day 1', 'link' => '#link-gform-1'],
      ['title' => 'Attendance Day 2', 'link' => '#link-gform-2'],
      ['title' => 'Attendance Day 3', 'link' => '#link-gform-3'],
    ],
    'location_sessions' => [
      [
        'title' => 'PRE-MABIM',
        'date' => 'Monday-Wednesday / September 09-11, 2024',
        'time' => '07:00 AM - 04:00 PM',
        'place' => 'Nusa Putra University',
        'gmaps_link' => 'https://maps.app.goo.gl/yourlink1'
      ],
      [
        'title' => 'PEAK OF MABIM',
        'date' => 'Saturday / September 14, 2024',
        'time' => '07:00 AM - 05:00 PM',
        'place' => 'Bumi Mandiri Center (BMC)',
        'gmaps_link' => 'https://maps.app.goo.gl/yourlink2'
      ]
    ],
    'rundown_days' => [
      [
        'title' => 'Day 1: The First Leap',
        'date' => 'Monday, September 09, 2024',
        'schedule' => [
          ['time' => '07.00 - 08.00', 'activity' => 'Participant Registration', 'facilitator' => 'Committee', 'action' => ''],
          ['time' => '08.00 - 09.00', 'activity' => 'Opening Ceremony', 'facilitator' => 'Rectorate', 'action' => ''],
          ['time' => '09.00 - 12.00', 'activity' => 'Material: National Insight', 'facilitator' => 'TNI/Polri', 'action' => '#'],
        ]
      ],
    ]
  ]
];
$text = $kegiatan_data[$lang];
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header-title"><?php echo $text['page_title']; ?></h1>
    <p class="lead text-light"><?php echo $text['page_subtitle']; ?></p>
  </div>
</section>

<section class="section pb-0">
  <div class="container">
    <h2 class="section-title"><?php echo $text['attendance_title']; ?></h2>
    <div class="row justify-content-center g-4">
      <?php foreach ($text['attendance_list'] as $item): ?>
        <div class="col-lg-3 col-md-6">
          <div class="attendance-card">
            <div class="attendance-card-body">
              <i class="fas fa-qrcode"></i>
              <h4 class="attendance-title"><?php echo $item['title']; ?></h4>
              <a href="<?php echo $item['link']; ?>" target="_blank"
                class="btn btn-primary-custom mt-3"><?php echo $text['attendance_button']; ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title"><?php echo $text['location_title']; ?></h2>
    <div class="row">
      <?php foreach ($text['location_sessions'] as $index => $session): ?>
        <div class="col-md-6 mb-4">
          <div class="location-card">
            <div class="location-card-header">
              <span class="location-number"><?php echo $index + 1; ?></span>
              <h5><?php echo $session['title']; ?></h5>
            </div>
            <div class="location-card-body">
              <div class="location-details">
                <div class="detail-item">
                  <span class="label"><?php echo $text['labels']['date']; ?></span>
                  <span class="value">: <?php echo $session['date']; ?></span>
                </div>
                <div class="detail-item">
                  <span class="label"><?php echo $text['labels']['time']; ?></span>
                  <span class="value">: <?php echo $session['time']; ?></span>
                </div>
                <div class="detail-item">
                  <span class="label"><?php echo $text['labels']['place']; ?></span>
                  <span class="value">: <?php echo $session['place']; ?></span>
                </div>
              </div>
            </div>
            <div class="location-card-footer">
              <a href="<?php echo $session['gmaps_link']; ?>" target="_blank"
                class="btn btn-secondary-custom btn-location w-100">
                <i class="fas fa-map-marked-alt me-1"></i> <?php echo $text['location_button']; ?>
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
    <h2 class="section-title"><?php echo $text['rundown_title']; ?></h2>
    <?php foreach ($text['rundown_days'] as $day): ?>
      <div class="rundown-card">
        <div class="rundown-card-header">
          <h3><?php echo $day['title']; ?></h3>
          <span><?php echo $day['date']; ?></span>
        </div>
        <div class="rundown-card-body">
          <div class="table-responsive">
            <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">Waktu</th>
                  <th scope="col">Kegiatan</th>
                  <th scope="col">Fasilitator</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($day['schedule'] as $event): ?>
                  <tr>
                    <td><?php echo $event['time']; ?></td>
                    <td><?php echo $event['activity']; ?></td>
                    <td><?php echo $event['facilitator']; ?></td>
                    <td>
                      <?php if (!empty($event['action'])): ?>
                        <a href="<?php echo $event['action']; ?>" class="btn btn-sm btn-secondary-custom">Unduh Materi</a>
                      <?php else:
                        echo '-';
                      endif; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php
include 'footer.php';
?>