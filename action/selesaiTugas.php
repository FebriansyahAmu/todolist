<?php

include "config.php";

if(isset($_GET['id'])){
    $idTugas = $_GET['id'];
    $status = "selesai";
 
    $query = "UPDATE tbl_tugas SET status = ? WHERE idTugas = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("si", $status, $idTugas);

    if($stmt->execute()){
        echo "<script>alert('Tugas diselesaikan')</script>";
        echo "<script>window.location.href = '../pages/todolist.php'</script>";
    }else{
        echo "<script>alert('Terjadi Kesalahan')</script>";
    }

}
?>