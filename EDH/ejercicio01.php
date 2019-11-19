<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introducción a PHP</title>
    <link rel="shortcut icon" href="../imagen/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        
        body{
            font-family:Verdana,Cambria, monospace;
            font-size:16px;
        }

        h1{
            font-size:3.3em;
            font-family:Arial, Helvetica, sans-serif;
            font-weight:bold;
            text-align:center;
            color:#06A386;
        }

    
    </style>
</head>
<body>
<div class="container">
    <h1 class = "jumbotron text-left">Ejercicios PHP</h1>
     <section>
         <article>
             <form action="ejercicio01.php" method="POST" class = "form-inline">
             
                <label for="number">Numero</label>
                <input type="text" name="number-one" maxlength = "1" placeholder = "Digite un número">
                <br/><br/>

                <input type="submit" name ="btn1"  class ="btn btn-primary" value="Enviar">
             </form>
<?php

    if(isset($_POST['btn1'])){
        $num1 = $_POST['number-one'];
        switch ($num1) {
            case '1': echo "<center><em>" ."Hoy es Lunes" . "</em></strong>"; break;
            case '2': echo "<center><em>" ."Hoy es Martes" . "</em></strong>"; break;
            case '3': echo "<center><em>" ."Hoy es Miercoles" . "</em></strong>"; break;
            case '4': echo "<center><em>" ."Hoy es Jueves" . "</em></strong>"; break;
            case '5': echo "<center><em>" ."Hoy es Viernes" . "</em></strong>"; break;
            case '6': echo "<center><em>" ."Hoy es Sabado" . "</em></strong>"; break;
            case '7': echo "<center><em>" ."Hoy es Domingo" . "</em></strong>"; break;
 
            default: echo "Digite solamente un valor entre 1 a 7 por favor";break;
              
        }
    }
?>
        <hr/>
         </article>
     </section>
     </div>
</body>
</html>