<?php
include "../modelo/Conexion.php";

        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $mayorEdad=$_POST["mayorEdad"];
        $tutor=$_POST["tutor"];
        $medico=$_POST["medico"];
        $especialidad=$_POST["especialidad"];
        $telefono=$_POST["telefono"];
        $fecha=$_POST["fecha"];
        $descripcion=$_POST["descripcion"];

        $sql= "INSERT INTO citas (nombre, edadd, mayor_edad, tutor, nombre_medico, especialidadd, telefonoo, fechaa, descripcion,  id_medico ) 
        VALUES ('$nombre', $edad, '$mayorEdad', '$tutor', '$medico', '$especialidad', '$telefono', '$fecha', '$descripcion', '$medico')";

        $resultado = mysqli_query($conexion, $sql);
        if($resultado===TRUE){
        header("location: ../paginas/citass.php");
        }else{
            echo "datos no insertados";
        }
      
?>