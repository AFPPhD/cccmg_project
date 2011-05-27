$(document).ready(function() {
  
    $('#nojavascript').remove();   // remove action makes element disappear
	
	$('#clickbandtext').show();    // show click band for info text
	
	$('#navigation h3.hidden, #navigation ul.hidden').removeClass('hidden'); // Hide Navigation bar when javascript disabled 270511
});