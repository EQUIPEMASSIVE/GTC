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
//			$(linkTodasNot).removeClass("");
//			$(linkRascunho).removeClass("");
//			$(linkLixeira).removeClass("");
//			$(linkPublicar).addClass("btn btn-primary");



			$(todasasNoticias).hide();
			$(publicarNoticia).slideDown(500);
			$(rascunhos).hide();
			$(lixeira).hide();

		});
		////////////////////////////////////////////////////////

		 $(linkTodasNot).click(function(){//funcao todas as noticias

			//2

//			 $(linkRascunho).removeClass("btn btn-info");
//			 $(linkLixeira).removeClass("btn btn-info");
//			 $(linkPublicar).removeClass("btn btn-info");			
//			$(linkTodasNot).addClass("btn btn-primary");

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

//			
//			$(linkLixeira).removeClass("btn btn-info");
//			$(linkPublicar).removeClass("btn btn-info");
//			$(linkTodasNot).removeClass("btn btn-info");
//			$(linkRascunho).addClass("btn btn-primary");

			
				$(publicarNoticia).hide();
				$(todasasNoticias).hide();
				$(lixeira).hide();
				$(rascunhos).slideDown(500);

			
		});

		///////////////////////////////////////////////////////

		$(linkLixeira).click(function(){//funcao lixeira
//
//			$(linkPublicar).removeClass("btn btn-info");
//			$(linkTodasNot).removeClass("btn btn-info");
//			$(linkRascunho).removeClass("btn btn-info");
//			$(linkLixeira).addClass("btn-primary");

				$(publicarNoticia).hide();
				$(todasasNoticias).hide();
				$(rascunhos).hide();
				$(lixeira).slideDown(500);
			});

////////////////////////MUDAR DE COR O MENU ATIVO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
		var menuPaginaInicial       = $("#menu-pagina-inicial");
		var menuGerenciarNoticia    = $("#menu-gerenciar-noticia");
		var menuGerenciarCategoria  = $("#menu-gerenciar-categoria");
		var menuAdministracaoPortal = $("#menu-administracao-portal");

//////////////////Pagina Inicial\\\\\\\\\\\\\\\\\\\\\\\\\\\\
		
		$(menuPaginaInicial).click(function(){
			
			$(menuAdministracaoPortal).removeClass("menu-top-active");
			$(menuGerenciarCategoria).removeClass("menu-top-active");
			$(menuGerenciarNoticia).removeClass("menu-top-active");
			$(menuPaginaInicial).addClass("menu-top-active");
			
		});

///////////////////Gerenciar Noticia\\\\\\\\\\\\\\\\\\\\\\\\\
		$(menuGerenciarNoticia).click(function(){
			
			$(menuAdministracaoPortal).removeClass("menu-top-active");
			$(menuGerenciarCategoria).removeClass("menu-top-active");
			$(menuPaginaInicial).removeClass("menu-top-active");
			$(menuGerenciarNoticia).addClass("menu-top-active");
			
		});
		
///////////////////Administração Portal\\\\\\\\\\\\\\\\\\\\\\\\\
		$(menuAdministracaoPortal).click(function(){
			
			$(menuGerenciarNoticia).removeClass("menu-top-active");
			$(menuGerenciarCategoria).removeClass("menu-top-active");
			$(menuPaginaInicial).removeClass("menu-top-active");
			$(menuAdministracaoPortal).addClass("menu-top-active");
			
		});
		
///////////////////Gerenciar Categoria\\\\\\\\\\\\\\\\\\\\\\\\\
		$(menuGerenciarCategoria).click(function(){

			$(menuAdministracaoPortal).removeClass("menu-top-active");
			$(menuGerenciarCategoria).removeClass("menu-top-active");
			$(menuPaginaInicial).removeClass("menu-top-active");
			$(menuGerenciarCategoria).addClass("menu-top-active");

			});


});// fim do jQuerry