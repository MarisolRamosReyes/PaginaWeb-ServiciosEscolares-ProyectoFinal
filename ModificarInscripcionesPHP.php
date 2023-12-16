<?php
    $id = $_POST["id"];
    $numericalReference = $_POST["numericalReference"];
    $totalPayment = $_POST["totalPayment"];
    $matriculation = $_POST["matriculation"];
    $dueDate = $_POST["dueDate"];
    $semester = $_POST["semester"];
    $idStudent = $_POST["idStudent"];
    $idPeriod = $_POST["idPeriod"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE enrollment SET numericalReference ='$numericalReference', totalPayment ='$totalPayment', matriculation ='$matriculation', dueDate ='$dueDate', semester ='$semester', idStudent ='$idStudent', idPeriod ='$idPeriod' WHERE idStudent = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: ReInscripciones.php");
        exit();
    } else {
        $enlace->close();
        header("Location: ReInscripciones.php");
        exit();
    }
?>