$(document).ready(function(){
//  $("#btnprueba").click(function(){
  //  $("#message").addClass('has-error');
  //  $("#message").addClass('has-success');
  //  $("#error").html("Ocurrio un error al enviar el mail");

  //});

//  $(".form-validator").submit(function(){
$("#btnprueba").click(function(){
    var data = {
      "action": "test"
    };
    data = $("#formComando").serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "comandos.php",
      data: data,
      success: function(data) {
        alert(data["json"])
        if (data["resultado"]) {
        //  $("#message").addClass('has-success');
          $("#error").html(data["resultado"]);
        }
        else {
          $("#message").addClass('has-error');
          $("#error").html("El mensaje no se pudo enviar");
        }
      },
      error: function(data) {
            alert(data)
        $("#message").addClass('has-error');
        $("#error").html("Ocurrió un error al enviar el mail.");
        }
    });
    return false;
  });


















});
