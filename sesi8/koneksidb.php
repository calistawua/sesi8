<?php 
// menghubungkan file konfigurasi ke koneksidb
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn){
        echo "Koneksi Sukses";
        //perhatikan spasi pada create database, contoh "CREATE DATABASE(spasi)"
        $sql1 = "CREATE DATABASE ". DBNAME;

        $hasil = mysqli_query($cnn, $sql1);

        if($hasil){
            echo "Database ". DBNAME. "berhasil dibuat";
        }else{
            echo "Database ". DBNAME. "gagal dibuat";
        }

    }else{
        echo "Koneksi Gagal<br>". mysqli_connect_error();
    }