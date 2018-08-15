$(document).ready(function(){

	$('#painel').hide();

	$('#btnPesquisa').click(function(){
		if($('#nomeTime').val() < 2){
      	  M.toast({html: 'INFORME O NOME DO TIME', classes: 'rounded'});
		}
		var participante = $('#nomeTime').val();
		$('#tableTimes').empty();
		$.ajax({
			type: 'POST',
			url: 'Controller/Action.php',
			data: {acao:0,participante:participante,nome:participante}
		}).done(function(result){
			$('#painel').show();
			$('table tbody').html(result);
		}).fail(function(){
			M.toast({html: 'NAO FOI POSSIVEL REALIZAR OS DADOS', classes: 'rounded'});
		});
	});

});