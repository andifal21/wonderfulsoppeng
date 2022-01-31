<?php 
use Illuminate\Support\Facades\DB;
use App\Models\Nav_model;
$site_config = DB::table('konfigurasi')->first();
$site                 = DB::table('konfigurasi')->first();
// Nav profil
$myprofil    = new Nav_model();
$nav_profil  = $myprofil->nav_profil();
$nav_layanan = $myprofil->nav_layanan();
$nav_berita  = $myprofil->nav_berita();
$nav_terjadi  = $myprofil->nav_terjadi();
$nav_materi  = $myprofil->nav_materi();
?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ asset('/') }}">{{ $site_config->namaweb }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ asset('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ asset('soppeng') }}">About</a></li>
          <li class="dropdown"><a href="#"><span>Objek Wisata</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach($nav_berita as $nav_berita) { ?>
            <li><a href="{{ asset('berita/kategori/'.$nav_berita->slug_kategori) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ Str::words($nav_berita->nama_kategori,4) }}</a></li>
            <?php } ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ asset('kontak') }}">Contact</a></li>
          <li class="nav-link scrollto">Visitors : <!-- COUNTER -->
            <?php
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'comprolaravel8';
            try{
              $DBH = new pdo("mysql:host=$host;dbname=$db",$user,$pass);
            }catch(PDOException $e){
              echo"not connected..".$e->getMessage();
            }

            //get Ip
            $ip = $_SERVER['REMOTE_ADDR'];
            //check if this exist in our data
            $sql = "SELECT ip FROM visitors WHERE ip = 'ip'";
            $Check = $DBH->prepare($sql);
            $Check->execute();
            $CheckIp = $Check->rowCount();
            if ($CheckIp==0){
              $query="INSERT INTO visitors(id,ip) VALUES(NULL, '$ip')";
              $insertIp=$DBH->prepare($query);
              $insertIp->execute();
            }
            $number=$DBH->prepare("SELECT ip FROM visitors");
            $number->execute();
            $visitors=$number->rowCount();
            echo $visitors;
            ?>
          


          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->