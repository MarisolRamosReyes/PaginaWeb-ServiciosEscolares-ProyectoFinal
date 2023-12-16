<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE student SET status = 0 WHERE idStudent=".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: Estudiantes.php");
        exit();
    } else {
        $enlace->close();
        header("Location: Estudiantes.php");
        exit();
    }
?>