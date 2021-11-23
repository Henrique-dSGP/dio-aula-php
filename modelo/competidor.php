<?php
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

 ?>
