<?php
    $name = $_POST["name"];
    $percentage = $_POST["percentage"];
    $requirements = $_POST["requirements"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO institutionalscholarship(name, percentage, requirements) VALUES (?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"sis",$name,$percentage,$requirements);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecaInstitucional.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecaInstitucional.php");
        exit();
    }
?>