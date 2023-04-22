<?php
if (isset($_POST['nombre'])) {
  $nombre = $_POST['nombre'];
  $archivo = fopen('nombres.txt', 'a');
  fwrite($archivo, $nombre . "\n");
  fclose($archivo);
  echo "inicio exitoso, por favor dar en iniciar juego. <a href='https://juandavidcastro1.github.io/game-memory/'>iniciar juego</a>";

}
?>
