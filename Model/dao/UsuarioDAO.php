<?php
	require_once '../config.php';
	require_once ABSPATH.'Model/bean/Usuario.php';
	require_once DBAPI;
	Class UsuarioDAO{
		private $pdo;
		
		public function __construct(){
			$this->pdo = Conexao::conexao();
		}

                public function doLogin(Usuario $usuario){
			
			try{
				$sql = "select * from user where login = ? AND pass = ? LIMIT 1";
				$query = $this->pdo->prepare($sql);
				$userName = $usuario->getLogin();
				$userPass = $usuario->getPass();
				$query->bindParam(1,$userName);
				$query->bindParam(2,$userPass);
				$query->execute();				
				if($query->rowCount() == 1){
					session_start();
					$_SESSION['usuario'] = $query->fetch(PDO::FETCH_OBJ);
					$_SESSION['logado'] = true;
					return true;
				}
				return false;
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
	}