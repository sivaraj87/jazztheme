$(document).ready(function() {

// Fancybox
  $('.fancybox').fancybox({
    padding   : 0,
    maxWidth  : '100%',
    maxHeight : '100%',
    width   : 560,
    height    : 315,
    autoSize  : true,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic'
  });

// Easing
  $('nav a').bind('click',function(event){
    var $anchor = $(this);

    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1500,'easeInOutExpo');
    event.preventDefault();
  });
  
});