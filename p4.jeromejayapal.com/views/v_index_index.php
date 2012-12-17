<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	<script type='text/javascript'>

        $('document').ready(function() { // start doc ready; do not delete this!        
                
                $('#logo').click(function() {        
                        console.log("You clicked on Logo.");
                });
        
        }); // end doc ready
        
	</script>
	
	<style type='text/css'>
	
		#cylinder {
					width: 900px;
					margin: auto;
					background-color: #E0E0E0;
					padding: 20px;
		}
		
		img {
					width:900px;
					padding: 0px;
		
		body {
					font-family: Arial;
		}
		
	</style>
	
</head>

<body>	
	
	<div id='cylinder'>
				
		<div id='logo'>
		<h1>Jerome Jayapal</h1>
		</div>
		<img src="../images/homepage.jpg">
		<p>The beginning of something great...</p>
		
		
	</div>
		
</body>
</html>