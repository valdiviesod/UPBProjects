<?php include 'database.php'; ?>
<?php  
    if (!empty($_POST['propuesta']) && !empty($_POST['descripcion']) && !empty($_POST['link'])) {
      $sql = "INSERT INTO Propuesta (prop_nombre,prop_descripcion,prop_link) VALUES (:prop, :desc, :linkp)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':prop', $_POST['propuesta']);
      $stmt->bindParam(':desc', $_POST['descripcion']);
      $stmt->bindParam(':linkp', $_POST['link']);

  
      if ($stmt->execute()) {
        $var = "Propuesta registrada";
        echo "<script> alert('".$var."'); </script>";
      } else {
        $var = "Error al registrar tu propuesta";
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
    <title>Registro de Proyectos</title>
</head>

<body>
    <div class="container">
        <div class="abs-center">
            <form  method="post" enctype="multipart/form-data" class="border p-3 form">
                <h1 align="center">Agregar Propuesta</h1>
                <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Nombre</label>
                    <input type="text" name="propuesta" class="form-control"
                        placeholder="Ingrese el nombre de su propuesta" id="inputDefault">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Descripcion de la propuesta</label>
                    <textarea class="form-control" name="descripcion" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Link al video de la propuesta</label>
                    <input type="text" name="link" class="form-control"
                        placeholder="Ingrese el link a Youtube" id="inputDefault">
                </div>
                <br>
                <br>

                <div id="section-cta">
                    <div class="container">
                    <input type="submit"
                                  class="btn btn-primary" name="submit" value="Subir Propuesta">
                        <a href="coordinador.php" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
            </form>

        </div>
</body>

</html>