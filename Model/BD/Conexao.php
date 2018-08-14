<?php
	
	Class Conexao extends PDO{		
		private $host = 'localhost';
		private $usr = 'root';
		private $pass = '';
		private $db = '';			

		public function __construct(){
			try{
				parent::__construct("mysql:host={$this->host};dbname={$this->db}","{$this->usr}","{$this->pass}");
			} catch(PDOException $e){
				echo $e->getMessage();
			}

			
		}
	}
	




?>