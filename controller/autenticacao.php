<?php
	require_once('Login.php');

	$login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
	$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

	$l = new Login();
	$l->setLogin($login);
	$l->setSenha($senha);

	if($l->logar()){
		session_start();
		$_SESSION['login'] = $login;
		echo "<script> location.href='../view/visualizar_livros.php'; </script>";
	}
	else{
		echo "<script> alert('Login ou senha incorretos!'); location.href='../view/login.php'; </script>";
	}