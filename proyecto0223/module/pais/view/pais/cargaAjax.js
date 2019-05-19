$(document).ready(function () {
    $("#planetica").on("change", function (e) {
        cod = this.value;
        loadInfo(cod);
    });
});
function loadInfo(codiguito) {
    var param = {
        codajax: codiguito
    };
    $.ajax({
        url: "../controller/ajaxpostcontroller.php",
        data: param,
        type: "POST",
        dataType: "json"

    })
            .done(function (data) {
                $("#continent").find("option").remove();
                $("#continent").append(new Option("Seleccione continente", "", true));
                $.each(data, function (index, valor) {
                    $("#continent").append(new Option(valor.nombre, valor.codcontinente, false));
                });
            })



            .fail(function (respuesta) {
                $("#message").html("ha ocurrido un error");
                console.log();
            });
}


