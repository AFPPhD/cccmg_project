$(document).ready(function(){
  //$('p').hide().delay(50); // Jerkier effect with this
  $('p').animate({height: 'hide'}, 0, 'easeOutQuad'); // Will expand back to original height with show
  $('p').animate({opacity: 'show', height: 'show'}, 3000, 'easeOutQuad');
});