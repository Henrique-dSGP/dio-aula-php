<?php
  session_start();
  function setMensagemErro(string $mensagem) : void{
    $_SESSION['mensagem-de-erro'] = $mensagem;
  }
  function getMensagemErro(): ?string{
    if(isset($_SESSION['mensagem-de-erro']))
      return $_SESSION['mensagem-de-erro'];
    return null;
  }
  function setMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
  }
  function getMensagemSucesso(): ?string{
    if(isset($_SESSION['mensagem-de-sucesso']))
      return $_SESSION['mensagem-de-sucesso'];
    return null;
  }
  function rmvMensagemErro(): void{
    if(isset($_SESSION['mensagem-de-erro']))
      unset($_SESSION['mensagem-de-erro']);
  }
  function rmvMensagemSucesso(): void{
    if(isset($_SESSION['mensagem-de-sucesso']))
      unset($_SESSION['mensagem-de-sucesso']);
  }

 ?>
