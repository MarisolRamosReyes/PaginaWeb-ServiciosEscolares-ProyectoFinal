<?php
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
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO student(idStudyPlan, registrationNumber, name, lastName, phoneNumber, email, address, curp, rfc, nss, idLifeInsurance, idUserCreate, creationDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"isssssssssiss",$idStudyPlan,$registrationNumber,$name,$lastName,$phoneNumber,$email,$address,$curp,$rfc,$nss,$idLifeInsurance,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Estudiantes.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Estudiantes.php");
        exit();
    }
?>