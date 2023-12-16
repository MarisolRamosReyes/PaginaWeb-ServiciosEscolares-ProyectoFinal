<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE ExternalScholarship SET status = 0 WHERE idExternalScholarship =".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecasExternas.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecasExternas.php");
        exit();
    }
?>