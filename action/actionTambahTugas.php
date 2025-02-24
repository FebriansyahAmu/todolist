<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaTugas = $_POST["namaTugas"];
    $deskripsiTugas = $_POST["deskripsiTugas"];
    $tenggatWaktu = $_POST["tenggatWaktu"];
    $id_user = $_SESSION['id_user'];
    $status = "pending";
    

    $query = "INSERT INTO tbl_tugas (id_user, namaTugas, deskripsiTugas, tenggatWaktu, status) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("issss", $id_user, $namaTugas, $deskripsiTugas, $tenggatWaktu, $status);
    
    if ($stmt->execute()) {
        header("Location: ../pages/tambahTugas.php");
        exit;
    } else {
        echo "Terjadi kesalahan saat menambahkan like: " . $connection->error;
    }
} else {
    echo "Foto Tidak ditemukan";
}

?>