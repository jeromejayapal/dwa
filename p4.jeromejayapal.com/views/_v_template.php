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
					background-color: white;
					padding: 20px;
		}
		
		#blog {
					width: 900px;
					margin: auto;
					background-color: white;
					padding: 20px;
		}
		
		body {
					font-family: Arial;
					background-color:#E8E8E8;
		}
		
		#header {
					background-color: #383838;
					margin-left:-7px;
					margin-right:-7px;
		}
		
		#logo {
					color:white;
					height:55px;
					position:abosolute;
					top:50%;
					margin-top:-24px;
					padding:10px;
					padding-left:180px;
					display:inline-block;
					list-style:none;
		}
		
		li.inline {
					display:inline-block;
					list-style:none;
		}
		
		a:link {color:white; text-decoration:none;}      /* unvisited link */
		a:visited {color:white; text-decoration:none;}  /* visited link */
		a:hover {color:grey; text-decoration:none;}  /* mouse over link */
		a:active {color:white; text-decoration:none;}  /* selected link */
		
	</style>
	
</head>

<body>

	<div id='header'>
	

			
				<ul>
					<li class="logo" id="logo"><h1>Jerome Jayapal</h1></l1>
					<li class="inline"><a href="index">Home</a></li>
					<li class="inline"><a href="index/aboutme">About Me</a></li>
					<li class="inline"><a href="index/contact">Contact</a></li>
					<li class="inline"><a href="index/proposal">Proposal</a></li>
				</ul>
	</div>

	<?=$content;?> 

</body>
</html>