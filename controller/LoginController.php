<?php
	require_once('../model/ConexaoModel.php');

	class LoginController extends ConexaoModel{
		protected $table = 'usuarios';

		private $login;
		private $senha;

		public function setLogin($login){
			$this->login = $login;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
		public function getLogin(){
			return $this->login;
		}
		public function getSenha(){
			return $this->senha;
		}

		public function logar(){
			$sql = "SELECT * FROM $this->table WHERE login = :login AND senha = :senha";
			$stmt = ConexaoModel::prepare($sql);
			$stmt->bindParam(':login', $this->getLogin());
			$stmt->bindParam(':senha', $this->getSenha());
			$stmt->execute();
			if($stmt->fetch(PDO::FETCH_OBJ)){
				return true;
			}
			else{
				return false;
			}
		}
	}