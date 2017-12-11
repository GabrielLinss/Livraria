<?php
	require_once('LoginController.php');

	$login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
	$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

	$l = new LoginController();
	$l->setLogin($login);
	$l->setSenha($senha);

	if($l->logar()){
		echo "<script> location.href='../view/visualizar_livrosView.php'; </script>";
	}
	else{
		echo "<script> alert('Login ou senha incorretos!'); location.href='../view/loginView.php'; </script>";
	}