<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla de Estudiantes con Bootstrap</title>
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
    <a class="navbar-brand" href="Menu ejemplo.html"><img src="Logo Tec Pequeño.png" alt="Decoración" width="50" height="50"lass="mt-4">Estudiantes</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="AgregarEstudiante.php">Agregar Estudiante</a>
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
        <th>Plan de Estudios</th>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apelido Paterno</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Dirección</th>
        <th>CURP</th>
        <th>RFC</th>
        <th>NSS</th>
        <th>Seguro Vida</th>
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
$sql = "SELECT s.idStudent, sp.name as namePlan, s.registrationNumber, s.name, s.lastName, s.phoneNumber, s.email, s.address, s.curp, s.rfc, s.nss, l.insuranceCompany FROM student s inner join StudyPlan sp on s.idStudyPlan = sp.idStudyPlan inner join LifeInsurance l on s.idLifeInsurance = l.idLifeInsurance where s.status = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['namePlan'] . "</td>";
        echo "<td>" . $row['registrationNumber'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
        echo "<td>" . $row['phoneNumber'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['curp'] . "</td>";
        echo "<td>" . $row['rfc'] . "</td>";
        echo "<td>" . $row['nss'] . "</td>";
        echo "<td>" . $row['insuranceCompany'] . "</td>";
        echo "<td><a href='ModificarEstudiante.php?id=".$row['idStudent']."' title='Editar Campo'><i class='bi bi-pencil-square'></i></a></td>";
        echo "<td><a href='EliminarEstudiante.php?id=".$row['idStudent']."' title='Eliminar campo' class='text-danger' onclick='return confirm(\"¿Desea eliminar el campo ".$row['name']."?\");'><i class='bi bi-trash-fill'></i></a></td>";
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