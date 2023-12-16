<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Seguros de Vida</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <style>
    .custom-bar {
      background-color: #393f81;
      color: white;
      padding: 15px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark custom-bar">
  <div class="container-fluid">
    <a class="navbar-brand" href="Menu ejemplo.html"><img src="Logo Tec Pequeño.png" alt="Decoración" width="50" height="50"lass="mt-4">Seguros de Vida</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="AgregarSeguroVida.php">Agregar Seguro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container mt-4">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Número de poliza</th>
        <th>Pago Inscripción</th>
        <th>Inicio del seguro</th>
        <th>Final del seguro</th>
        <th>Beneficiario</th>
        <th>Cobertura por muerte</th>
        <th>Cobertura por incapacidad</th>
        <th>Pago del Seguro</th>
        <th>Periodo de Pago</th>
      </tr>
    </thead>
    <tbody>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolServicesYaelMari";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para seleccionar los datos de la tabla de estudiantes
$sql = "SELECT * FROM LifeInsurance where status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['policyNumber'] . "</td>";
        echo "<td>" . $row['insuranceCompany'] . "</td>";
        echo "<td>" . $row['startDate'] . "</td>";
        echo "<td>" . $row['endDate'] . "</td>";
        echo "<td>" . $row['beneficiary'] . "</td>";
        echo "<td>" . $row['deathCoverage'] . "</td>";
        echo "<td>" . $row['disabilityCoverage'] . "</td>";
        echo "<td>" . $row['insurancePayment'] . "</td>";
        echo "<td>" . $row['paymentPeriod'] . "</td>";
        echo "<td><a href='ModificarSeguroVida.php?id=".$row['idLifeInsurance']."' title='Editar Campo'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='EliminarSeguroVida.php?id=".$row['idLifeInsurance']."' title='Eliminar campo' class='text-danger' onclick='return confirm(\"¿Desea eliminar la poliza ".$row['policyNumber']." de la aseguradora ".$row['insuranceCompany']."?\");'><i class='bi bi-trash-fill'></i></a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='15'>No se encontraron registros</td></tr>";
}
$conn->close();
?>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>