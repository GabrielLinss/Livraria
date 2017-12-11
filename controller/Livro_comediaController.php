<?php
	require_once('LivroController.php');

	class Livro_comediaController extends LivroController{
		protected $table = 'livros';
		private $nome;
		private $preco;
		private $qtd;
		private $tipo;
		private $nome_imagem;
		private $tipo_obj = "capa brochura";

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setPreco($preco){
			$this->preco = $preco;
		}
		public function setQtd($qtd){
			$this->qtd = $qtd;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function setNome_imagem($nome_imagem){
			$this->nome_imagem = $nome_imagem;
		}

		public function insert(){
			$sql = "INSERT INTO $this->table (nome, preco, qtd, tipo, capa, tipo_obj) VALUES (:nome, :preco, :qtd, :tipo, :nome_imagem, :tipo_obj)";
			$stmt = ConexaoModel::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			$stmt->bindParam(':preco', $this->preco);
			$stmt->bindParam(':qtd', $this->qtd);
			$stmt->bindParam(':tipo', $this->tipo);
			$stmt->bindParam(':nome_imagem', $this->nome_imagem);
			$stmt->bindParam(':tipo_obj', $this->tipo_obj);

			return $stmt->execute();
		}

		public function update($id){
			$sql = "UPDATE $this->table SET nome = :nome, preco = :preco, qtd = :qtd, tipo = :tipo, tipo_obj = :tipo_obj WHERE id = :id";
			$stmt = ConexaoModel::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			$stmt->bindParam(':preco', $this->preco);
			$stmt->bindParam(':qtd', $this->qtd);
			$stmt->bindParam(':tipo', $this->tipo);
			$stmt->bindParam(':tipo_obj', $this->tipo_obj);
			$stmt->bindParam(':id', $id);

			return $stmt->execute();
		}

		public function updateEstoque($id, $qtd){
			$sql = "UPDATE $this->table SET qtd = :qtd WHERE id = :id";
			$stmt = ConexaoModel::prepare($sql);
			$stmt->bindParam(':qtd', $qtd);
			$stmt->bindParam(':id', $id);

			return $stmt->execute();
		}

		public function ver_tipo(){
			$sql = "SELECT * FROM tipos";
			$stmt = ConexaoModel::prepare($sql);
			$stmt->execute();

			return $stmt->fetchAll();
		}
	}