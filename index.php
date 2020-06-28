<?php

include "services/servicoMensagemSessao.php";
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





$messagemDeSucesso = obterMensagemSucesso();

if (!empty($messagemDeSucesso)) {
    echo $messagemDeSucesso;
}

    $messagemDeErro = obterMensagemError();
     if (!empty($messagemDeErro)) {

      echo $messagemDeErro;
    }
     ?>
<p>Your nome : <input type="text" name="nome"/></p>
<p>Your age : <input type="text" name="idade"/></p>
<p><input type="submit"/></p>
</form>
  </body>
</html>
