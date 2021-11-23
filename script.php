<?php
  require"./modelo/competidor.php";
  include "./servicos/servicoCategoriaCompetidor.php";
  include "./servicos/servicoMsgSessao.php";
  include "./servicos/servicosValidacao.php";


  $competidor = new Competidor();
  $competidor->__set('nome', $_POST['nome']);
  $competidor->__set('idade', $_POST['idade']);

  defineCategoriaCompetidor($competidor);
  header('location: index.php')



 ?>
