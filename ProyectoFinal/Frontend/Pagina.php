<?php
    session_start();
    
if (!isset($_SESSION["usuarioInicio"])) {
    session_destroy();
    header("Location: Login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Motos - Filtros</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <video autoplay muted loop class="bg-video">
    <source src="Jett Lawrence in HD Slow Motion - Pala 2022.mp4" type="video/mp4" />
  </video>
  <div class="overlay"></div>

  <nav class="navbar">
    <h1 class="logo">Monster Garage</h1>
    <a href="../Backend/Logout.php" class="logout-btn">Cerrar sesión</a>
  </nav>

  <main class="main-content">

    <h2 class="section-title">Explorá nuestras motos</h2>

    <form method="POST" class="filter-form">
      <div class="filter-group">
        <h3>Cilindrada</h3>
        
        <label><input type="radio" name="cilindrada" value=""> NONE</label>
        <label><input type="radio" name="cilindrada" value="0-150"> 0-150cc</label>
        <label><input type="radio" name="cilindrada" value="151-249"> 151-249cc</label>
        <label><input type="radio" name="cilindrada" value="+250" > +250cc</label>
      </div>

      <div class="filter-group">
        <h3>Tipo</h3>
        <label><input type="radio" name="tipo" value=""> NONE</label>
        <label><input type="radio" name="tipo" value="ciudad"> Ciudad</label>
        <label><input type="radio" name="tipo" value="todoterreno"> Todoterreno</label>
        <label><input type="radio" name="tipo" value="Deportiva"> Deportiva</label>
      </div>

      <div class="filter-group">
        <h3>Presupuesto</h3>
        <label><input type="radio" name="presupuesto" value="" > NONE</label>
        <label><input type="radio" name="presupuesto" value="bajo"> Bajo</label>
        <label><input type="radio" name="presupuesto" value="medio"> Medio</label>
        <label><input type="radio" name="presupuesto" value="alto"> Alto</label>
      </div>

      <button type="submit" name="filterBtn" class="btn-filtrar">Aplicar filtros</button>

    <form method="POST">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input name="busqueda" class="form-control me-2" type="search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit" name="buscar">Buscar</button>
          </form>
        </div>
      </nav>
    </form>
    </div>
  </main>
  <?php
  require_once "../Backend/Filtro.php";
  ?>
  </main>

</body>
</html>