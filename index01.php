<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "author" content = "Diego Alejandro Peña Lopez">
    <meta name = "Diseño y Publicidad" content = "Masaket">
    <title>Introducción a PHP</title>
    <link rel="shortcut icon" href="./imagen/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./framework/bootstrap/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
    <font color = "#000">
        <center>
        <strong><h1>BUY-ME</h1></strong>
            <h3>Tienda Online</h3>
        </center>
    </font>
  </div>
  <div class="col-md-2"></div>
  </div>  <!-- Finaliza el div row -->
  <hr>
   <h3>
    <p class="bg-danger" align = "center">
     <b>
    
    
     </b>
    </p>

    <p class="bg-success" align = "center"></p>
   </h3>
    <!-- Inicio del formulario de Iniciar sesion -->
    <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
        <div class="well"> <!-- Agrega un sombreado a la columna-->
        <center>
            <h3><strong>INICIAR SESION</strong></h3><br/>
            <figure>
                <img src="./imagen/logo.png"  alt=" Logo de la Tienda Online Masaket"  width ="250" class = "img-circle">
            </figure>
            <br><br><br>
        
        <form action="capitulo07.php" method ="POST" class = "form-inline" name = "login">

            <div class="form-group">
                <label for="user">Usuario</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="user" id="user" placeholder = "Usuario" maxlength = "15" >
           </div>
            <br><br>

            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass" placeholder = "Contraseña" maxlength ="20" required >            
            </div>
            <br><br>

            <input type="hidden" name = "envio" >

            <p>
            <input type="submit" name ="btn_index" id = "enviar" class ="btn btn-success" value="INICIAR SESION">
            <a  class ="btn btn btn-danger" role = "button"  href="https://www.google.com">SALIR</a>
            </p>
        </form>
        </center>
        </div>
     </div>
     <div class="col-md-4"></div>
    </div> <!--Finaliza el div row -->
   </div> <!--Finaliza el container principal de la página-->   
 <footer>
    <p align ="center"><i>Creado por <strong><em>Masaket</em></strong></i></p>
 </footer>
</body>
</html>