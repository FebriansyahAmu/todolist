<?php

    include "config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namaLengkap = $_POST['namalengkap'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];

        

        $query = "INSERT INTO tbl_user (email, password, NamaLengkap, Alamat, NoHp) VALUES(?,?,?,?,?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("sssss", $email, $password , $namaLengkap, $alamat, $nohp);

        if($stmt->execute()){
            echo "<script>alert('Register Akun Berhasil')</script>";
            echo "<script>window.location.href = '../index.php'</script>";
        }else{
            echo "<script>alert('Terjadi Kesalahan')</script>";
        }
        
    }
    
?>  