$(function () {
    $("button").on("click", function (e) {
        $("main").css({
            "display":"none",
            "transition":"1s",
           /*"background-color":"green"*/

        })
        $("#js").css({
            "display":"block"
        })
        $("#py").css({
            "display":"block"
        })
        $("#ja").css({
            "display":"block"
        })

    });





});