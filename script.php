<?php
$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolecente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';



$nome = $_POST['nome'];
$idade = $_POST['idade'];


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
