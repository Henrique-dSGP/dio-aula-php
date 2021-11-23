<?php

  function defineCategoriaCompetidor(Object $competidor) : ?string
  {
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    $objeto = $competidor;

    if(validarNome($objeto) && validarIdade($objeto)){
      rmvMensagemErro();
      rmvMensagemSucesso();
      if($objeto->__get('idade') >= 6 && $objeto->__get('idade') <=12){
        for($i = 0; $i <= count($categorias); $i++){
          if($categorias[$i] == 'infantil'){
            setMensagemSucesso("O nadador ".$objeto->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$objeto->__get('idade')." anos.");
            return null;
          }
        }
      }
      else if($objeto->__get('idade') >= 13 && $objeto->__get('idade') <=18){
        echo "<script>console.log('Debug Objects: " . $objeto->__get('idade') . "' );</script>";
        for($i = 0; $i <=count($categorias); $i++){
          if($categorias[$i]=='adolescente'){

            setMensagemSucesso("O nadador ".$objeto->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$objeto->__get('idade')." anos.");
            return null;
          }
        }
      }
      else {
        for($i = 0; $i <= count($categorias); $i++){
          if($categorias[$i] == 'adulto'){
            setMensagemSucesso("O nadador ".$objeto->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$objeto->__get('idade')." anos.");
            return null;
          }
        }
      }

    }
    else {
      rmvMensagemSucesso();
      return getMensagemErro();
    }




  }
 ?>
