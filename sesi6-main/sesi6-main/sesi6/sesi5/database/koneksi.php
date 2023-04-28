<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql gagal");
   
/*
   if($cnn){
        echo "koneksi ke DBMS Mysql sukses";
   }else{
        echo "koneksi ke DBMS Mysql gagal";
   }
   
   mysqli_close($cnn);
*/