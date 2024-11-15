$(document).ready(function() {
    
    
 
    
    $("#mob-nav .menubtn").click(function() {
        $(this).toggleClass("active");
        $("#mob-nav .menu").slideToggle();
    });
    $("#mob-nav .menu li a").click(function(){
    $("#mob-nav .menu").hide();
    });
    
    $("#back-top").hide();
     
    $(window).scroll(function(){
            if($(this).scrollTop()>200){
                $("#back-top").fadeIn();
            } else {
                 $("#back-top").fadeOut();
            }
    });
   

    $("#back-top a").click(function(){
        $("html,body").animate({scrollTop:0},800);
        return false;
    });

    $('.nav').onePageNav();

    $(window).bind('scroll', function() {
       var navHeight = $( window ).height() - 70;
             if ($(window).scrollTop() > navHeight) {
                 $('#pc-nav').addClass('fixed');
             }
             else {
                 $('#pc-nav').removeClass('fixed');
             }
    });

  
    /*$(".filter-5").click(function(){
        $(this).parents(".has-sub").addClass('active').siblings('.active').removeClass('active');
    });*/

    

});