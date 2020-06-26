<?php

function validaNome(string $nome) : bool
{
  if(empty($nome))
  {

  setarMensagemErro('O nome nao pode esta vazio, favor preençe novamente');



   return false;
  }
  else if(strlen($nome)<3)
  {
    //strlen quantidade de caracter
    setarMensagemErro('O nome nao pode ter menos de 3 letras');

    return false;
  }else if(strlen($nome) > 40){
    setarMensagemErro('O nome nao pode ter mais de 40 caracte');
    return false;
  }

  return true;

}
function validaIdade(String $idade) : bool
{
  if(!is_numeric($idade)){
setarMensagemErro( 'A idade so pode possuir numeros');

   return false;
  }
  return true;

  }



?>
