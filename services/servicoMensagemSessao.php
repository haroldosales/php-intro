<?php

session_start();

function setarMensagemSucesso(string $mensagem): void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;


}
//colocando ? coringa , faz obter nesse trader_cdl3starsinsouth retorna uma string ou null
function obterMensagemSucesso() : ?string
{
  if(isset($_SESSION['mensagem-de-sucesso']))
  {
    return $_SESSION['mensagem-de-sucesso'];

    }
    return null;

}
function setarMensagemErro(string $mensagem): void
{

     $_SESSION['mensagem-de-erro'] = $mensagem;

}

//colocando ? coringa , faz obternessetrader_cdl3starsinsouth retorna uma string ou null
function obterMensagemError() : ?string
{
  if(isset($_SESSION['mensagem-de-erro']))

    return $_SESSION['mensagem-de-erro'];



return null;

}

function removerMensagemSucesso() :void
{
  if(isset($_SESSION['mensagem-de-sucesso']))
    unset ($_SESSION['mensagem-de-sucesso']);

}
//unset serve para eliminar
function removerMensagemErro() :void
{
  if(isset($_SESSION['mensagem-de-erro']))

    unset ( $_SESSION['mensagem-de-erro']);
    

}


 ?>
