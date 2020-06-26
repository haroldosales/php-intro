
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-deveice-width, initial-scale=1">
  </head>
  <body>

    <p>Formulario PARA INSCRIÇAO DE COMPOETIDORES</p>

<form action="script.php" method="post">
<?php

$messagemDeSucesso = isset($_SESSION['mesagem-de-sucesso'])? $_SESSION['mesagem-de-sucesso']: '';
if (!empty($messagemDeSucesso)) {
  # code...
  echo $messagemDeSucesso;
}

    $messagemDeErro = isset($_SESSION['mesagem-de-erro'])? $_SESSION['mesagem-de-erro']: '';
    if (!empty($messagemDeErro)) {
      # code...
      echo $messagemDeErro;
    }
     ?>
<p>Your nome : <input type="text" name="nome"/></p>
<p>Your age : <input type="text" name="idade"/></p>
<p><input type="submit"/></p>
</form>
  </body>
</html>
