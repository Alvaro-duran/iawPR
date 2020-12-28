$(function() {

    $("#ocultar").on("click",function(){
        $(".capas").css({
            display:"none"
        });
        $("[type='checkbox']").prop("checked",false);
    });

    $("#todo").on("click",function(e){
        $("#capaTodo").css({
            top:0,
            transition:"1s"
        })
    });

    $("#capaTodo").on("click",function(e){
        $(e).css({
            top:"-100%",
            transition:"1s"
        })
    });

    $("#osi").on("click",function(){
        $("#modeloOSI").css({
            display:"block"
        });

    });
    $("#tcp").on("click",function(){
        $("#modeloTCPIP").css({
            display:"block"
        });
    });

    $("#tcp").of("click",function(){
        $("#modeloTCPIP").css({
            display:"block"
        });
    });







});
