<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
	<style type='text/css'>
	
		#cylinder {
					width: 900px;
					margin: auto;
					background-color: #E0E0E0;
					padding: 20px;
		}
		
		body {
					font-family: Arial;
		}
		
	</style>
	
</head>

<body>	

	<?=$content;?> 

</body>
</html>