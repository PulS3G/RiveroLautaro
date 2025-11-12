<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["usuarioInicio"])) {
    header("Location: Login.php?cerrado=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Filtrado de Motos</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <video autoplay muted loop class="bg-video">
    <source src="Jett Lawrence in HD Slow Motion - Pala 2022.mp4" type="video/mp4" />
  </video>
  <div class="overlay"></div>
  <nav class="navbar">
    <a href="Logout.php">Cerrar sesión</a>
  </nav>
  <div class="container">
    <h1>Filtrar Motos</h1>

    <form id="filtrosForm">
      <fieldset>
        <legend>Cilindrada</legend>
        <label><input type="radio" name="cilindrada" value="0-150"> 0-150 cc</label>
        <label><input type="radio" name="cilindrada" value="151-249"> 151-249 cc</label>
        <label><input type="radio" name="cilindrada" value="+250"> +250 cc</label>
      </fieldset>

      <fieldset>
        <legend>Tipo</legend>
        <label><input type="radio" name="tipo" value="ciudad"> Ciudad</label>
        <label><input type="radio" name="tipo" value="todoterreno"> Todoterreno</label>
        <label><input type="radio" name="tipo" value="deportiva"> Deportiva</label>
      </fieldset>

      <fieldset>
        <legend>Presupuesto</legend>
        <label><input type="radio" name="presupuesto" value="bajo"> Bajo</label>
        <label><input type="radio" name="presupuesto" value="medio"> Medio</label>
        <label><input type="radio" name="presupuesto" value="alto"> Alto</label>
      </fieldset>

      <button type="submit" id="filterBtn">Aplicar filtros</button>
    </form>

    <div class="motos" id="resultado"></div>
  </div>
   <script src="script.js"></script>

</body>
</html>
