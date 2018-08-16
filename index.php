

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Relação-Liga Banfilme</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
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
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>