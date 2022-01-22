$(document).ready(function(){
    var display = true;
    $(".sidebar-btn").click(function(){
        if(display){
            $(".sidebar").animate({width:"0px"},250);
            $(".main-container").animate({marginLeft: "0px"},250)
            $(".footer").removeClass("footer-responsive")
            $(".footer").addClass("footer-long")
            display = false;
        }
        else{
            $(".sidebar").animate({width:"250px"},250);
            $(".main-container").animate({marginLeft: "250px"},250)
            $(".footer").addClass("footer-responsive")
            $(".footer").removeClass("footer-long")
            display = true;
        }
    });
});

