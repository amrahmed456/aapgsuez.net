/* general rules */
$(".slide-up").slideUp(0);
$(".navbar .social-copy").html($(".navbar .social-btns").clone());
$(document).ready(function(){

    $("#preloader").fadeOut();
    $("body").css("overflow-y" , "scroll");

    $(".navholder").height($(".navbar").innerHeight());
    
    // custom dropdown
    $(".dropdown-toggle").click(function(){
        if(!$(this).hasClass("custom-dropdown")){
            $(".slide-up").slideUp(0);
        }
       
    });

    $(".custom-dropdown").click(function(){
        $($(this).attr("data-to")).slideToggle(200);
    });
    $(".close-custom-slider").click(function(){
        $(".slide-up").slideUp(200);
    });

   
});