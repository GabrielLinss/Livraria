<?php
	require_once('Livro.php');

	$id = (int)$_GET['id'];

	$livro = new Livro();

	if($livro->delete($id)){
		header('location: ../view/visualizar_livros.php');
	}