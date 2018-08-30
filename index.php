

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Relação-Liga Banfilme</title>
<<<<<<< HEAD
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
  	<a class="btn-floating btn-large waves-effect waves-light blue" id="abreModal">
  		<i class="material-icons">account_circle</i>
  	</a>
  	<!-- Modal Structure -->  	
  	<div class="modal" id="modalLogin">
  		<div class="modal-content">
  			<h4>Acesso Restrito</h4>
  			<div class="input-field col s4">
				<input placeholder="Usuario" id="userName" type="text" class="validate">
          		<label for="userName">Usuario</label>
			</div>

			<div class="input-field col s4">
				<input placeholder="Senha" id="userPass" type="password" class="validate">
          		<label for="userPass">Password</label>
			</div>		
  		</div>
  		<div class="modal-footer">
			<div class="col s2">
				<a class="waves-effect waves-light btn" id="btnLogin">Login</a>
				<a class="waves-effect waves-light btn modal-close" id="btnCancelar">Cancelar</a>
=======
	<link rel="stylesheet" href="assets/css/materialize.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<div class="row" id="title">
		<div class="col s4"></div>
		<div id="logo" class="col s4"></div>		
		<h5 class="center">RELAÇÃO DE PAGAMENTOS</h5>
			
	</div>
	<section class="container" id="filtro">				
		<div class="row">		
			<div class="input-field col s8">
				<input placeholder="Nome Participante/Time" id="nomeTime" type="text" class="validate">
          		<label for="nomeTime">Nome Partipante/Time</label>
>>>>>>> 2a9a928ed144d9f091cd1bfca6a3f78fe8dfff84
			</div>
  		</div>
  </div>
  <section id="full">
		<div class="row" id="title">
				<h5 class="center">RELAÇÃO DE PAGAMENTOS - LIGA BANFILME</h5>
		</div>
		<section class="container" id="filtro">				
			<div class="row">	
				<div class="col s4"></div>		
				<div class="input-field col s4">
					<input placeholder="Nome Time" id="nomeTime" type="text" class="validate">
	          		<label for="nomeTime">Nome Time</label>
				</div>
				<div class="col s4">
					<a class="waves-effect waves-light btn" id="btnPesquisa">Verificar</a>
				</div>
			</div>	
		</section>
		<hr>
		<div class="row">
			<div id="painel">
				<table class="striped">
					<thead>
						<tr>
							<th>Participante</th>
							<th>Nome Time</th>
							<th>R$ Liga</th>
							<th>R$ Campeão 1 - Turno</th>
							<th>R$ Hat-Trick Rodada 9 </th>
						</tr>
					</thead>
					<tbody id="tableTimes">
						
					</tbody>
				</table>	
			</div>
<<<<<<< HEAD
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/main.js"></script>
=======
		</div>	
	</section>
	<hr>
	<div class="row">
		<div id="painel">
			<table class="bordered striped centered highlight responsive-table">
				<thead>
					<tr>
						<th>Nome Time</th>
						<th>Participante</th>
						<th>R$ Liga</th>
						<th>R$ Campeão 1 - Turno</th>
						<th>R$ Hat-Trick Rodada 9 </th>
					</tr>
				</thead>
				<tbody id="tableTimes">
					
				</tbody>
			</table>	
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/materialize.min.js"></script>
	<script src="assets/js/main.js"></script>
>>>>>>> 2a9a928ed144d9f091cd1bfca6a3f78fe8dfff84
</body>
</html>