<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CRUD</title>
</head>
<body>
      <div  eblclass="container">    
        <a href="/create" class="btn btn-outline-primary mt-4">Administrar propuestas</a>   
        <a href="/create" class="btn btn-outline-primary mt-4">Agregar usuarios</a>    
        <a href="/" class="btn btn-outline-primary mt-4">Volver a la pagina principal</a>    
      <table class="table table-bordered table-striped text-center mt-4">
        <thead>
          <tr class="bg-primary text-white">
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>            
            <th scope="col">Fecha de nacimiento</th>   
            <th scope="col">E-mail</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Universidad</th>
            <th scope="col">Facultad</th>
            <th scope="col">Semestre</th>
            <th scope="col">Promedio</th>
          </tr>
        </thead>
        <tbody>
          <% results.forEach((user)=>{ %>
            <tr>  
                <td><%= user.id %></td>  
                <td><%= user.nombre %></td>
                <td><%= user.apellido %></td>
                <td><%= user.nacimiento %></td>
                <td><%= user.email %></td>
                <td><%= user.passwd %></td>
                <td><%= user.relleno %></td>
                <td><%= user.relleno %></td>
                <td><%= user.relleno %></td>
                <td><%= user.relleno %></td>
                <td><%= user.relleno %></td>    
                <td>
                  <a href="/edit/<%= user.id %>" class="btn btn-outline-info"><i class='bx bxs-edit'></i></a>
                  <a href="/delete/<%= user.id %>" class="btn btn-outline-danger"><i class='bx bxs-trash-alt'></i></a>  
                  <a href="/delete/<%= user.id %>" class="btn btn-outline-danger"><i class='bx bxs-flag'></i></a>                   
                </td>
            </tr>                                   
         <% }) %>
        </tbody>
      </table>
      </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>    
</body>
</html>