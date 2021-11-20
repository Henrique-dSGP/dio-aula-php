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
  $competidor->__set('nome', $_POST['nome']);
  $competidor->__set('idade', $_POST['idade']);

  calculaIdade($competidor, $categorias);

  function calculaIdade($entidade, $categorias){
    if($entidade->__get('idade') >= 6 && $entidade->__get('idade') <=12){
      for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil')
          print_r("O nadador ".$entidade->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$entidade->__get('idade')." anos.");
      }
    }
    else if($entidade->__get('idade') >= 13 && $entidade->__get('idade') <=18){
      for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
          echo "O nadador ".$entidade->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$entidade->__get('idade')." anos.";
      }
    }
    else {
      for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto')
          echo "O nadador ".$entidade->__get('nome'). " compete na categoria ".$categorias[$i]." por possuir ".$entidade->__get('idade')." anos.";
      }
    }
  }

 ?>
