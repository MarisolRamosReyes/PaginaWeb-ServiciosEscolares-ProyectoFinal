<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modificar Beca Externa</title>
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
  <h2 class="text-center mb-4">Modificar Beca Externa</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="Logo Tec Pequeño.png" alt="Decoración" width="350" height="350"lass="mt-4">
    </div>
    <div class="col-md-8">
      <form action="ModificarBecaExternaPHP.php" method="post">
        <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group col-md-6">
      <label for="amount">Monto:</label>
      <input type="number" class="form-control" id="amount" name="amount" step="any" required>
      </div>
    </div>
    <div class="form-group">
    <label for="paymentDate">Fecha de pago</label>
    <input type="date" class="form-control" id="paymentDate" name="paymentDate">
    </div>
        <div class="text-center">
          <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
          <button type="submit" class="btn btn-custom">Modificar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>