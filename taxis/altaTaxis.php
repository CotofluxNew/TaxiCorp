<?php 
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
    <link rel="stylesheet" href="../css/altasTaxis.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Altas de taxis</title>
</head>
<body>
    <header>  
    <?php include("../includes/headerIndex_nstLevel.php")?>
    </header>
    <main>
      <h1>Alta de Taxis nuevos</h1>
      <form id="basic-form" action="" method="post">
          <p>
            <label for="matricula">Matricula</label>
            <input id="matricula" name="matricula" minlength="7" type="text" required>
          </p>
          <p>
            <label for="modelo">Modelo</label>
            <input id="modelo" name="modelo" type="text" required>
          </p>
          <p>
            <label for="name">Nombre</label>
            <input id="name" name="name" minlength="3" type="text" required>
          </p>
          <p>
            <label for="apellidos">Apellidos</label>
            <input id="apellidos" name="apellidos" minlength="3" type="text" required>
          </p>
          <p>
            <input class="submit" type="submit" value="SUBMIT">
          </p>
      </form>
    </main>
    <script>
      $(document).ready(function() {
        $("#basic-form").validate({
          rules: {
            matricula:{
              required: true,
              minlength: 7
            },
            modelo:{
              required: true
            }
            name : {
              required: true,
              minlength: 3
            },
            apellidos: {
              required: true,
              minlength: 3
            },
          }
        });
      });
    </script>
    <footer>  
      <?php include('../includes/footer.php')?>
    </footer>
</body>
</html>