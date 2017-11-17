function validacao () {
  if(document.consulta.codc.value=="") {
    alert("Por favor, insira o Código do Cliente.");
    document.consulta.codc.focus();
    return false;
  }
}

function valido () {
  if(document.form.nome.value=="") {
    alert("Por favor, preencha o campo Nome.");
    document.form.nome.focus();
    return false;
  }
  if(document.form.email.value=="") {
    alert("Por favor, preencha o campo E-mail.");
    document.form.email.focus();
    return false;
  }
}
