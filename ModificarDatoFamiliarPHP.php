<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $relationship = $_POST["relationship"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $idStudent = $_POST["idStudent"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE FamilyData SET name ='$name', lastName ='$lastName', relationship ='$relationship', phoneNumber ='$phoneNumber', email ='$email', address ='$address', idStudent ='$idStudent' WHERE idFamilyData = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: DatosFamiliares.php");
        exit();
    } else {
        $enlace->close();
        header("Location: DatosFamiliares.php");
        exit();
    }
?>