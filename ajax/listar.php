<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../controller/AlumnoController.php';   

$db = new Database();
$con = $db->conectar();

$controlador = 
new AlumnoController($con);

$resultado =
$controlador->listar();

$datos = [];

while($fila = $resultado->fetch_assoc()) {

    $datos[] = $fila;
}

header('Content-Type: application/json');

echo json_encode($datos);
?>