$( document ).ready(function() {
	$('#showNav').click(function(){
	  $(this).next().slideToggle('fast')('slow', function() {
		// Animation complete.
		});
	});
});
