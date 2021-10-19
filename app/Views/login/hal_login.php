<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Asul&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <title><?= $title; ?></title>
</head>

<body class="bg-login">

  <div class="bg"></div>

  <section class="login">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-lg">
          <h1>LOGIN</h1>
          <h3>PT. Andalan Darma Mulia</h3>
        </div>
      </div>

      <div class="row-lg">
        <div class="col-lg">
          <form action="" method="POST" class="formulir">
            <div class="row g-3 align-items-center mb-4 d-flex justify-content-center">
              <div class="col-lg-11">
                <i class="fa fa-user icon"></i>
                <input type="text" id="inputUsername" class="form-control" aria-describedby="username" placeholder="Username">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3 d-flex justify-content-center">
              <div class="col-lg-11">
                <i class="fa fa-lock icon"></i>
                <input type="password" id="inputPassword" class="form-control" aria-describedby="password" placeholder="Password">
              </div>
            </div>

            <div class="row mb-5 d-flex justify-content-center">
              <div class="col-lg-11">
                <p>Pastikan username dan password terisi dengan benar</p>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-auto">
                <!-- <button type="submit" class="btn btn-primary">Login</button> -->
                <a href="<?= base_url('/customer/home'); ?>" class="btn btn-primary">Login</a>
              </div>
            </div>
            <div class="row justify-content-center mt-3">
              <div class="col-auto">
                <a href="<?= base_url('/admin/dashboard'); ?>" class="btn btn-primary">Login Admin</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>