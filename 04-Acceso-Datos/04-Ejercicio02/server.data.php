<?php
include_once "dbConnetion.php";

try {
  $dbh = connect($host, $dbname, $usuario, $contrasena);

  function getEmployees() {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM empleados');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return $stmt->fetchAll();
  }
} catch (PDOException $e) {
  echo "Error en la conexión o consulta: " . $e->getMessage();
}
