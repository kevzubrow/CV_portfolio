$(document).ready(function() { 
            $("#form_wrap").addClass('hide');
            $("#form_wrap").prepend( '<div id="before"></div>').append( '<div id="after"</div>');
            $("#form_wrap").hover(function(){
             $(this).stop(true, false).animate({
                  height : '836px',
                  top : '-200px'
             }, 2000);  
            $('form').stop(true, false).animate({
        height : '580px'
        }, 2000, function(){
                         $('#form_wrap input[type=submit]').css({'z-index' : '1', 'opacity' : '1'})} ) }, function() {
        $('#form_wrap input[type=submit]').stop(true, true).css({ 'opacity' : '0'})
            $(this).stop(true, false).animate({
            height : '446px',
            top : '0px'
 
        }, 2000);   
        $('form').stop(true, false).animate({
                height : '200px'}, 2000)    
        })



            $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    
    if ($(window).width() >= 768){
      
      if (scroll >= ($(window).height()-40)) {
        $(".menu-principal").css("color","#000000");
        $(".navbar-default").css("background-color","#FFFFFF");
        
        if ($(window).width() <= 1024){
          $('#logo-header').css('max-width','20%');
        }else{
          $('#logo-header').css('max-width','10%');
        }
        
      } else {
        $(".menu-principal").css("color","");
        $(".navbar-default").css("background-color","transparent");
        $('#logo-header').css('max-width','40%');
        
      }
    
    }else{
      $(".menu-principal").css("color","#000000");
      $(".navbar-default").css("background-color","rgba(255,255,255,0.8");
      $('#logo-header').parent().css('float','none');
      $('#logo-header').css('max-width','15%');
    }
  });
  
  $(".menu-principal").hover(function(){
    var scroll = $(window).scrollTop();
    if ($(window).width() > 768){
      if (scroll >= ($(window).height()-40)) {
        $('this').css("color","#CACACA");
      }else{
        $("this").css("color","#000000");
        $("this").parent().css("background-color","#FFFFFF");
      }
    }else{
      $("this").css("color","#000000");
      $("this").parent().css("background-color","transparent");
      $('#logo-header').css('max-width','40%')
    }
  });
  
  $('.menu-principal').on('click', function() {
    var section = $(this).attr('href');
    $('html, body').animate( { scrollTop: $(section).offset().top }, 750 );
    return false;
  });

  //Up Arrow

$(window).scroll(function(){

// if the user scrolled the page more than 200 pixels, show the 'up' arrow image

if ($(this).scrollTop() > 200) {

$('.uparrow').fadeIn();

}

// hide the 'up' arrow image

else {

$('.uparrow').fadeOut();

}

});

// when the user clicks on the 'up' arrow image, it will scroll the page to the top

// it will occur in a second (see 1000 value below)

// you can change that value if you want to make the scroll faster or slower

$('.uparrow').click(function(){

$("html, body").animate({ scrollTop: 0}, 1000);

return false;

});
 //test

});

