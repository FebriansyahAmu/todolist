<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="reg-section">
        <h4 align="center" class="mt-3">Register Akun Todo-List</h4>
            <div class="row-md-12 d-flex justify-content-center shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                
                <form method="post" action="../action/actionregister.php">
                    
                    <div class="col-md-12 mt-5 mb-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="namalengkap" />
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" />
                    </div>
            
                    <div class="col-md-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" />
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" />
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="nohp" class="form-label">No Hp</label>
                        <input type="number" class="form-control" name="nohp" />
                    </div>
      
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary">Daftar Akun</button>
                    </div>
                    <div class="mt-2">
                    <p>Sudah punya akun? <a href="../index.php">Login</a></p>
                </div>
                </form>
               
            </div>
        </div>
    </div>
</body>
</html>