<?php
	require_once '../config.php';
	require_once ABSPATH.'Model/bean/Times.php';
	require_once ABSPATH.'Model/dao/TimesDAO.php';
	Class TimesController{
		
		 /**
	    * @throws Exception
	    * @var timesDAO
	    */
	    private $timesDAO;
	    /**
	    * @throws Exception
	    * @var timesModel
	    */
	    private $timesModel;
	    /**
	    * @method __construct
	    */
	    public function __construct(){
	        $this->timesDAO = new TimesDAO();   
	        $this->timesModel = new Times();  	
	    }

    	public function lista(){
    		$this->timesModel->setParticipante($_POST['participante']);
    		$this->timesModel->setNome($_POST['nome']);
    		$resultado = $this->timesDAO->lista($this->timesModel);
    		return json_encode($resultado);
    	}
	}

?>