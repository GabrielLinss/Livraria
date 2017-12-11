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
			<a href="visualizar_livros.php" class="navbar-brand"><img src="../img/brand.png" width="60" height="50"></a>
		</div>
	</div>
</nav>
<!--fim do cabeçalho-->
<div class="container">
        <div class="col-xs-12 col-md-4" style="top: 50px">
            <form class="form-signin" action="../controller/autenticacaoController.php" method="POST">
                <input type="text" name="login" id="login" class="form-control" placeholder="Login" required autofocus>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form>
        </div>
</div>