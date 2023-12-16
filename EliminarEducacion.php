<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE Education SET status = 0 WHERE idEducation=".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: Educacion.php");
        exit();
    } else {
        $enlace->close();
        header("Location: Educacion.php");
        exit();
    }
?>