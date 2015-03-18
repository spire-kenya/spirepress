$(document).ready(function(){

  $('.navbar-header').data('size','big');

  $(window).scroll(function(){
    if($(document).scrollTop() > 0) {
      if($('.navbar-header').data('size') == 'big') {
        $('.navbar-header').data('size','small').css("height", 60);
        $('.navbar-brand').css("maxWidth", 100);
        $('.navbar-right').css("top", 7);
        $('.splash').animate({ 'marginTop': '60'}, 300);
        // $('.navbar-header').stop().animate({
        //     height:'60px'
        // }, 600);
      }
    } else {
      if($('.navbar-header').data('size') == 'small') {
        $('.navbar-header').data('size','big').css("height", 100);
        $('.navbar-brand').css("maxWidth", 180);
        $('.navbar-right').css("top", 25);
        $('.splash').delay(250).animate({ 'marginTop': '100'}, 300);
        // $('.navbar-header').stop().animate({
        //     height:'100px'
        // }, 600);
      }  
    }
  });
});
