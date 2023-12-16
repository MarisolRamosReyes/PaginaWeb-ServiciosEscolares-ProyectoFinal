<?php
    $educationLevel = $_POST["educationLevel"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $idStudent = $_POST["idStudent"];
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO education(educationLevel, startDate, endDate, idStudent, idUserCreate, creationDate) VALUES (?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"sssiss",$educationLevel,$startDate,$endDate,$idStudent,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Educacion.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Educacion.php");
        exit();
    }
?>