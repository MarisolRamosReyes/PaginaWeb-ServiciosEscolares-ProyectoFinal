<?php
    $policyNumber = $_POST["policyNumber"];
    $insuranceCompany = $_POST["insuranceCompany"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $beneficiary = $_POST["beneficiary"];
    $deathCoverage = $_POST["deathCoverage"];
    $disabilityCoverage = $_POST["disabilityCoverage"];
    $insurancePayment = $_POST["insurancePayment"];
    $paymentPeriod = $_POST["paymentPeriod"];
    $idUserCreate = 2;
    $creationDate = date('Y-m-d');

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "INSERT INTO lifeinsurance(policyNumber, insuranceCompany, startDate, endDate, beneficiary, deathCoverage, disabilityCoverage, insurancePayment, paymentPeriod, idUserCreate, creationDate) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"sssssiiiiss",$policyNumber,$insuranceCompany,$startDate,$endDate,$beneficiary,$deathCoverage,$disabilityCoverage,$insurancePayment,$paymentPeriod,$idUserCreate,$creationDate);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: SeguroVida.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: SeguroVida.php");
        exit();
    }
?>