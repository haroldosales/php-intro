<?php

session_start();

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
  $_SESSION['mesagem-de-erro'] = 'O nome nao pode esta vazio, favor preençe novamente';
 header('Location:index.php');
 return;
}
else if(strlen($nome)<3)
{
  //strlen quantidade de caracter
  $_SESSION['mesagem-de-erro'] = 'O nome nao pode ter menos de 3 letras';
  header('Location:index.php');
  return;
}else if(strlen($nome) > 40){
  $_SESSION['mesagem-de-erro'] = 'O nome nao pode ter mais de 40 caracte';
  header('Location:index.php');
  return;
}
//conferir o numeric
else if(!is_numeric($idade)){
  $_SESSION['mesagem-de-erro'] = 'A idade so pode possuir numeros';
  header('Location:index.php');
  return;
}

 if($idade >= 6 && $idade<=17)
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i] == 'infantil')
    $_SESSION['mesagem-de-sucesso']= " o natador ".$nome. " compente na categoria " . $categoria[$i];
    header('Location:index.php');
  
  }
} if($idade >=18 && $idade <=25 )
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i]== 'adolecente')
    $_SESSION['mesagem-de-sucesso'] = " o natador ".$nome. " compente na categoria " .$categoria[$i];
    header('Location:index.php');
  
  }
}else if($idade >=26 && $idade <=30 )
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i]== 'adulto')
    $_SESSION['mesagem-de-sucesso'] = " o natador ".$nome. " compente na categoria " .$categoria[$i];
    header('Location:index.php');
  
  }
}else if($idade >=60 )
{
  for($i = 0 ; $i <= count($categoria);$i++)
  {
    if($categoria[$i]== 'idoso')
    $_SESSION['mesagem-de-sucesso'] = " o natador ".$nome. " compente na categoria " .$categoria[$i];
    header('Location:index.php');
  
  }
}





?>
