<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 0); 

ob_start();
$raw = file_get_contents("php://input");
$data = json_decode($raw, true);

if (!$data) {
    $data = $_POST;
}

$cilindrada = $data['cilindrada'] ?? null;
$tipo = $data['tipo'] ?? null;
$presupuesto = $data['presupuesto'] ?? null;

include "Filtros.php";

echo json_encode([
    "success" => !empty($motos),
    "data"    => $motos
]);
?>