$(function() {
    $("[name='fondo']").on("change", function (e) {

        $("#fondo")
            .css({
                "background-image": "url(img/" +$(this).val() + ".jpg)"
            })
    });
});


