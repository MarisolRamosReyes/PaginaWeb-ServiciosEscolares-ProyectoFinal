<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modificar Educación</title>
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
  <h2 class="text-center mb-4">Agregar Educación</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="Logo Tec Pequeño.png" alt="Decoración" width="350" height="350"lass="mt-4">
    </div>
    <div class="col-md-8">
      <form action="AgregarEducacionPHP.php" method="post">
      <div class="form-group">
        <label for="educationLevel">Nivel de educación:</label>
        <input type="text" class="form-control" id="educationLevel" name="educationLevel" required>
      </div>
        <div class="form-row">
    </div>
        <div class="form-row">
        <div class="form-group col-md-6">
      <label for="startDate">Inicio del Periodo:</label>
          <input type="date" class="form-control" id="startDate" name="startDate" required>
      </div>
      <div class="form-group col-md-6">
        <label for="endDate">Final del Periodo:</label>
        <input type="date" class="form-control" id="endDate" name="endDate" required>
      </div> 
    </div>
    <div class="form-group">
        <label for="idStudent">Estudiante:</label>
        <select class="form-control" id="idStudent" name="idStudent">
          <?php
          $sql = "SELECT idStudent, name FROM student WHERE status = 1";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<option value="'.$row['idStudent'].'">'.$row['name'].'</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="text-center">
          <button type="submit" class="btn btn-custom">Guardar</button>
        </div>
    </div>
      </form>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>