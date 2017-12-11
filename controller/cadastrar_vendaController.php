<?php
	require_once('VendaController.php');
	require_once('LivroController.php');

	$id = (int)$_POST['id'];
	$qtd_itens = $_POST['qtd_itens'];

	$livro = new LivroController();
	$res = $livro->find($id);

	if($qtd_itens > $res->qtd or $qtd_itens == 0){
		echo "<script> alert('Estoque insuficiente !'); location.href='../view/visualizar_livrosView.php'; </script>";
		return false;
	}

	$total = $qtd_itens * $res->preco;

	$atualiza_estoque = $res->qtd - $qtd_itens;

	$livro->updateEstoque($res->id, $atualiza_estoque);

	$venda = new VendaController();

	$venda->setNome_livro($res->nome);
	$venda->setTipo_livro($res->tipo);
	$venda->setPreco_unit_livro($res->preco);
	$venda->setQtd_itens($qtd_itens);
	$venda->setTotal($total);

	$venda->add_caixa($total);

	if($venda->insert()){
		echo "<script> alert('Venda realizada !'); location.href='../view/visualizar_vendasView.php'; </script>";
	}