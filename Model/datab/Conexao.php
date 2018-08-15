<?php
	
	Class Conexao{	
		protected static $db;	
		
		public function __construct(){
		 	$db_host = "localhost";
	        $db_nome = "cartola";
	        $db_usuario = "root";
	        $db_senha = "";
	        $db_driver = "mysql";

	        try{
	            # Atribui o objeto PDO à variável $db.
	            self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
	            # Garante que o PDO lance exceções durante erros.
	            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            # Garante que os dados sejam armazenados com codificação UFT-8.
	            self::$db->exec('SET NAMES utf8');
        	}catch (PDOException $e){
            echo $e->getMessage();
        	}
		}

		 # Método estático - acessível sem instanciação.
    	public static function conexao(){
        	# Garante uma única instância. Se não existe uma conexão, criamos uma nova.
        	if (!self::$db){
            	new Conexao();
        	}
        	# Retorna a conexão.
        	return self::$db;
    }
	}
	




?>