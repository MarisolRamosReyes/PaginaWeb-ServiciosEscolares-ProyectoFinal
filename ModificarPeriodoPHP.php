<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $duration = $_POST["duration"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE period SET name ='$name', startDate ='$startDate', endDate ='$endDate', duration ='$duration' WHERE idPeriod = '$id'";
    
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