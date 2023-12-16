<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE FamilyData SET status = 0 WHERE idFamilyData=".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: DatosFamiliares.php");
        exit();
    } else {
        $enlace->close();
        header("Location: DatosFamiliares.php");
        exit();
    }
?>