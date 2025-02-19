<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Tambah Tugas Baru</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form Input Task -->
                        <form action="../action/actionTambahTugas.php" method="POST">
                            <div class="mb-3">
                                <label for="namaTugas" class="form-label">Nama Tugas</label>
                                <input type="text" class="form-control" id="namaTugas" name="namaTugas" placeholder="Silahkan isikan nama tugas" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsiTugas" class="form-label">Description</label>
                                <textarea class="form-control" id="deskripsiTugas" name="deskripsiTugas" rows="3" placeholder="Silahkan isikan deskripsi tugas"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tenggatWaktu" class="form-label">Tenggat Waktu</label>
                                <input type="date" class="form-control" id="tenggatWaktu" name="tenggatWaktu">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Tambah Tugas</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="todolist.php" class="btn btn-outline-secondary">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS (Optional) -->
    <script src="../assets/js/script.js"></script>
</body>
</html>