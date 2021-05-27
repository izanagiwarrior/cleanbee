<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">CleanBee</span>
  </div>
</nav>

<div class="container d-flex justify-content-center ">
    <div class="card w-50 shadow mb-5  rounded">
    
        <div class="card-header bg-white ml-5 mr-5" style="text-align: center;">
        <h3 class="card-title mt-4" style="text-align: center;">Registrasi</h3>
            </div>
    <div class="card-body ml-5 mr-5 ">

    <!--Form-->
    <form action="" method="POST">
        <div class="form-group">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Alamat E-mail" required>
        </div>
        <div class="form-group">
            <label for="inputAddress">No. Handphone</label>
            <input type="text" class="form-control" id="hp" name="nohp" placeholder="Masukkan Nomor Handphone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kata Sandi</label>
            <input type="password" class="form-control" id="pass" name="pass"  placeholder="Buat Kata Sandi">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Konfirmasi Kata Sandi">
        </div>
        
        <div class="text-center">
        <button type="submit" class="btn justify-content-center btn-primary" name="daftar">Daftar</button>
        </div>
        <p class="text-center">Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
    </div>
    </div>
    </div>
    </div>

                    
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>