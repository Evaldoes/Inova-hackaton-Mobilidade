//console.log(location);

//Coleta a query ?retorno=...
const params = location.search;

if(params.length > 0){

    const sucesso = params.indexOf("sucesso")>=0; //verifica se existe a substring na string (retorna true ou false por causa do >=0)

    if(sucesso){
        alert("Dados enviados com sucesso!");
    }
    else{
        alert("Problema durante o envio dos dados. Por favor, tente novamente ou contate o administrador.")
    }

    window.history.replaceState({}, document.title, location.pathname); //reseta a URL
}
