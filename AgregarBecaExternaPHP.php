<?php
    $name = $_POST["name"];
    $amount = $_POST["amount"];
    $paymentDate = $_POST["paymentDate"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO externalscholarship(scholarshipName, amount, paymentDate) VALUES (?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"sis",$name,$amount,$paymentDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecasExternas.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: BecasExternas.php");
        exit();
    }
?>