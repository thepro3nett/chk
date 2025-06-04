$(document).ready(function() {
  $("#bode").hide();
  $("#esconde").show();

  $('#mostra').click(function() {
    $("#bode").slideToggle();
  });
});

async function enviar() {
  var linha = $("#lista").val();
  var linhaenviar = linha.split("\n");
  var total = linhaenviar.length;
  var ap = 0;
  var rp = 0;

  for (let index = 0; index < linhaenviar.length; index++) {
    try {
      await sendRequest(linhaenviar[index]);
      await delay(0); // Delay for 5 seconds between each request
    } catch (error) {
      console.error('Error sending request:', error);
    }
  }

  function sendRequest(value) {
    return new Promise((resolve, reject) => {
      $.ajax({
        url: 'api.php?lista=' + value,
        type: 'GET',
        success: function(resultado) {
          if (resultado.match("#Approved")) {
            removelinha();
            ap++;
            aprovadas(resultado + "");
          } else {
            removelinha();
            rp++;
            reprovadas(resultado + "");
          }
          $('#carregadas').html(total);
          var fila = parseInt(ap) + parseInt(rp);
          $('#cLive').html(ap);
          $('#cDie').html(rp);
          $('#total').html(fila);
          $('#cLive2').html(ap);
          $('#cDie2').html(rp);
          resolve();
        },
        error: function(xhr, status, error) {
          reject(error);
        }
      });
    });
  }

  function aprovadas(str) {
    $(".aprovadas").append(str + "<br>");
  }

  function reprovadas(str) {
    $(".reprovadas").append(str + "<br>");
  }

  function removelinha() {
    var lines = $("#lista").val().split('\n');
    lines.splice(0, 1);
    $("#lista").val(lines.join("\n"));
  }

  function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
}
