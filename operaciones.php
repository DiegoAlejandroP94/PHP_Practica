
<?php
/* Declaración de variables */
$num1 = $_POST['number-one'];

echo  "<center><strong> ". "Tabla de Multiplicar del $num1". "</strong></center>" ;
for($i =1; $i<=10; $i++){

    
    $total = $num1 * $i;
    echo "<br/>";
    echo "<center><i>" ."$num1  x  $i = $total" . "</i></center>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de Dostin Hurtado</title>
    <link rel="shortcut icon" href="./imagen/logo.png" type="image/x-icon">
    <link rel="stylesheet" href=".\framework\bootstrap\css\bootstrap.min.css">
</head>
<body>
    
</body>
</html>