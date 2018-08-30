

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Relação-Liga Banfilme</title>
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
			</div>
			<div class="col s4">
				<a class="waves-effect waves-light btn" id="btnPesquisa">Verificar</a>
			</div>
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
</body>
</html>