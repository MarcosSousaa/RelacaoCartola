
<?php include 'config.php' ?>
<?php
	session_start();            
	if (!isset($_SESSION['logado'])){
		header('Location:'. BASEURL.'index.php');	
	}
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
            session_destroy();
            session_unset();
            header("Location:".BASEURL."index.php");
        }
?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="UTF-8">
			<title>Relação-Liga Banfilme</title>
			<!--Import Google Icon Font-->
      		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" href="css/materialize.min.css">
			<link rel="stylesheet" href="css/dash.css">
		</head>
		<body>
			<section>
				<ul id="menuPrincipal" class="dropdown-content">
					<li><a href="#!">Times</a></li>
			  		<li><a href="#!">Participações</a></li>
			  		<li class="divider"></li>
			  		<li><a href="#!">Historico</a></li>	
				</ul>				

				<nav>
  					<div class="nav-wrapper">
    					<a href="#!" class="brand-logo center">Logo</a>
    					<ul class="left hide-on-med-and-down">
    						<li>
      							<a class="dropdown-trigger" href="#!" data-target="menuPrincipal">Aplicação
      								<i class="material-icons right">arrow_drop_down</i>
      							</a>
      						</li>
      						<li><a href="#">Graficos</a></li>
      						<li><a href="?action=logout">Logout</a></li>
    					</ul>
  					</div>
				</nav>
			</section>						

			<script src="js/jquery.min.js"></script>
			<script src="js/materialize.min.js"></script>
			<script src="js/dash.js"></script>
		</body>
	</html>