<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE ExternalScholarshipDetails SET status = 0 WHERE idExternalScholarshipDetails =".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecariosExternos.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecariosExternos.php");
        exit();
    }
?>