<?php
include_once "database.php";
$sentencia = $conn->query("select * from Propuesta");
$propuesta = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="main.php">UPBProjects</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="registroProyectos.php">Agrega tu propuesta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registroEstudiante.php">Registrate como estudiante</a>
                    </li>
                </ul>


                <a href="logout.php" class="btn btn-primary">Cerrar Sesion</a>


            </div>
        </div>
    </nav>

</head>

<body>
    <?php foreach($propuesta as $prop){ ?>
    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="form-group">
                <label class="col-form-label mt-4" ><span class="bolded">Nombre del Proyecto</span></label>
                <br>
                    <label class="col-form-label mt-4" for="inputDefault"><?php echo $prop->prop_nombre; ?></label>
                </div>
                <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault"><span class="bolded">Descripcion</span></label>
                <br>
                    <label class="col-form-label mt-4" for="inputDefault"><?php echo $prop->prop_descripcion; ?></label>
                    <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault"><span class="bolded">Video adjunto</span></label>
                        <iframe width="420" height="315" src="<?php echo $prop->prop_link; ?>">
                        </iframe>
                        <br>
                    </div>
                    <?php } ?>
            </form>

        </div>


</html>