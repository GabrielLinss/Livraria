<?php
	require_once('Venda.php');

	$id = (int)$_GET['id'];

	$venda = new Venda();

	if($venda->delete($id)){
		echo "<script> alert('Registro da venda excluído!'); location.href='../view/visualizar_vendas.php'; </script>";
	}