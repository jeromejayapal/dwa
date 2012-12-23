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
	<br /><br />
	<div id='cylinder'>

		<img src="../images/homepage.jpg" height="440" width="900">
	
	</div>
	<br /><br /><br />	
	<div id='blog'>
	
		<? foreach($posts as $post): ?>
	
			<h2><?=$post['title']?></h2>
			<small>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </small>
			<h5>BY: JEROME JAYAPAL | Posted: <?= date("m/d/Y",$post['created']) ?> </h5>
			<br />
			<h3><?=$post['content']?></h3>
	
			<br><br>
	
		<? endforeach; ?>
	
	</div>
		
	</div>
	
	<div id='footer'>
	
	</div>
		
</body>
</html>