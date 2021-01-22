$(document).ready(function(){
  $(window).scroll(function() {
  $('.navigation')
      .stop()                                                     // stop() - To prevent jittery effect due to animations queuing up
      .animate({top: $(document).scrollTop()},400,'easeOutQuad'); // Note: The window i.e document, is a javascript property so enclose with jquery function to select it $()
  });
});