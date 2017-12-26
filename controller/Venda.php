<?php
	require_once('Crud.php');

	class Venda extends Crud{
		protected $table = 'vendas';
		private $nome_livro;
		private $tipo_livro;
		private $preco_unit_livro;
		private $qtd_itens;
		private $total;

		public function setNome_livro($nome_livro){
			$this->nome_livro = $nome_livro;
		}
		public function setTipo_livro($tipo_livro){
			$this->tipo_livro = $tipo_livro;
		}
		public function setPreco_unit_livro($preco_unit_livro){
			$this->preco_unit_livro = $preco_unit_livro;
		}
		public function setQtd_itens($qtd_itens){
			$this->qtd_itens = $qtd_itens;
		}
		public function setTotal($total){
			$this->total = $total;
		}

		public function insert(){
			$sql = "INSERT INTO $this->table (nome_livro, tipo_livro, preco_unit_livro, qtd_itens, total) VALUES (:nome_livro, :tipo_livro, :preco_unit_livro, :qtd_itens, :total)";
			$stmt = Conexao::prepare($sql);
			$stmt->bindParam(':nome_livro', $this->nome_livro);
			$stmt->bindParam(':tipo_livro', $this->tipo_livro);
			$stmt->bindParam(':preco_unit_livro', $this->preco_unit_livro);
			$stmt->bindParam(':qtd_itens', $this->qtd_itens);
			$stmt->bindParam(':total', $this->total);

			return $stmt->execute();
		}

		public function update($id){
			$sql = "UPDATE $this->table SET nome_livro = :nome_livro, tipo_livro = :tipo_livro, preco_unit_livro = :preco_unit_livro, qtd_itens = :qtd_itens, total = :total WHERE id = :id";
			$stmt = Conexao::prepare($sql);
			$stmt->bindParam(':nome_livro', $this->nome_livro);
			$stmt->bindParam(':tipo_livro', $this->tipo_livro);
			$stmt->bindParam(':preco_unit_livro', $this->preco_unit_livro);
			$stmt->bindParam(':qtd_itens', $this->qtd_itens);
			$stmt->bindParam(':total', $this->total);
			$stmt->bindParam(':id', $id);

			return $stmt->execute();
		}

		public function ver_caixa(){
			$sql = "SELECT * FROM caixa";
			$stmt = Conexao::prepare($sql);
			$stmt->execute();

			return $stmt->fetchAll();
		}

		public function update_caixa($valor){
			$sql = "UPDATE caixa SET valor = valor + :valor WHERE id = 1";
			$stmt = Conexao::prepare($sql);
			$stmt->bindParam(':valor', $valor);

			return $stmt->execute();
		}
	}