<?php 
      include "koneksi.php";

      $sql = "CREATE DATABASE profile";

      if($koneksi->query($sql) == TRUE){
          echo"Databe gagal di buat";         
      }else{
          echo"Database berhasil di buat";
      }
?> 