<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE Enrollment SET status = 0 WHERE idEnrollment=".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: ReInscripciones.php");
        exit();
    } else {
        $enlace->close();
        header("Location: ReInscripciones.php");
        exit();
    }
?>