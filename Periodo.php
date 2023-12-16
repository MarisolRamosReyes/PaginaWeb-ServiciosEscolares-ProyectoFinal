<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Periodo</title>
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
    <a class="navbar-brand" href="Menu ejemplo.html"><img src="Logo Tec Pequeño.png" alt="Decoración" width="50" height="50"lass="mt-4">Periodo</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="AgregarPeriodo.php">Agregar Periodo</a>
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
        <th>Nombre</th>
        <th>Inicio del Periodo</th>
        <th>Final del Periodo</th>
        <th>Duración</th>
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
$sql = "SELECT * FROM Period where status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['startDate'] . "</td>";
        echo "<td>" . $row['endDate'] . "</td>";
        echo "<td>" . $row['duration'] . "</td>";
        echo "<td><a href='ModificarPeriodo.php?id=".$row['idPeriod']."' title='Editar Campo'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='EliminarPeriodo.php?id=".$row['idPeriod']."' title='Eliminar Campo' class='text-danger' onclick='return confirm(\"¿Desea eliminar el periodo ".$row['name']."?\");'><i class='bi bi-trash-fill'></i></a></td>";
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