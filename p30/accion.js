$(function () {
    let amp=true;

    $("button").on("click",function(e){
        $("button").css({
            "border":"2px solid white",
            "color":"white"
        });
        $(e.target).css({
            "color":"yellow",
            "border":"2px solid yellow"
        })
    });
    $("#pri").on("click",function (e) {
        $("#ima") .css({
            "background-image":"url(img/i1.jpg)",
            "background-color":"#1fab20",
            "transition":"1s"

        })
    });
    $("#ver").on("click",function (e) {
        $("#ima") .css({
            "background-image":"url(img/i2.jpg)",
            "background-color":"#b3b011",
            "transition":"1s"

        })
    });
    $("#oto").on("click",function (e) {
        $("#ima") .css({
            "background-image":"url(img/i3.jpg)",
            "background-color":"#9b620e",
            "transition":"1s"

        })
    });
    $("#inv").on("click",function (e) {
        $("#ima") .css({
            "background-image":"url(img/i4.jpg)",
            "background-color":"#0f62a7",
            "transition":"1s",
            "width":"90%"

        })
    });

    $("body").on("dblclick",function(e){
        if(amp==true) {
            $("main").css({
                "left": 0,
                "transition": "1s"
            });
            amp=false;
        }
        else {
            $("main").css({
                "left": "200px",
                "transition": "1s"
            });
            amp = true;
        }

    });
});

