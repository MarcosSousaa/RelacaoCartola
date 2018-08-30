<?php

	Class Usuario{
		private $id;
		private $nome;
		private $login;
		private $pass;

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getLogin(){
			return $this->login;
		}

		public function getPass(){
			return $this->pass;
		}

		public function setId($i){
			$this->id = $i;
		}

		public function setNome($n){
			$this->nome = $n;
		}

		public function setLogin($l){
			$this->login = $l;
		}

		public function setPass($p){
			$this->pass = md5($p);
		}
	}