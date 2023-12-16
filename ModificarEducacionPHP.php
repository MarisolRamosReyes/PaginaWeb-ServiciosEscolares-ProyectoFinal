<?php
    $id = $_POST["id"];
    $educationLevel = $_POST["educationLevel"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $idStudent = $_POST["idStudent"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE education SET educationLevel ='$educationLevel', startDate ='$startDate', endDate ='$endDate', idStudent ='$idStudent' WHERE idEducation = '$id'";
    
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