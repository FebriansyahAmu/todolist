<?php

session_start();
if(!$_SESSION['id_user']){
    echo '<script>window.location.href="../index.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">To-Do List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tambahTugas.php">Tambah Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Selamat Datang -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2 class="text-primary">Selamat Datang, <?php echo $_SESSION['NamaLengkap'] ?></h2>
                <p class="text-muted">Kelola tugas harian Anda dengan mudah.</p>
            </div>
        </div>
    </div>

    <!-- Daftar Tugas -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-white">
                        <h4 class="card-title mb-0">Daftar Tugas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Tugas</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Jatuh Tempo</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                     include("../action/config.php");
                                    $idUser = $_SESSION['id_user'];
                                    $query = "SELECT * FROM tbl_tugas WHERE id_user = ?";
                                    $stmt = $connection->prepare($query);

                                    $stmt->bind_param("i", $idUser);
                                    $stmt->execute();
                                    
                                    $result = $stmt->get_result();
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<tr>';
                                        echo '<td>' . $row['idTugas'] . '</td>';
                                        echo '<td>' . $row['namaTugas'] . '</td>';
                                        echo '<td>' . $row['deskripsiTugas'] . '</td>';
                                        $badgeClass = ($row['status'] == 'Selesai') ? 'success' : 'warning';
                                        echo '<td><span class="badge bg-' . $badgeClass . '">' . $row['status'] . '</span></td>';
                                        echo '<td>' . $row['tenggatWaktu'] . '</td>';
                                        echo '
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <a href="../action/hapusTugas.php?id='. $row['idTugas'] .'" class="btn btn-sm btn-danger">Hapus</a>
                                                    <a href="editTugas.php?id='. $row['idTugas'] .'" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="../action/selesaiTugas.php?id='. $row['idTugas'] .'" class="btn btn-sm btn-success">Selesai</a>
                                                </div>
                                            </td>
                                        ';
                                        echo '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS (Optional) -->
    <script src="assets/js/script.js"></script>
</body>
</html>