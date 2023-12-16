<?php
    $id = $_POST["id"];
    $userName = $_POST["userName"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE user SET userName ='$userName', name ='$name', password ='$password', email ='$email' WHERE idUser = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: Usuario.php");
        exit();
    } else {
        $enlace->close();
        header("Location: Usuario.php");
        exit();
    }
?>