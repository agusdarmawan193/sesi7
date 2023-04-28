<?php
    include("database/koneksi.php");

    function createuser($nama, $email, $user, $password){
        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$password',
            '$iduser'
        );";
        echo "DEBUG: ". $sql;
        return $stt;
    }

    function ceklogin($user, $pwd){
        global $cnn;
        $hsl["STATUS"] = false;

        $sql = "SELECT nama, usename, passkey, iduser FROM tbUSR WHERE username='$user';";

        $hs = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_row($hs);

        if($jdata > 0){
            $h = mysqli_fatch_assoc($hs);
            if($h["passkey"] == $pwd){
                $hsl["STATUS"] = true
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;
    }