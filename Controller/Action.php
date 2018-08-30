<?php
	//require_once '../autoload.php';
	require_once '../config.php';
	require_once ABSPATH.'Controller/TimesController.php';
	require_once ABSPATH.'Controller/UsuarioController.php';

	header('Content-Type: application/json', true);
	$acao = filter_input(INPUT_POST, 'acao');
	$times = new TimesController();
	$usuario = new UsuarioController();
		
	switch ($acao) {
		case 'login':
			$result = $usuario->doLogin();			
			break;
		case 'listaPagamentos':
			$result = $times->lista();
			echo $result;
			break;		
	}	
