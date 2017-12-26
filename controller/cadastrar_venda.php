<?php
	require_once('Venda.php');
	require_once('Livro.php');

	$id = (int)$_POST['id'];
	$qtd_itens = $_POST['qtd_itens'];

	$livro = new Livro();
	$res = $livro->find($id);

	if($qtd_itens > $res->qtd or $qtd_itens == 0){
		echo "<script> alert('Estoque insuficiente !'); location.href='../view/visualizar_livros.php'; </script>";
		return false;
	}

	$total = $qtd_itens * $res->preco;

	$atualiza_estoque = $res->qtd - $qtd_itens;

	$livro->update_estoque($res->id, $atualiza_estoque);

	$venda = new Venda();

	$venda->setNome_livro($res->nome);
	$venda->setTipo_livro($res->tipo);
	$venda->setPreco_unit_livro($res->preco);
	$venda->setQtd_itens($qtd_itens);
	$venda->setTotal($total);

	$venda->update_caixa($total);

	if($venda->insert()){
		echo "<script> alert('Venda realizada !'); location.href='../view/visualizar_vendas.php'; </script>";
	}