$(function(){

    $("#bm").on("click",function(e) {
       $ ("main").css({
           "background-color":"red",
           "background-image":"url(img/bmw.jpeg)",
           "transition":"1s"

       })


    });


    $("#re").on("click",function(e) {
        $ ("main").css({
            "background-color":"blue",
            "background-image":"url(img/renault.jpg)",
            "transition":"1s"

        })


    });

    $("#au").on("click",function(e) {
        $ ("main").css({
            "background-color":"grey",
            "background-image":"url(img/audi.jpg)",
            "transition":"1s"

        })


    });
    $("#mercedes").on("click",function(e) {
        $ ("main").css({
            "background-color":"black",
            "background-image":"url(img/mercedes.jpg)",
            "transition":"1s"

        })


    });


})

