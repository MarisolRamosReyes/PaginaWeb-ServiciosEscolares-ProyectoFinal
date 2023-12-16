<?php
    $idStudent = $_POST["idStudent"];
    $idExternalScholarship = $_POST["idExternalScholarship"];
    $institution = $_POST["institution"];
    $campus = $_POST["campus"];
    $major = $_POST["major"];
    $semester = $_POST["semester"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO externalscholarshipdetails(idStudent, idExternalScholarship, institution, campus, major, semester) VALUES (?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"iisssi",$idStudent,$idExternalScholarship,$institution,$campus,$major,$semester);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecariosExternos.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecariosExternos.php");
        exit();
    }
?>