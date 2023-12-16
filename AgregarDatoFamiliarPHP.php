<?php
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $relationship = $_POST["relationship"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $idStudent = $_POST["idStudent"];
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO familydata(name, lastName, relationship, phoneNumber, email, address, idStudent,idUserCreate, creationDate) VALUES (?,?,?,?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"ssssssiss",$name,$lastName,$relationship,$phoneNumber,$email,$address,$idStudent,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: DatosFamiliares.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: DatosFamiliares.php");
        exit();
    }
?>