<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Livraria</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.1.0.min.js"></script>
</head>
<body>
<!--início do cabeçalho-->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand"><img src="../img/brand.png" width="60" height="50"></a>
		</div>
	</div>
</nav>
<!--fim do cabeçalho-->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4" style="top: 50px">
            <form class="form-horizontal" action="../controller/autenticacao.php" method="POST">
                <div class="form-group">
                    <div class="col-xs-2">
                        <label class="control-label" for="login">Login: </label>
                    </div>
                    <div class="col-xs-10">
                        <input type="text" name="login" id="login" class="form-control" placeholder="Digite seu login" maxlength="15" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2">
                        <label class="control-label" for="senha">Senha: </label>
                    </div>
                    <div class="col-xs-10">
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" maxlength="20" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>