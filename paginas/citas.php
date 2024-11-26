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
<html lang="en">

<head>
  <!-- Metadatos -->
  <meta charset="UTF-8">
  <meta name="author" content="Marco Espinosa Miguel Angel Gutierrez Barragan">
  <meta name="description" content="Agenda de citas">
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
  <!-- citas -->
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
        <a href="seleccion.php" class="btn-neon">
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
          <span id="span4"></span>
          <strong style="font-size: 25px;">VOLVER A INICIO</strong>
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
      <center>
        <h4 class="card-header"><strong>Lista de citados</strong></h4>
      </center>
      <div class="card-body">
        <a class="btn btn-primary" href="agendar.php" title="Crear nueva Oferta de Trabajo" role="button"><i class="fas fa-file" aria-hidden="true"></i> Nueva</a>
        <hr>
        <table class="table table-hover">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">mayor de edad</th>
              <th scope="col">Tutor</th>
              <th scope="col">Telefono</th>
              <th scope="col">medico</th>
              <th scope="col">Especialidad</th>
              <th scope="col">Fecha y hora</th>
              <th scope="col">Descripción</th>
              <th scope="col">Operaciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "../modelo/Conexion.php";
            $sql = $conexion->query("SELECT
                * FROM citas
                INNER JOIN medicos ON citas.id_medico=medicos.id_medico");
            while ($datos = $sql->fetch_assoc()) { ?>
              <tr>
                <td hidden><?= $datos['id_cita'] ?></td>
                <td><?php echo $datos['nombre'] ?></td>
                <td><?php echo $datos['edadd'] ?></td>
                <td><?php echo $datos['mayor_edad'] ?></td>
                <td><?php echo $datos['tutor'] ?></td>
                <td><?php echo $datos['telefonoo'] ?></td>
                <td><?php echo $datos['nombre_medico'] ?></td>
                <td><?php echo $datos['especialidadd'] ?></td>
                <td><?php $fecha_cadena = $datos['fechaa'];

                  // Convertir la cadena de fecha a una marca de tiempo Unix
                  $fecha_timestamp = strtotime($fecha_cadena);

                  // Verificar si la conversión fue exitosa antes de continuar
                  if ($fecha_timestamp !== false) {
                      // Establecer la zona horaria a México
                      date_default_timezone_set('America/Mexico_City');

                      // Formatear la fecha y hora en el formato deseado
                      $fecha_formateada = date('d-m-Y h:i A', $fecha_timestamp);

                      // Imprimir la fecha formateada
                      echo $fecha_formateada;
                  }?></td>
                <td><?php echo $datos['descripcion'] ?></td>
                <td>
                  <a href="../paginas/modificarCitas.php?id=<?php echo $datos['id_cita']?>" class="btn btn-success btn-sm btn-success" role="button" title="Editar el registro."><i class="bi bi-pencil-square"></i></a>
                  <a href="../controlador/eliminarCitas.php?id=<?php echo $datos['id_cita']?>" class="btn btn-success btn-sm confirmar btn-danger" role="button" title="Eliminar el registro."><i class="bi bi-trash-fill"></i></a>
              </tr>
            <?php }
            ?>
        

          </tbody>
        </table>

      </div>
    </div>
  </div> <!-- /container --> <br><br>
  <span class="linea"></span><br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>