<?php 
    // include('../config.php');
    include('koneksi.php');

    $tbl1 = "CREATE TABLE IF NOT EXISTS tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    // $tbl2 = "CREATE TABLE IF NOT EXISTS tbMHS(
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     nama VARCHAR(255),
    //     nim VARCHAR(255),
    //     prodi VARCHAR(255),
    //     jenis_kelamin VARCHAR(255),
    //     tanggal_lahir DATE,
    //     idMHS VARCHAR(255)
    // );";



   
        $hsl = mysqli_query($cnn,$tbl1);
        if($hsl) {
            echo "Tabel $tbl1 ==> CREATED!";
        } else {
            echo "Tabel $tbl ==> HAS BEEN CREATED";
        }
    

    createDB($cnn,$tbl1);
    createDB($cnn,$tbl2);