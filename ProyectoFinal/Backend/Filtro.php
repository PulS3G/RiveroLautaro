<?php
require_once "Motos.php";
$moto = new Moto();
$motos = $moto->getAll();

if (isset($_POST['buscar'])) {
    $buscar = strtolower($_POST["busqueda"]);
    echo "<div class='motos-container'>";
    foreach ($motos as $m) {
        if (($buscar === "" || str_contains(strtolower($m["nombre"]),$buscar))){
            echo "
            <div class='moto-card'>
            <img src=" . $m['imagen'] . " alt=" . $m['nombre'] . ">
            <div class='moto-info'>
              <h4>" . $m['nombre'] . "</h4>
              <ul>
                <li><strong>Tipo:</strong>" .  $m['tipo'] . "</li>
                <li><strong>Cilindrada:</strong>" .  $m['cilindrada'] . "</li>
                <li><strong>Presupuesto:</strong>" .  ucfirst($m['presupuesto']) . "</li>
                <li><strong>Potencia:</strong>" .  $m['potencia'] . "</li>
                <li><strong>Combustible:</strong>" .  $m['combustible'] . "</li>
                <li><strong>Peso:</strong>" .  $m['peso'] . "kg</li>
              </ul>
            </div>
          </div>";
        }
    }
    echo "</div>";
}
$tipo = $_POST["tipo"] ?? "";
$presupuesto = $_POST["presupuesto"] ?? "";
$cil = $_POST["cilindrada"] ?? "";
$filtroActivo = isset($_POST["filterBtn"]);

if ($filtroActivo) {
    $min = 0;
    $max = PHP_INT_MAX;

    if ($cil === "0-150") { $min = 0; $max = 150; }
    elseif ($cil === "151-249") { $min = 151; $max = 249; }
    elseif ($cil === "+250") { $min = 250; $max = PHP_INT_MAX; }
}
if ($filtroActivo) {
    $motosFiltradas = [];

    foreach ($motos as $m) {
        if (($tipo === "" || strtolower($m["tipo"]) === strtolower($tipo)) &&
            ($presupuesto === "" || strtolower($m["presupuesto"]) === strtolower($presupuesto)) &&
            ($cil === "" || ($m["cilindrada"] >= $min && $m["cilindrada"] <= $max))) {
            $motosFiltradas[] = $m;
        }
    }
}
echo "<div class='motos-container'>";
    if (empty($motosFiltradas)) {
    } else {
        foreach ($motosFiltradas as $m) {
            echo "
            <div class='moto-card'>
              <img src='" . $m['imagen'] . "' alt='" . $m['nombre'] . "'>
              <div class='moto-info'>
                <h4>" . $m['nombre'] . "</h4>
                <ul>
                  <li><strong>Tipo:</strong> " . $m['tipo'] . "</li>
                  <li><strong>Cilindrada:</strong> " . $m['cilindrada'] . "</li>
                  <li><strong>Presupuesto:</strong> " . ucfirst($m['presupuesto']) . "</li>
                  <li><strong>Potencia:</strong> " . $m['potencia'] . "</li>
                  <li><strong>Combustible:</strong> " . $m['combustible'] . "</li>
                  <li><strong>Peso:</strong> " . $m['peso'] . "kg</li>
                </ul>
              </div>
            </div>";
        }
    }
    echo "</div>";
?>