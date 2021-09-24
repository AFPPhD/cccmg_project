$(document).ready(function(){
  $('a[href=#]').click(function(){ // [] - attribute selector
    $.scrollTo(0,'slow');          // scrollTo plugin gets round problem of browser scrolling in quirks mode. Other values you can pass include DOM objects, selector strings
    return false;                  // as well as integers. return false - to cancel default link action. $ - means want to scroll entire window. Using $(div#scrolly) would
  });                              // scroll specified overflow element

  $('a[href=#intro]').click(function(){
    $.scrollTo('#intro','slow');
    return false;
  });

  $('a[href=#key]').click(function(){
    $.scrollTo('#key','slow');
    return false;
  });

  $('a[href=#compilations]').click(function(){
    $.scrollTo('#compilations','slow');
    return false;
  });

  $('a[href=#complete_pieces]').click(function(){  /* Add Complete Pieces to Navigation menu 071011 */
    $.scrollTo('#complete_pieces','slow');
    return false;
  });

  $('a[href=#bach]').click(function(){
    $.scrollTo('#JSB','slow');
    return false;
  });

  $('a[href=#beethoven]').click(function(){
    $.scrollTo('#LVB','slow');
    return false;
  });

  $('a[href=#brahms]').click(function(){
    $.scrollTo('#LVB','slow');
    return false;
  });

  $('a[href=#bruch]').click(function(){
    $.scrollTo('#MB','slow');
    return false;
  });

  $('a[href=#bruckner]').click(function(){
    $.scrollTo('#AB','slow');
    return false;
  });

  $('a[href=#chopin]').click(function(){
    $.scrollTo('#FC','slow');
    return false;
  });

  $('a[href=#dvorak]').click(function(){
    $.scrollTo('#AD','slow');
    return false;
  });

  $('a[href=#haydn]').click(function(){
    $.scrollTo('#AD','slow');
    return false;
  });

  $('a[href=#mendelssohn]').click(function(){
    $.scrollTo('#FM','slow');
    return false;
  });

  $('a[href=#mozart]').click(function(){
    $.scrollTo('#WAM','slow');
    return false;
  });

  $('a[href=#rachmaninov]').click(function(){
    $.scrollTo('#SR','slow');
    return false;
  });

  $('a[href=#schubert]').click(function(){
    $.scrollTo('#FS','slow');
    return false;
  });

  $('a[href=#sibelius]').click(function(){
    $.scrollTo('#JS','slow');
    return false;
  });

  $('a[href=#tchaikovsky]').click(function(){
    $.scrollTo('#PIT','slow');
    return false;
  });


  $('a[href=#vivaldi]').click(function(){
    $.scrollTo('#AV','slow');
    return false;
  });

  $('a[href=#williams]').click(function(){
    $.scrollTo('#VW','slow');
    return false;
  });

});