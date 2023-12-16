<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Becarios Institucionales</title>
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
    <a class="navbar-brand" href="Menu ejemplo.html"><img src="Logo Tec Pequeño.png" alt="Decoración" width="50" height="50"lass="mt-4">Becarios Institucionales</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="AgregarBecarioInstitucional.php">Agregar Becario</a>
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
        <th>Beca Institucional</th>
        <th>Estudiante</th>
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
$sql = "SELECT isd.idInternalScholarshipDetails, isp.name as nameISP, s.name as name, isd.semester FROM InternalScholarshipDetails isd inner join InstitutionalScholarship isp on isd.idInstitutionalScholarship = isp.idInstitutionalScholarship inner join student s on isd.idStudent = s.idStudent WHERE isd.status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nameISP'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['semester'] . "</td>";
        echo "<td><a href='ModificarBecarioInstitucional.php?id=".$row['idInternalScholarshipDetails']."' title='Editar Campo'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='EliminarBecarioInstitucional.php?id=".$row['idInternalScholarshipDetails']."' title='Eliminar campo' class='text-danger' onclick='return confirm(\"¿Desea eliminar el campo a ".$row['name']." de ".$row['nameISP']."?\");'><i class='bi bi-trash-fill'></i></a></td>";
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