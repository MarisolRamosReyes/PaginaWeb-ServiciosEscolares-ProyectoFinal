<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE InternalScholarshipDetails SET status = 0 WHERE idInternalScholarshipDetails =".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecariosInstitucionales.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecariosInstitucionales.php");
        exit();
    }
?>