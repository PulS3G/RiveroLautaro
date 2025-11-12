<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 0); 

ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "motoweb"; 
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

$where = [];

if (!$data) $data = $_POST;

if (!empty($data['cilindrada'])) {
    $cil = $conn->real_escape_string($data['cilindrada']);
    if ($cil === '0-150') $where[] = "cilindrada BETWEEN 0 AND 150";
    if ($cil === '151-249') $where[] = "cilindrada BETWEEN 151 AND 249";
    if ($cil === '+250') $where[] = "cilindrada >= 250";
}

if (!empty($data['tipo'])) {
    $tipo = $conn->real_escape_string($data['tipo']);
    $where[] = "tipo = '$tipo'";
}

if (!empty($data['presupuesto'])) {
    $pres = $conn->real_escape_string($data['presupuesto']);
    $where[] = "presupuesto = '$pres'";
}

$sql = "SELECT nombre, combustible, potencia, tipo, presupuesto, cilindrada, peso, ruta_imagen
 FROM motos";
if ($where) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$sql .= " LIMIT 100";

$res = $conn->query($sql);
if ($res === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Error en la consulta: ' . $conn->error]);
    $conn->close();
    exit;
}

$motos = [];
while ($row = $res->fetch_assoc()) {
    $motos[] = [
        'nombre' => $row['nombre'],
        'combustible' => $row['combustible'],
        'potencia' => $row['potencia'],
        'tipo' => $row['tipo'],
        'presupuesto' => $row['presupuesto'],
        'cilindrada' => $row['cilindrada'],
        'peso' => $row['peso'],
        'ruta_imagen' => $row['ruta_imagen']
    ];
}

ob_clean();
echo json_encode([
    "success" => !empty($motos),
    "data" => $motos
]);
exit;

echo json_encode($motos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$conn->close();
