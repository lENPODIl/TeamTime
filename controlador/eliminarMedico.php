<?php
include "../modelo/Conexion.php";
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from medicos where id_medico=$id");

    if($sql==1){
        echo '<div class=alert alert-succes>Empleado Eliminado</div>';
        header("location: ../paginas/medicos.php");

    }else{
        echo '<div class=alert alert-danger>Error al Eliminar</div>';
    }

}
?>