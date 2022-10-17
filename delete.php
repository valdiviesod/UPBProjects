<?php
if(!isset($_GET["user_id"])) exit();
$user_id = $_GET["user_id"];
include_once "database.php";
$sentencia = $conn->prepare("DELETE FROM Usuario WHERE user_id = ?;");
$resultado = $sentencia->execute([$user_id]);
if($resultado === TRUE) {
    $var = "Usuario eliminado exitosamente";
    echo "<script> alert('".$var."'); </script>";
    header("Location: /gestionUsuario.php");
} else {
    $var = "Error al eliminar usuario";
    echo "<script> alert('".$var."'); </script>";
    header("Location: /gestionUsuario.php");
}
?>