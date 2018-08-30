$(document).ready(function(){
        var url = 'http://localhost/RelacaoCartola/Controller/'
	$('#painel').hide();
	$('.modal').modal();
	$('#btnPesquisa').click(function(){
		if($('#nomeTime').val() < 2){
      	  M.toast({html: 'INFORME O NOME DO TIME', classes: 'rounded'});
		}
		var participante = $('#nomeTime').val();
		$('#tableTimes').empty();
		$.ajax({
			type: 'POST',
			url: url+'Action.php',
			data: {acao:'listaPagamentos',participante:participante,nome:participante}
		}).done(function(result){
			$('#painel').show();
			$('table tbody').html(result);
		}).fail(function(){
			M.toast({html: 'NAO FOI POSSIVEL REALIZAR OS DADOS', classes: 'rounded'});			
		});
	});

	$('#abreModal').click(function(){
		$("#full").fadeOut(function(){
			$("#modalLogin").fadeIn();
		});
	});

	$('#btnCancelar').click(function(){
		$("#modalLogin").fadeOut(function(){
			$("#full").fadeIn();
		});
	});

	$('#btnLogin').click(function(){
		if($('#userName').val() < 2){
			M.toast({html: 'INFORME O NOME DE USUARIO'});
		}
		if($('#userPass').val() < 2){
			M.toast({html: 'INFORME UMA SENHA VALIDA'});
		}

		$.ajax({
			type: 'POST',
			url: url+'Action.php',
			data: {acao: 'login', user: $('#userName').val(), pass: $('#userPass').val()}
		}).done(function(){
			location.href = 'dashboard.php';
		}).fail(function(){
			M.toast({html: 'ERRO AO AUTENTICAR'});
		});
	});

});