function validacao(){
	if(document.form.nome.value==""){
	alert("Por favor preencha o nome");
	document.form.nome.focus();
	return false;
	}



 if(document.form.sobrenome.value==""){
        alert("Por favor preencha o sobrenome");
        document.form.sobrenome.focus();
        return false;
        }


if(document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1){
        alert("por favor difgite um nome de email valido");
        document.form.email.focus();
        return false;
}



/*if(document.form.telefone.value==""){
        alert("Por favor preencha o telefone");
        document.form.telefone.focus();
        return false;
        }
if(document.form.telefone.value.length < 10){
        alert("Por favor preencha o telefone ate 10 caracateres");
        document.form.telefone.focus();
        return false;
        }
*/

 if(document.form.estado.value==""){
        alert("Por favor preencha o campo estado");
        document.form.estado.focus();
        return false;
        }

if(document.form.estado.value.length > 15){
        alert("Por favor preencha o campo estado somente ate 15 caracateres");
        document.form.estado.focus();
        return false;
        }



 if(document.form.cidade.value==""){
        alert("Por favor preencha o campo cidade");
        document.form.cidade.focus();
        return false;
        }

if(document.form.cidade.value.length > 15){
        alert("Por favor preencha o campo  cidade somente ate 15 caracateres");
        document.form.cidade.focus();
        return false;
        }

 if(document.form.cep.value==""){
        alert("Por favor preencha o CEP");
        document.form.cep.focus();
        return false;
        }
if(document.form.cep.value.length < 10){
        alert("Por favor preencha o cep ate 10 caracateres");
        document.form.cep.focus();
        return false;
        }



 if(document.form.telefone.value==""){
        alert("Por favor preencha o telefone");
        document.form.telefone.focus();
        return false;
        }
if(document.form.telefone.value.length < 10){
        alert("Por favor preencha o telefone ate 10 caracateres");
        document.form.telefone.focus();
        return false;
        }


/*	if(document.form.email.value=="" || document.form.email.value.indexOf('@')==-1 || document.form.email.value.indexOf('.')==-1){
	alert("por favor difgite um nome de email valido");
	document.form.email.focus();
	return false;
}*/

	if(document.form.senha.value.length <8){
		alert(" a senha deve conter no minimo 8 caracteres.");
		document.form.senha.focus();
		return false;
	}



}

