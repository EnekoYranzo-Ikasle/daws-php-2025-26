<?php
$host = "localhost";
$dbname = "db_ejercicio02";
$usuario = "root";
$contrasena = "";

function connect($host, $dbname, $user, $pass) {
  try {
    # MySQL
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Activar el modo de errores de PDO (lanza excepciones si algo falla)
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
