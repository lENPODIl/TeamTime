<?php
session_start();

// Verificar si la sesión está iniciada
if (!isset($_SESSION['usuario'])==1) {
    // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
    header("location: ../paginas/LoginMoplac.php");
    exit();
}
?>
<!DOCTYPE html>
<html >
<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Marco Espinosa">
    <meta name="description" content="Sitio MOPLAC">
    <meta name="keywords" content="HTML, CSS, java script, PHP, Bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1, user-scalable=no">
    <!-- titulo -->
    <title>MOPLAC | Mujeres Organizadas en Pie de Lucha A.C.</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href=".../image/img1.png">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Iconos de botstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/seleccion.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Satisfy&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Barra de navegacion -->
  <span class="linea"></span>
  <nav class="navbar navbar-expand-md bg-body-tertiary navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="#">
          <img src="../image/img1.png" width="150" alt="Logo de MOPLAC">
        </a>
        <a href="citass.php" class="btn-neon">
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
          <span id="span4"></span>
          <strong style="font-size: 20px;">AGENDAR CITAS</strong>
      </a>
        <a class="navbar-brand" href="#">
          <img src="../image/imggg.png" width="150" alt="Logo de la pagina web">
        </a>
      </div>
    </div>
  </nav>
  
  <!-- Bienvenido -->

  
  <section class="container hero align-items-stretch" style="background-image: url(../image/610b5ea126e4738d3f633701d4124795-1-scaled.jpg);">
   <div class="hero-prinsipal d-flex flex-column justify-content-center align-items-center ">
     <h2>Bienvenido a :</h2><br>
     <h1>Sistema de registro <br> MOPLAC.</h1>
     <a href="../controlador/cerrarsesion.php" class="btn-neon">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      <i class="bi bi-box-arrow-in-left"></i>
      <strong style="font-size: 25px; color: blue;">CERRAR SESIÓN.</strong>
  </a>
   </div>
 </section>
 <span class="linea"></span><br>
</body>
</html>