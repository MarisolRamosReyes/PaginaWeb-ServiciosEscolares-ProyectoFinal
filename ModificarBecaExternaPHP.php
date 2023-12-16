<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $amount = $_POST["amount"];
    $paymentDate = $_POST["paymentDate"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE ExternalScholarship SET scholarshipName ='$name', amount ='$amount', paymentDate ='$paymentDate' WHERE idExternalScholarship = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: BecasExternas.php");
        exit();
    } else {
        $enlace->close();
        header("Location: BecasExternas.php");
        exit();
    }
?>