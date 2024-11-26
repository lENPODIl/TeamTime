
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Marco Espinosa | Miguel Barragan">
    <meta name="description" content="Sitio MOPLAC">
    <meta name="keywords" content="HTML, CSS, java script, PHP, Bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1, user-scalable=no">
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
    <link rel="stylesheet" href="../css/inicio-de-sesion.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Satisfy&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>
<section class="d-flex flex-column align-items-center justify-content-center" style="background: url(../image/33.jpg) no-repeat; ">
    <div class="contenedor">
      <div class="formulario">
        <!-- <form class="forma"></form>
        <img class="avatar" src="/imagenes/img1.png" alt="Logo"><br> -->
        <form  action="../controlador/sesion.php" method="post" ><br>
            <h2>Iniciar Sesión.</h2>
            <div class="imput-contenedor">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="usuario" required>
                <label for="#">Usuario.</label>
            </div>

            <div class="imput-contenedor">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="contraseña" required>
                <label for="#">Contraseña.</label>
            </div>

            <div class="olvidar">
                <label for="#">
                    <a href="#">Olvidé la contraseña.</a>
                </label>
            </div>
            <button type="submit">Ingresar</button>
        </form>
      </div>
    </div>
</section>

</body>
</html>
