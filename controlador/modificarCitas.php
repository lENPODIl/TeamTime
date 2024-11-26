<?php

include_once("../modelo/Conexion.php");
$id_cita=$_POST['id_cita'];
$id_medico=$_POST['id_medico'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$mayorEdad=$_POST['mayorEdad'];
$tutor=$_POST['tutor'];
$especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];

$sql = "UPDATE citas SET id_medico = '$id_medico', nombre = '$nombre', edadd = '$edad', mayor_edad = '$mayorEdad', tutor = '$tutor', especialidadd = '$especialidad', telefonoo = '$telefono', fechaa = '$fecha', descripcion = '$descripcion' WHERE id_cita = $id_cita";

if($resultado=$conexion->query($sql)){
    header("location: ../paginas/citas.php");
}
?>