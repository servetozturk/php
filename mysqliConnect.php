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
  	   $vtBaglantisi  =   new mysqli("localhost","root","");
  	   $vtBaglantisi->set_charset("UTF8");
  	   
  	if($vtBaglantisi->connect_errno){

    	  die("VT Bağlantısı yapılamadı.");
   
 	}else {

      	  echo "VT Bağlandı. <br />";

     	  $vtBaglantisi->select_db("phpVt");

      //vt işlemleri buraya
      
       };

$vtBaglantisi->close();
  	   
    ?>
  </body>
</html>
