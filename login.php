<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Inicio Sesión</title>
  </head>
  <body>
    <div class="container">
      <div class="abs-center">
        <form action="#" class="border p-3 form" id="formlogin">
          <h1 align="center">Inicia Sesión en UPB Projects</h1>
          <br />
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" />
          </div>
          <br />
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
            />
          </div>
          <br>
          <div id="section-cta">
            <div class="container">
              <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
              <br>
              <p align="center">¿No tienes una cuenta?</p>
            <a href="register.php"  class="btn btn-primary">Regístrate</a>
            <a href="index.php"  class="btn btn-secondary">Volver</a>
            </div>
          </div>
        </form>
        
    </div>
  </body>
</html>
