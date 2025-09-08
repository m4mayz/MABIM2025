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
      ['title' => 'Absensi Hari ke-1 (8 Sep)', 'link' => 'https://forms.gle/JGzN7hChaxhVxaqt5'],
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
          ['time' => '06:35-07:35', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor dan Keamanan', 'action' => '#', 'youtube_link' => ''],
          ['time' => '07:35-07:55', 'activity' => 'Pendistribusian Air Mineral', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:55-08:10', 'activity' => 'Sosialisasi Tugas Peserta', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:10-08:20', 'activity' => 'Opening Ceremony', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-08:40', 'activity' => 'Pembukaan', 'facilitator' => 'UKM Lisensi', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:40-08:50', 'activity' => 'Indonesia Raya & Mars Nusa Putra', 'facilitator' => 'GHC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:50-09:00', 'activity' => 'Laporan warek III Bidang Kemahasiswaan', 'facilitator' => 'Muhamad Muslih, S.T., M.Kom', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:00-09:25', 'activity' => 'Sambutan Rektor sekaligus membuka kegiatan secara simbolis', 'facilitator' => 'Dr. Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:25-09:35', 'activity' => 'Penyematan simbolis SC, Panitia, dan Peserta', 'facilitator' => 'Dr. Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:35-09:50', 'activity' => 'Parade Mahasiswa Internasional', 'facilitator' => 'Div. Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:50-09:55', 'activity' => 'Penutupan Opening Ceremony', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:55-10:05', 'activity' => 'Foto Bersama', 'facilitator' => 'Div. PDD', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:05-10:25', 'activity' => 'Kolaborasi Ormawa', 'facilitator' => 'Div. Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:25-11:25', 'activity' => 'Materi 1: Sistem Perguruan Tinggi di Era Digital dan Revolusi Industri', 'facilitator' => 'Vice Rector I (ARCI)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=qa_Kj65TmVQ&feature=youtu.be'],
          ['time' => '11:25-12:25', 'activity' => 'Materi 2: Kemahasiswaan', 'facilitator' => 'Vice Rector III (SAAC)', 'action' => '', 'youtube_link' => 'https://docs.google.com/presentation/d/1PbFJeds-rdSoSp74VzFD0l_ojnLFcFc4/edit?slide=id.p1#slide=id.p1'],
          ['time' => '12:25-13:25', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:25-14:25', 'activity' => 'Materi 3: Pengenalan Badan Eksekutif Mahasiswa', 'facilitator' => 'Ketua Badan Eksekutif Mahasiswa', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:25-15:25', 'activity' => 'Materi 4: Talkshow Kewirausahaan dalam membangun Generasi Kreatif, Mandiri, dan Berdaya Saing Global', 'facilitator' => 'Amalia Hasnah & M. Ibda Alfaiza', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:25-15:35', 'activity' => 'Penutupan', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => 'https://www.youtube.com/live/Ekf4LG2DgNk?si=FrRGe2PkYNZxy4oB' // Tautan live hari 1
      ],
      [
        'title' => 'Hari 2: Penempaan Karakter',
        'date' => 'Selasa, 9 September 2025',
        'schedule' => [
          ['time' => '06:00-07:00', 'activity' => 'Persiapan Panitia', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-08:00', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor dan Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:00-08:40', 'activity' => 'Pendistribusian Air Mineral', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:40-09:40', 'activity' => 'Materi 5: Talkshow Meneguhkan Nasionalisme Generasi Muda dalam Menyongsong Indonesia Emas 2045', 'facilitator' => 'Prof. Dr. RR. Dewi Anggraeni, S.H., M.H', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:40-10:40', 'activity' => 'Materi 6: Administrasi dan Keuangan', 'facilitator' => 'Vice Rector II Operation, Resources, and Finance (ORF)', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:40-11:40', 'activity' => 'Materi 7: Pengenalan Dewan Perwakilan Mahasiswa', 'facilitator' => 'Ketua Dewan Perwakilan Mahasiswa', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:40-12:00', 'activity' => 'Sponsor Paragon (Kahf, Emina, Wardah)', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:00-13:00', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:00-15:00', 'activity' => 'Materi 8: Talkshow Kesehatan dan Kebijakan Hukum: HIV & AIDS', 'facilitator' => 'Rida Ista Sitepu, SH., MH. dan Dr. Heri Heriyanto, M.M.', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:00-15:20', 'activity' => 'Sponsor Grab', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:20-15:35', 'activity' => 'Sosialisasi Informasi Hari ke 3', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:35-15:45', 'activity' => 'Penutupan', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => 'https://www.youtube.com/live/8xdETfAFXaE' // Tautan hari 2
      ],
      [
        'title' => 'Hari 3: Pengenalan Fakultas & Ormawa',
        'date' => 'Rabu, 10 September 2025',
        'schedule' => [
          ['time' => '06:00-07:00', 'activity' => 'Persiapan Panitia', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-08:00', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor dan Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:00-08:20', 'activity' => 'Ice Breaking', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-09:20', 'activity' => 'Pengarahan Peserta ke Ruangan', 'facilitator' => 'Div. Korlap dan Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:20-10:50', 'activity' => 'Materi 9: Pengenalan 6 Prodi', 'facilitator' => 'Fakultas FECD', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:20-10:50', 'activity' => 'Pasar Rakyat Genusian (Ormawa)', 'facilitator' => 'Fakultas FBH', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:50-11:20', 'activity' => 'Mobilitas', 'facilitator' => 'Div. Korlap dan Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:20-11:40', 'activity' => 'Pendistribusian Air Minum', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:40-12:40', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:40-13:10', 'activity' => 'Mobilitas', 'facilitator' => 'Div. Korlap dan Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:10-14:40', 'activity' => 'Materi 9: Pengenalan 4 Prodi', 'facilitator' => 'Fakultas FBH', 'action' => '', 'youtube_link' => ''],
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
          ['time' => '05:00-06:00', 'activity' => 'Check In Peserta', 'facilitator' => 'Mentor dan Keamanan', 'action' => '', 'youtube_link' => ''],
          ['time' => '06:00-07:00', 'activity' => 'Pembagian Sarapan + Air Mineral', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-07:30', 'activity' => 'Sarapan', 'facilitator' => 'Div. Konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-09:30', 'activity' => 'Olimpiade Debat', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-09:30', 'activity' => 'Olimpiade Estafet/Olahraga', 'facilitator' => 'Div. Seremonial dan Hiburan', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:30-11:00', 'activity' => 'Materi 10: Kenusaputraan', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:00-12:00', 'activity' => 'Distribusi Makan Siang', 'facilitator' => 'Div konsumsi', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:00-13:00', 'activity' => 'ISHOMA', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:00-13:30', 'activity' => 'Pembagian Hadiah', 'facilitator' => 'Div. Seremonial', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:30-13:50', 'activity' => 'Persiapan penutupan MABIM', 'facilitator' => 'Div. Acara', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:50-13:55', 'activity' => 'Pembukaan Penutupan MABIM', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:55-14:10', 'activity' => 'Sambutan Rektor sekaligus menutup kegiatan secara simbolis', 'facilitator' => 'Dr.ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
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
      ['title' => 'Attendance Day 1 (Sep 8)', 'link' => 'https://forms.gle/JGzN7hChaxhVxaqt5'],
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
          ['time' => '06:35-07:35', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentor and Security', 'action' => '#', 'youtube_link' => ''],
          ['time' => '07:35-07:55', 'activity' => 'Mineral Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:55-08:10', 'activity' => 'Participant Task Briefing', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:10-08:20', 'activity' => 'Opening Ceremony', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-08:40', 'activity' => 'Opening', 'facilitator' => 'UKM Lisensi', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:40-08:50', 'activity' => 'Indonesia Raya & Nusa Putra March', 'facilitator' => 'GHC', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:50-09:00', 'activity' => 'Vice Rector III\'s Report on Student Affairs', 'facilitator' => 'Muhamad Muslih, S.T., M.Kom', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:00-09:25', 'activity' => 'Rector\'s Speech & Symbolic Opening', 'facilitator' => 'Dr. Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:25-09:35', 'activity' => 'Symbolic Pinning for SC, Committee, and Participants', 'facilitator' => 'Dr. Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:35-09:50', 'activity' => 'International Student Parade', 'facilitator' => 'Ceremonial Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:50-09:55', 'activity' => 'Closing of Opening Ceremony', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:55-10:05', 'activity' => 'Group Photo', 'facilitator' => 'PDD Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:05-10:25', 'activity' => 'Ormawa Collaboration', 'facilitator' => 'Ceremonial Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:25-11:25', 'activity' => 'Session 1: Higher Education System in the Digital Era and Industrial Revolution', 'facilitator' => 'Vice Rector I Academic, Research, Community Service, and Internationalization (ARCI)', 'action' => '', 'youtube_link' => 'https://www.youtube.com/watch?v=qa_Kj65TmVQ&feature=youtu.be'],
          ['time' => '11:25-12:25', 'activity' => 'Session 2: Student Affairs', 'facilitator' => 'Vice Rector III Student Affairs, Alumni, and Collaboration (SAAC)', 'action' => '', 'youtube_link' => 'https://docs.google.com/presentation/d/1PbFJeds-rdSoSp74VzFD0l_ojnLFcFc4/edit?slide=id.p1#slide=id.p1'],
          ['time' => '12:25-13:25', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:25-14:25', 'activity' => 'Session 3: Introduction to Student Executive Board (BEM)', 'facilitator' => 'Head of BEM', 'action' => '', 'youtube_link' => ''],
          ['time' => '14:25-15:25', 'activity' => 'Session 4: Entrepreneurship Talkshow', 'facilitator' => 'Amalia Hasnah & M. Ibda Alfaiza', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:25-15:35', 'activity' => 'Closing', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => 'https://www.youtube.com/live/Ekf4LG2DgNk?si=FrRGe2PkYNZxy4oB' // Live link for Day 1
      ],
      [
        'title' => 'Day 2: Character Building',
        'date' => 'Tuesday, September 9, 2025',
        'schedule' => [
          ['time' => '06:00-07:00', 'activity' => 'Committee Preparation', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-08:00', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentors & Security', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:00-08:40', 'activity' => 'Mineral Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:40-09:40', 'activity' => 'Session 5: Talkshow on Strengthening Youth Nationalism', 'facilitator' => 'Prof. Dr. RR. Dewi Anggraeni, S.H., M.H', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:40-10:40', 'activity' => 'Session 6: Administration and Finance', 'facilitator' => 'Vice Rector II Operation, Resources, and Finance (ORF)', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:40-11:40', 'activity' => 'Session 7: Introduction to Student Representative Council (DPM)', 'facilitator' => 'Head of DPM', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:40-12:00', 'activity' => 'Paragon Sponsor (Kahf, Emina, Wardah)', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:00-13:00', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:00-15:00', 'activity' => 'Session 8: Talkshow on Health & HIV/AIDS Legal Policy', 'facilitator' => 'Rida Ista Sitepu, SH., MH. & Dr. Heri Heriyanto, M.M.', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:00-15:20', 'activity' => 'Grab Sponsor', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:20-15:35', 'activity' => 'Day 3 Information Briefing', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '15:35-15:45', 'activity' => 'Closing', 'facilitator' => 'MC', 'action' => '', 'youtube_link' => ''],
        ],
        'live_link' => 'https://www.youtube.com/live/8xdETfAFXaE' // Live link for day 2
      ],
      [
        'title' => 'Day 3: Faculty & Ormawa Introduction',
        'date' => 'Wednesday, September 10, 2025',
        'schedule' => [
          ['time' => '06:00-07:00', 'activity' => 'Committee Preparation', 'facilitator' => 'OC', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-08:00', 'activity' => 'Participant Check-In', 'facilitator' => 'Mentors & Security', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:00-08:20', 'activity' => 'Ice Breaking', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '08:20-09:20', 'activity' => 'Participant Guidance to Rooms', 'facilitator' => 'Korlap & Security Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:20-10:50', 'activity' => 'Session 9: Introduction to 6 Study Programs (FECD)', 'facilitator' => 'FECD Faculty', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:20-10:50', 'activity' => 'Genusian People\'s Market (Ormawa)', 'facilitator' => 'FBH Faculty', 'action' => '', 'youtube_link' => ''],
          ['time' => '10:50-11:20', 'activity' => 'Mobility', 'facilitator' => 'Korlap & Security Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:20-11:40', 'activity' => 'Drinking Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '11:40-12:40', 'activity' => 'ISHOMA (Break)', 'facilitator' => '-', 'action' => '', 'youtube_link' => ''],
          ['time' => '12:40-13:10', 'activity' => 'Mobility', 'facilitator' => 'Korlap & Security Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '13:10-14:40', 'activity' => 'Session 9: Introduction to 4 Study Programs (FBH)', 'facilitator' => 'FBH Faculty', 'action' => '', 'youtube_link' => ''],
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
          ['time' => '06:00-07:00', 'activity' => 'Breakfast + Mineral Water Distribution', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:00-07:30', 'activity' => 'Breakfast', 'facilitator' => 'Consumption Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-09:30', 'activity' => 'Debate Olympiad', 'facilitator' => 'Event Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '07:30-09:30', 'activity' => 'Relay/Sports Olympiad', 'facilitator' => 'Ceremonial and Entertainment Division', 'action' => '', 'youtube_link' => ''],
          ['time' => '09:30-11:00', 'activity' => 'Session 10: Kenusaputraan', 'facilitator' => 'Dr.Ir. Kurniawan, ST. M.Si. MM', 'action' => '', 'youtube_link' => ''],
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
                          <?php
                          // Tentukan label tombol/link video
                          $video_label = ($lang == 'en') ? '[Watch Session Video]' : '[Tonton Materi Video]';

                          if (strpos($event['activity'], 'Materi 1:') !== false) {
                            echo '<a href="' . $event['youtube_link'] . '" target="_blank">' . $event['activity'] . ' <span class="badge bg-danger ms-2">' . $video_label . '</span></a>';
                          } else if (strpos($event['activity'], 'Materi 2:') !== false) {
                            echo '<a href="' . $event['youtube_link'] . '" target="_blank">' . $event['activity'] . ' <span class="badge bg-primary ms-2">[Lihat Slide]</span></a>';
                          } else {
                            echo $event['activity'];
                          }
                          ?>
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