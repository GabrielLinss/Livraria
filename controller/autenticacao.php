<?php
	require_once('Login.php');

	$login = filter_input(INPUT_POST, "login", FILTER_DEFAULT);
	$senha = filter_input(INPUT_POST, "senha", FILTER_DEFAULT);

	$l = new Login();
	$l->setLogin($login);
	$l->setSenha($senha);

	if($l->logar()){
		session_start();
		$_SESSION['login'] = $login;
		header('location: ../view/visualizar_livros.php');
	}
	else{
		header('location: ../view/login.php');
	}
