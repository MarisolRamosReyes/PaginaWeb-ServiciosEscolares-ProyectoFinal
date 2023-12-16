<?php
    $userName = $_POST["userName"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO user(userName, name, password, email, idUserCreate, creationDate) VALUES (?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"ssssss",$userName,$name,$password,$email,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Usuario.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: Usuario.php");
        exit();
    }
?>