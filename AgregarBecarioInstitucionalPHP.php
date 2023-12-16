<?php
    $idStudent = $_POST["idStudent"];
    $idInstitutionalScholarship = $_POST["idInstitutionalScholarship"];
    $semester = $_POST["semester"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO internalscholarshipdetails(idInstitutionalScholarship, idStudent, semester) VALUES (?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"iii",$idInstitutionalScholarship,$idStudent,$semester);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecariosInstitucionales.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecariosInstitucionales.php");
        exit();
    }
?>