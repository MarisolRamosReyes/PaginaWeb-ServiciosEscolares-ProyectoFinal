<?php
    $id = $_POST["id"];
    $idStudent = $_POST["idStudent"];
    $idInstitutionalScholarship = $_POST["idInstitutionalScholarship"];
    $semester = $_POST["semester"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE InternalScholarshipDetails SET idStudent ='$idStudent', idInstitutionalScholarship ='$idInstitutionalScholarship', semester ='$semester' WHERE idInternalScholarshipDetails = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecariosInstitucionales.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecariosInstitucionales.php");
        exit();
    }
?>