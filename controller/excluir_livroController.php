<?php
	require_once('LivroController.php');

	$id = (int)$_GET['id'];

	$livro = new LivroController();

	if($livro->delete($id)){
		echo "<script> alert('Livro removido do estoque !'); location.href='../view/visualizar_livrosView.php'; </script>";
	}