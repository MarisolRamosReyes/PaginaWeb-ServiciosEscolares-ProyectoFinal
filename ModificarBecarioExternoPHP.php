<?php
    $id = $_POST["id"];
    $idStudent = $_POST["idStudent"];
    $idExternalScholarship = $_POST["idExternalScholarship"];
    $campus = $_POST["campus"];
    $major = $_POST["major"];
    $semester = $_POST["semester"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE ExternalScholarshipDetails SET idStudent ='$idStudent', idExternalScholarship ='$idExternalScholarship', campus ='$campus', major ='$major', semester ='$semester' WHERE idExternalScholarshipDetails = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecariosExternos.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecariosExternos.php");
        exit();
    }
?>