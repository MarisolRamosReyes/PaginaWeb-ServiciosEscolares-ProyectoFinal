<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>ReInscrpciones</title>
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
    <a class="navbar-brand" href="Menu ejemplo.html"><img src="Logo Tec Pequeño.png" alt="Decoración" width="50" height="50"lass="mt-4">ReInscrpciones</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="AgregarInscripciones.php">Agregar Inscripciones</a>
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
        <th>Referencia Númerica</th>
        <th>Pago Inscripción</th>
        <th>Matricula</th>
        <th>Fecha de Vencimiento</th>
        <th>Semestre</th>
        <th>Estudiante</th>
        <th>Periodo</th>
        <!-- Agrega más columnas según la estructura de tu tabla -->
      </tr>
    </thead>
    <tbody>
    <?php
// Configuración de la conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SchoolServicesYaelMari";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para seleccionar los datos de la tabla de estudiantes
$sql = "SELECT e.idEnrollment, e.numericalReference, e.totalPayment, e.matriculation, e.dueDate, e.semester, s.name as nameS, p.name as nameP   FROM Enrollment e inner join student s on e.idStudent = s.idStudent inner join Period p on e.idPeriod = p.idPeriod WHERE e.status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['numericalReference'] . "</td>";
        echo "<td>" . $row['totalPayment'] . "</td>";
        echo "<td>" . $row['matriculation'] . "</td>";
        echo "<td>" . $row['dueDate'] . "</td>";
        echo "<td>" . $row['semester'] . "</td>";
        echo "<td>" . $row['nameS'] . "</td>";
        echo "<td>" . $row['nameP'] . "</td>";
        echo "<td><a href='ModificarInscripciones.php?id=".$row['idEnrollment']."' title='Editar Campo'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='EliminarInscripciones.php?id=".$row['idEnrollment']."' title='Eliminar campo' class='text-danger' onclick='return confirm(\"¿Desea eliminar el campo ".$row['numericalReference']."?\");'><i class='bi bi-trash-fill'></i></a></td>";
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
<script src="https://cdn.jsdelivr.net/np, ,8m/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>