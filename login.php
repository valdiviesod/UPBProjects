
<?php

session_start();

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT user_id, user_email, user_pass, tipo_id FROM Usuario WHERE user_email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if($results == false){
    $var = "Error al iniciar sesion";
      echo "<script> alert('".$var."'); </script>";
  } else{
      if(count($results) > 0 && password_verify($_POST['password'], $results['user_pass']) ) {
      $_SESSION['user_id'] = $results['user_id'];
      if ($results['tipo_id'] == 3){
      header("Location: /main.php");
      }elseif ($results['tipo_id'] == 2){
        header("Location: /coordinador.php");        
      }elseif ($results['tipo_id'] == 1){
        header("Location: /admin.php");        
      }
    }else{
      $var = "Email o contraseña incorrectos";
      echo "<script> alert('".$var."'); </script>";

    } 
  } 
}

    

?>
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
        <form action="login.php" method="POST" class="border p-3 form" id="formlogin">
          <h1 align="center">Inicia Sesión en UPB Projects</h1>
          <br />
          <small>*Recuerda que si dejas un campo nulo no se realiza el inicio de sesion</small>
          <br>
          <br>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email"  class="form-control" />
          </div>
          <br />
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input
              type="password"
              name="password"
              class="form-control"
            />
          </div>
          <br>
          <div id="section-cta">
            <div class="container">
            <input class="btn btn-primary" type="submit" value="Inicia sesion">
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