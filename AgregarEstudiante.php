<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Agregar Estudiante</title>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolServicesYaelMari";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
<div class="container">
  <h2 class="text-center mb-4">Agregar Estudiante</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="Logo Tec Pequeño.png" alt="Decoración" width="350" height="350"lass="mt-4">
    </div>
    <div class="col-md-8">
      <form action="AgregarEstudiantePHP.php" method="post">
      <div class="form-group">
          <label for="registrationNumber">Matricula:</label>
          <input type="text" class="form-control" id="registrationNumber" name="registrationNumber" required>
        </div>
        <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="lastName">Apellido Paterno:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
    </div>
        <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phoneNumber">Teléfono:</label>
        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
    </div>
        <div class="form-group">
          <label for="address">Dirección:</label>
          <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="form-row">
      <div class="form-group col-md-4">
        <label for="curp">CURP:</label>
        <input class="form-control" id="curp" name="curp" required>
      </div>
      <div class="form-group col-md-4">
        <label for="rfc">RFC:</label>
        <input class="form-control" id="rfc" name="rfc" require>
      </div>
      <div class="form-group col-md-4">
        <label for="nss">NSS:</label>
        <input class="form-control" id="nss" name="nss" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="idStudyPlan">Plan de Estudios:</label>
        <select class="form-control" id="idStudyPlan" name="idStudyPlan">
          <?php
          $sql = "SELECT idStudyPlan, name FROM StudyPlan WHERE status = 1";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<option value="'.$row['idStudyPlan'].'">'.$row['name'].'</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="idLifeInsurance">Seguro de Vida:</label>
        <select class="form-control" id="idLifeInsurance" name="idLifeInsurance">
          <?php
          $sql = "SELECT idLifeInsurance, policyNumber, insuranceCompany FROM LifeInsurance WHERE status = 1";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<option value="'.$row['idLifeInsurance'].'">'.$row['policyNumber']." - ".$row['insuranceCompany'].'</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="text-center">
          <button type="submit" class="btn btn-custom">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>