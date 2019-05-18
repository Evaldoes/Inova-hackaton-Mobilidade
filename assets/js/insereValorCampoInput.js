

function insereNotaCampoInput(nota, idInput){
  //console.log(idInput); ok
  var retorno = buscaIdInput(idInput);
  console.log(retorno);
  var campoInput = document.getElementById(retorno);
  //console.log(campoInput.valueOf());

  switch (nota){
    case 1:
    campoInput.value = nota;
    break;
    case 2:
    campoInput.value = nota;
    break;
    case 3:
    campoInput.value = nota;
    break;
    case 4:
    campoInput.value = nota;
    break;
    case 5:
    campoInput.value = nota;
    break;
  }
}

function buscaIdInput(idInput){
  var retorno;
  if(idInput == 'idQ1'){
    retorno = 'idQ1';
    //console.log(idInput);
  }else if (idInput == 'idQ2') {
    retorno = 'idQ2';
  }else if (idInput == 'idQ3') {
    retorno = 'idQ3';
  }


  return (retorno);
}
