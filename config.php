<?php 
/** DEFININDO CAMINHO PARA A PASTA DO SYSTEM */
if( ! defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** DEFININDO CAMINHO API BD */
if(! defined('DBAPI') )
	define('DBAPI', ABSPATH . 'Model/datab/Conexao.php');
/** DEFININDO URL **/
if( ! defined('BASEURL') )
	define('BASEURL',	'/RelacaoCartola/');


