<?php
$server = '127.0.1.1';
$username = 'root';
$password = '';
$database = 'upbprojects';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>
