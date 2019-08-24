<!doctype html>
<html lang="es">
  <head>
    <title>SID-Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <?php require "../php/session.php"; ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container p-4">
    <div class="col-md-12">
      <form action="../php/accion.php" method="POST">
      <table class="table table-bordered">
        <thead  class="thead-dark">
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Area</th>
            <th>Fecha</th>
            <th>PDF</th>            
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>