<?php

$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'upbprojects';

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  debug_to_console("Base de datos funcionando");

} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>