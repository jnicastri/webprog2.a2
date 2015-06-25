jQuery(document).ready(function($) {
	
	$('.expand').click(function(event) {
		
		event.preventDefault();
		
		var image_href = $(this).attr("href");
		
		if ($('#lightbox').length > 0) { // #lightbox exists
			
			$('#content').html('<img src="' + image_href + '" />');
		   	
			$('#lightbox').show('fast');
		}
		else {
			var lightbox = 
			'<div id="lightbox">' +
				'<p>Click anywhere in the window to close the image</p>' +
				'<div id="content">' + //insert clicked link's href into img src
					'<img src="' + image_href +'" />' +
				'</div>' +	
			'</div>';
				
			$('body').append(lightbox);
		}
		
	});
	
	$('#lightbox').live('click', function() {
		$('#lightbox').hide();
	});

});