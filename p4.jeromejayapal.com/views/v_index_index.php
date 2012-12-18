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
        
		$('document').ready(function() { // start doc ready; do not delete this!        
                
                $('.home').click(function() {        
                        console.log("You clicked on Logo.");
                });
        
        }); // end doc ready
        
		$('document').ready(function() { // start doc ready; do not delete this!        
                
                $('.about').click(function() {        
                        console.log("You clicked on Logo.");
                });
        
        }); // end doc ready
        
		$('document').ready(function() { // start doc ready; do not delete this!        
                
                $('.contact').click(function() {        
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
					padding: 0px;
		}
		
		body {
					font-family: Arial;
		}
		
		ul.nav {
					list-style:none;
    				margin-top:0px;
    				margin-left:7px;
    				margin-bottom:0;
    				text-transform:capitalize;
					display:inline;
		}
	</style>
	
</head>

<body>	
	
	<div id='cylinder'>
				
		<div id='logo'>
			<h1>Jerome Jayapal</h1>
		</div>
		
			<ul class="nav">
				<li class="home">Home</li><li class="about">About Me</li><li class="contact">Contact</li>
			</ul>
		
		<br />
		<img src="../images/homepage.jpg">
		
		<p>The beginning of something great...</p>
		
		
	</div>
		
</body>
</html>