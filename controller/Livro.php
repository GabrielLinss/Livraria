<?php
	require_once('Crud.php');

	class Livro extends Crud{
		protected $table = 'livros';
		private $nome;
		private $preco;
		private $qtd;
		private $tipo;
		private $nome_imagem;

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
			$sql = "INSERT INTO $this->table (nome, preco, qtd, tipo, nome_imagem) VALUES (:nome, :preco, :qtd, :tipo, :nome_imagem)";
			$stmt = Conexao::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			$stmt->bindParam(':preco', $this->preco);
			$stmt->bindParam(':qtd', $this->qtd);
			$stmt->bindParam(':tipo', $this->tipo);
			$stmt->bindParam(':nome_imagem', $this->nome_imagem);

			return $stmt->execute();
		}

		public function update($id){
			$sql = "UPDATE $this->table SET nome = :nome, preco = :preco, qtd = :qtd, tipo = :tipo WHERE id = :id";
			$stmt = Conexao::prepare($sql);
			$stmt->bindParam(':nome', $this->nome);
			$stmt->bindParam(':preco', $this->preco);
			$stmt->bindParam(':qtd', $this->qtd);
			$stmt->bindParam(':tipo', $this->tipo);
			$stmt->bindParam(':id', $id);

			return $stmt->execute();
		}

		public function update_estoque($id, $qtd){
			$sql = "UPDATE $this->table SET qtd = :qtd WHERE id = :id";
			$stmt = Conexao::prepare($sql);
			$stmt->bindParam(':qtd', $qtd);
			$stmt->bindParam(':id', $id);

			return $stmt->execute();
		}

		public function ver_tipo(){
			$sql = "SELECT * FROM tipos";
			$stmt = Conexao::prepare($sql);
			$stmt->execute();

			return $stmt->fetchAll();
		}
	}