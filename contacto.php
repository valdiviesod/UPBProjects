<?php

  require 'database.php';

  $sentencia = $conn->query("SELECT * from Propuesta");
  $propuestas = $sentencia->fetchAll(PDO::FETCH_OBJ);

  if (!empty($_POST['propuesta']) && !empty($_POST['email']) && !empty($_POST['mensaje']))  {
    $sql = "INSERT INTO Mensajes (mensaje_texto, mensaje_remitente, prop_id) VALUES (:mensa, :send, :prop)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':mensa', $_POST['mensaje']);
    $stmt->bindParam(':send', $_POST['email']);
    $stmt->bindParam(':prop', $_POST['propuesta']);

    if ($stmt->execute()) {
      $var = "Mensaje enviado exitosamente";
      echo "<script> alert('".$var."'); </script>";
    } else {
      $var = "Error al enviar mensaje";
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
        <form action="contacto.php" method="POST" class="border p-3 form">
          <h1 align="center">Contacta a los desarrolladores de la propuesta</h1>
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">De esta lista de propuestas con quien te quieres contactar:</label>
            <select class="form-select" id="exampleSelect1">
            <?php foreach($propuestas as $prop){ ?>
              <option><?php echo $prop->prop_nombre; ?>  ID: <?php echo $prop->prop_id; ?> </option>
            <?php } ?>
            </select>            
          </div>
          <div>
          <label for="exampleSelect1" class="form-label mt-4">Selecciona el id de la propuesta</label>
            <select class="form-select" name="propuesta" id="exampleSelect1">
            <?php foreach($propuestas as $prop){ ?>
              <option><?php echo $prop->prop_id; ?> </option>
            <?php } ?>
            </select>            
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Tu email para recibir respuesta</label>
            <input type="text" name="email" class="form-control" placeholder="Email" id="inputDefault">
          </div>
            <label for="exampleTextarea" class="form-label mt-4">Envía un mensaje</label>
            <textarea class="form-control" name="mensaje" id="exampleTextarea" rows="3"></textarea>
          </div>

          <br>
          <br>
          <div id="section-cta">
            <div class="container">
              <button type="submit" class="btn btn-primary">Contactar</button>
              <a href="main.php"  class="btn btn-secondary">Volver</a>
            </div>
          </div>
        </form>
        
    </div>
  </body>
</html>
