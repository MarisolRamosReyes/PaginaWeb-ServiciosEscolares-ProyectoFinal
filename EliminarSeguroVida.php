<?php
    $id = $_GET["id"];
        
    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE LifeInsurance SET status = 0 WHERE idLifeInsurance=".$id.";";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: SeguroVida.php");
        exit();
    } else {
        $enlace->close();
        header("Location: SeguroVida.php");
        exit();
    }
?>