$(function(){
    $("#txt_confirm_pass").keyup(function(){
        var value_pass = $("#txt_pass").val();
        var value_confirm_pass = $("#txt_confirm_pass").val();
        
        if(value_pass === value_confirm_pass){
            $("#confirm_success").removeClass("has-error");
            $("#confirm_success").addClass("has-success");
        }else{
            $("#confirm_success").removeClass("has-success");
            $("#confirm_success").addClass("has-error");
        }
    });

    $("#alert_infos").delay(1000).fadeToggle("slow",function(){
        $("#alert_infos").remove();
    });
});