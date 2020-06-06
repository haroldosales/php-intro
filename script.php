<?php
$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolecente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';



$nome = $_POST['nome'];
$idade = $_POST['idade'];
//empty == vazio
if(empty($nome))
{
  echo "O nome nao pode ser vazil";
  return;
}
//strlen quantidade de caracter
if(strlen($nome)<3)
{
  echo "nome deve conter mais de 3 caracter";
  return;
}

if(strlen($nome) > 40){
  echo "O Nome nao pode ser muit longo";
  return;
}
//conferir o numeric
if(!is_numeric($idade)){
      echo "Informe numero para idade";
}

if($idade >= 6 && $idade<=17)
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i] == 'infantil')
    echo" o natador ".$nome. " compente na categoria " . $categoria[$i];
  }
}else if($idade >=18 && $idade <=25 )
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i]== 'adolecente')
    echo" o natador ".$nome. " compente na categoria " .$categoria[$i];
  }
}else if($idade >=26 && $idade <=30 )
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i]== 'adulto')
    echo" o natador ".$nome. " compente na categoria " .$categoria[$i];
  }
}else if($idade >=60 )
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i]== 'idoso')
    echo" o natador ".$nome. " compente na categoria " .$categoria[$i];
  }
}





?>
