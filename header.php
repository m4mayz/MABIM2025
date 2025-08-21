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
  <title>MABIM 2025 | Universitas Nusa Putra</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/fontawesome/all.min.css" rel="stylesheet">
  <link href="assets/css/theme-mabim2025.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/tp-logo-notext.png">
</head>

<body>
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
      <div class="container d-flex justify-content-between">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="index.php">
          <img src="assets/img/tp-logo_whitetext.png" alt="Logo MABIM 2025" class="navbar-logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link <?php echo $home; ?>"
                href="index.php"><?php echo $menu['home']; ?></a></li>
            <li class="nav-item"><a class="nav-link <?php echo $pedoman; ?>"
                href="pedoman.php"><?php echo $menu['pedoman']; ?></a></li>
            <li class="nav-item"><a class="nav-link <?php echo $atribut; ?>"
                href="atribut.php"><?php echo $menu['atribut']; ?></a></li>
            <li class="nav-item"><a class="nav-link <?php echo $kegiatan; ?>"
                href="kegiatan.php"><?php echo $menu['kegiatan']; ?></a></li>
            <li class="nav-item"><a class="nav-link <?php echo $penugasan; ?>"
                href="penugasan.php"><?php echo $menu['penugasan']; ?></a></li>
            <li class="nav-item"><a class="nav-link <?php echo $info; ?>"
                href="info.php"><?php echo $menu['informasi']; ?></a></li>
            <li class="nav-item">
              <a class="nav-link" href="https://nusaputra.ac.id/" target="_blank">
                <i class="fas fa-external-link-alt"></i> <?php echo $menu['websiteuniv']; ?>
              </a>
            </li>
          </ul>
        </div>

        <div class="lang-switcher d-flex align-items-center">
          <a href="?lang=id" class="<?php echo ($lang == 'id') ? 'active' : ''; ?>">ID</a>
          <span class="text-light mx-1">/</span>
          <a href="?lang=en" class="<?php echo ($lang == 'en') ? 'active' : ''; ?>">EN</a>
        </div>
      </div>
    </nav>