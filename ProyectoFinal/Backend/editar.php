<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["usuarioInicio"])) {
    header("Location: Login.php?cerrado=1");
    exit();
}
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<a class="btn btn-primary" href="../Frontend/Admin.php">Volver</a>
  <div class="container-fluid p-4">
    <div class="row">
        <form method="POST" class="col-md-6">
          <div class="mb-3">
            <h1>Editar Moto</h1>
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cilindrada</label>
            <input type="text" class="form-control" name="cilindrada">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Presupuesto</label>
            <input type="text" class="form-control" name="presupuesto">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Potencia</label>
            <input type="text" class="form-control" name="potencia">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Combustible</label>
            <input type="text" class="form-control" name="combustible">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Peso</label>
            <input type="text" class="form-control" name="peso">
          </div>
          <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
        </form>
        <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cilindrada</th>
            <th scope="col">Presupuesto</th>
            <th scope="col">Potencia</th>
            <th scope="col">Combustible</th>
            <th scope="col">Peso</th>
          </tr>
        </thead>
        <tbody>
          <?php
            require_once "Motos.php";
            $moto = new Moto();
            $motos = $moto->getAll();
            foreach ($motos as $m) {
              if ($m['id'] == $id) {
                echo "<tr>" .
                "<th scope='row'>" . $m['id'] . "</th>
                <td>" . $m['nombre'] . "</td>
                <td>" . $m['tipo'] . "</td>
                <td>" . $m['cilindrada'] . "</td>
                <td>" . $m['presupuesto'] . "</td>
                <td>" . $m['potencia'] . "</td>
                <td>" . $m['combustible'] . "</td>
                <td>" . $m['peso'] . "</td>
              </tr>";
              }
            }
          ?>
        </tbody>
      </table>
    </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php
require_once "Motos.php";
if (isset($_POST["guardar"])) {
    if (empty($_POST["nombre"]) || empty($_POST["tipo"]) ||
    empty($_POST["cilindrada"]) || empty($_POST["presupuesto"]) ||
    empty($_POST["potencia"]) || empty($_POST["combustible"]) ||
    empty($_POST["peso"])) {
        echo "Un campo esta vacio";
    }
    else {
        $moto = new Moto();
        $moto->update($id,$_POST["nombre"],$_POST["tipo"],$_POST["cilindrada"],$_POST["presupuesto"],$_POST["potencia"],$_POST["combustible"],$_POST["peso"]);
    }
}
?>