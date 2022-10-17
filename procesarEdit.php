<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellido"]) || 
	!isset($_POST["nacimiento"]) || 
	!isset($_POST["email"]) ||
    !isset($_POST["password"]) ||
    !isset($_POST["user_id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "database.php";
$user_id = $_POST["user_id"];
$nombres = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$fnacimiento = $_POST["nacimiento"];
$emailu = $_POST["email"];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$passwordu = $password;


$sentencia = $conn->prepare("UPDATE Usuario SET user_nombres = ?, user_apellidos = ?, user_nacimiento = ?, user_email = ?, user_pass = ? WHERE user_id = ?;");
$resultado = $sentencia->execute([$nombres, $apellidos, $fnacimiento, $emailu, $password, $user_id]); # Pasar en el mismo orden de los ?
if($resultado === TRUE) {
    $var = "Usuario editado exitosamente";
    echo "<script> alert('".$var."'); </script>";
    header("Location: /gestionUsuario.php");
}
else {
    $var = "Error al editar usuario";
    echo "<script> alert('".$var."'); </script>";
}
?>