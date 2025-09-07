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
    'rundown_time' => 'Waktu',
    'rundown_activity' => 'Kegiatan',
    'rundown_facilitator' => 'Fasilitator',
    'page_title' => 'Linimasa Ekspedisi',
    'page_subtitle' => 'Jadwal, absensi, dan semua informasi teknis kegiatan MABIM 2025.',
    'location_title' => 'Peta & Koordinat Waktu',
    'attendance_title' => 'Gerbang Absensi',
    'rundown_title' => 'Rundown Perjalanan Waktu',
    'attendance_button' => 'Isi Absensi',
    'location_button' => 'Lihat Peta',
    'labels' => ['date' => 'Hari/Tanggal', 'time' => 'Waktu', 'place' => 'Lokasi'],

    // --- Daftar Absensi ---
    'attendance_list' => [
      ['title' => 'Absensi Hari ke-1 (8 Sep)', 'link' => ''],
      ['title' => 'Absensi Hari ke-2 (9 Sep)', 'link' => ''],
      ['title' => 'Absensi Hari ke-3 (10 Sep)', 'link' => ''],
      ['title' => 'Absensi Hari ke-4 (13 Sep)', 'link' => ''],
    ],
    // --- Informasi Tempat & Waktu per Sesi ---
    'location_sessions' => [
      [
        'title' => 'HARI 1-3',
        'date' => 'Senin-Rabu / 8-10 September 2025',
        'time' => 'Pukul 07:30 - 16:00 WIB',
        'place' => 'Lapangan Kampus Universitas Nusa Putra',
        'gmaps_link' => 'https://maps.app.goo.gl/krMRxbcCqGXW74jQA'
      ],
      [
        'title' => 'PUNCAK MABIM',
        'date' => 'Sabtu / 13 September 2025',
        'time' => 'Pukul 07:30 - 16:30 WIB',
        'place' => 'Bumi Mandiri Center - Kadudampit',
        'gmaps_link' => 'https://maps.app.goo.gl/xE9EZwdZyEr7hvWY6'
      ]
    ],
    // --- Jadwal Rundown Harian ---
    'rundown_days' => [
      [
        'title' => 'Hari 1: Gerbang Waktu Terbuka',
        'date' => 'Senin, 8 September 2025',
        'schedule' => [
          ['time' => '06:00-06:35', 'activity' => 'Persiapan Panitia', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:35-07:35', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor & Keamanan', 'action' => '#', 'youtube_link' => ''],
          ['time' => '07:35-07:55', 'activity' => 'Pendistribusian Air Mineral', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:55-08:10', 'activity' => 'Sosialisasi Tugas Peserta', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:10-08:20', 'activity' => 'Opening Ceremony', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-08:40', 'activity' => 'Prosesi Penyambutan Rektor diiringi Tari Tradisional', 'facilitator' => 'UKM Lisensi', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:40-08:50', 'activity' => 'Indonesia Raya & Mars Nusa Putra', 'facilitator' => 'GHC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:50-09:00', 'activity' => 'Sambutan Ketua Sterring Commitee MABIM 2025', 'facilitator' => 'Muhammad Rido Sinaga, SH., MH.', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:00-09:25', 'activity' => 'Sambutan Rektor sekaligus membuka kegiatan', 'facilitator' => 'Dr. Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:25-09:40', 'activity' => 'Parade Mahasiswa Internasional', 'facilitator' => 'Div. Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:40-10:00', 'activity' => 'Penyematan simbolis panitia & peserta', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:00-10:10', 'activity' => 'Foto Bersama', 'facilitator' => 'Div. PDD', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:10-10:30', 'activity' => 'Kolaborasi Ormawa', 'facilitator' => 'Div. Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:30-11:30', 'activity' => 'Materi 1: Sistem Perguruan Tinggi di Era Digital', 'facilitator' => 'Vice Rector I (ARCI)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-1'],
          ['time' => '11:30-12:30', 'activity' => 'Materi 2: Administrasi dan Keuangan', 'facilitator' => 'Vice Rector II (ORF)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-2'],
          ['time' => '12:30-13:30', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:30-14:30', 'activity' => 'Materi 3: Talkshow Meneguhkan Nasionalisme', 'facilitator' => 'Prof. Dr. RR. Dewi Anggraeni, S.H., M.H', 'action' => '', 'youtube_link' => ''], // Belum ada link
          ['time' => '14:30-15:30', 'activity' => 'Materi 4: Talkshow Membangun Generasi Kreatif', 'facilitator' => 'Unit & Alumni Kewirausahaan', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-4'],
          ['time' => '15:30-15:40', 'activity' => 'Penutupan', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => 'https://www.youtube.com/live/gp5eiBCoF-k?si=aCHArDHPZ0NONqAu' // Tautan live hari 1
      ],
      [
        'title' => 'Hari 2: Penempaan Karakter',
        'date' => 'Selasa, 9 September 2025',
        'schedule' => [
          ['time' => '06:00-06:30', 'activity' => 'Persiapan Panitia', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:30-07:30', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor & Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-07:50', 'activity' => 'Pendistribusian Air Mineral', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:50-08:50', 'activity' => 'Materi 5: Kemahasiswaan', 'facilitator' => 'Vice Rector III (SAAC)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-5'],
          ['time' => '08:50-09:50', 'activity' => 'Materi 6: Pengenalan DPM', 'facilitator' => 'Ketua DPM', 'action' => '', 'youtube_link' => ''], // Belum ada link
          ['time' => '09:50-10:50', 'activity' => 'Materi 7: Pengenalan BEM', 'facilitator' => 'Ketua BEM', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-7'],
          ['time' => '10:50-11:50', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:50-13:50', 'activity' => 'Materi 8: Talkshow Kesehatan & Kebijakan Hukum HIV/AIDS', 'facilitator' => 'Rida Ista Sitepu, SH., MH. & Dr. Heri Heriyanto, M.M.', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-8'],
          ['time' => '13:50-14:05', 'activity' => 'Sosialisasi Informasi Hari ke-3', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:05-14:15', 'activity' => 'Penutupan', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => '' // Tautan hari 2
      ],
      [
        'title' => 'Hari 3: Pengenalan Fakultas & Ormawa',
        'date' => 'Rabu, 10 September 2025',
        'schedule' => [
          ['time' => '06:00-07:00', 'activity' => 'Persiapan Panitia', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-08:00', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor & Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:00-08:20', 'activity' => 'Ice Breaking', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-09:20', 'activity' => 'Pengarahan Peserta ke Ruangan', 'facilitator' => 'Div. Korlap & Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:20-10:50', 'activity' => 'Materi 10: Pengenalan 6 Prodi (FECD)', 'facilitator' => 'Fakultas FECD', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-10'],
          ['time' => '09:20-10:50', 'activity' => 'Pasar Rakyat Genusian (Ormawa)', 'facilitator' => 'Fakultas FBH', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:50-11:20', 'activity' => 'Mobilitas', 'facilitator' => 'Div. Korlap & Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:20-11:40', 'activity' => 'Pendistribusian Air Minum', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:40-12:40', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:40-13:10', 'activity' => 'Mobilitas', 'facilitator' => 'Div. Korlap & Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:10-14:40', 'activity' => 'Materi 11: Pengenalan 4 Prodi (FBH)', 'facilitator' => 'Fakultas FBH', 'action' => '', 'youtube_link' => ''], // Belum ada link
          ['time' => '13:10-14:40', 'activity' => 'Pasar Rakyat Genusian (Ormawa)', 'facilitator' => 'Fakultas FECD', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:40-14:50', 'activity' => 'Penutupan', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => '' // Tautan live hari 3
      ],
      [
        'title' => 'Hari 4: Puncak Ekspedisi',
        'date' => 'Sabtu, 13 September 2025',
        'schedule' => [
          ['time' => '04:00-05:00', 'activity' => 'Persiapan Panitia', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '05:00-06:00', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor & Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:00-07:30', 'activity' => 'Sarapan', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-09:30', 'activity' => 'Olimpiade Debat & Estafet/Olahraga', 'facilitator' => 'Div. Acara & Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:30-11:00', 'activity' => 'Materi 12: Kenusaputraan', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-materi-12'],
          ['time' => '11:00-12:00', 'activity' => 'Distribusi Makan Siang', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:00-13:00', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:00-13:30', 'activity' => 'Pembagian Hadiah', 'facilitator' => 'Div. Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:30-13:50', 'activity' => 'Persiapan Penutupan MABIM', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:50-13:55', 'activity' => 'Pembukaan Penutupan MABIM', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:55-14:10', 'activity' => 'Sambutan Rektor sekaligus menutup kegiatan', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:10-14:15', 'activity' => 'Foto Bersama', 'facilitator' => 'Div. PDD', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:15-15:15', 'activity' => 'Penutupan dan Hiburan', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => '' // Tautan hari 4
      ],
    ]
  ],
  'en' => [
    'rundown_time' => 'Time',
    'rundown_activity' => 'Activity',
    'rundown_facilitator' => 'Facilitator',
    'page_title' => 'Expedition Timeline',
    'page_subtitle' => 'Schedule, attendance, and all technical information for MABIM 2025.',
    'location_title' => 'Time Map & Coordinates',
    'attendance_title' => 'Attendance Gate',
    'rundown_title' => 'Time Travel Rundown',
    'attendance_button' => 'Fill Attendance',
    'location_button' => 'View Map',
    'labels' => ['date' => 'Day/Date', 'time' => 'Time', 'place' => 'Location'],
    'attendance_list' => [
      ['title' => 'Attendance Day 1 (Sep 8)', 'link' => ''],
      ['title' => 'Attendance Day 2 (Sep 9)', 'link' => ''],
      ['title' => 'Attendance Day 3 (Sep 10)', 'link' => ''],
      ['title' => 'Attendance Day 4 (Sep 13)', 'link' => ''],
    ],
    'location_sessions' => [
      [
        'title' => 'DAY 1-3',
        'date' => 'Monday-Wednesday / Sep 8-10, 2025',
        'time' => '07:30 AM - 04:00 PM',
        'place' => 'Nusa Putra University Campus Field',
        'gmaps_link' => 'https://maps.app.goo.gl/krMRxbcCqGXW74jQA'
      ],
      [
        'title' => 'PEAK OF MABIM',
        'date' => 'Saturday / Sep 13, 2025',
        'time' => '07:30 AM - 04:30 PM',
        'place' => 'Bumi Mandiri Center - Kadudampit',
        'gmaps_link' => 'https://maps.app.goo.gl/xE9EZwdZyEr7hvWY6'
      ]
    ],
    'rundown_days' => [
      [
        'title' => 'Day 1: The Time Gate Opens',
        'date' => 'Monday, September 8, 2025',
        'schedule' => [
          ['time' => '06:00-06:35', 'activity' => 'Committee Preparation', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:35-07:35', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentors & Security', 'action' => '#', 'youtube_link' => ''],
          ['time' => '07:35-07:55', 'activity' => 'Mineral Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:55-08:10', 'activity' => 'Participant Task Briefing', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:10-08:20', 'activity' => 'Opening Ceremony', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-08:40', 'activity' => 'Rector Welcoming Procession with Traditional Dance', 'facilitator' => 'UKM Lisensi', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:40-08:50', 'activity' => 'Indonesia Raya & Nusa Putra March', 'facilitator' => 'GHC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:50-09:00', 'activity' => 'Speech by MABIM 2025 Steering Committee Chair', 'facilitator' => 'Muhammad Rido Sinaga, SH., MH.', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:00-09:25', 'activity' => 'Rector\'s Speech & Official Opening', 'facilitator' => 'Dr. Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:25-09:40', 'activity' => 'International Student Parade', 'facilitator' => 'Ceremonial Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:40-10:00', 'activity' => 'Symbolic Pinning for Committee & Participants', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:00-10:10', 'activity' => 'Group Photo', 'facilitator' => 'PDD Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:10-10:30', 'activity' => 'Ormawa Collaboration', 'facilitator' => 'Ceremonial Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:30-11:30', 'activity' => 'Session 1: Higher Education System in the Digital Era', 'facilitator' => 'Vice Rector I (ARCI)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-1'],
          ['time' => '11:30-12:30', 'activity' => 'Session 2: Administration and Finance', 'facilitator' => 'Vice Rector II (ORF)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-2'],
          ['time' => '12:30-13:30', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:30-14:30', 'activity' => 'Session 3: Talkshow Strengthening Nationalism', 'facilitator' => 'Prof. Dr. RR. Dewi Anggraeni, S.H., M.H', 'action' => '', 'youtube_link' => ''], // Link not yet available
          ['time' => '14:30-15:30', 'activity' => 'Session 4: Talkshow Building a Creative Generation', 'facilitator' => 'Entrepreneurship Unit & Alumni', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-4'],
          ['time' => '15:30-15:40', 'activity' => 'Closing', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => 'https://www.youtube.com/live/gp5eiBCoF-k?si=aCHArDHPZ0NONqAu' // Live link for Day 1
      ],
      [
        'title' => 'Day 2: Character Building',
        'date' => 'Tuesday, September 9, 2025',
        'schedule' => [
          ['time' => '06:00-06:30', 'activity' => 'Committee Preparation', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:30-07:30', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentors & Security', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-07:50', 'activity' => 'Mineral Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:50-08:50', 'activity' => 'Session 5: Student Affairs', 'facilitator' => 'Vice Rector III (SAAC)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-5'],
          ['time' => '08:50-09:50', 'activity' => 'Session 6: Introduction to DPM', 'facilitator' => 'DPM Chair', 'action' => '', 'youtube_link' => ''], // Link not yet available
          ['time' => '09:50-10:50', 'activity' => 'Session 7: Introduction to BEM', 'facilitator' => 'BEM Chair', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-7'],
          ['time' => '10:50-11:50', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:50-13:50', 'activity' => 'Session 8: Talkshow on Health & HIV/AIDS Legal Policy', 'facilitator' => 'Rida Ista Sitepu, SH., MH. & Dr. Heri Heriyanto, M.M.', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-8'],
          ['time' => '13:50-14:05', 'activity' => 'Day 3 Information Briefing', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:05-14:15', 'activity' => 'Closing', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => '' // Live link for day 2
      ],
      [
        'title' => 'Day 3: Faculty & Ormawa Introduction',
        'date' => 'Wednesday, September 10, 2025',
        'schedule' => [
          ['time' => '06:00-07:00', 'activity' => 'Committee Preparation', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-08:00', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentors & Security', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:00-08:20', 'activity' => 'Ice Breaking', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-09:20', 'activity' => 'Participant Guidance to Rooms', 'facilitator' => 'Korlap & Security Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:20-10:50', 'activity' => 'Session 10: Introduction to 6 Study Programs (FECD)', 'facilitator' => 'FECD Faculty', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-10'],
          ['time' => '09:20-10:50', 'activity' => 'Genusian People\'s Market (Ormawa)', 'facilitator' => 'FBH Faculty', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:50-11:20', 'activity' => 'Mobility', 'facilitator' => 'Korlap & Security Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:20-11:40', 'activity' => 'Drinking Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:40-12:40', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:40-13:10', 'activity' => 'Mobility', 'facilitator' => 'Korlap & Security Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:10-14:40', 'activity' => 'Session 11: Introduction to 4 Study Programs (FBH)', 'facilitator' => 'FBH Faculty', 'action' => '', 'youtube_link' => ''], // Link not yet available
          ['time' => '13:10-14:40', 'activity' => 'Genusian People\'s Market (Ormawa)', 'facilitator' => 'FECD Faculty', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:40-14:50', 'activity' => 'Closing', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => '' // Live link for Day 3
      ],
      [
        'title' => 'Day 4: Expedition Peak',
        'date' => 'Saturday, September 13, 2025',
        'schedule' => [
          ['time' => '04:00-05:00', 'activity' => 'Committee Preparation', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '05:00-06:00', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentors & Security', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:00-07:30', 'activity' => 'Breakfast', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-09:30', 'activity' => 'Debate Olympiad & Relay/Sports', 'facilitator' => 'Event & Ceremonial Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:30-11:00', 'activity' => 'Session 12: Kenusaputraan', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=link-session-12'],
          ['time' => '11:00-12:00', 'activity' => 'Lunch Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:00-13:00', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:00-13:30', 'activity' => 'Prize Distribution', 'facilitator' => 'Ceremonial Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:30-13:50', 'activity' => 'MABIM Closing Preparation', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:50-13:55', 'activity' => 'MABIM Closing Opening', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:55-14:10', 'activity' => 'Rector\'s Speech & Official Closing', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:10-14:15', 'activity' => 'Group Photo', 'facilitator' => 'PDD Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:15-15:15', 'activity' => 'Closing and Entertainment', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => '' // Live link for Day 4
      ],
    ]
  ]
];
$text = $kegiatan_data[$lang];
?>

<section class="page-header">
  <canvas id="plexus-canvas"></canvas>
  <div class="container text-center">
    <h1 class="page-header-title"><?php echo $text['page_title']; ?></h1>
    <p class="lead text-light"><?php echo $text['page_subtitle']; ?></p>
  </div>
</section>

<section class="section animated-bg" id="lokasi">
  <div class="particle-container"></div>
  <div class="container">
    <h2 class="section-title"><?php echo $text['location_title']; ?></h2>
    <div class="row justify-content-center g-4">
      <?php foreach ($text['location_sessions'] as $session): ?>
        <div class="col-lg-5 col-md-6">
          <div class="location-card-modern">
            <h3><?php echo $session['title']; ?></h3>
            <ul>
              <li><i class="fas fa-calendar-alt"></i>
                <div><strong><?php echo $text['labels']['date']; ?>:</strong> <?php echo $session['date']; ?></div>
              </li>
              <li><i class="fas fa-clock"></i>
                <div><strong><?php echo $text['labels']['time']; ?>:</strong> <?php echo $session['time']; ?></div>
              </li>
              <li><i class="fas fa-map-marker-alt"></i>
                <div><strong><?php echo $text['labels']['place']; ?>:</strong> <?php echo $session['place']; ?></div>
              </li>
            </ul>
            <a href="<?php echo $session['gmaps_link']; ?>" target="_blank"
              class="btn btn-secondary-custom mt-auto w-100"><i
                class="fas fa-map-signs me-2"></i><?php echo $text['location_button']; ?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section absensi-section animated-bg" id="absensi">
  <div class="particle-container"></div>
  <div class="container">
    <h2 class="section-title"><?php echo $text['attendance_title']; ?></h2>
    <div class="row justify-content-center g-4">
      <?php foreach ($text['attendance_list'] as $item): ?>
        <div class="col-lg-3 col-md-6">
          <div class="attendance-card">
            <i class="fas fa-qrcode"></i>
            <h4><?php echo $item['title']; ?></h4>
            <?php if (empty($item['link'])): ?>
              <button class="btn btn-primary-custom mt-3 btn-disabled" disabled>
                <i class="fas fa-lock-alt me-2"></i><?php echo $text['attendance_button']; ?>
              </button>
            <?php else: ?>
              <a href="<?php echo $item['link']; ?>" target="_blank" class="btn btn-primary-custom mt-3">
                <i class="fas fa-qrcode me-2"></i><?php echo $text['attendance_button']; ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section animated-bg" id="rundown">
  <div class="particle-container"></div>
  <div class="container">
    <h2 class="section-title"><?php echo $text['rundown_title']; ?></h2>
    <div class="accordion" id="rundownAccordion">
      <?php foreach ($text['rundown_days'] as $index => $day): ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading<?php echo $index; ?>">
            <button class="accordion-button <?php if ($index > 0)
              echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse<?php echo $index; ?>">
              <?php echo $day['title']; ?> <span class="accordion-date"><?php echo $day['date']; ?></span>
            </button>
          </h2>
          <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php if ($index == 0)
               echo 'show'; ?>" data-bs-parent="#rundownAccordion">
            <div class="accordion-body">
              <?php if (!empty($day['live_link'])): ?>
                <div class="d-grid mb-3">
                  <a href="<?php echo $day['live_link']; ?>" target="_blank" class="btn btn-danger btn-lg">
                    <i class="fab fa-youtube me-2"></i> Tonton Live
                  </a>
                </div>
              <?php else: ?>
                <div class="d-grid mb-3">
                  <button class="btn btn-secondary btn-lg" disabled>
                    <i class="fas fa-lock me-2"></i> Live Belum Tersedia
                  </button>
                </div>
              <?php endif; ?>
              <div class="table-responsive">
                <table class="table table-rundown-compact">
                  <thead>
                    <tr>
                      <th scope="col"><?php echo $text['rundown_time']; ?></th>
                      <th scope="col"><?php echo $text['rundown_activity']; ?></th>
                      <th scope="col"><?php echo $text['rundown_facilitator']; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($day['schedule'] as $event): ?>
                      <tr>
                        <td><?php echo $event['time']; ?></td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span><?php echo $event['activity']; ?></span>
                            <?php if (strpos($event['activity'], 'Materi') !== false && !empty($event['youtube_link'])): ?>
                              <a href="<?php echo $event['youtube_link']; ?>" target="_blank" class="ms-2">
                                <i class="fas fa-play-circle" title="Tonton Video"></i>
                              </a>
                            <?php elseif (strpos($event['activity'], 'Materi') !== false && empty($event['youtube_link'])): ?>
                              <i class="fas fa-lock ms-2 text-secondary" title="Tautan belum tersedia"></i>
                            <?php endif; ?>
                          </div>
                        </td>
                        <td><?php echo $event['facilitator']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

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