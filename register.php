<?php

  require 'database.php';


  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO Usuario (user_nombres, user_apellidos, user_nacimiento, user_email, user_pass) VALUES (:name, :last, :bdate, :correo, :pass)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['nombre']);
    $stmt->bindParam(':last', $_POST['apellido']);
    $stmt->bindParam(':bdate', $_POST['nacimiento']);
    $stmt->bindParam(':correo', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':pass', $password);

    if ($stmt->execute()) {
      $var = "Usuario creado exitosamente";
      echo "<script> alert('".$var."'); </script>";
    } else {
      $var = "Error al crear tu usuario";
      echo "<script> alert('".$var."'); </script>";
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
    <title>Registro</title>
  </head>
  <body>


    <div class="container">
      <div class="abs-center">
        <form action="register.php" method="POST" class="border p-3 form">
          <h1 align="center">Regístrate en UPB Projects</h1>
          <br>
          <small>*Recuerda que si dejas un campo nulo no se realiza el registro</small>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nombres</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese sus nombres" >
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Apellidos</label>
            <input type="text"  name="apellido" class="form-control" placeholder="Ingrese sus apellidos" >
          </div>
          <br>

          <p>Fecha de nacimiento</p>
          <div id="section-cta">
            <div class="container">
                
                <input type="date" name="nacimiento" id="nacimiento"  class="btn-date"
                value="2022-08-03"
                min="1950-01-01" max="2022-08-03">
            </div>
          </div>

        
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Correo electronico</label>
            <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Ingrese su e-mail">          
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Contraseña</label>
            <input type="password" class="form-control" name="password"  placeholder="Ingrese una contraseña">
          </div>
          <br>
          <div id="section-cta">
            <div class="container">
            <input class="btn btn-primary" type="submit" value="Registrate">
              <br>
              <p align="center">¿Ya eres usuario de UPBProjects?</p>
            <a href="login.php"  class=">">Inicia Sesion</a>
            <a href="index.php"  class="btn btn-secondary">Volver</a>
            </div>
          </div>
        </form>
        
    </div>

    
  </body>
</html>
