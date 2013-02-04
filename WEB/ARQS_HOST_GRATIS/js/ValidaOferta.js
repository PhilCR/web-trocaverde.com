function enviar() {
	var d  = document.getElementById('dia');
	var m  = document.getElementById('mes');
	var a = document.getElementById('ano');
	
	var qtde = document.getElementById('txt_qtde');
    var regraNumero = /[0-9]+/;

	if(qtde.match(regraNumero) == null){
        window.alert("QUANTIDADE INVALIDA!\nQuantidade deve conter apenas numeros.");
        return;
    }
				
	var dia = d.options[d.selectedIndex].value;
	var mes =  m.options[m.selectedIndex].value;
	var ano = a.options[a.selectedIndex].value;
	
	var txt_data = document.getElementById('txt_data');
	
	var data = ano + mes + dia;
	
	txt_data.value = data;
	
	document.getElementById("btn_cadastrar2").click();
}