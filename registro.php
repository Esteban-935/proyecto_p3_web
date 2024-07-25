<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://www.zarla.com/images/zarla-e-1x1-2400x2400-20211115-bbtryd3dpx898dk6yfgb.png?crop=1:1,smart&width=250&dpr=2" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/registro.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <title>Registro de usuario</title>
  </head>
  <body>
    <div class="bg-video-container">
      <video autoplay muted loop class="bg-video">
        <source src="public/video/logo.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden form-transparente">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
              <form action="servidor/registro/registrar.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="myusername" required autofocus>
                  <label for="usuario">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-purple btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                </div>
                <a class="d-block text-center mt-2 small" href="index.php">¿Ya tienes cuenta?</a>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>