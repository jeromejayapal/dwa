<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script src="../scripts/v_index_index.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	
	<link rel="stylesheet" type="text/css" href="../scripts/v_index_index.css">
	
</head>

<body>	
	
	<div id='cylinder'>
				
		<div id='logo'>
			<h1>Jerome Jayapal</h1>
		</div>
		
		<div>
			<ul class="nav">
				<li class="inline"><a href="index/index">Home</a></li>
				<li class="inline"><a href="index/aboutme">About Me</a></li>
				<li class="inline"><a href="index/contact">Contact</a></li>
				<li class="inline"><a href="index/proposal">Proposal</a></li>
			</ul>
		</div>
		
		<br />
		<img src="../images/homepage.jpg">
		
		<div>
		<? foreach($posts as $post): ?>
	
	
			<h2>Posted: <?= date("m/d/Y",$post['created']) ?> </h2>
			<?=$post['content']?>
	
			<br><br>
	
		<? endforeach; ?>
		</div>
		
	</div>
		
</body>
</html>