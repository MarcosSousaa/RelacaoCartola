<?php
	Class autoload{
		public function __construct{
			spl_autoload_register($className){
				if(isset($name) && !empty($className)){
					
				}
			}
		}
	}

?>