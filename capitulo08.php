<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "author" content = "Diego Alejandro Peña Lopez">
    <title>Introducción a PHP</title>
    <link rel="shortcut icon" href="./imagen/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./framework/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<h2 class="jumbotron"></h2>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <center><h1 class="jumbotron text-center">PROPIERTARIO</h1></center>
      <form action="capitulo08.php" method = "POST">

      <div class="form-group">
        <label for="doc">Documento de Identificación</label>
        <input type="text" name="ID" id="ID" maxlength = "20"  class = "form-control">
      </div>

      <div class="form-group">
        <label for="noombre">Nombre</label>
        <input type="text" name="name" id="name" maxlength ="45"  class = "form-control">
      </div>

      <div class="form-group">
        <label for="dir">Dirección</label>
        <input type="text" name="dir" id="dir" maxlength = "40"   class = "form-control">
      </div>

      <div class="form-group">
        <label for="tel">Telefono</label>
        <input type="tel" name="phone" id="phone" maxlength = "20" class ="form-control" >
      </div>

      <center>
        <input type="submit" name ="btn1" class ="btn btn-primary" value="Enviar">
        <input type="submit" name ="btn2" class ="btn btn-success" value="Consultar">
      </center>
      </form>

<?php

    if(isset($_POST['btn1'])){

      include("conexionBD.php");

       $doc = $_POST['ID'];
       $nombre = $_POST['name'];
       $direccion = $_POST['dir'];
       $phone = $_POST['phone'];

       $conexion->query("INSERT INTO $tabla_BD1 (ID, nombre, direccion, phone)values ('$doc', '$nombre', '$direccion', '$phone')");

      include("closeBD.php");
      echo  "<br><center><strong><i>" ."Se insertaron correctamente los datos" . "</i></strong></center>";
    }
    
    if(isset($_POST['btn2'])){

        include("conexionBD.php");

        $doc =$_POST['ID'];

        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_BD1 WHERE ID = $doc");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            
            echo "
                <table width = \"100\" border = \"2\" class = \"table table-bordered\">
                    <thead>
                        <th>Documento de Identifcacion</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                    </thead>
                    <tbody>
                        <tr>
                          <td>".$consulta['ID']."</td>
                          <td>".$consulta['nombre']."</td>
                          <td>".$consulta['direccion']."</td>
                          <td>".$consulta['phone']."</td>
                        </tr>
                    </tbody>
                </table>
            ";
        }  
        include("closeBD.php");
    }
?>
       </div>
      <div class="col-md-4"></div>
    </div> <!--Finaliza el dvi de la clase row-->
</div> <!-- Finaliza el div de la clase Container -->
</body>
</html>