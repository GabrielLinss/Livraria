<?php
	require_once('cabecalho1.php');
?>
<!--início da tabela de estoque-->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Estoque</h2>
			<div class="table-responsive">
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Livro</th>
							<th>Preço</th>
							<th>Tipo</th>
							<th>Quantidade</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$livro = new Livro();

							foreach($livro->findAll() as $key => $value): ?>

							<tr>
								<td><?php echo $value->id; ?></td>
								<td><?php echo $value->nome; ?></td>
								<td>R$ <?php echo $value->preco; ?></td>
								<td><?php echo $value->tipo; ?></td>
								<td><?php echo $value->qtd; ?></td>
							</tr>

						<?php endforeach; ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim da tabela de estoque-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>