<?php
session_start();
if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'])) {
  $_SESSION['lang'] = $_GET['lang'];
}
if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = 'id';
}
$lang = $_SESSION['lang'];

// Teks Menu Navigasi
$menu_text = [
  'id' => [
    'home' => 'Home',
    'pedoman' => 'Pedoman',
    'atribut' => 'Atribut',
    'kegiatan' => 'Kegiatan',
    'penugasan' => 'Penugasan',
    'informasi' => 'Informasi',
    'websiteuniv' => 'nusaputra.ac.id'
  ],
  'en' => [
    'home' => 'Home',
    'pedoman' => 'Guideline',
    'atribut' => 'Attributes',
    'kegiatan' => 'Activities',
    'penugasan' => 'Assignments',
    'informasi' => 'Information',
    'websiteuniv' => 'nusaputra.ac.id'
  ]
];
$menu = $menu_text[$lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MABIM 2025 | Time Travelling: Unlocking the Culture</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/fontawesome/all.min.css" rel="stylesheet">
  <link href="assets/css/theme-2025.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/tp-logo-notext.png">
</head>

<body>
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid d-flex justify-content-between">

        <a class="navbar-brand" href="index.php">
          <img src="assets/img/tp-logo_text.png" alt="MABIM 2025 - Time Travelling" class="navbar-logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo $home; ?>" href="index.php">
                <i class="fas fa-home me-1"></i><?php echo $menu['home']; ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $pedoman; ?>" href="pedoman.php">
                <i class="fas fa-scroll me-1"></i><?php echo $menu['pedoman']; ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $atribut; ?>" href="atribut.php">
                <i class="fas fa-tshirt me-1"></i><?php echo $menu['atribut']; ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $kegiatan; ?>" href="kegiatan.php">
                <i class="fas fa-calendar-alt me-1"></i><?php echo $menu['kegiatan']; ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $penugasan; ?>" href="penugasan.php">
                <i class="fas fa-tasks me-1"></i><?php echo $menu['penugasan']; ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $info; ?>" href="info.php">
                <i class="fas fa-info-circle me-1"></i><?php echo $menu['informasi']; ?>
              </a>
            </li>
          </ul>
          <!-- Moved side controls here for mobile view -->
          <div class="navbar-side-controls d-lg-none mt-3">
            <a class="nav-link-external" href="https://nusaputra.ac.id/" target="_blank">
              <i class="fas fa-external-link-alt me-1"></i><?php echo $menu['websiteuniv']; ?>
            </a>
            <div class="lang-switcher">
              <a href="?lang=id" class="<?php echo ($lang == 'id') ? 'active' : ''; ?>">ID</a>
              <span class="text-primary mx-1">/</span>
              <a href="?lang=en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?>">EN</a>
            </div>
          </div>
        </div>

        <!-- Side controls for desktop view -->
        <div class="navbar-side-controls d-none d-lg-flex">
          <div class="lang-switcher">
            <a href="?lang=id" class="<?php echo ($lang == 'id') ? 'active' : ''; ?>">ID</a>
            <span class="text-primary mx-1">/</span>
            <a href="?lang=en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?>">EN</a>
          </div>
          <a class="nav-link-external" href="https://nusaputra.ac.id/" target="_blank">
            <i class="fas fa-external-link-alt me-1"></i><?php echo $menu['websiteuniv']; ?>
          </a>
        </div>
      </div>
    </nav>