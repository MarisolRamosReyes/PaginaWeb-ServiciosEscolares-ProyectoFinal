<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modificar Seguro de Vida</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #393f81;
    }
    .container {
      margin-top: 50px;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .btn-custom {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-custom:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>
<?php
$id = $_GET["id"];
?>
<div class="container">
  <h2 class="text-center mb-4">Modificar Seguro de Vida</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="Logo Tec Pequeño.png" alt="Decoración" width="350" height="350"lass="mt-4">
    </div>
    <div class="col-md-8">
      <form action="ModificarSeguroVidaPHP.php" method="post">
        <div class="form-row">
      <div class="form-group col-md-6">
        <label for="policyNumber">Número de poliza:</label>
        <input type="text" class="form-control" id="policyNumber" name="policyNumber" required>
      </div>
      <div class="form-group col-md-6">
        <label for="insuranceCompany">Compañia aseguradora:</label>
        <input type="text" class="form-control" id="insuranceCompany" name="insuranceCompany" required>
      </div>
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
      <label for="startDate">Inicio del seguro:</label>
          <input type="date" class="form-control" id="startDate" name="startDate" required>
      </div>
      <div class="form-group col-md-6">
        <label for="endDate">Fecha de vencimiento:</label>
        <input type="date" class="form-control" id="endDate" name="endDate" required>
      </div>
    <div class="form-group col-md-6">
        <label for="beneficiary">Beneficiario:</label>
        <input type="text" class="form-control" id="beneficiary" name="beneficiary" required>
      </div>
      <div class="form-group col-md-6">
        <label for="deathCoverage">Cobertura por muerte:</label>
        <input type="number" class="form-control" id="deathCoverage" name="deathCoverage" required>
      </div>
      <div class="form-group col-md-6">
        <label for="disabilityCoverage">Cobertura por discapacidad:</label>
        <input type="number" class="form-control" id="disabilityCoverage" name="disabilityCoverage" required>
      </div>
      <div class="form-group col-md-6">
        <label for="insurancePayment">Pago del seguro:</label>
        <input type="number" class="form-control" id="insurancePayment" name="insurancePayment" required>
      </div>
      <div class="form-group col-md-6">
        <label for="paymentPeriod">Periodo de Pago:</label>
        <input type="number" class="form-control" id="paymentPeriod" name="paymentPeriod" required>
      </div>
    </div>
  </div>
    </div>
    <div class="text-center">
          <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
          <button type="submit" class="btn btn-custom">Modificar</button>
        </div>
      </form>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>