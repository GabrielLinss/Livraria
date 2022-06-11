<?php
	require_once('Venda.php');

	$id = (int)$_GET['id'];

	$venda = new Venda();

	if($venda->delete($id)){
		header('location: ../view/visualizar_vendas.php');
	}