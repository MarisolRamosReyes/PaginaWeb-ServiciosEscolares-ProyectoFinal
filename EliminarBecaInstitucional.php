<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE InstitutionalScholarship SET status = 0 WHERE idInstitutionalScholarship =".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecaInstitucional.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecaInstitucional.php");
        exit();
    }
?>