$(function() {

	var boxImg = $("#imagem-noticia-carregar");
	var imgCar = $("#imagem-carregada");

	$(boxImg).click(function(){

		$(imgCar).click();

	});

	$(imgCar).change(function(){

		document.getElementById("imagem-noticia-carregar").value = document.getElementById("imagem-carregada").value;
	
	});//jQuery trocar abas

    // jQuerry Trocar abas

    //Links para as seções

    var linkPublicar = $("#publicar-noticia-menu");
    var linkTodasNot = $("#todas-noticias-menu");
    var linkRascunho = $("#rascunhos-menu");
    var linkLixeira  = $("#lixeira-menu");

    //sessao das abas


		var publicarNoticia = $("#publicar-noticia"); 
		var todasasNoticias = $("#todas-as-noticias");
		var rascunhos       = $("#noticias-rascunhos");
		var lixeira         = $("#noticias-lixeira");

		$(todasasNoticias).hide();
		$(lixeira).hide();
		$(rascunhos).hide();
		

        ////////////////////////////////////////////////////////

		$(linkPublicar).click(function(){//funcao publicar noticia

			//1
			$(linkTodasNot).removeClass("activeColor");
			$(linkRascunho).removeClass("activeColor");
			$(linkLixeira).removeClass("activeColor");
			$(linkPublicar).addClass("activeColor");



			$(todasasNoticias).hide();
			$(publicarNoticia).slideDown(500);
			$(rascunhos).hide();
			$(lixeira).hide();

		});
		////////////////////////////////////////////////////////

		 $(linkTodasNot).click(function(){//funcao todas as noticias

			//2

			$(linkRascunho).removeClass("activeColor");
			$(linkLixeira).removeClass("activeColor");
			$(linkPublicar).removeClass("activeColor");
			$(linkTodasNot).addClass("activeColor");

			$(publicarNoticia).slideUp(300, function(){

				$(publicarNoticia).hide();//esconder todas as noticias 
				$(rascunhos).hide();
				$(lixeira).hide();

			});
			$(todasasNoticias).slideDown(500);
		});

		////////////////////////////////////////////////////////

		$(linkRascunho).click(function(){// funcao rascunhos

			//3

			
			$(linkLixeira).removeClass("activeColor");
			$(linkPublicar).removeClass("activeColor");
			$(linkTodasNot).removeClass("activeColor");
			$(linkRascunho).addClass("activeColor");

			
				$(publicarNoticia).hide();
				$(todasasNoticias).hide();
				$(lixeira).hide();
				$(rascunhos).slideDown(500);

			
		});

		///////////////////////////////////////////////////////

		$(linkLixeira).click(function(){//funcao lixeira

			$(linkPublicar).removeClass("activeColor");
			$(linkTodasNot).removeClass("activeColor");
			$(linkRascunho).removeClass("activeColor");
			$(linkLixeira).addClass("activeColor");

           

				$(publicarNoticia).hide();
				$(todasasNoticias).hide();
				$(rascunhos).hide();
				$(lixeira).slideDown(500);




			});






});// fim do jQuerry