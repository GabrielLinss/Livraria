<?php
	require_once('Venda.php');

	$id = (int)$_GET['id'];

	$venda = new Venda();

	if($venda->delete($id)){
		echo "<script> alert('Registro da venda excluído!'); </script";
		header(location: '../view/visualizar_vendas.php');
	}