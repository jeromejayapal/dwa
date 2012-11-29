$(document).ready(function() {
		
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('.color-choice').click(function() {
	
		// Figure out which color we should use
		var color = $(this).css('background-color');

		// Change the background color of the canvas
		$('#canvas').css('background-color', color);
		
		// Also change the texture choices
		$('.texture-choice').css('background-color', color);

	});	
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('.texture-choice').click(function() {
	
		// Figure out which image we should use
		var image = $(this).css('background-image');
		
		// Change the background image of the canvas
		$('#canvas').css('background-image', image);
	
	});	
	

	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('input[name=value1]').click(function() {
	
		// Figure out what message we should enter
		var value1 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value1 + "</p>");
		
						
	});
	
	$('input[name=value2]').click(function() {
	
		// Figure out what message we should enter
		var value2 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value2 + "</p>");
		
	});
	
	$('input[name=value3]').click(function() {
	
		// Figure out what message we should enter
		var value3 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value3 + "</p>");
		
	});
	
	$('input[name=value4]').click(function() {
	
		// Figure out what message we should enter
		var value4 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value4 + "</p>");
		
	});
	
	$('input[name=value5]').click(function() {
	
		// Figure out what message we should enter
		var value5 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value5 + "</p>");
		
	});
	
	$('input[name=value6]').click(function() {
	
		// Figure out what message we should enter
		var value6 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value6 + "</p>");
		
	});
	
	$('input[name=value7]').click(function() {
	
		// Figure out what message we should enter
		var value7 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value7 + "</p>");
		
	});
	
	$('input[name=value8]').click(function() {
	
		// Figure out what message we should enter
		var value8 = $(this).attr('value');
			
		$('#message-in-canvas').append("<p>" + value8 + "</p>");
		
	});
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('#recipient').keyup(function() {
	
		var recipient = $(this).val();
		
		var length = recipient.length;
		
		if(length == 64) {
			$('#recipient-error').html("The max amount of characters is 64");
			$('#recipient-error').show();
		}
		else {
			$('#recipient-error').html("");
			$('#recipient-error').hide();
		}
		
		//$('#recipient-in-canvas').html(recipient + "!");
        $('#recipient-in-canvas').html(recipient);	
	});
	
	
	
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('#graphic-search-button').click(function() {
	
		var search_term = $('#graphic-search-input').val();
		
		var url = 'http://students.susanbuck.net/storage/code/_js/google_images.php?keyword=' + search_term;
				
		$.ajax({
			url: url,
			cache: false,
			beforeSend: function() {
				$('#graphic-search-results').html("Searching...");	
			},
			success: function(data) {
				
				$('#graphic-search-results').html(data);
				
			},
			dataType: "html"
		});
					
	});
	
	
	/*-------------------------------------------------------------------------------------------------
	We have to attach our click method here a little differently. Instead of just using the .click
	method we use the .live method and have it listen for click.
	
	We do it this way because this listener will work for our static graphics as well as the ajax'ed
	graphics we get from Google. The .live method will listen for items added to the page even after page
	load, whereas plain .click won't.
	-------------------------------------------------------------------------------------------------*/
	$('.graphic-choice').live('click', function() {
	
		var image = $(this).attr('src');
		
		$('#canvas').prepend("<img class='draggable new-draggable' src='" + image + "'>");
		$(".draggable").draggable({ containment: "#canvas" });
	
	});
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('#refresh-button').click(function() {
					
		$('#message-in-canvas').html("");
		$('#recipient-in-canvas').html("");
		$('.draggable').remove();
		//$('#canvas').css('background-color', 'white');
		$('#canvas').css('background-image', '');
	
	});
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	$('#print-button').click(function() {
		
		// Setup the window we're about to open	    
	    var print_window =  window.open('','_blank','');
	    
	    // Get the content we want to put in that window - this line is a little tricky to understand, but it gets the job done
	    var contents = $('<div>').html($('#canvas').clone()).html();
	    
	    // Build the HTML content for that window, including the contents
	    var html = '<html><head><link rel="stylesheet" href="shopping-list.css" type="text/css"></head><body>' + contents + '</body></html>';
	    
	    // Write to our new window
	    print_window.document.open();
	    print_window.document.write(html);
	    print_window.document.close();
	    		
	});
	
			
});