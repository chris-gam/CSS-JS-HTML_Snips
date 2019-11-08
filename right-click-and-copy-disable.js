$(document).ready(function(){
	//Disable right click
	$('.element').on('contextmenu', function(e) {
		return false;
	});
	//Disable dragging
	$('.element').on('dragstart', function(e) {
		return false;
	});
	//Disable copy paste and cut 
	$('input').bind('cut copy paste', function(e) {
	  e.preventDefault(); 
	});
});
