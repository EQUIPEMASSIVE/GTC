/**
 * Created by Alvaro on 26/05/2017.
 */
$(document).ready(function () {


var boxImg = $("#imagem-noticia-carregar");
var imgCar = $("#imagem-carregada");

$(boxImg).click(function(){

    $(imgCar).click();

});

$(imgCar).change(function(){

    document.getElementById("imagem-noticia-carregar").value = document.getElementById("imagem-carregada").value;

});//jQuery trocar abas
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Links para as seções

var linkPublicar = $("#publicar-noticia-menu");
var linkTodasNot = $("#todas-noticias-menu");
var linkRascunho = $("#rascunhos-menu");
var linkLixeira  = $("#lixeira-menu");

//sessao das abas
//var publicarNoticia = $("#publicar-noticia");
var publicarNoticiaExtra = $("#publicar-noticia-extra");
var todasasNoticias = $("#todas-as-noticias");
var rascunhos       = $("#noticias-rascunhos");
var lixeira         = $("#noticias-lixeira");


//document.getElementById("publicar-noticia-extra").style.display = "block";
    $(publicarNoticiaExtra).style.display = "none";
    $(linkTodasNot).click(function(event){
        event.preventDefault();
        $(todasasNoticias).slideUp("slow");
        $(publicarNoticiaExtra).slideDown(2000);
    });

   $(linkRascunho).click(function(event){
        event.preventDefault();
        $(rascunhos).slideUp("slow");
        $(publicarNoticiaExtra).slideDown(2000);
    });

   $(linkLixeira).click(function(event){
        event.preventDefault();
        $(lixeira).slideUp("slow");
        $(publicarNoticiaExtra).slideDown(2000);
    });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
});