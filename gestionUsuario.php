<?php
include_once "database.php";
$sentencia = $conn->query("select * from Usuario");
$users = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="bootstrap.min.css">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Usuarios</title>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>
    <br>
<a href="addUser.php" class="btn btn-primary">Añadir usuario</a>
<br>
<br>    
	<table class="table"> 
		<thead class="thead-dark">  
			<tr class="table-dark">
				<th >ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Nacimiento</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Tipo</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<!--
				Atención aquí, sólo esto cambiará
				Pd: no ignores las llaves de inicio y cierre {}
			-->
			<?php foreach($users as $user){ ?>
			<tr>
				<td><?php echo $user->user_id; ?></td>
				<td><?php echo $user->user_nombres;?></td>
				<td><?php echo $user->user_apellidos; ?></td>
				<td><?php echo $user->user_nacimiento; ?></td>
                <td><?php echo $user->user_email;?></td>
                <td><?php echo $user->user_pass; ?></td>
                <td><?php echo $user->tipo_id; ?></td>
				<td><a href="<?php echo "editUser.php?user_id=" . $user->user_id?>">Editar</a></td>
				<td><a href="<?php echo "delete.php?user_id=" . $user->user_id?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>