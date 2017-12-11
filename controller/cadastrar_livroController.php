<?php
	require_once('Livro_aventuraController.php');
	require_once('Livro_comediaController.php');
	require_once('Livro_dramaController.php');

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$qtd = $_POST['qtd'];
	$tipo = $_POST['tipo'];
	$capa = $_FILES['capa'];

	if (!empty($capa["name"])) {	
 
		$error = array();
 
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $capa["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
 
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $capa["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../img/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($capa["tmp_name"], $caminho_imagem);
		}
	
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}

	if($tipo == "Aventura"){
		$livro = new Livro_aventuraController();
	}
	elseif($tipo == "Comedia"){
		$livro = new Livro_comediaController();
	}
	elseif($tipo == "Drama"){
		$livro = new Livro_dramaController();
	}


	$livro->setNome($nome);
	$livro->setPreco($preco);
	$livro->setQtd($qtd);
	$livro->setTipo($tipo);
	$livro->setNome_imagem($nome_imagem);

	if($livro->insert()){
		echo "<script> alert('Livro cadastrado !'); location.href='../view/cadastrar_livroView.php'; </script>";
	}