<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	

	<!-- CSS -->
	<style type='text/css'>
	body {
			font-family: Arial;
			background-color:#E0E0E0;
			margin: auto;
			width: 600px;
			padding: 50px;
		}
	a:link {color:#000000;}      /* unvisited link */
	a:visited {color:#000000;}  /* visited link */
	a:hover {color:#000000;}  /* mouse over link */
	a:active {color:#000000;}  /* selected link */
	#content {
			width:400px;
			background-color:#FFFFFF;
			border-style:solid;
			border-radius:50px;
			border-color:black;
			padding:50px;
	}
	
	
	</style>
	

	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
</head>

<body>	

	<div id='menu'>
	
		<!-- Menu for users who are logged in -->
		<? if($user): ?>
			
			<a href='/users/logout'>Logout</a>
			<a href='/posts/users/'>Change who you're following</a>
			<a href='/posts/'>View posts</a>
			<a href='/posts/add'>Add a new post</a>
		
		<!-- Menu options for users who are not logged in -->	
		<? else: ?>
		
			<a href='/users/signup'>Sign up</a>
			<a href='/users/login'>Log in</a>
		
		<? endif; ?>
	
	</div>
	
	<br>
	
	<div id='content'>
	<?=$content;?> 
	</div>

</body>

</html>