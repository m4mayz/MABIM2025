<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MABIM Universitas Nusa Putra 2023</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/newImage/Logo2-Mabim2023.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/newImage/Logo2-Mabim2023.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/newImage/Logo2-Mabim2023.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/newImage/Logo2-Mabim2023.png">
    <link rel="manifest" href="assets/img/newImage/Logo2-Mabim2023.png">
    <meta name="msapplication-TileImage" content="assets/img/newImage/Logo2-Mabim2023.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spirax&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DT+Nouveau&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DT+Nouveau+Regular&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    
    <style>
    .floatwa {
    position:fixed;
    bottom:3%;
    right: 3%;
    width:auto;
    z-index:1000;
    padding:2px;
    margin:auto;
    text-align:center;
    float:none;
    }
    .tombolwa {
    width:90%;
    padding:4px;
    text-align:center;
    margin:0;
    border-radius: 5px;
    margin:auto;
    text-align:center;
    float:none;
    }
    .floatwa a{
    color:white;
    }
    
    blink {
  animation: 2s linear infinite condemned_blink_effect;
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
    </style>

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/newImage/Logo-Mabim2023.png" height="52px" style="margin-top: -12px; margin-right: -22px" alt="logo"/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link <?php echo $home ?>" aria-current="page" href="index.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Home</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $pedoman ?>" aria-current="page" href="pedoman.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Pedoman</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $atribut?>" aria-current="page" href="atribut.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Atribut</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $kegiatan ?>" aria-current="page" href="kegiatan.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Kegiatan</a></li>
              <li class="nav-item"><a class="nav-link <?php echo $penugasan ?>" aria-current="page" href="penugasan.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Penugasan</a></li>
              <!--<li class="nav-item"><a class="nav-link <?php echo $absensi ?>" aria-current="page" href="absensi.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Absensi</a></li>-->
              <li class="nav-item"><a class="nav-link <?php echo $info ?>" aria-current="page" href="info.php" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Informasi &nbsp</a></li>
              
              <!--Menu untuk Pilihan Bahasa-->
              <div id="google_translate_element" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;"></div>
    
              <script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
              }
              </script>
              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
              <!--<li class="nav-item dropdown">-->
              <!--  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-family: 'Roboto Slab', serif; font-size: 12pt; color: #CC4848;">Subtitle</a>-->
              <!--  <ul class="dropdown-menu">-->
              <!--    <li><a class="dropdown-item" href="/2022/index.php" style="font-family: 'Roboto Slab', serif; font-size: 11pt">Mabim 2022</a></li>-->
              <!--  </ul>-->
              <!--</li>-->
              
            </ul>
          </div>
        </div>
      </nav>