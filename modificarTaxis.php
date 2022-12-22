<?php 
require_once('conexion/Conexion.php');

if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }
  
    global $conexion;
    $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($conexion,$theValue) : mysqli_escape_string($conexion,$theValue);
  
    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;    
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
  }
  
  $editFormAction = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }

mysqli_select_db($conexion,$database);
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO taxis (Matricula, Modelo, NombreTaxista, ApellidosTaxista) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['Matricula'], "text"),
                       GetSQLValueString($_POST['Modelo'], "text"),
                       GetSQLValueString($_POST['NombreTaxista'], "text"),
                       GetSQLValueString($_POST['ApellidosTaxista'], "text"));
 
  $Result1 = mysqli_query($conexion,$insertSQL) or die(mysqli_error($conexion));

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

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
    <link rel="stylesheet" href="css/altasTaxis.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Altas de taxis</title>
</head>
<body>
    <header>  
    <?php include("includes/headerIndex.php")?>
    </header>
    <main>
      <h1>Alta de Taxis nuevos</h1>
      <form id="basic-form" action="<?php echo $editFormAction; ?>" method="post">
          <p>
            <label for="matricula">Matricula</label>
            <input id="matricula" name="Matricula" minlength="7" type="text" required>
          </p>
          <p>
            <label for="modelo">Modelo</label>
            <input id="modelo" name="Modelo" type="text" required>
          </p>
          <p>
            <label for="nombre">Nombre</label>
            <input id="nombre" name="NombreTaxista" minlength="3" type="text" required>
          </p>
          <p>
            <label for="apellidos">Apellidos</label>
            <input id="apellidos" name="ApellidosTaxista" minlength="3" type="text" required>
          </p>
          <p>
            <input class="submit" type="submit" value="SUBMIT">
            <input type="hidden" name="MM_insert" value="form">
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
      <?php include('includes/footer.php')?>
    </footer>
</body>
</html>