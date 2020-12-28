$(function(){
    let nuevaPosicion=100;

    $("#color").on("change",function(e){
        $("#texto").css({
            "color":$(e.target).val(),
            "transition":"1s"
        });
    });

    $("#iTexto").on("keyup",function(e){
        $("#texto").text($("#iTexto").val());
    });

    $("[name='fondo']").on("change",function(e){

        $("#fondo")
            .css({
                "background-image":"url(img/"+$(this).val()+".jpg)"
            })
    });



    $("#subir").on("click",function(e){
        e.preventDefault();
        nuevaPosicion+=25;
        $("#texto").css({
            "bottom":nuevaPosicion+"px",
            "transition":"1s"
        });
    });

    $("#bajar").on("click",function(e){
        e.preventDefault();
        nuevaPosicion-=25;
        $("#texto").css({
            "bottom":nuevaPosicion+"px",
            "transition":"1s"
        });
    });

});
