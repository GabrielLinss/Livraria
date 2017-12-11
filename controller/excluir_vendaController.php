<?php
	require_once('VendaController.php');

	$id = (int)$_GET['id'];

	$venda = new VendaController();

	if($venda->delete($id)){
		echo "<script> alert('Registro da venda excluído!'); location.href='../view/visualizar_vendasView.php'; </script>";
	}