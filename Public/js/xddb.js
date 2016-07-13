/**
 * Created by kjx on 2016/7/13.
 */
$(document).ready(function () {
    $("#dask").click(function () {
        $("#dask_list").fadeToggle(1000);
        $("#ypass_list").css("display","none");
        $("#npass_list").css("display","none");
        $(".welcome").css("display","none");
        $(".blist1").fadeIn(1000);
    });
    $("#npass").click(function () {
        $("#dask_list").css("display","none");
        $("#ypass_list").css("display","none");
        $("#npass_list").fadeToggle(1000);
        $(".welcome").css("display","none");
    });
    $("#ypass").click(function () {
        $("#dask_list").css("display","none");
        $("#ypass_list").fadeToggle(1000);
        $("#npass_list").css("display","none");
        $(".welcome").css("display","none");
    });
});
//    function change(val){
//        $("#change").html('予以通过');
//
//    }