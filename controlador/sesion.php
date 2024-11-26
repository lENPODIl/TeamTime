<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","moplac");

$consulta="SELECT*FROM cuentas where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);


if($filas['Id_rol']==1){ //administrador
    
    header("location: ../paginas/seleccion.php");

}else
if($filas['Id_rol']==2){ //cliente
header("location: ../paginas/seleccionE.php");
}
else{
    echo "<script>alert('Acceso denegado'); window.location.href='../paginas/LoginMoplac.php';</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>