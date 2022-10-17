<?php
if(!isset($_GET["user_id"])) exit();
$user_id = $_GET["user_id"];
include_once "database.php";
$sentencia = $conn->prepare("SELECT * FROM Usuario WHERE user_id = ?;");
$sentencia->execute([$user_id]);
$user_id = $sentencia->fetch(PDO::FETCH_OBJ);
if($user_id === FALSE){
	#No existe
	$var = "No existe persona con ese ID";
  echo "<script> alert('".$var."'); </script>";
	exit();
}

#Si la user$user existe, se ejecuta esta parte del código
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <div class="container">
      <div class="abs-center">
        <form action="procesarEdit.php" method="POST" class="border p-3 form">
          <h1 align="center">Editar Usuario</h1>    
          <div class="form-group">

          <label class="col-form-label mt-4" for="inputDefault">ID Usuario</label>
          <br>
          <input type="text" name="user_id" class="form-control" id="user_id">
       

            <label class="col-form-label mt-4" for="inputDefault">Nombres</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $user_id->user_nombres; ?>" >
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Apellidos</label>
            <input type="text"  name="apellido" class="form-control" value="<?php echo $user_id->user_apellidos; ?>" >
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
            <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" value="<?php echo $user_id->user_email; ?>">          
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Contraseña</label>
            <input type="password" class="form-control" name="password" value="<?php echo $user_id->user_pass; ?>">
          </div>
          <br>
          <div id="section-cta">
            <div class="container">
            <input class="btn btn-primary" type="submit" value="Editar Usuario">
              <br>
            <a href="gestionUsuario.php"  class="btn btn-secondary">Volver</a>
            </div>
          </div>
        </form>
        
    </div>

    
  </body>
</html>
