/**
 * Created by kjx on 2016/7/13.
 */
$(document).ready(function () {
    $("#mine_ask").click(function () {
        $(".blist1").slideToggle("slow");
        $(".welcome").css("display","none");
    });
    $("#my_ask").click(function () {
        $("#ask").fadeToggle(1000);
        $("#notpass").css("display","none");
        $("#pass").css("display","none");
        $("#finish").css("display","none");
        $(".blist2").fadeIn(1000);
    });
    $("#my_notpass").click(function () {
        $("#ask").css("display","none");
        $("#notpass").fadeToggle(1000);
        $("#pass").css("display","none");
        $("#finish").css("display","none");
        $(".blist2").fadeIn(1000);
    });
    $("#my_pass").click(function () {
        $("#ask").css("display","none");
        $("#notpass").css("display","none");
        $("#pass").fadeToggle(1000);
        $("#finish").css("display","none");
        $(".blist2").fadeIn(1000);
    });
    $("#my_finish").click(function () {
        $("#ask").css("display","none");
        $("#notpass").css("display","none");
        $("#pass").css("display","none");
        $("#finish").fadeToggle(1000);
        $(".blist2").fadeIn(1000);

    });
});
//    function change(val){
//        $("#change").html('予以通过');
//
//    }