$(document).ready(function(){
        //var url = '/Controller/'
        var url = '/RelacaoCartola/Controller/'
        var flag = true;
	$('#painel').hide();

	$('#btnPesquisa').click(function(){
		$('#tableTimes').empty();
		flag = true;
		if($('#nomeTime').val() < 2){
      	  M.toast({html: 'INFORME O NOME DO TIME', classes: 'rounded'});
      	  flag = false;
		}
		var participante = $('#nomeTime').val();		
		if(flag){
		$.ajax({
			type: 'POST',
			url: url+'Action.php',
			data: {acao:0,participante:participante,nome:participante}
		}).done(function(result){
			$('#painel').show();
			$('table tbody').html(result);
		}).fail(function(){
			M.toast({html: 'NAO FOI TRAZER OS DADOS VERIFIQUE COM O ADM', classes: 'rounded'});
		});
		}		
	});

});