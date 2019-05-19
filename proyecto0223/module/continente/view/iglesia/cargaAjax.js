$(document).ready(function () {
    $(".pepe ").on("click", function (e) {
        e.preventDefault();
        var mico = this.id;
        // # traer un id el de mico
        var soga = $("#" + mico).attr("title");
        loadInfo(soga);
        // alert(soga);

    });
});
function loadInfo(codiguito) {
    var params = {
        codajax: codiguito
    };
    $.ajax({
        url: "../controller/sacramentopostcontroller2.php",
        data: params,
        type: "POST",
        dataType: "Json" //todo va a aser de tipo json
    })
            .done(function (data) {//listener resive los valores
               var myId=data.code;
               var myString=data.value;
               $("#"+myId).html(myString);
            })
            .fail(function (res) { //function funcion inline con un parametro
                $("#message").html("ayyy nose ") //como es un id se usa # 
                console.log("mire aca el detalle");
            });
    
    
    // alert("uuuuuy "+codiguito);
}


