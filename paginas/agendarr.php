<?php
session_start();

// Verificar si la sesión está iniciada
if (!isset($_SESSION['usuario']) == 1) {
  // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
  header("location: ../paginas/LoginMoplac.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Iconos de botstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" href="../css/citas.css">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Satisfy&family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <!-- Citas -->
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
        <a href="citass.php" class="Centro-integrativo">
          <span id="span11"></span>
          <span id="span22"></span>
          <span id="span33"></span>
          <span id="span44"></span>
          <strong style="font-size: 25px;">-VOLVER A LISTA DE CITADOS-</strong>
        </a>
        <a class="navbar-brand" href="#">
          <img src="../image/imggg.png" width="150" alt="Logo de la pagina web">
        </a>
      </div>
    </div>
  </nav>
  <span class="linea"></span><br>
  <br>

  <!-- formulario de pasientes -->

  <div class="container">
    <div class="card">
      <center>
        <h4 class="card-header"><strong>CITAS | Datos del paciente</strong></h4>
      </center>
      <div class="card-body">
        <form action="../controlador/registrarCitasEmp.php" method="post">
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
                <label for="categoria">¿Cuenta con mayoria de edad?</label>
                <select class="form-control" name="mayorEdad" id="categoria">
                <option selected disabled>--Seleccione opcion--</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="descripcion">Nombre del tutor</label>
                <input type="text" class="form-control" id="descripcion" name="tutor" placeholder="Nombre del tutor..." required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="categoria">Medico</label>
                <select class="form-control" name="medico" id="categoria">
                <option selected disabled>--Seleccione Medico--</option>
                <?php
                include "../modelo/Conexion.php";
                $sql=$conexion->query("SELECT * fROM medicos");
                while($datos=$sql->fetch_assoc()){
                  echo "<option value='" . $datos['id_medico'] . "'>" . $datos['nombre_medico'] . "</option>";
                }
                ?>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="categoria">Especialidad</label>
                <select class="form-control" name="especialidad" id="categoria">
                <option selected disabled>--Seleccione Especialidad--</option>
                  <option value="Psicologia">Psicologia.</option>
                  <option value="Asesoria juridica">Asesoria juridica.</option>
                  <option value="Nutrición">Nutrición.</option>
                  <option value="Consultas medicas">Consultas medicas.</option>
                  <option value="Homeopatia y auriculoterapia">Homeopatia y auriculoterapia.</option>
                  <option value="Cursos y talleres">Cursos y talleres.</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="fecha">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="fecha" placeholder="Telefono" required="required">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="fecha">Fecha y hora de la cita</label>
                <input type="datetime-local" class="form-control" name="fecha" id="fecha" placeholder="Fecha  y hora de la cita..." required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="fecha">Descripcion del motivo de la cita</label>
                <input type="text" class="form-control" name="descripcion" id="fecha" placeholder="Descripcion" required="required">
              </div>
            </div>
          </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="submit" class="btn btn-primary"><a href="../paginas/citas.php" style="color:white; text-decoration:none;">Cancelar</a></button>
    </form>
  </div>
  </div>
  </div> <!-- /container --> <br><br>
  <span class="linea"></span>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>