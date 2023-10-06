<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
  <div class="col-md-2 position-absolute top-50 start-50 translate-middle">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar</h5>
            <form>
                <div class="mb-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                </div>
                <div class="mb-3">
                    <label for="confirmPassword">Konfirmasi Password:</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password">
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>