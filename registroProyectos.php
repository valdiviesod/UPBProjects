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
        <form action="#" class="border p-3 form">
          <h1 align="center">Registra tu Propuesta</h1>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre de su propuesta" id="inputDefault">
          </div>
          <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Descripcion de la propuesta</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label mt-4">Agregue su propuesta en PDF</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Link</label>
            <input type="text" class="form-control" placeholder="Ingrese el link de YouTube al video de su propuesta" id="inputDefault">
          </div>
          <br>
          <br>
          <div id="section-cta">
            <div class="container">
              <button type="submit" class="btn btn-primary">Subir Propuesta</button>
            </div>
          </div>
        </form>
        
    </div>
  </body>
</html>