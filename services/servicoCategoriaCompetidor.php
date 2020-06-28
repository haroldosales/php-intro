<?php


function defineCategoriaCompetidor(String $nome,string $idade) : ?string
{

  $categoria = [];
  $categoria[] = 'infantil';
  $categoria[] = 'adolecente';
  $categoria[] = 'adulto';
  $categoria[] = 'idoso';


if(validaNome($nome) && validaIdade($idade))
{
  removerMensagemErro();

    if($idade >= 6 && $idade<=12)
  {
   for($i = 0 ; $i <= count($categoria);$i++)
   {
     if($categoria[$i] == 'infantil')
     {
    setarMensagemSucesso(" o natador ".$nome."  compente na categoria ". $categoria[$i]);
    return null;
  }
   }

 } else  if($idade >=13 && $idade <=18 )
  {
   for($i = 0 ; $i <= count($categoria);$i++)
   {
     if($categoria[$i] == 'adolecente')
     {
     setarMensagemSucesso(" o natador ".$nome. " compente na categoria " .$categoria[$i]);
     return null;
   }
   }
  }
  else
  {
   for($i = 0 ; $i <= count($categoria);$i++)
   {
     if($categoria[$i] == 'adulto')
     {
     setarMensagemSucesso( " o natador ".$nome. " compente na categoria " .$categoria[$i]);
     return null;

   }
  }
}


}
else {

  removerMensagemSucesso();
  return obterMensagemError();
}

}



 ?>
