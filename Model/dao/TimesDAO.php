<?php
	require_once '../config.php';
	require_once ABSPATH.'Model/bean/Times.php';
	require_once DBAPI;
	Class TimesDAO{
		private $pdo;
		
		public function __construct(){
			$this->pdo = Conexao::conexao();
		}



		public function lista(Times $times){
			try{
				$sql = "select * from times where participante LIKE ':participante' OR nome LIKE ':nome'";
				$query = $this->pdo->prepare($sql);
				$query->bindParam("participante","%{$times->getParticipante()}%");
				$query->bindParam("nome","%{$times->getNome()}%");
				$query->execute();
				$table = "";
				if($query->rowCount() > 0){
					$result = $query->fetchAll();
					foreach($result as $row){
						$liga = $row['status_liga'] <> "" ? "PAGO" : "PENDENTE";
						$hattrick = $row['status_liga'] <> "" ? "PAGO" : "PENDENTE";
						$turno = $row['status_turno'] <> "" ? "PAGO" : "PENDENTE";
						$table .= '<tr><td>'.$row['participante'].'</td><td>'.$row['nome'].'</td><td>'.$row['cel'].'</td><td>'.$liga.'</td><td>'.$hattrick.'</td><td>'.$turno.'</td></tr>';
					}
					return $table;	
				}
			
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
	}




