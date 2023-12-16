<?php
    $id = $_POST["id"];
    $idStudyPlan = $_POST["idStudyPlan"];
    $registrationNumber = $_POST["registrationNumber"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $curp = $_POST["curp"];
    $rfc = $_POST["rfc"];
    $nss = $_POST["nss"];
    $idLifeInsurance = $_POST["idLifeInsurance"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE student SET idStudyPlan ='$idStudyPlan', registrationNumber ='$registrationNumber', name ='$name', lastName ='$lastName', phoneNumber ='$phoneNumber', email ='$email', address ='$address', curp ='$curp', rfc ='$rfc', nss ='$nss', idLifeInsurance ='$idLifeInsurance' WHERE idStudent = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: Estudiantes.php");
        exit();
    } else {
        $enlace->close();
        header("Location: Estudiantes.php");
        exit();
    }
?>