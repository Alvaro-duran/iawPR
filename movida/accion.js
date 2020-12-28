$(function(){

    let ampliar=true;

    $("#fiat").on("click",function(e) {
        $ ("#ima").css({

            "background-image":"url(img/600.jpg)",
            "transition":"1.5s"

        })


    });
    $("#acur").on("click",function(e) {
        $ ("#ima").css({

            "background-image":"url(img/Acura_Legend_1.jpg)",
            "transition":"1s"

        })


    });
    $("#bm").on("click",function(e) {
        $ ("#ima").css({

            "background-image":"url(img/m3.jpg)",
            "transition":"1s",
            "background-size":"70%"

        })


    });
    $("#tri").on("click",function(e) {
        $ ("#ima").css({

            "background-image":"url(img/cocheraro.jpg)",
            "transition":"1s",
            "background-size":"50%"

        })


    });
    $("#ima").on("dblclick",function(e){
        $("main").toggleClass("ampliar");
    })
})


