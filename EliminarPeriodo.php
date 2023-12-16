<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE Period SET status = 0 WHERE idPeriod = ".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: Periodo.php");
        exit();
    } else {
        $enlace->close();
        header("Location: Periodo.php");
        exit();
    }
?>