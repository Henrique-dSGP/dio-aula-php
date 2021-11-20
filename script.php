<?php

  $categorias = [];
  $categorias[] = 'infantil';
  $categorias[] = 'adolescente';
  $categorias[] = 'adulto';
  $categorias[] = 'idoso';

  class Competidor{
    private $nome = null;
    private $idade = null;

    public function __set($attr, $value){
      $this->$attr = $value;
    }
    public function __get($attr){
      return $this->$attr;
    }
  }
  $competidor = new Competidor();

  verificaCampos()
  $competidor->__set('nome', $_POST['nome']);
  $competidor->__set('idade', $_POST['idade']);

  verificaCampos($competidor);

  calculaIdade($competidor, $categorias);

  function verificaCampos($objeto){
    if(strlen($objeto->__get('nome')) <3){
      //dodangermsg
    }
    if(strlen($objeto->__get('nome'))>30){
      //dodangermsg
    }
    if(!is_numeric($objeto->__get('idade'))){
      //dodangermsg
    }
  }

  function calculaIdade($objeto, $categorias){
    if($objeto->__get('idade') >= 6 && $objeto->__get('idade') <=12){
      for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil')
          print_r("O nadador ".$objeto->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$objeto->__get('idade')." anos.");
      }
    }
    else if($objeto->__get('idade') >= 13 && $objeto->__get('idade') <=18){
      for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
          echo "O nadador ".$objeto->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$objeto->__get('idade')." anos.";
      }
    }
    else {
      for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto')
          echo "O nadador ".$objeto->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$objeto->__get('idade')." anos.";
      }
    }
  }

 ?>
