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
        <form action="#" class="border p-3 form" id="formregistro">
          <h1 align="center">Regístrate en UPB Projects</h1>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nombres</label>
            <input type="text" id="nombre" class="form-control" placeholder="Ingrese sus nombres" id="inputDefault">
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Apellidos</label>
            <input type="text" id="apellido" class="form-control" placeholder="Ingrese sus apellidos" id="inputDefault">
          </div>
          <br>

          <p>Fecha de nacimiento</p>
          <div id="section-cta">
            <div class="container">
                
                <input type="date" id="nacimiento" name="bdate" class="btn-date"
                value="2022-08-03"
                min="1950-01-01" max="2022-08-03">
            </div>
          </div>

        
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Correo electronico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su e-mail">          
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Ingrese una contraseña">
          </div>
          <br>
          <div id="section-cta">
            <div class="container">
              <button type="submit" class="btn btn-primary">Regístrate</button>
              <br>
              <p align="center">¿Ya eres usuario de UPBProjects?</p>
            <a href="login.php"  class="btn btn-primary">Incia Sesion</a>
            <a href="index.php"  class="btn btn-secondary">Volver</a>
            </div>
          </div>
        </form>
        
    </div>

    
  </body>
</html>
