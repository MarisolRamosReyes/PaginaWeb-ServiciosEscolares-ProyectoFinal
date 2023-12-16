<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE User SET status = 0 WHERE idUser=".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: Usuario.php");
        exit();
    } else {
        $enlace->close();
        header("Location: Usuario.php");
        exit();
    }
?>