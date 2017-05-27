function validarFormCat(){
	var campo_cat = document.getElementById("categorias-nomes").value;

	if(campo_cat == ""){

		alert("Informe uma categoria para cadastrar");
		return false;
	}
}