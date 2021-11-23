<?php
  declare(strict_types=1);
  function validarNome(Object $objeto): bool{
    $nome = $objeto->__get('nome');
    if(empty($nome)){
      //dodangermsg
      setMensagemErro('O campo nome nao pode estar vazio');
      return false;
    }
    else if(strlen($nome) <3){
      //dodangermsg
    setMensagemErro('O nome deve conter ao menos 3 caracteres');
      return false;
    }
    else if(strlen($nome)>30){
      //dodangermsg
      setMensagemErro('O nome pode conter no maximo 30 caracteres');
      return false;
    }
    else if(preg_match('~[0-9]+~', $nome)){
      setMensagemErro('O nome não pode conter caracteres numéricos');
      return false;
    }
    else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $nome)){
    setMensagemErro('O nome não pode conter caracteres especiais');
      return false;
    }
    return true;
  }
  function validarIdade(Object $objeto) : bool{
    $idade = $objeto->__get('idade');
    echo "<script>console.log('Debug Objects: " . $idade . "' );</script>";
    if(empty($idade)){
      //dodangermsg
      setMensagemErro('O campo idade nao pode estar vazio');
      return false;
    }
    else if(!is_numeric($idade)){
      //dodangermsg
      setMensagemErro('Idade deve ser um numero');
      return false;
    }
    else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $idade)){
      setMensagemErro('O campo idade não pode conter caracteres especiais');
      return false;
    }
    return true;
  }
 ?>
