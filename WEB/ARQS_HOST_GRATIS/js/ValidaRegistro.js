/*
 */
function IsEmail(email){
    var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var check=/@[\w\-]+\./;
    var checkend=/\.[a-zA-Z]{2,3}$/;
    
    if (((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)) {
        return false;
    }else{
        return true;
    }
}



function checkInscEstadual(inscEst,estado) {
	var theField = inscEst;
    if (inscEst!="") {
        var dig8 = "/BA*/RJ*";
        var dig9 = "/AL*/AP*/AM*/CE*/ES*/GO*/MA*/MS*/PA*/PB*/PI*/RN*/RR*/SC*/SE*/TO*";
        var dig10 ="/PR*/RS*";
        var dig11 ="/MT*";
        var dig12 ="/SP*";
        var dig13 ="/AC*/MG*/DF*";
        var dig14 ="/PE*/RO*";
       
        if (dig8.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,8);
            tam=8;
        }
        else if (dig9.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,9);
            tam=9;
        }
        else if (dig10.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,10);
            tam=10;
        }
        else if (dig11.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,11);
            tam=11;
        }
        else if (dig12.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,12);
            tam=12;
        }
        else if (dig13.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,13);
            tam=13;
        }
        else if (dig14.indexOf("/"+estado+"*") != -1) {
            inscEst=inscEst.substr(0,14);
            tam=14;
        }
        else {
            inscEst="";
            inscEstadual.disabled = true;
            tam=0;
        }
    }
    if (inscEst!="") {
        if (estado=="AC") {
            inscEst=strzero(inscEst,13);
            primDigito=0;
            seguDigito=0;
            pesos="43298765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            pesos="543298765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            seguDigito=11-(soma%11);
            if (seguDigito>9)
                seguDigito=0;
               
            if ((parseInt(inscEst.substr(11,1))!=primDigito) || (parseInt(inscEst.substr(12,1))!=seguDigito)) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="AL") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            soma=soma*10;
            primDigito=soma%11;
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="AP") {
            inscEst=strzero(inscEst,9);
            if (inscEst.substr(0,2) != "03") {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else {
                if (parseFloat(inscEst.substr(0,8))<3017000) {
                    p=5;
                    d=0;
                }
                else if (parseFloat(inscEst.substr(0,8))<3019022) {
                    p=9;
                    d=1;
                }
                else {
                    p=0;
                    d=0;   
                }
                primDigito=0;
                pesos="98765432";
                soma=p;
                for(i=0;i<pesos.length;i++) {
                    soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
                }
                primDigito=11-(soma%11);
                if (primDigito==10)
                    primDigito=0;
                else if (primDigito==11)
                    primDigito=d;
                if (parseInt(inscEst.substr(8,1))!=primDigito) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
                else
                    theField.value=inscEst;
            }
        }
        else if (estado=="AM") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            if (soma<11)
                primDigito=11-soma;
            else {
                primDigito=soma%11;
                if (primDigito<2)
                    primDigito=0;
                else
                    primDigito=11-primDigito;
            }
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="BA") {
            inscEst=strzero(inscEst,8);
            primDigito=0;
            seguDigito=0;
            if ((parseInt(inscEst.substr(0,1))<6) || (parseInt(inscEst.substr(0,1))==8))
                modulo=10;
            else
                modulo=11;
            pesos="765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            seguDigito=modulo-(soma%modulo);
            if (seguDigito>9)
                seguDigito=0;
            var inscEstAux=inscEst;
            inscEst=inscEst.substr(0,6) + "" + inscEst.substr(7,1) + "" + inscEst.substr(6,1);
            pesos="8765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=modulo-(soma%modulo);
            if (primDigito>9)
                primDigito=0;
            inscEst=inscEst.substr(0,6) + "" + inscEst.substr(7,1) + "" + inscEst.substr(6,1);
            if ((parseInt(inscEst.substr(6,1))!=primDigito) || (parseInt(inscEst.substr(7,1))!=seguDigito)) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="CE") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="DF") {
            inscEst=strzero(inscEst,13);
            if (inscEst.substr(0,2) != "07") {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else {
                primDigito=0;
                seguDigito=0;
                pesos="43298765432";
                soma=0;
                for(i=0;i<pesos.length;i++) {
                    soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
                }
                primDigito=11-(soma%11);
                if (primDigito>9)
                    primDigito=0;
                pesos="543298765432";
                soma=0;
                for(i=0;i<pesos.length;i++) {
                    soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
                }
                seguDigito=11-(soma%11);
                if (seguDigito>9)
                    seguDigito=0;
                   
                if ((parseInt(inscEst.substr(11,1))!=primDigito) || (parseInt(inscEst.substr(12,1))!=seguDigito)) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
                else
                    theField.value=inscEst;
            }
        }
        else if (estado=="ES") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="GO") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (inscEst.substr(0,8)=="11094402") {
                if ((parseInt(inscEst.substr(8,1))!="0") && (parseInt(inscEst.substr(8,1))!="1")) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
            }
            else {
                if (primDigito==11)
                    primDigito=0;
                else if (primDigito==10) {
                    if ((parseFloat(inscEst.substr(0,8))>=10103105) && (parseFloat(inscEst.substr(0,8))<=10119997))
                        primDigito=1;
                    else
                        primDigito=0;
                }
                if (parseInt(inscEst.substr(8,1))!=primDigito) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
                else
                    theField.value=inscEst;
            }
        }
        else if (estado=="MA") {
            inscEst=strzero(inscEst,9);
            if (inscEst.substr(0,2) != "12") {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else {
                primDigito=0;
                pesos="98765432";
                soma=0;
                for(i=0;i<pesos.length;i++) {
                    soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
                }
                primDigito=11-(soma%11);
                if (primDigito>9)
                    primDigito=0;
                if (parseInt(inscEst.substr(8,1))!=primDigito) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
                else
                    theField.value=inscEst;
            }
        }
        else if (estado=="MT") {
            inscEst=strzero(inscEst,11);
            primDigito=0;
            pesos="3298765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(10,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="MS") {
            inscEst=strzero(inscEst,9);
            if (inscEst.substr(0,2) != "28") {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else {
                primDigito=0;
                pesos="98765432";
                soma=0;
                for(i=0;i<pesos.length;i++) {
                    soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
                }
                primDigito=11-(soma%11);
                if (primDigito>9)
                    primDigito=0;
                if (parseInt(inscEst.substr(8,1))!=primDigito) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
                else
                    theField.value=inscEst;
            }
        }
        else if (estado=="MG") {
            inscEst=strzero(inscEst,13);
            inscEst=inscEst.substr(0,3)+"0"+inscEst.substr(3);
            primDigito=0;
            seguDigito=0;
            pesos="121212121212";
            soma=0;
            resultado=0;
            for(i=0;i<pesos.length;i++) {
                resultado=parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1));
                resultado=resultado+"";
                for(j=0;j<resultado.length;j++) {
                    soma=soma+(parseInt(resultado.substr(j,1)));
                }
            }
            somaAux=soma+"";
            primDigito=parseInt((parseInt(somaAux.substr(0,1))+1)+"0")-soma;
            if (primDigito>9)
                primDigito=0;
            inscEst=inscEst.substr(0,3)+inscEst.substr(4);
            pesos="321098765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                mult=parseInt(pesos.substr(i,1));
                if ((i>1) && (i<4))
                    mult=parseInt(pesos.substr(i,1))+10;
                soma=soma+(parseInt(inscEst.substr(i,1))*mult);
            }
            seguDigito=11-(soma%11);
            if (seguDigito>9)
                seguDigito=0;
               
            if ((parseInt(inscEst.substr(11,1))!=primDigito) || (parseInt(inscEst.substr(12,1))!=seguDigito)) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
       
       

        else if (estado=="PA") {
            inscEst=strzero(inscEst,9);
            if (inscEst.substr(0,2) != "15") {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else {
                primDigito=0;
                pesos="98765432";
                soma=0;
                for(i=0;i<pesos.length;i++) {
                    soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
                }
                primDigito=11-(soma%11);
                if (primDigito>9)
                    primDigito=0;
                if (parseInt(inscEst.substr(8,1))!=primDigito) {
                    alert("Insc. Estadual inválida");
                    theField.select();
                    theField.focus();
                }
                else
                    theField.value=inscEst;
            }
        }
        else if (estado=="PB") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="PR") {
            inscEst=strzero(inscEst,10);
            primDigito=0;
            seguDigito=0;
            pesos="32765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            pesos="432765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            seguDigito=11-(soma%11);
            if (seguDigito>9)
                seguDigito=0;
               
            if ((parseInt(inscEst.substr(8,1))!=primDigito) || (parseInt(inscEst.substr(9,1))!=seguDigito)) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="PE") {
            inscEst=strzero(inscEst,14);
            primDigito=0;
            pesos="5432198765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=primDigito-10;
            if (parseInt(inscEst.substr(13,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="PI") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="RJ") {
            inscEst=strzero(inscEst,8);
            primDigito=0;
            pesos="2765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(7,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="RN") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            soma=soma*10;
            primDigito=soma%11;
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="RS") {
            inscEst=strzero(inscEst,10);
            primDigito=0;
            pesos="298765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(9,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="RO") {
            inscEst=strzero(inscEst,14);
            primDigito=0;
            pesos="6543298765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito-=10;
            if (parseInt(inscEst.substr(13,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="RR") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="12345678";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            soma=soma*10;
            primDigito=soma%9;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="SC") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            soma=soma*10;
            primDigito=soma%11;
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="SP") {
            inscEst=strzero(inscEst,12);
            primDigito=0;
            seguDigito=0;
            pesos="13456780";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                mult=parseInt(pesos.substr(i,1));
                if (i==7)
                    mult=10;
                soma=soma+(parseInt(inscEst.substr(i,1))*mult);
            }
            primDigito=soma%11;
            if (primDigito>9)
                primDigito=0;
            pesos="32098765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                mult=parseInt(pesos.substr(i,1));
                if (i==2)
                    mult=10;
                soma=soma+(parseInt(inscEst.substr(i,1))*mult);
            }
            seguDigito=soma%11;
            if (seguDigito>9)
                seguDigito=0;
               
            if ((parseInt(inscEst.substr(8,1))!=primDigito) || (parseInt(inscEst.substr(11,1))!=seguDigito)) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="SE") {
            inscEst=strzero(inscEst,9);
            primDigito=0;
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            soma=soma*10;
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        }
        else if (estado=="TO") {
            inscEst=strzero(inscEst,9); // 11 Se tiver 2 algarismos
            //if ((inscEst.substr(2,2) != "01") && (inscEst.substr(2,2) != "02") && (inscEst.substr(2,2) != "03") && (inscEst.substr(2,2) != "99")) {
            //    alert("Insc. Estadual inválida");
            //    theField.select();
            //    theField.focus();
            //}
            //else {
            primDigito=0;
            //pesos="9800765432";
            pesos="98765432";
            soma=0;
            for(i=0;i<pesos.length;i++) {
                soma=soma+(parseInt(inscEst.substr(i,1))*parseInt(pesos.substr(i,1)));
            }
            primDigito=11-(soma%11);
            if (primDigito>9)
                primDigito=0;
            if (parseInt(inscEst.substr(8,1))!=primDigito) {
                alert("Insc. Estadual inválida");
                theField.select();
                theField.focus();
            }
            else
                theField.value=inscEst;
        //}
        }
    }
}



function validarCPF(cpf) {               
    
      var numeros, digitos, soma, i, resultado, digitos_iguais;
      digitos_iguais = 1;
      
      if (cpf.length < 11) {
            return false;
      }
        
      for (i = 0; i < cpf.length - 1; i++) {
            if (cpf.charAt(i) != cpf.charAt(i + 1)) {
                  digitos_iguais = 0;
                  break;
            }            
      }
  
      if (!digitos_iguais) {
          
            numeros = cpf.substring(0,9);
            digitos = cpf.substring(9);
            
            soma = 0;
            for (i = 10; i > 1; i--) {
                  soma += numeros.charAt(10 - i) * i;
            }
            
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            
            if (resultado != digitos.charAt(0)) {
                  return false;
            }
            
            numeros = cpf.substring(0,10);
            soma = 0;
            
            for (i = 11; i > 1; i--) {
                  soma += numeros.charAt(11 - i) * i;
            }
            
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            
            
            if (resultado != digitos.charAt(1)) {
                  return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
}


function validarCNPJ(cnpj) {   
    
    var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
    digitos_iguais = 1;
    
    if (cnpj.length < 14 && cnpj.length < 15) {
            return false;
    }
    
    
    for (i = 0; i < cnpj.length - 1; i++) {
        if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
        }
    }
    
    
    if (!digitos_iguais) {
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0,tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
            
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        
        if (resultado != digitos.charAt(0)) {
            return false;
        }
        
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0,tamanho);
        soma = 0;
        pos = tamanho - 7;
        
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2) {
                pos = 9;
            }
        }
        
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

        if (resultado != digitos.charAt(1)) {
            return false;
        }else{
            return true;
        }
    }else{
        return false;
    }
}

function ltrim(texto) { return texto.replace(/^[ ]+/, ''); }

function rtrim(texto) { return texto.replace(/[ ]+$/, ''); }

function trim(texto) { return ltrim(rtrim(texto)); }

function validarCadastroAdmin() {    
    //Variáveis de regra
    var regraTexto = /[A-Za-z]+/; //Nome, rua, complemento, bairro, cidade
    var regraNumero = /[0-9]+/; //numero, dd, telefone
    var regraSenha = /.{6,16}/;
   
	
    //Variáveis do documento - Informacoes de Acesso
    var email = document.getElementById("txt_email").value;
    var senha1 = document.getElementById("txt_senha").value;
    var senha2 = document.getElementById("txt_re_senha").value;
    
   
    //Variáveis do documento - Informacoes Pessoais
    var nome = document.getElementById("txt_nome").value;    
    var snome = document.getElementById("txt_snome").value;
    var telefone = document.getElementById("txt_tel").value;
    
     //Verificações - Informacoes de Acesso
    if (!IsEmail(email)){ //Email
        window.alert("E-MAIL PREENCHIDO INCORRETAMENTE!\nDigite um email valido, por exemplo, no formato email@dominio.ext");
        return false;
    }
    
    if (senha1 != senha2){ //Senha
        window.alert("AS SENHAS DEVEM SER IGUAIS!");
        return false;
    }
    
    if (senha1.match(regraSenha) == null){
        window.alert("SENHA INVALIDA!\nDigite uma senha de 6 a 16 caracteres.");
        return false;
    }
    
    if (nome.match(regraTexto) == null){  //Nome
        window.alert("NOME PREENCHIDO INCORRETAMENTE!\nDigite somente caracteres.");
        return false;
    }
    
    if (snome.match(regraTexto) == null){  //Sobrenome
        window.alert("SOBRENOME PREENCHIDO INCORRETAMENTE!\nDigite somente caracteres.");
        return false;
    }
      
    if (telefone.match(regraNumero) == null){  //Telefone
        window.alert("TELEFONE PREENCHIDO INCORRETAMENTE!\nDigite o DDD e o numero, sem espacos nem tracos.");
        return false;
    }
    
    document.getElementById("btn_cadastrar2").click();
}

function validarCadPontuador() {    
    
    //Variáveis de regra
    var regraTexto = /[A-Za-z]+/; //Nome, rua, complemento, bairro, cidade
    var regraNumero = /[0-9]+/; //numero, dd, telefone
    var regraSenha = /.{6,16}/;
    
    //Variáveis do documento - Informacoes de Acesso
    var email = document.getElementById("txt_email1").value;
    var senha1 = document.getElementById("txt_senha1").value;
    var senha2 = document.getElementById("txt_re_senha1").value;
    
    
    //Variáveis do documento - Informacoes Pessoais
    var nome = document.getElementById("txt_nome1").value;    
    var snome = document.getElementById("txt_snome1").value;
    var telefone = document.getElementById("txt_tel1").value;
    
    
     //Verificações - Informacoes de Acesso
    if (!IsEmail(email)){ //Email
        window.alert("E-MAIL PREENCHIDO INCORRETAMENTE!\nDigite um email valido, por exemplo, no formato email@dominio.ext");
        return false;
    }
    
    if (senha1 != senha2){ //Senha
        window.alert("AS SENHAS DEVEM SER IGUAIS!");
        return false;
    }
    
    if (senha1.match(regraSenha) == null){
        window.alert("SENHA INVALIDA!\nDigite uma senha de 6 a 16 caracteres.");
        return false;
    }
    
    if (nome.match(regraTexto) == null){  //Nome
        window.alert("NOME PREENCHIDO INCORRETAMENTE!\nDigite somente caracteres.");
        return false;
    }
    
    if (snome.match(regraTexto) == null){  //Sobrenome
        window.alert("SOBRENOME PREENCHIDO INCORRETAMENTE!\nDigite somente caracteres.");
        return false;
    }
      
    if (telefone.match(regraNumero) == null){  //Telefone
        window.alert("TELEFONE PREENCHIDO INCORRETAMENTE!\nDigite o DDD e o numero, sem espacos nem tracos.");
        return false;
    }
    
    document.getElementById("btn_cadastrar").click();
}

function validarCadCliente() {        
    var d  = document.getElementById('DateOfBirth_Day');
	var m  = document.getElementById('DateOfBirth_Month');
	var a = document.getElementById('DateOfBirth_Year');

	var dia = d.options[d.selectedIndex].value;
	var mes =  m.options[m.selectedIndex].value;
	var ano = a.options[a.selectedIndex].value;
	
	var txt_nasc = document.getElementById('txt_nasc');
	
	var nasc = ano + mes + dia;
	
	txt_nasc.value = nasc;
	
	document.getElementById('txt_nasc').setAttribute('value', nasc);
				
	//validarCadCliente();
	
	//Variáveis de regra
    var regraTexto = /\w+\s?/; //Nome, rua, complemento, bairro, cidade
    var regraNumero = /[0-9]+/; //numero, dd, telefone
    var regraSenha = /.{6,16}/;
    
    //Variáveis do documento - Informacoes de Acesso
    var email = document.getElementById("txt_email").value;
    var senha1 = document.getElementById("txt_senha").value;
    var senha2 = document.getElementById("txt_re_senha").value;
    
    //Variáveis do documento - Informacoes Pessoais
    var nome = document.getElementById("txt_nomeu").value;    
    var snome = document.getElementById("txt_snomeu").value;
    var cpf = document.getElementById("txt_cpf").value;
    
    
    //Variáveis do documento - Informacoes de Contato
    var telefone = document.getElementById("txt_tel").value;
    var celular = document.getElementById("txt_cel").value;
    var rua = document.getElementById("txt_end_rua").value;
    var numero = document.getElementById("txt_end_num").value;
    var complemento = document.getElementById("txt_end_comp").value;
    var bairro = document.getElementById("txt_end_bar").value;
    var cep = document.getElementById("txt_end_cep").value;
    var cidade = document.getElementById("txt_end_cid").value;
    
    //Verificações - Informacoes de Acesso
    if (!IsEmail(email)) { //Email     
        window.alert("E-MAIL INVALIDO!\nDigite um e-mail valido, por exemplo, no formato email@dominio.ext.");
        return false;
    }
    
    if (senha1 != senha2) { //Senha
        window.alert("AS SENHAS DEVEM SER IGUAIS!");
        return false;
    }
    
    if (senha1.match(regraSenha) == null) {
        window.alert("SENHA INVALIDA!\nDigite uma senha de 6 a 16 digitos.");
        return false;
    }
    
    //Verificações - Informacoes Pessoais
    if (nome.match(regraTexto) == null) { //Nome
        window.alert("NOME INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
    
    if (snome.match(regraTexto) == null) { //Sobrenome
        window.alert("SOBRENOME INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
    
    if (!validarCPF(cpf)) { //CPF
        window.alert("CPF INVALIDO!\nDigite um CPF valido, sem pontos e sem traços.");
        return false;
    }               

    //Verificações - Informacoes de Contato
    if (telefone.match(regraNumero) == null) { //Telefone
        window.alert("TELEFONE INVALIDO!\nDigite o DDD e o numero, sem traços, somente numeros.");
        return false;
    }
    
    if (celular.match(regraNumero) == null) { 
        window.alert("CELULAR INVALIDO!\nDigite o DDD e o numero, sem traços, somente numeros.");
        return false;
    }
    
    if (rua.match(regraTexto) == null) { 
        window.alert("LOGRADOURO INVALIDO!\nDigite nome valido, apenas caracteres.");
        return false;
    }
    
    if (numero.match(regraNumero) == null) {
        window.alert("NUMERO INVALIDO!\nDigite apenas numeros.");
        return false;
    }
    
    if (bairro.match(regraTexto) == null) { 
        window.alert("BAIRRO INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
	
    if (cep.match(regraNumero) == null) {
        window.alert("CEP INVALIDO!\nDigite apenas numeros, sem pontos e sem traços.");
        return false;
    }
	
    if (cidade.match(regraTexto) == null) { 
        window.alert("CIDADE INVALIDA!\nDigite apenas caracteres.");
        return false;
    }
	//return true;
    document.getElementById("btn_cadastrar2").click();
}

function validarCadLoja() {            
    //Variáveis de regra
    var regraTexto = /\w+\s?/; //Nome, rua, complemento, bairro, cidade
    var regraNumero = /[0-9]+/; //numero, dd, telefone    
    var regraSenha = /.{6,16}/;
    
    //Variáveis do documento - Informacoes de acesso
    var email = document.getElementById("txt_email1").value;
    var senha1 = document.getElementById("txt_senha1").value;
    var senha2 = document.getElementById("txt_re_senha1").value;
    
    //Variáveis do documento - Informacoes Comerciais
    var nfantasia = document.getElementById("txt_nfantasia").value;
    var razaoSocial = document.getElementById("txt_rsocial").value;
    var cnpj = document.getElementById("txt_cnpj").value;
    var ie = document.getElementById("txt_inscest");
    var regiao = document.getElementById("txt_regiao").value;
    
    //Variáveis do documento - Informacoes de Contato
    var telefone = document.getElementById("txt_tel1").value;
    var rua = document.getElementById("txt_end_rua1").value;
    var numero = document.getElementById("txt_end_num1").value;
    var complemento = document.getElementById("txt_end_comp1").value;
    var bairro = document.getElementById("txt_end_bar1").value;
    var cidade = document.getElementById("txt_end_cid1").value;
    var cep = document.getElementById("txt_end_cep1").value;
	var estado = document.getElementById("txt_end_est1").value;
	
    //Verificações - Informacoes de acesso
    if (!IsEmail(email)) { //Email     
        window.alert("E-MAIL INVALIDO!\nDigite um e-mail valido, por exemplo, no formato email@dominio.ext.");
        return false;
    }
    
    if (senha1 != senha2) { //Senha
        window.alert("AS SENHAS DEVEM SER IGUAIS!");
        return false;
    }
    
    if (senha1.match(regraSenha) == null) {
        window.alert("SENHA INVALIDA!\nDigite uma senha de 6 a 16 caracteres.");
        return false;
    }
    
    //Verificações - Informacoes Comerciais
    if(nfantasia.match(regraTexto) == null){
        window.alert("NOME FANTASIA INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
    
    if (razaoSocial.match(regraTexto) == null) { //Razão Social
        window.alert("RAZAO SOCIAL INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
    
    if (!validarCNPJ(cnpj)) { //CNPJ
        window.alert("CNPJ INVALIDO!\nDigite o CNPJ correto, sem pontos nem traços.");
        return false;
    }
                 
    if (ie != "") { //IE - Caso necessário
        if (!checkInscEstadual(ie,estado)) {
            window.alert("INSCRIÇAO ESTADUAL INVALIDA!\nDigite a IE correta, sem pontos nem traços.");
            return false;
        }
    }
    
    if(regiao.match(regraTexto) == null){
        window.alert("REGIAO INVALIDA!\nDigite apenas caracteres.");
        return false;
    }
    
    //Verificações - Informacoes de Contato
    if (telefone.match(regraNumero) == null) { //Telefone
        window.alert("TELEFONE INVALIDO!\nDigite o DDD e o numero, sem espacos nem tracos.");
        return false;
    }
    
    if (rua.match(regraTexto) == null) { //Telefone
        window.alert("LOGRADOURO INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
    
    if (numero.match(regraNumero) == null) { //Telefone
        window.alert("NUMERO INVALIDO!\nDigite apenas numeros.");
        return false;
    }
    
    /*if (complemento.match(regraTexto) == null) { //Telefone
        window.alert("COMPLEMENTO INVALIDO!\nDigite apenas caracteres.");
        return;
    }*/
    
    if (bairro.match(regraTexto) == null) { //Telefone
        window.alert("BAIRRO INVALIDO!\nDigite apenas caracteres.");
        return false;
    }
    
    if (cidade.match(regraTexto) == null) { //Telefone
        window.alert("CIDADE INVALIDA!\nDigite apenas caracteres.");
        return false;
    }
    
    if (cep.match(regraNumero) == null) { //Telefone
        window.alert("CEP INVALIDO!\nDigite apenas numeros, sem pontos e sem traços.");
        return false;
    }
    
    document.getElementById("btn_cadastrar").click();
}

function validarEditarCli() {
    
    //Variáveis de regra
    var regraTexto = /\w+\s?/; //Nome, rua, complemento, bairro, cidade
    var regraNumero = /[0-9]+/; //numero, dd, telefone
    var regraSenha = /.{6,16}/;
    
    //Variáveis do documento - Informacoes de Acesso
    var email = document.getElementById("txt_email").value;
    var senha1 = document.getElementById("txt_senha").value;
    var senha2 = document.getElementById("txt_re_senha").value;
    
    //Variáveis do documento - Informacoes Pessoais
    var nome = document.getElementById("txt_nome").value;    
    var snome = document.getElementById("txt_snome").value;
    
    //Variáveis do documento - Informacoes de Contato
    var telefone = document.getElementById("txt_tel").value;
    var celular = document.getElementById("txt_cel").value;
    var rua = document.getElementById("txt_end_rua").value;
    var numero = document.getElementById("txt_end_num").value;
    var complemento = document.getElementById("txt_end_comp").value;
    var bairro = document.getElementById("txt_end_bar").value;
    var cep = document.getElementById("txt_end_cep").value;
    var cidade = document.getElementById("txt_end_cid").value;
    
    //Verificações - Informacoes de Acesso
    if (!IsEmail(email)) { //Email     
        window.alert("E-MAIL INVALIDO!\nDigite um e-mail valido, por exemplo, no formato email@dominio.ext.");
        return;
    }
    
    if (senha1 != senha2) { //Senha
        window.alert("AS SENHAS DEVEM SER IGUAIS!");
        return;
    }
    
    if (senha1.match(regraSenha) == null) {
        window.alert("SENHA INVALIDA!\nDigite uma senha de 6 a 16 digitos.");
        return;
    }
    
    //Verificações - Informacoes Pessoais
    if (nome.match(regraTexto) == null) { //Nome
        window.alert("NOME INVALIDO!\nDigite apenas caracteres.");
        return;
    }
    
    if (snome.match(regraTexto) == null) { //Apelido
        window.alert("SOBRENOME INVALIDO!\nDigite apenas caracteres.");
        return;
    }

    //Verificações - Informacoes de Contato
    if (telefone.match(regraNumero) == null) { //Telefone
        window.alert("TELEFONE INVALIDO!\nDigite o DDD e o numero, sem traços, somente numeros.");
        return;
    }
    
    if (celular.match(regraNumero) == null) { //Telefone
        window.alert("CELULAR INVALIDO!\nDigite o DDD e o numero, sem traços, somente numeros.");
        return;
    }
    
    if (rua.match(regraTexto) == null) { //Telefone
        window.alert("LOGRADOURO INVALIDO!\nDigite nome valido, apenas caracteres.");
        return;
    }
    
    if (numero.match(regraNumero) == null) { //Telefone
        window.alert("NUMERO INVALIDO!\nDigite apenas numeros.");
        return;
    }
    
    if (bairro.match(regraTexto) == null) { //Telefone
        window.alert("BAIRRO INVALIDO!\nDigite apenas caracteres.");
        return;
    }
    
    if (cidade.match(regraTexto) == null) { //Telefone
        window.alert("CIDADE INVALIDA!\nDigite apenas caracteres.");
        return;
    }
    
    if (cep.match(regraNumero) == null) { //Telefone
        window.alert("CEP INVALIDO!\nDigite apenas numeros, sem pontos e sem traços.");
        return;
    }
    
    document.getElementById("btn_cadastrar2").click();
}