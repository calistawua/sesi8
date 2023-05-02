<?php
    include_once("konfigurasi.php");

    $tbname = "tbUSER";

    $sql1 = "CREATE TABLE $tbname(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(255) NOT NULL,
        username VARCHAR(20),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Koneksi Gagal"); // bisa menggunakan or die() selain if untuk memeriksa koneksi suskses atau gagal

    $hasil = mysqli_query($cnn, $sql1);
    if($hasil){
        echo "Tabel $tbname, berhasil dibuat";
    }else{
        echo "Tabel $tbname, gagal dibuat";
    }

    mysqli_close($cnn); //untuk menutup koneksi