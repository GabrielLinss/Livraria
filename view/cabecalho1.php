<?php
	function __autoload($class_name){ 
		require_once '../controller/' . $class_name . '.php';
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Livraria</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.1.0.min.js"></script>
</head>
<body>
<!--início do cabeçalho-->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="visualizar_livrosView.php" class="navbar-brand"><img src="../img/brand.png" width="60" height="50"></a>
		</div>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="visualizar_livrosView.php"><span class="glyphicon glyphicon-home"></span> Livros</a></li>
				<li><a href="cadastrar_livroView.php"><span class="glyphicon glyphicon-plus"></span> Cadastrar Livro</a></li>
				<li><a href="visualizar_vendasView.php"><span class="glyphicon glyphicon-list"></span> Vendas</a></li>
				<li><a href="visualizar_estoqueView.php"><span class="glyphicon glyphicon-list"></span> Estoque</a></li>
				<li><a href="visualizar_caixaView.php"><span class="glyphicon glyphicon-usd"></span> Caixa</a></li>
				<li><a href="../controller/sairController.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
			</ul>
		</div>
	</div>
</nav>
<!--fim do cabeçalho-->