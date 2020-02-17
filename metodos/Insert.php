<?php 

	require_once("../class/Connection.php");

	$inserir = new Connection();

    $inserir->query("INSERT INTO tb_funcao (nomeFuncao, descricaoFuncao) VALUES('Entregador', 'Entrega os vidros em cada casa')");

 ?>