<?php
    $numericalReference = $_POST["numericalReference"];
    $totalPayment = $_POST["totalPayment"];
    $matriculation = $_POST["matriculation"];
    $dueDate = $_POST["dueDate"];
    $semester = $_POST["semester"];
    $idStudent = $_POST["idStudent"];
    $idPeriod = $_POST["idPeriod"];
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO enrollment(numericalReference, totalPayment, matriculation, dueDate, semester, idStudent, idPeriod,idUserCreate, creationDate) VALUES (?,?,?,?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"iissiiiss",$numericalReference,$totalPayment,$matriculation,$dueDate,$semester,$idStudent,$idPeriod,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: ReInscripciones.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: ReInscripciones.php");
        exit();
    }
?>