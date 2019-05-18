//A escuta deve ocorrer no <input></input>.
//<input type="text" name="filtro" id="filtrar-tabela" ">
var campoFiltro = document.querySelector("#idInputFormFiltrar");
//O tipo de evento é "input".
campoFiltro.addEventListener("input", function(){
    //console.log(this.value);
    //Cria um arrey das linhas da tabela.
    var arranjo = document.querySelectorAll(".linhaTbl");

    //Verifica se existe texto no campo. Evita que a tabela
    //fique oculta antes de reallizar o filtro.
    if (this.value.length > 0) {
        //Acessa cada linha da tabela.
        for (var i = 0; i < arranjo.length; i++) {
            var linha = arranjo[i];
            var tdNome = linha.querySelector(".td2");

            var nome = tdNome.textContent;

            //Uso da expressao regular com o RegExp().
            //O parâmetro "i" informa que a busca não é case-sensitive.
            var expressao = new RegExp(this.value, "i");
            //Verifica se a palavra é encontrada.
            //Faz acesso com o CSS - "invisivel".
            //"invisivel" possui formatação para ocultar:
            //No código CSS está: .invisivel{ display: none; }
            if (!expressao.test(nome)) {
                linha.classList.add("invisivel");
            } else {
                linha.classList.remove("invisivel");
            }
        }
    } else {
        for (var i = 0; i < arranjo.length; i++) {
            var linha = arranjo[i];
            linha.classList.remove("invisivel");
        }
    }
});
