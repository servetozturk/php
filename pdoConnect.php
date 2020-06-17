<!doctype html>
<html lang="tr-TR" >
  <head>
  <!-- www.servetozturk.com  -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Php Deneme Kursu</title>
    <link type="text/css" rel="stylesheet" href="genel.css">
    <script type="text/javascript" Language="javascript" src="genel.js"></script>
  </head>
  <body >
    <?php
        
        $HostAdresi         =    "localhost";
        $VTKullaniciAdi     =    "root";
        $VTKullaniciSifre   =    "";
        $VtAdi              =    "phpVt";

        $VTBaglantisi = new PDO("mysql:host=$HostAdresi;dbname=$VtAdi;charset=UTF8",$VTKullaniciAdi,$VTKullaniciSifre);

          // Bu alanda işlemleri yapabilrisiniz.


        $VTBaglantisi =null;
    ?>
  </body>
</html>
