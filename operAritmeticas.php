<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introducción a PHP</title>
    <link rel="shortcut icon" href="./imagen/logo.png" type="image/x-icon">
    <link rel="stylesheet" href=".\framework\bootstrap\css\bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class = "jumbotron text-center" >Introducción a PHP</h1>
    <main>
        <article>
            <form action="operaciones.php" method = "POST">
            Número 1 <input type="number" name="number-one" id="" required>
            Número 2 <input type="number" name="number-two" id="" required>
            <input type="submit" class = "btn btn-success"  value="Enviar">
            </form>
        </article>
    </main>
</div>    
</body>
</html>