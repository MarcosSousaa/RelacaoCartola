<?php
	Class Times{
		private $id;
		private $participante;
		private $nome;
		private $cel;

		public function setId($i){
			$this->id = $i;
		}
		public function getId(){
			return $this->id;
		}

		public function setParticipante($n){
			$this->participante = $n;
		}
		public function getParticipante(){
			return $this->participante;
		}

		public function setNome($t){
			$this->nome = $t;
		}
		public function getNome(){
			return $this->nome;
		}

		public function setCel($c){
			$this->cel = $c;
		}
		public function getCel(){
			return $this->cel;
		}

	}

?>