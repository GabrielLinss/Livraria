<?php
	require_once('cabecalho1.php');

	$livro = new Livro();

	$id = (int)$_GET['id'];
	$res = $livro->find($id);
?>
<!--início de detalhes-->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-6">
			<img src="../img/<?php echo $res->nome_imagem; ?>" class="img-responsive" style="min-height: 300px; max-height: 400px">
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6">
			<h3><?php echo $res->nome; ?></h3>
			<h4>Preço: R$ <?php echo $res->preco; ?></h4>
			<h4>Tipo: <?php echo $res->tipo; ?></h4>
			<form action="../controller/cadastrar_venda.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $res->id; ?>">
				<div class="form-group">
					<div class="col-xs-2 col-md-1">
						<label for="qtd_itens" class="control-label"><h4>Qtd:</h4></label>
					</div>
					<div class="col-xs-4 col-md-2">
						<input id="qtd_itens" type="number" name="qtd_itens" min="1" class="form-control">
					</div>
				</div>
				<div class="col-xs-12 col-md-2">
					<button type="submit" class="btn btn-success">Vender</button>
				</div>
				<div class="col-xs-12 col-md-2">
					<a href="../controller/excluir_livro.php?id=<?php echo $res->id; ?>" class="btn btn-danger">Excluir</a>
				</div>
			</form>
		</div>
	</div>
</div>
<!--fim da detalhes-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>