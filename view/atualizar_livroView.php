<?php
	include_once('cabecalho1.php');

	$livro = new LivroController();

	$id = (int)$_GET['id'];
	$res = $livro->find($id);
?>
<!--inicio do form-->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-sm-12">
			<h1>Atualizar livro no estoque</h1>
			</br>
			<form class="form-horizontal" action="../controller/atualizar_livroController.php" method="POST">
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="nome">Nome:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $res->nome; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="preco">Preço:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="number" step="0.01" min="0" name="preco" id="preco" class="form-control" value="<?php echo $res->preco; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="qtd">Qtd:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="number" name="qtd" id="qtd" class="form-control" value="<?php echo $res->qtd; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="tipo">Tipo:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<select class="form-control" name="tipo">
							<?php
								$res = $livro->ver_tipo();

								foreach ($res as $key => $value) {
									echo "<option> $value->nome </option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<input type="hidden" name="id" value="<?php echo $res->id; ?>">
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-refresh
"></span> Atualizar</button>
					</div>
				</div>
			</form>
		</div>		
	</div>
</div>
<!--fim do form-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>
</body>
</html>