<?php
	require_once('Livro.php');

	$id = (int)$_GET['id'];

	$livro = new Livro();

	if($livro->delete($id)){
		echo "<script> alert('Livro removido do estoque !'); </script>";
		header(location: '../view/visualizar_livros.php');
	}