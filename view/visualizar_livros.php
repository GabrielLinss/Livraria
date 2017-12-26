<?php
	require_once('cabecalho1.php');
?>
<!--início da estante-->
<div class="container">
	<div class="row">
		<?php
			$livro = new Livro();

			foreach($livro->findAll() as $key => $value): ?>

				<div class="col-md-2 col-xs-6 col-sm-4" style="max-height: 300px">
				  	<div>
				  		<a href="../view/visualizar_livro_detalhes.php?id=<?php echo $value->id; ?>" class="thumbnail">
				  			<img src="../img/<?php echo $value->nome_imagem; ?>" style="max-height: 100px">
		       	  				<div class='caption text-left'>
			       					<h5 style="max-height: 16px"><?php echo $value->nome; ?></h5>
				    				<h6>Preço: R$ <?php echo $value->preco; ?></h6>
				      				<h6>Tipo: <?php echo $value->tipo; ?></h6>
				      				<h6>Mais detalhes</h6>
				      			</div>
					 	</a>
					</div>
			 	</div>

		<?php endforeach; ?>
	</div>
</div>
<!--fim da estante-->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-3.1.0.min.js"></script>