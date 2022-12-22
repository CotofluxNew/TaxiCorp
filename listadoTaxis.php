<?php 
require_once('conexion/Conexion.php');

//Fem la consulta a la taula cursos
mysqli_select_db($conexion, $database);
$query = "SELECT * FROM taxis ORDER BY idTaxi ASC";
$result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
$cursos = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/listadoTaxis.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Listado de taxis</title>
</head>
<body>
    <header>  
    <?php include("includes/headerIndex.php")?>
    </header>
    <main>
      <h1>Listado de Taxis</h1>

      <table>
        <tr><th>Matricula</th><th>Modelo</th><th>Nombre Taxista</th><th>Apellidos Taxista</th></tr>
        <?php
          do{
        ?>
        <tr><td><?php echo $cursos['Matricula']; ?></td><td><?php echo $cursos['Modelo']; ?></td><td><?php echo $cursos['NombreTaxista']; ?></td><td><?php echo $cursos['ApellidosTaxista']; ?></td></tr>
        <?php
          }while ($cursos = mysqli_fetch_assoc($result));
        ?>
      </table>
    </main>
    <footer>  
      <?php include('includes/footer.php')?>
    </footer>
</body>
</html>