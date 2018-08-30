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
				$sql = "select * from times where participante LIKE ? OR nome LIKE ? ORDER BY nome";
				$query = $this->pdo->prepare($sql);
				$participante = '%'.$times->getParticipante().'%';
				$nome = '%'.$times->getNome().'%';
				$query->bindParam(1,$participante);
				$query->bindParam(2,$nome);
				$query->execute();
				$table = "";
				if($query->rowCount() > 0){
					$result = $query->fetchAll();
					foreach($result as $row){
						$liga = $row['status_liga'] <> "" ? "PAGO" : "PENDENTE";
						$hattrick = $row['status_hattrick1'] <> "" ? "PAGO" : "PENDENTE";
						$turno = $row['status_turno'] <> "" ? "PAGO" : "PENDENTE";			
						$table .= '<tr><td>'.$row['participante'].'</td>';
						$table .= '<td>'.$row['nome'].'</td>';
						if($liga == "PAGO"){
							$table .= "<td style='color:#2ecc71;'>".$liga."</td>";
						}
						else {
							$table .= "<td style='color:#e74c3c;'>".$liga."</td>";
						}
						if($turno == "PAGO"){
							$table .= "<td style='color:#2ecc71;'>".$turno."</td>";
						}else{
							$table .= "<td style='color:#e74c3c;'>".$turno."</td>";
						}
						if($hattrick == "PAGO"){
							$table .= "<td style='color:#2ecc71;'>".$hattrick."</td>";
						}else{
							$table .= "<td style='color:#e74c3c;'>".$hattrick."</td>";
						}						
					}
					return $table;	
				}
				
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
	}




