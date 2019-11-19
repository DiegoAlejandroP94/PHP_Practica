<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "Diego Alejandro Peña Lopez">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introducción a PHP</title>
    <link rel="shortcut icon" href="./imagen/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS3/style-capitulo04.css">
    <link rel="stylesheet" href=".\framework\bootstrap\css\bootstrap.min.css">
</head>
<body>
    <div class="cabecera">
        <h1>Curso de PHP Dostin Hurtado</h1>
    </div>
    <section>

        <form action="receptor.php" method = "POST">
            Nombre <input type ="text" name = "nombre" placeholder = "Digite su nombre">
            <br/><br/>
            Apellido <input type="text" name="apellido" id="" placeholder = "Digite su apellido" maxlength = "15">
            <br/><br/>
            <input type="submit"  class = "btn btn-primary" value="Enviar">
        </form>
    </section>
</body>
</html>