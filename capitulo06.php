<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "author" content = "Diego Alejandro Peña Lopez">
    <title>Introducción a PHP</title>
    <link rel="stylesheet" href="./framework/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./imagen/logo.png" type="image/x-icon">
</head>
<body>
<div class="container">
    <h1 class = "jumbotron texte-left" >Introducción a PHP</h1>
    <section>
        <article>
            <form action="capitulo06.php" method="POST" class = "form-inline">

            <label for="number01">Número 1</label>
            <input type="text" name="num1" id="num1" class ="form-control">

            <label for="number02">Número 2</label>
            <input type="text" name="num2" id="num2" class ="form-control">

            <label for="Operator">Operador</label>
            <select name="opc" class = "form-control">
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicación">Multiplicación</option>
                <option value="División">División</option>
                <option value="Potenciación">Potenciación</option>
            </select>
            <input type="submit" name = "btn1" class = "btn btn-success" value="Enviar">
            </form>
            <br/><br/>
 <?php

    if(isset($_POST['btn1']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operador = $_POST['opc'];

        switch ($operador){

            case 'Suma': $total = $num1 + $num2; echo "$num1 + $num2 = $total"; break;   
            case 'Resta': $total = $num1 - $num2; echo "$num1 - $num2 = $total";  break;    
            case 'Multiplicación': $total = $num1 * $num2; echo "$num1 x $num2 = $total";  break;    
            case 'División': $total = $num1 / $num2; echo "$num1 / $num2 = $total";  break; 
            case 'Potenciación': $total = $num1 ** $num2; echo "$num1 ^ $num2 = $total";  break;    
            
            default: echo "Digite solamente uno de los siguientes operadores aritmeticos";break;
    
        }
    }    
 ?>
        </article>
    </section>
</div>    
</body>
</html>