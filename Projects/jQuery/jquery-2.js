$(document).ready(function(){
    $("#btn1, #btn2").click(function(){
        $("#res_1").text("Click");
        //console.log(clickcount++);
    });
    $("#btn3").click(function(){
        $(this).fadeOut('fast');
        //console.log(clickcount++);
    });
    $(".link_class").click(function(){
       $("#res1").text("Vienas is linku buvo pa'click'intas");
    });
    $("#btn_toggle_bg").mouseenter(function(){
        $(this).css("background-color", "yellow");
        //console.log('Hover veikia');
    $("#btn_toggle_bg").mouseleave(function(){
        $(this).css("background-color", "#fff");
    });
    $("#change_bg").click(function(){
        $("body").css("background-image", "url('../Projects/jQuery/dubai.jpg')");
        $("").css("background-color", "#fff");
    });


});

function papildoma_funkcija(){
    console.log();
}
