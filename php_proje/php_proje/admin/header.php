<!doctype html>
<html lang="tr">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>php_proje</title>
 <!-- Bootstrap CSS dosyası -->
 <link rel="stylesheet" href="../content/css/bootstrap.min.css" />
 <link rel="stylesheet" href="../content/css/style.css" />
</head>
<?php
 session_start();
 if ($_SESSION["loginkey"] == "") {
 // oturum açılmamışsa login.php sayfasına git
 header("Location: admin/login.php");
 }
?>

<body class="admin">


 <!-- Menü sonu -->
 <!-- Menü - Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index.php">php_proje</a>
 </div>
 <div id="navbar" class="navbar-collapse collapse">
 <ul class="nav navbar-nav">
 <!--- tarayıcının adres satırındaki url ifadesini okur
 ve buna göre ilgili menü seçeneğini aktifleştirir -->
 <?php $aktif_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
 <li <?php echo((strpos($aktif_link, 'index') !== false) ?
'class="active"' : ''); 
?>><a href="../admin/index.php">Anasayfa</a></li>
 <li <?php echo((strpos($aktif_link, 'urun/') !== false) ?
'class="active"' : ''); 
?>><a href="../admin/urun/liste.php">Ürünler</a></li>
 <li <?php echo((strpos($aktif_link, 'kategori/') !== false) ?
'class="active"' : ''); ?>>
<a href="../admin/kategori/liste.php">Kategoriler</a></li>
<li <?php echo((strpos($aktif_link, 'kullanici/') !== false) ? 'class="active"' :
''); ?>>
<a href="../admin/kullanici/liste.php">Kullanıcılar</a></li>
 </ul>
 <ul class="nav navbar-nav navbar-right">
 <li><a href="../index.php">Oturumu kapat</a></li>
 </ul>
 </div><!--/.nav-collapse -->
 </div>
 </nav>
 <!-- Menü sonu -->
