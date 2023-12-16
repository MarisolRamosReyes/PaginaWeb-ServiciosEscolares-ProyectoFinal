<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Becarios Externos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <style>
    .custom-bar {
      background-color: #393f81; /* Color de fondo */
      color: white; /* Color del texto */
      padding: 15px; /* Espaciado interno */
      margin-bottom: 15px; /* Margen inferior */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark custom-bar">
  <div class="container-fluid">
    <a class="navbar-brand" href="Menu ejemplo.html"><img src="Logo Tec Pequeño.png" alt="Decoración" width="50" height="50"lass="mt-4">Becarios Externos</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="AgregarBecarioExterno.php">Agregar Becario</a>
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
        <th>Estudiante</th>
        <th>BecaExterna</th>
        <th>Institución</th>
        <th>Campus</th>
        <th>Carrera</th>
        <th>Semestre</th>
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
$sql = "SELECT esd.idExternalScholarshipDetails, s.name as nameStudent, es.scholarshipName as name, esd.institution, esd.campus, esd.major, esd.semester FROM ExternalScholarshipDetails esd inner join student s on esd.idStudent = s.idStudent inner join ExternalScholarship es on esd.idExternalScholarship = es.idExternalScholarship WHERE esd.status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nameStudent'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['institution'] . "</td>";
        echo "<td>" . $row['campus'] . "</td>";
        echo "<td>" . $row['major'] . "</td>";
        echo "<td>" . $row['semester'] . "</td>";
        echo "<td><a href='ModificarBecarioExterno.php?id=".$row['idExternalScholarshipDetails']."' title='Editar Campo'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='EliminarBecarioExterno.php?id=".$row['idExternalScholarshipDetails']."' title='Eliminar Campo' class='text-danger' onclick='return confirm(\"¿Desea eliminar el campo a ".$row['nameStudent']." de ".$row['name']."?\");'><i class='bi bi-trash-fill'></i></a></td>";
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