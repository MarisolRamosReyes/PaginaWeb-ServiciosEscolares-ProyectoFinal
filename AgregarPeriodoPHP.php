<?php
    $name = $_POST["name"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $duration = $_POST["duration"];
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO period(name, startDate, endDate, duration, idUserCreate, creationDate) VALUES (?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"sssiss",$name,$startDate,$endDate,$duration,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Periodo.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Periodo.php");
        exit();
    }
?>