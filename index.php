<?php
require_once('conexion/Conexion.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta name="description" content="Web para la gestión de la flota de taxis">
    <title>Servico de taxis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>  
      <?php include('includes/headerIndex.php')?>
    </header>
    <main>
        <div>
            <h1>Gracias por confiar en Taxi Corp</h1>
            <p>Para empezar debes Formalizar el pedido.</p>
            <form>
                Matricula
                Modelo
                Nombre
                Apellidos

                
            </form>
        </div>
    </main>´
    <footer>
        <?php include('includes/footer.php')?>
    </footer>

            <!-- JS Bootstrap v5.2 -->
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
          crossorigin="anonymous"
        ></script>
</body>
</html>