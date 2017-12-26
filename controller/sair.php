<?php
	session_start();

	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	session_destroy();
	echo "<script> alert('Sessão encerrada!'); location.href='../view/login.php'; </script>";