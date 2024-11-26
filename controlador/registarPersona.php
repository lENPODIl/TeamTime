<?php
include "../modelo/Conexion.php";
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["edad"]) and !empty($_POST["escolaridad"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha"]) and !empty($_POST["referencia"])){
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $escolaridad=$_POST["escolaridad"];
        $telefono=$_POST["telefono"];
        $fecha=$_POST["fecha"];
        $referencia=$_POST["referencia"];

        $sql=$conexion->query("INSERT into empleados(nombre_empleado,edad,escolaridad,telefono,fecha,referencia) 
        values('$nombre','$edad','$escolaridad','$telefono','$fecha','$referencia')");
        if($sql==1){
            echo '<div class=alert alert-succes>Empleado Registrado</div>';
            header("location: ../paginas/empleados.php");
        }else{
        }
    }else{
        echo '<div class=alert alert-warning>Alguno de los campos esta vacio</div>';
    }
}


if(!empty($_POST["btncancelar"])){
    header("location: ../paginas/empleados.php");
}else{
}
?>