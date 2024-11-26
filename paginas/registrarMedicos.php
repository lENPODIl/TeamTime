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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Metadatos -->
  <meta charset="UTF-8">
  <meta name="author" content="Marco Espinosa">
  <meta name="description" content="Portafolio de desarollo web de Marco Espinosa">
  <meta name="keywords" content="HTML, CSS, java script, REACT">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- titulo -->
  <title>MOPLAC | Mujeres Organizadas en Pie de Lucha A.C.</title>
  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="../image/img1.png">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Iconos de botstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" href="../css/citas.css">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Satisfy&family=Share+Tech+Mono&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- Çcitasform -->
  <span class="linea"></span>
  <nav class="navbar navbar-expand-md bg-body-tertiary navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="#">
          <img src="../image/img1.png" width="150" alt="Logo de MOPLAC">
        </a>
        <a href="medicos.php" class="Centro-integrativo">
          <span id="span11"></span>
          <span id="span22"></span>
          <span id="span33"></span>
          <span id="span44"></span>
          <strong style="font-size: 25px;">-VOLVER A LISTA DE MEDICOS-</strong>
        </a>
        <a class="navbar-brand" href="#">
          <img src="../image/imggg.png" width="150" alt="Logo de la pagina web">
        </a>
      </div>
    </div>
  </nav>
  <span class="linea"></span><br>
  <br>
  <div class="container">
    <div class="card">
      <center><h4 class="card-header"><strong>MEDICOS | Datos de los medicos</strong></h4></center>
      <div class="card-body">
        <form method="post">
        <?php
       include "../controlador/registrarMedico.php";
       include "../modelo/Conexion.php";
        ?>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo..." required="required">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="nombre">Edad</label>
                <input type="text" class="form-control" id="nombre" name="edad" placeholder="Edad..." required="required">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="fecha">Fecha de contratacion</label>
                <input type="date" class="form-control" name="fecha" id="fecha"
                  placeholder=" ..."  required="required">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="descripcion">Telefono</label>
                <input type="text" class="form-control" id="descripcion" name="telefono"
                  placeholder="Telefono..." required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="descripcion">Cedula</label>
                <input type="text" class="form-control" id="descripcion" name="cedula"
                  placeholder="Cedula..." required="required">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="descripcion">Especialidad</label>
                <input type="text" class="form-control" id="descripcion" name="especialidad"
                  placeholder="Especialidad..." required="required">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="categoria">Disponibilidad de horario</label>
                <select class="form-control" name="horario" id="categoria" required="required">
                <option selected disabled >--Seleccione opcion--</option>  
                <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>
          </div>
          </div>
          <button type="submit" name="btnregistrar" class="btn btn-primary col-md-1" value="ok">Guardar</button>
          <button type="submit" name="btncancelar" class="btn btn-primary col-md-1" value="ok">Cancelar</button>
      </form>
    </div>
  </div>
  </div> <!-- /container --> <br><br>
  <span class="linea"></span><br>


</body>

</html>