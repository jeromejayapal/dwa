<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script src="../scripts/v_index_index.js"></script>
</head>
	
<body>
	<div id='blog'>
<form method='POST' action='/posts/p_add'>
	<strong>New Post:</strong><br>
	<textarea name='title' class="title"></textarea>
	<br />
	<textarea name='content' rows='5' cols='50'></textarea>

	<br><br>
	<input class="submit" type='submit'>
	</div>
</form>
</body>
</html>