<?php
	require_once('cabecalho1.php');

	$venda = new Venda();
	$res = $venda->ver_caixa();

	foreach($res as $key => $value):
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Caixa atual</h2>
			<h3>R$ <?php echo $value->valor ?></h3>
		</div>
	</div>
</div>

<?php endforeach; ?>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>