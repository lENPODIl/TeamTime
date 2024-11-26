<?php
include_once("../modelo/Conexion.php");
$id=$_GET['id'];

$sql = "DELETE from citas where id_cita='$id'";
$query=mysqli_query($conexion, $sql);

if($query===TRUE){
    header("location: ../paginas/citass.php");
}
?>