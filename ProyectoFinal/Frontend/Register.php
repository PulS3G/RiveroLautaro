<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="stylelogreg.css" rel="stylesheet">
</head>
<body>
  <video autoplay muted loop class="bg-video">
  <source src="HP4 Race Isle of Man.mp4" type="video/mp4">
</video>
<div class="overlay"></div>
  <div class="container-fluid row">
    <form method="POST" class="col-4 m-auto">
      <h1>Registrar</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuario">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave">
      </div>
      <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
      <br></br>
      <div>
        <a href="Login.php" class="btn btn-primary">Iniciar Sesion</a>
      </div>
      <?php
      include("../Backend/controladorRegistro.php");
      ?>
    </form>
  </div>
  
</body>
</html>