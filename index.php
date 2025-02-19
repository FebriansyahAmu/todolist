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
        <div class="wrapper d-flex justify-content-center align-items-center">
            <div class="form-style shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="title mb-3" align="center"><span>Login Website TO-DO List</span></div>
                <div class="row-md 12 mx-auto d-flex justify-content-center align-items-center">
    
                    <form method="POST" action="action/actionlogin.php">
                        <div class="col mb-3">
                             <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="email" />
                        </div>

                        <div class="col mb-3">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" placeholder="password"/>
                        </div>

                        Belum punya akun? <a href="pages/register.php">Daftar Sekarang</a>
                        <div class="col d-flex justify-content-center align-items-center">
                            <input class="btn btn-primary" type="submit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
</body>
</html>