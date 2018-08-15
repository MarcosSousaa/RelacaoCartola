<?php
	require_once '../config.php';
	require_once ABSPATH.'Controller/TimesController.php';

	header('Content-Type: application/json', true);
	$acao = filter_input(INPUT_POST, 'acao');
	$controller = new TimesController();

	if($acao == 0){
		$result = $controller->lista();
		echo $result;
	}
