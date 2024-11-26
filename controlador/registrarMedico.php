<?php
include "../modelo/Conexion.php";
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["edad"]) and !empty($_POST["fecha"]) and !empty($_POST["telefono"]) and !empty($_POST["cedula"])  and !empty($_POST["especialidad"])  and !empty($_POST["horario"])){
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $fecha=$_POST["fecha"];
        $telefono=$_POST["telefono"];
        $cedula=$_POST["cedula"];
        $especialidad=$_POST["especialidad"];
        $horario=$_POST["horario"];

        $sql=$conexion->query("INSERT into medicos(nombre_medico,edad,fecha,telefono,cedula,especialidad,disponibilidad) 
        values('$nombre','$edad','$fecha','$telefono','$cedula','$especialidad', '$horario')");
        if($sql==1){
            echo '<div class=alert alert-succes>Empleado Registrado</div>';
            header("location: ../paginas/medicos.php");
        }else{
        }
    }else{
        echo '<div class=alert alert-warning>Alguno de los campos esta vacio</div>';
    }
}


if(!empty($_POST["btncancelar"])){
    header("location: ../paginas/medicos.php");
}else{
}
?>