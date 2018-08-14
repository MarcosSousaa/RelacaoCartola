<?php
	Class Times{
		private $id;
		private $nome;
		private $time;
		private $cel

		public function setId($i){
			$this->id = $i;
		}
		public function getId(){
			return $this->id;
		}

		public function setNome($n){
			$this->nome = $n;
		}
		public function getNome(){
			return $this->nome;
		}

		public function setTime($t){
			$this->time = $t;
		}
		public function getTime(){
			return $this->time;
		}

		public function setCel($c){
			$this->cel = $c;
		}
		public function getCel(){
			return $this->cel;
		}

	}

?>