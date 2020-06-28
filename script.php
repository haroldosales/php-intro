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
