<?php
include "ejercicio.data.php";

// Funciones principales:
function inicializarCesta() {
  if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = [];
  }
}

function realizarAccion($accion) {
  switch ($accion) {
    case "agregar":
      $productoID = $_GET["productoID"];
      agregarProductoCesta($productoID);
      break;
    case "comprar":
      deleteProductosCesta();
      break;
    case "detalles":
      $productoID = $_GET["productoID"];
      verDetalles($productoID);
      break;
    case "favorito":
      $productoID = $_GET["productoID"];
      agregarFavorito($productoID);
      break;
  }
}

// Funciones de cesta
function agregarProductoCesta($productoID) {
  $_SESSION["cesta"][] = $productoID;
}

function getProductosCesta() {
  return $_SESSION["cesta"] ?? [];
}

function deleteProductosCesta() {
  unset($_SESSION["cesta"]);
}

function calcularTotal($productosCesta, $productos) {
  $total = 0;

  foreach ($productosCesta as $productoID) {
    $total += $productos[$productoID]["precio"];
  }
  return $total;
}

// Funciones de idioma
function cambiarIdioma($idiomaSelecionado) {
  setcookie("idioma", $idiomaSelecionado);
}

function getIdiomaAlmacenado() {
  return $_COOKIE['idioma'] ?? "";
}

// Funcion detalles
function verDetalles($productoID) {
  header("Location: ejercicioDetalles.view.php?productoID=" . urlencode($productoID));
  exit;
}

// Funciones favoritos
function agregarFavorito($productoID) {
  setcookie("favorito[{$productoID}]", $productoID);
}

/////////////////////////////////////////////////////////

// Flujo del programa
session_start();
inicializarCesta();

// Recojer la accion de agregar o comprar
if (isset($_GET["accion"])) {
  $accion = $_GET["accion"];
  realizarAccion($accion);
}

if (!empty($_POST)) {
  $idiomaSelecionado = $_POST["idioma"];

  cambiarIdioma($idiomaSelecionado);
}

$productosCesta = getProductosCesta();
$total = calcularTotal($productosCesta, $productos);
$idiomaSelecionado = getIdiomaAlmacenado();

// Cargar la vista
include "ejercicio.view.php";
