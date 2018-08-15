<?php 
/** DEFININDO CAMINHO PARA A PASTA DO SYSTEM */
if( ! defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** DEFININDO CAMINHO API BD */
if(! defined('DBAPI') )
	define('DBAPI', ABSPATH . 'Model/datab/Conexao.php');
/** TEMPLATES **/
define('HEADER_TEMPLATE', ABSPATH. 'include/header.php');
define('FOOTER_TEMPLATE', ABSPATH. 'include/footer.php');
define('MENU_TEMPLATE', ABSPATH. 'include/menu.php');
