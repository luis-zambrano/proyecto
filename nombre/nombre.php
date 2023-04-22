<!DOCTYPE html>
<html>
  <head>
    <title>Juego de memoria</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <div class="container">
      <h1>ingresar nombre</h1>
      <form method="post" action="guardar.php">
        <label for="nombre">Ingresa tu nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>
       

        <form method="post" action="guardar.php">
        <label for="nombre">Ingresa edad:</label><br>
        <input type="number" id="edad" name="edad" min="15" max="100" required> <br> <br> <br>
        <input type="submit" value="siguiente">


        
		

      </form>
    </div>
  </body>
</html>
