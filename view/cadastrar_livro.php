<?php
	require_once('cabecalho1.php');
?>
<!--inicio do form-->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12 col-sm-12">
			<h1>Adicionar livro ao estoque</h1>
			</br>
			<form class="form-horizontal" action="../controller/cadastrar_livro.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="nome">Nome:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="text" name="nome" id="nome" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="preco">Preço:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="number" step="0.01" min="0" name="preco" id="preco" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="qtd">Qtd:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="number" name="qtd" id="qtd" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="tipo">Tipo:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<select class="form-control" name="tipo" id="tipo">
							<?php
								$livro = new Livro();
								$res = $livro->ver_tipo();

								foreach ($res as $key => $value) {
									echo "<option> $value->nome </option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 col-md-2 col-lg-1">
						<label class="control-label" for="capa">Capa:</label>
					</div>
					<div class="col-xs-10 col-md-10 col-lg-4">
						<input type="file" name="capa" id="capa" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus
"></span> Adicionar</button>
					</div>
				</div>
			</form>
		</div>		
	</div>
</div>
<!--fim do form-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>