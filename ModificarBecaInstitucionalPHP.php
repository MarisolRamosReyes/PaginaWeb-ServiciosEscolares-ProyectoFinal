<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $percentage = $_POST["percentage"];
    $requirements = $_POST["requirements"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE institutionalscholarship SET name ='$name', percentage ='$percentage', requirements ='$requirements' WHERE idInstitutionalScholarship = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecaInstitucional.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecaInstitucional.php");
        exit();
    }
?>