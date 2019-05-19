$(document).ready(function () {
    $("#ulloa").on("click", function (e) {
        e.preventDefault();
        var codigo = $("#datos").val();
        deleteinfo(codigo);
    });


});
function deleteinfo(codigo) {
    var param = {
        codajax: codigo
    };
    $.ajax({
        url: "../controller/ajaxpostcontroller2.php",
        data: param,
        type: "POST",
        dataType: "json"




    }).done(function (data) {



        $("#datos").find("option").remove();
        $("#datos").append(new Option("Seleccione un tipo de dato", "", true));
        $.each(data, function (index, valor) {


            $("#datos").append(new Option(valor.nombre, valor.codtipo, false));
        });
    })


            .fail(function (respuesta) {
                $("#message").html("ha ocurrido un error");
                console.log();
            })

}
$(document).ready(function () {
    $("#crear").on("click", function (e) {
        e.preventDefault();
        var nombre = $("#dato").val();
        crear(nombre);
    });


});
function crear(nombre) {
    var param = {
        nombre: nombre
    };
    $.ajax({
        url: "../controller/ajaxpostcontroller.php",
        data: param,
        type: "POST",
        dataType: "json"




    }).done(function (data) {



        $("#datos").find("option").remove();
        $("#datos").append(new Option("Seleccione un tipo de dato", "", true));
        $.each(data, function (index, valor) {


            $("#datos").append(new Option(valor.nombre, valor.codtipo, false));
        });
    })


            .fail(function (respuesta) {
                $("#message").html("ha ocurrido un error");
                console.log();
            })

}
$(document).ready(function () {
    $("#update").on("click", function (e) {
        e.preventDefault();
        var nombre = $("#dato").val();
        var codigo = $("#datos").val();
        update(nombre,codigo);
    });


});
function update(nombre,codigo) {
    var param = {
        nombre: nombre,
        codigo:codigo
        
    };
    $.ajax({
        url: "../controller/ajaxpostcontroller3.php",
        data: param,
        type: "POST",
        dataType: "json"

    }).done(function (data) {



        $("#datos").find("option").remove();
        $("#datos").append(new Option("Seleccione un tipo de dato", "", true));
        $.each(data, function (index, valor) {


            $("#datos").append(new Option(valor.nombre, valor.codtipo, false));
        });
    })


            .fail(function (respuesta) {
                $("#message").html("ha ocurrido un error");
                console.log();
            })

}