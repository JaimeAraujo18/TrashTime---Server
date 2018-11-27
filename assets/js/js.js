$(function() {

	$("#formBairro").submit(function(e) {
		var ds1 = $("#diaSeco1");
		var ds2 = $("#diaSeco2");
		var do1 = $("#diaOrg1");
		var do2 = $("#diaOrg2");
		var event= e;

		if ((ds1.val()=="Selecione um dia") || (ds2.val()=="Selecione um dia") || (do1.val()=="Selecione um dia") || (do2.val()=="Selecione um dia")) 
		{
			event.preventDefault();
			$("#erroBairro").removeClass('hidden');
		}
	});	
	$("#formAviso").submit(function(e) {
		var bid = $("#bairroID");
		var event= e;

		if ((bid.val()=="Selecione um bairro") ) 
		{
			event.preventDefault();
			$("#erroAviso").removeClass('hidden');
		}
	});
});