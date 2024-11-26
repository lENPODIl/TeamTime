<?php
include "../modelo/Conexion.php";
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from empleados where id_empleado=$id");

    if($sql==1){
        echo '<div class=alert alert-succes>Empleado Eliminado</div>';
        header("location: ../paginas/empleados.php");

    }else{
        echo '<div class=alert alert-danger>Error al Eliminar</div>';
    }

}
?>