<?php
	require_once('LivroController.php');

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$qtd = $_POST['qtd'];
	$tipo = $_POST['tipo'];

	$livro = new LivroController();

	$livro->setNome($nome);
	$livro->setPreco($preco);
	$livro->setQtd($qtd);
	$livro->setTipo($tipo);

	if($livro->update($id)){
		echo "<script> alert('Livro atualizado !'); location.href='../view/visualizar_livro_detalhesView.php?id=$id'; </script>";
	}
	else{
		echo "Ocorreu um erro!";
	}