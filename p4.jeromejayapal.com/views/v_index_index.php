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
	
	<link rel="stylesheet" type="text/css" href="../scripts/v_index_index.css">
	
</head>

<body>	
	
	<div id='cylinder'>
				
		<div id='logo'>
			<h1>Jerome Jayapal</h1>
		</div>
		
			<ul class="nav">
				<li class="home"><a href="index/index">Home</a></li>
				<li class="about"><a href="index/aboutme">About Me</a></li>
				<li class="contact"><a href="index/contact">Contact</a></li>
				<li class="proposal"><a href="index/proposal">Proposal</a></li>
			</ul>
		
		<br />
		<img src="../images/homepage.jpg">
		
		<div>
		<? foreach($posts as $post): ?>
	
	
			<h2>Posted: <?=$post['created']?> </h2>
			<?=$post['content']?>
	
			<br><br>
	
		<? endforeach; ?>
		</div>
		
	</div>
		
</body>
</html>