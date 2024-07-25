<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://www.zarla.com/images/zarla-e-1x1-2400x2400-20211115-bbtryd3dpx898dk6yfgb.png?crop=1:1,smart&width=250&dpr=2" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <title>Inicio de Sesión</title>
  </head>
  <body>
    <div class="bg-video-container">
      <video autoplay muted loop class="bg-video">
        <source src="public/video/logo.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-4">
          <div class="login-container">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h1 class="login-heading mb-4">Iniciar Sesión</h1>

                    <!-- Sign In Form -->
                    <form action="servidor/login/logear.php" method="post">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre de usuario">
                        <label for="usuario">Nombre de usuario</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                        <label for="password">Contraseña</label>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-lg btn-purple btn-login text-uppercase fw-bold mb-2" type="submit">Entrar</button>
                        <div class="text-center">
                          <a class="small" href="registro.php">Registrate</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

