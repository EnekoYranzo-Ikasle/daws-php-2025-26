<?php
include "server.data.php";

function realizarAccion($accion) {
  switch ($accion) {
    case "alta":
      addUser();
      break;
    case "baja":
      deleteUser();
      break;
    case "detalles":
      showDetails();
      break;
    case "deleteAll":
      deleteAll();
      break;
  }
}

function addUser() {
  
}

function deleteUser() {
}

function showDetails() {
}

function deleteAll() {
}

/////////////////////////////////////////////////////////

if (isset($_GET["accion"])) {
  $accion = $_GET["accion"];
  realizarAccion($accion);
}

$empleados = getEmployees();


include "Views/index.view.php";
