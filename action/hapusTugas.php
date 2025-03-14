<?php

include "config.php";

if(isset($_GET['id'])){
    $idTugas = $_GET['id'];

    $query = "DELETE FROM tbl_tugas WHERE idTugas = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $idTugas);

    if($stmt->execute()){
        echo "<script>alert('Tugas berhasil dihapus')</script>";
        echo "<script>window.location.href = '../pages/todolist.php'</script>";
        exit;
    }else{
        echo "<script>alert('Terjadi kesalahan')</script>";
    }
}
?>