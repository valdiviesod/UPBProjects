<?php

  require 'database.php';


  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO Estudiante (user_nombres, user_apellidos, user_nacimiento, user_email, user_pass) VALUES (:name, :last, :bdate, :correo, :pass)";
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
    <title>Registro como estudiante</title>
  </head>
  <body>
    <div class="container">
      <div class="abs-center">
        <form action="#" class="border p-3 form">
          <p align="center">Recuerda que es requisito registrarte como estudiante para entrar a un grupo</p>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Identificacion</label>
            <input type="text" class="form-control" placeholder="Ingrese su ID asignado por la universidad" id="inputDefault">
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Universidad</label>
            <input type="text" class="form-control" placeholder="Ingrese su universidad" id="inputDefault">
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Facultad</label>
            <input type="text" class="form-control" placeholder="Ingrese la facultad a la que pertenece" id="inputDefault">
          </div>

          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Semestre aprobado</label>
            <select class="form-select" id="exampleSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
            
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Promedio </label>
            <input type="text" class="form-control" placeholder="Ingrese su promedio ponderado" id="inputDefault">
          </div>

          <br>
          <br>
          <div id="section-cta">
            <div class="container">
              <button type="submit" class="btn btn-primary">Regístrate como estudiante</button>
              <a href="main.php"  class="btn btn-secondary">Volver</a>
            </div>
          </div>
        </form>
        
    </div>
  </body>
</html>
