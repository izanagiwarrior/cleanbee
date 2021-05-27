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

<div class="container">
    <div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4"> <br><br><br><br><br>
                <div class="card-header text-center" style="color: #000000; font-size: 25px; font-family:Arial, Helvetica, sans-serif; background-color: white;">
                    <b>SIGN IN</b>
                </div>
                <div class="card-body">
                    <form class="" action="" method="post">

                        <?php if (isset($error)) : ?>
                            <p class="text-danger">Wrong username/password</p>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="text" class="form-control col" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control col" name="password" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="ingat">
                            <label class="form-check-label" for="ingat">Remember Me</label>
                        </div>
                        <button type="submit" class="btn col" style="background-color: #66584A; color: white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" name="login">Sign in</button>
                        <p class="mt-3 text-center">Don't have an account? <a href="#" style="color: #66584A;">Register now</a></p>
                    </form>

                    
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>