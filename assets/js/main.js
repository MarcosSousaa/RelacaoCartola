$(document).ready(function(){
        //var url = '/Controller/'
        var url = '/RelacaoCartola/Controller/'
        var flag = true;
	$('#painel').hide();
	$('.modal').modal();
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
			data: {acao:'listaPagamentos',participante:participante,nome:participante}
		}).done(function(result){
			$('#painel').show();
			$('table tbody').html(result);
		}).fail(function(){
<<<<<<< HEAD:js/main.js
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
=======
			M.toast({html: 'NAO FOI TRAZER OS DADOS VERIFIQUE COM O ADM', classes: 'rounded'});
>>>>>>> 2a9a928ed144d9f091cd1bfca6a3f78fe8dfff84:assets/js/main.js
		});
		}		
	});

});