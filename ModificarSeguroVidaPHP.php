<?php
    $id = $_POST["id"];
    $policyNumber = $_POST["policyNumber"];
    $insuranceCompany = $_POST["insuranceCompany"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $beneficiary = $_POST["beneficiary"];
    $deathCoverage = $_POST["deathCoverage"];
    $disabilityCoverage = $_POST["disabilityCoverage"];
    $insurancePayment = $_POST["insurancePayment"];
    $paymentPeriod = $_POST["paymentPeriod"];

    $enlace = mysqli_connect("localhost", "root", "", "SchoolServicesYaelMari");
    $datos = "UPDATE lifeinsurance SET policyNumber ='$policyNumber', insuranceCompany ='$insuranceCompany', startDate ='$startDate', endDate ='$endDate', beneficiary = '$beneficiary', deathCoverage ='$deathCoverage', disabilityCoverage ='$disabilityCoverage', insurancePayment ='$insurancePayment', paymentPeriod ='$paymentPeriod' WHERE idLifeInsurance = '$id'";
    
    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: SeguroVida.php");
        exit();
    } else {
        $enlace->close();
        header("Location: SeguroVida.php");
        exit();
    }
?>