$(function() {
	
	$("#cidadeID").change(function() {
		console.log($("option .cid-"));
	});
	
	$("#formBairro").submit(function(e) {
		var ds1 = $("#diaSeco1");
		var ds2 = $("#diaSeco2");
		var do1 = $("#diaOrg1");
		var do2 = $("#diaOrg2");
		var cid = $("#cidadeID");
		var event= e;

		if ((cid.val()=="Selecione uma cidade") || (ds1.val()=="Selecione um dia") || (ds2.val()=="Selecione um dia") || (do1.val()=="Selecione um dia") || (do2.val()=="Selecione um dia")) 
		{
			event.preventDefault();
			$("#erroBairro").removeClass('hidden');
		}
	});	
	$("#formAviso").submit(function(e) {
		var bid = $("#bairroID");
		var cid = $("#cidadeID");
		var event= e;

		if ((bid.val()=="Selecione um bairro") || (cid.val()=="Selecione uma cidade")) 
		{
			event.preventDefault();
			$("#erroAviso").removeClass('hidden');
		}
	});
});
