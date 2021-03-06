<!doctype html>
<html lang="tr">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
 <title>php_proje</title>

 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <!-- Simge kütüphanesi -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/qwest/4.5.0/qwest.min.js">
 <!-- Bizim stil dosyamız -->
 <link rel="stylesheet" type="text/css" href="content/css/style.css">
 <!-- İlk önce jQuery, sonra Popper.js, sonra da Bootstrap JS -->
 <script type="text/javascript" src="content/js/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
 </script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
 </script>
 </head>
 <body>
 <?php include "header.php"; ?>
 <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-block" dataride="carousel">
 <ol class="carousel-indicators">
 <li data-target="#carouselExampleIndicators" data-slide-to="0"
class="active"></li>
 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 </ol>
 <div class="carousel-inner">
 <div class="carousel-item active">
 <img class="d-block w-100" src="content/images/slider1.jpg" width="300px" height="300px" alt="Çantalar">
 <div class="carousel-caption d-none d-md-block">
 </div>
 </div>
 <div class="carousel-item">
 <img class="d-block w-100" src="content/images/slider2.jpg" width="300px" height="300px" alt="Saatler">
 <div class="carousel-caption d-none d-md-block text-warning text-right">
 </div>
 </div>
 <div class="carousel-item">
 <img class="d-block w-100" src="content/images/slider3.jpg" width="300px" height="300px" alt="Lambalar">
 <div class="carousel-caption d-none d-md-block text-dark text-left">
 </div>
 </div>
 </div>
 <div class="container pt-4">

<div class="row pt-4 bg-light">
 <div class="col-md-4">
 <div class="row">
 <div class="col-md-4">
 <span class="fa-stack fa-3x">

 </span>
 </div>
 
 </div>
 </div>
 <div class="col-md-4">
 <div class="row">
 <div class="col-md-4">
 <span class="fa-stack fa-3x">
 
 </span>
 </div>
 
 </div>
 </div>
 <div class="col-md-4">
 <div class="row">
 <div class="col-md-4">
 <span class="fa-stack fa-3x">
 

 </span>
 </div>
 
 </div>
 </div>
</div>
 <h1 class="text-center baslik pt-4 pb-3">Yeni Ürünler</h1>
 <div class="row">
 <?php
 // veritabanı yapılandırma dosyasını dahil et
 include 'config/vtabani.php';
 // kayıt listeleme sorgusu
 $sorgu='select id, urunadi, aciklama, fiyat, resim from urunler order
by giris_tarihi desc limit 0,6';
 $stmt = $con->prepare($sorgu); // sorguyu hazırla
 $stmt->execute(); // sorguyu çalıştır
 $veri = $stmt->fetchAll(PDO::FETCH_ASSOC); // tablo verilerini oku
 foreach ($veri as $kayit) { ?>
 <div class="col-md-4 mb-4">
 <div class="card">
 <a href="urundetay.php?id= width=300px height=300px<?php echo $kayit['id']?>">
 <img class="card-img-top" src="content/images/<?php echo
$kayit['resim']?>" alt="<?php echo $kayit['urunadi']?>"height="400">
 </a>
 <div class="card-body">
 <h4 class="card-title"><?php echo $kayit['urunadi']?></h4>
 <p class="card-text"><?php echo $kayit['aciklama']?></p>
 </div>
 <div class="card-footer text-muted">
 <span class="badge badge-primary p-2 float-right"><?php echo
$kayit['fiyat']?>&#8378;</span>
 </div>
 </div>
 </div>
 <?php }
 ?>
 </div>
 </div>

 </body>
</html>