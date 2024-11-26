<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["edad"]) and !empty($_POST["escolaridad"]) and !empty($_POST["telefono"]) and !empty($_POST["fecha"]) and !empty($_POST["referencia"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $escolaridad=$_POST["escolaridad"];
        $telefono=$_POST["telefono"];
        $fecha=$_POST["fecha"];
        $referencia=$_POST["referencia"];

        $sql=$conexion->query("UPDATE empleados SET nombre_empleado = '$nombre',edad = '$edad', escolaridad = '$escolaridad', telefono = '$telefono', fecha = '$fecha', referencia = '$referencia' WHERE id_empleado = '$id'");
        if($sql==1){
            echo '<div class=alert alert-succes>Empleado Registrado</div>';
            header("location: ../paginas/empleados.php");
        }else{
        }
    }else{
        echo '<div class=alert alert-warning>Alguno de los campos esta vacio</div>';
    }
}
?>