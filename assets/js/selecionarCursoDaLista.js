/**
*Seleciona um curso da lista com um clique sobre a linha.
*/
var captura = document.querySelector("table");
//console.log(captura);

captura.addEventListener("click", function (e) {
  setTimeout(
    function() {
      // tagName: tem objetivo de pegar o nome da tag.
      // Somente executará caso o elemento em que clicamos seja um <td>
      if (e.target.tagName == 'TD') {

        var paiElemento = e.target.parentNode;
        //console.log("elemento pai");
        //console.log(paiElemento);

        exibirLinhaSelecionada(paiElemento);
      }
    }, 10);//tempo em milisegundos.

  });

  function exibirLinhaSelecionada(paiElemento){
    //event.target.parentNode.classList.add("fadeOut");

    var valorCampoTd = paiElemento.querySelector('.td1').textContent;
    //console.log(valorCampoTd);
    var getCampoInpuForm = document.querySelector('#idIdCurso');
    getCampoInpuForm.value = valorCampoTd;

    var valorCampoTd = paiElemento.querySelector('.td2').textContent;
    //console.log(valorCampoTd);
    var getCampoInpuForm = document.querySelector('#idNome');
    getCampoInpuForm.value = valorCampoTd;

    var valorCampoTd = paiElemento.querySelector('.td3').textContent;
    //console.log(valorCampoTd);
    var getCampoInpuForm = document.querySelector('#idEscola');
    getCampoInpuForm.value = valorCampoTd;

    var valorCampoTd = paiElemento.querySelector('.td4').textContent;
    //console.log(valorCampoTd);
    var getCampoInpuForm = document.querySelector('#idModulo');
    getCampoInpuForm.value = valorCampoTd;

    var valorCampoTd = paiElemento.querySelector('.td5').textContent;
    //console.log(valorCampoTd);
    var getCampoInpuForm = document.querySelector('#idTurno');
    getCampoInpuForm.value = valorCampoTd;

    //console.log(msg.valueOf());


  }
