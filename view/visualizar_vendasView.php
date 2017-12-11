<?php include_once('cabecalho1.php'); ?>
<!--início da tabela de registros de vendas-->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Vendas</h2>
			<div class="table-responsive">
				<table class="table table-condensed table-hover">
					<thead>
						<tr>
							<th>Cod</th>
							<th>Livro</th>
							<th>Tipo</th>
							<th>Preço unitário</th>
							<th>Quantidade</th>
							<th>Total</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$venda = new VendaController();

							foreach($venda->findAll() as $key => $value): ?>

							<tr>
								<td><?php echo $value->id; ?></td>
								<td><?php echo $value->nome_livro; ?></td>
								<td><?php echo $value->tipo_livro; ?></td>
								<td>R$ <?php echo $value->preco_unit_livro; ?></td>
								<td><?php echo $value->qtd_itens; ?></td>
								<td>R$ <?php echo $value->total; ?></td>
								<td><a href="../controller/excluir_vendaController.php?id=<?php echo $value->id ?>" class="btn btn-danger">Excluir</a></td>
							</tr>

						<?php endforeach; ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--fim da tabela de registros de vendas-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>
</body>
</html>