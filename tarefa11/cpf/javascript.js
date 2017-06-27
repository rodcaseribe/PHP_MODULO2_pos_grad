function validacao(){
        if(document.form.cpf.value==""){
        alert("Sorry, digite um número");
        document.form.cpf.focus();
        return false;
        }
}
