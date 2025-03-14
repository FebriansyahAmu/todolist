<?php

session_start();
include "config.php";

if($_SERVER['REQUEST_METHOD'] = 'POST'){

    $iduser = $_SESSION['id_user'];
    $idTugas = $_POST['idTugas'];
    $namaTugas = $_POST['namaTugas'];
    $deskripsiTugas = $_POST['deskripsiTugas'];
    $tenggatWaktu = $_POST['tenggatWaktu'];

    $query = "UPDATE tbl_tugas SET namaTugas = ?, deskripsiTugas = ?, tenggatWaktu = ? WHERE idTugas = ? AND id_user = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sssii", $namaTugas, $deskripsiTugas, $tenggatWaktu, $idTugas, $iduser);

    if($stmt->execute()){
        echo "<script>alert('Tugas berhasil diubah!')</script>";
        echo "<script>window.location.href = '../pages/todolist.php'</script>";
        exit;
    }else{
        echo "<script>alert('Terjadi kesalahan')</script>";
    }
}
?>