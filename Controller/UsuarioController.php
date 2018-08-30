<?php
	require_once '../config.php';
	require_once ABSPATH.'Model/bean/Usuario.php';
	require_once ABSPATH.'Model/dao/UsuarioDAO.php';

	Class UsuarioController{		
		 /**
	    * @throws Exception
	    * @var timesDAO
	    */
	    private $usuarioDAO;
	    /**
	    * @throws Exception
	    * @var timesModel
	    */
	    private $usuarioModel;
	    /**
	    * @method __construct
	    */
	    public function __construct(){
	        $this->usuarioDAO = new UsuarioDAO();   
	        $this->usuarioModel = new Usuario();  	
	    }


	    public function doLogin(){
	    	$this->usuarioModel->setLogin(addslashes(filter_input(INPUT_POST, 'user')));
	    	$this->usuarioModel->setPass(addslashes(filter_input(INPUT_POST, 'pass')));    		
    		if($resultado = $this->usuarioDAO->doLogin($this->usuarioModel)){
    			echo "true";
    			return;
    		}
    		echo "false";
    		return;    		
	    }
	}