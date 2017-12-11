<?php
	include_once('cabecalho1.php');

	$venda = new VendaController();
	$res = $venda->ver_caixa();

	foreach($res as $key => $value):
?>
<!--início de detalhes-->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Caixa atual</h2>
			<h3>R$ <?php echo $value->valor ?></h3>
		</div>
	</div>
</div>

<?php endforeach; ?>
<!--fim da detalhes-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>
</body>
</html>